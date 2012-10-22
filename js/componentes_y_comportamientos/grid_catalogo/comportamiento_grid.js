
comportamiento_grid={
	
	//xtype_del_form:'panel',
	//tituloDelForm:'Formulario de creacion / edicion',
	getTabId:function(){
		var idReg= (this.idReg != undefined)? this.idReg : 0;				
		return this.xtype + '_' + idReg;
	},
	editParams:function(params){
		return params;
	},	
	mostrarOcultarBotones:function(){  //PENDIENTE: encontrar manera de evitar copiar el contenido
		var sel=this.getSelectionModel();
			
		if(sel.getCount()==0){
			if (this.btnEditar) //<---TODO: Separa al comportamiento toolbar
				this.btnEditar.setDisabled(true);				
			if (this.btnVer != undefined) 
				this.btnVer.setDisabled(true);
			
			if (this.btnEliminar) //<---TODO: Separa al comportamiento toolbar
				this.btnEliminar.setDisabled(true);
			
		}else{
			if (this.btnEditar) //<---TODO: Separa al comportamiento toolbar
				this.btnEditar.setDisabled(false);				
			if (this.btnVer != undefined) 
				this.btnVer.setDisabled(false);
			
			if (this.btnEliminar) //<---TODO: Separa al comportamiento toolbar
				this.btnEliminar.setDisabled(false);
		}
	},
	nuevo:function(){	
		var params={
			xtype:this.xtype_del_form,
			title:this.tituloDelForm,
			idReg:  0,
			masConfig:this.initialConfig
		};
		params=this.editParams(params);
		if ( !Ext.isEmpty(this.iconCls) ){
			params.iconCls=this.iconCls;
		}
		
		this.fireEvent('mostrarTab',params);
		
		return false;	
	},
	getGrid:function(){
		return this;
	},
	getSelected: function(){
		grid=this.getGrid();
		var selMod = grid.getSelectionModel();
		var selected= selMod.getSelected();		
		var selected=selMod.getSelected();
		if (selected == undefined) return false;
		
		return selected;
	},
	editar:function(){	//TODO: considerar todos los modelos de seleccion del extjs
		selected = this.getSelected();
		if ( !selected ) return false;
		
		var params={
			xtype:	this.xtype_del_form,
			title:	this.tituloDelForm,
			datos:	selected.data,
			idReg:  selected.id,
			masConfig:this.initialConfig
		};
		if ( !Ext.isEmpty(this.iconCls) ){
			params.iconCls=this.iconCls;
		}		
		
		this.fireEvent('mostrarTab',params);
	},
	eliminar:function(){	//TODO: considerar todos los modelos de seleccion del extjs
		grid=this;
		var selMod = this.getSelectionModel();
		var selected= selMod.getSelected();		
		var selected=selMod.getSelected();
		if (selected == undefined) return false;		
		// Show a dialog using config options:
		Ext.Msg.show({
		   title:'Eliminar?',
		   msg: 'Al eliminar este registro ya no podr&aacute; recuperar',
		   buttons: Ext.Msg.YESNO,
		   scope:this,
		   fn: function(btn){
				if (btn=='yes'){
					this.store.remove(selected);
				}
				//TODO: Devolver el foco al grid a la columna seleccionada en caso de NO eliminar, y a la siguiente columna en caso de eliminar
		   },
		   
		   icon: Ext.MessageBox.QUESTION
		});
		
	},
	activarComportamiento:function(){		
		/*if ( this.topToolbar != undefined){
			if (this.topToolbar.btnGuardar)
				this.btnGuardar = this.topToolbar.btnGuardar;
			if (this.topToolbar.btnEliminar)
				this.btnEliminar = this.topToolbar.btnEliminar;
			if (this.topToolbar.btnRecargar)
				this.btnRecargar = this.topToolbar.btnRecargar;
			if (this.topToolbar.btnNuevo)
				this.btnNuevo = this.topToolbar.btnNuevo;
			if (this.topToolbar.btnSwitch)
				this.btnSwitch = this.topToolbar.btnSwitch;			
		}*/
		
		if (this.xtype_del_form == undefined){
			throw new Error("Debe establecer un valor para xtype_del_form");
		}
		
		if (this.tituloDelForm==undefined){
			this.tituloDelForm='Formulario de creacion / edicion';
		}
		
		this.enableBubble("mostrarTab");
		
		if (this.btnNuevo != undefined) {
			this.btnNuevo.on('click',this.nuevo,this);			
		}
		
		this.on('activate',function(){
			this.bottomToolbar.doRefresh();
		},this);
		
		if (this.btnEditar != undefined) {			
			this.btnEditar.on('click', this.editar,this);
			this.btnEditar.setDisabled(true);
		}
		
		if (this.btnEliminar != undefined) {			
			this.btnEliminar.on('click', this.eliminar, this);
			this.btnEliminar.setDisabled(true);
		}
		
		this.on('rowclick',function(e){
			this.mostrarOcultarBotones();
			
		},this);
		
		this.on('keypress',function(e){
			if(e.getKey() == e.DELETE){				
				this.eliminar();
			}else if(e.getKey() == e.ENTER){				
				this.editar();
			}
			
		},this);
	
		if (this.txtSearch)
		this.txtSearch.on("render",function(){
			this.mon(this.el, {
                scope: this,                
                keypress: function(e){					
					if (e.getKey() == e.ENTER){
						this.bottomToolbar.doRefresh();
					}
					return false;
				}
            });
		},this);
		
		
		this.store.on('load',function(){
			var grid= this.getGrid();
			
			if (grid!=undefined){
				var selMod= grid.getSelectionModel();
				selMod.selectFirstRow(true);
				this.mostrarOcultarBotones();			
			}
			
		},this);
		
		this.store.on('beforeload',function(){			
			if (this.txtSearch)
			this.store.baseParams={
				query:this.txtSearch.getValue()
			};			
		},this);					
		
		//--------------------------------------------------------------------------------------------
		// Mantener la seleccion
		//--------------------------------------------------------------------------------------------
		this.store.on('beforeload',function(store, options){										
			//Para volver a seleccionar el elemento despues de recargar
			var selected=this.getGrid().getSelected();			
			var idSeleccionado=( selected != undefined)? selected.id : 0;
			options.params.idSeleccionado = idSeleccionado;			
		},this);
		
		this.store.on('load',function(store, records, options){
			if (options.params!=undefined)
			if (options.params.idSeleccionado != undefined && options.params.idSeleccionado!=0){
				var record= store.getById(options.params.idSeleccionado);				
				var index=-1;
				if (record!=undefined)
					index= store.indexOf( record );
				
				if (index>-1){
					this.getGrid().getSelectionModel().selectRow(index);
				}				
			}				
		},this);
		//--------------------------------------------------------------------------------------------
		
		
		this.on("rowdblclick",this.editar,this);
		
		this.bottomToolbar.bind(this.store);
		this.bottomToolbar.doRefresh();
	}
	
}