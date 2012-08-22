
comportamiento_grid={
	
	//xtype_del_form:'panel',
	//tituloDelForm:'Formulario de creacion / edicion',
	
	nuevo:function(){	
		var params={
			xtype:this.xtype_del_form,
			title:this.tituloDelForm
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
			datos:	selected.data
		};
		this.fireEvent('mostrarTab',params);
	},
	eliminar:function(){	//TODO: considerar todos los modelos de seleccion del extjs
		grid=this;
		var selMod = this.getSelectionModel();
		var selected= selMod.getSelected();		
		var selected=selMod.getSelected();
		if (selected == undefined) return false;		
		this.store.remove(selected);
	},
	activarComportamiento:function(){
	
		if (this.tituloDelForm==undefined){
			this.tituloDelForm='Formulario de creacion / edicion';
		}
		
		this.enableBubble("mostrarTab");
		
		if (this.btnNuevo != undefined) {
			this.btnNuevo.on('click',this.nuevo,this);			
		}
		
		if (this.btnEditar != undefined) {			
			this.btnEditar.on('click', this.editar,this);
		}
		
		if (this.btnEliminar != undefined) {			
			this.btnEliminar.on('click', this.eliminar, this);
		}
		
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
		/*this.btnEliminar.on('click',function(){
				this.eliminar();
			},this);
			
			this.btnEditar.on('click',function(){
				this.editar();
			},this);
			
			this.btnBuscar.on('click',function(){
				this.buscar();
			},this);*/
	}
	
}