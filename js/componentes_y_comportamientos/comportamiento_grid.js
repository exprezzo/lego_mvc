
comportamiento_grid={
	
	//xtype_del_form:'panel',
	//tituloDelForm:'Formulario de creacion / edicion',
	
	nuevo:function(){	
		var params={
			xtype:this.xtype_del_form,
			title:this.tituloDelForm,
			idReg:  0,
		};
		this.fireEvent('mostrarTab',params);
		
		return false;	
	},
	editar:function(){	//TODO: considerar todos los modelos de seleccion del extjs
		grid=this;
		var selMod = this.getSelectionModel();
		var selected= selMod.getSelected();		
		var selected=selMod.getSelected();
		if (selected == undefined) return false;
		
		
		var params={
			xtype:	this.xtype_del_form,
			title:	this.tituloDelForm,
			datos:	selected.data,
			idReg:  selected.id,
		};
				
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
		
		if (this.btnEditar != undefined) {			
			this.btnEditar.on('click', this.editar,this);
			this.btnEditar.setDisabled(true);
		}
		
		if (this.btnEliminar != undefined) {			
			this.btnEliminar.on('click', this.eliminar, this);
			this.btnEliminar.setDisabled(true);
		}
		
		this.on('rowclick',function(e){
			var sel=this.getSelectionModel();
			
			if(sel.getCount()==0){
				this.btnEditar.setDisabled(true);				
				if (this.btnVer != undefined) {			
					this.btnVer.setDisabled(true);
				}
				this.btnEliminar.setDisabled(true);
				
			}else{
				this.btnEditar.setDisabled(false);				
				if (this.btnVer != undefined) {			
					this.btnVer.setDisabled(false);
				}
				this.btnEliminar.setDisabled(false);
			}
		},this);
		this.on('keypress',function(e){
			if(e.getKey() == e.DELETE){
				this.eliminar();
			}else if(e.getKey() == e.ENTER){
				this.editar();
			}
			
		},this)
	
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
		
		this.store.on('beforeload',function(){			
			this.store.baseParams={
				query:this.txtSearch.getValue()
			};			
		},this);					
		
		this.on("rowdblclick",this.editar,this);
	}
	
}