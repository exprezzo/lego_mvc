
comportamiento_grid={
	
	xtype_del_form:'panel',
	tituloDelForm:'Formulario de creacion / edicion',
	
	nuevo:function(){	
		var params={
			xtype:this.xtype_del_form,
			title:this.tituloDelForm
		};
		this.fireEvent('abrir_tab',params);
		
		return false;	
	},
	editar:function(){	//TODO: soportar el caso de la miltiseleccion	
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
		this.fireEvent('abrir_tab',params);
	},
	
	activarComportamiento:function(){
		
		
		if (this.btnNuevo != undefined) {
			this.btnNuevo.on('click',function(){
				this.nuevo();
			},this);			
		}
		
		if (this.btnEditar != undefined) {			
			this.btnEditar.on('click',function(){				
				this.editar();
			},this);			
		}
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