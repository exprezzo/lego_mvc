
CatGridPlugin={
	xtype_del_form:'panel',
	tituloDelForm:'Formulario de creacion / edicion',
	init:function(cmp){		
		
		Ext.apply(cmp,CatGridFunctions);
		
		cmp.enableBubble("mostrarTab");	
		
		cmp.on('activate',function(){
			this.bottomToolbar.doRefresh();
		},cmp);
		
		this.cofigCrudToolbar(cmp);
		
		cmp.on('rowclick',function(e){
			this.mostrarOcultarBotones();			
		},cmp);
		
		cmp.on('keypress',function(e){
			if(e.getKey() == e.DELETE){				
				this.eliminar();
			}else if(e.getKey() == e.ENTER){				
				this.editar();
			}			
		},cmp);
	
		if (cmp.txtSearch)
		cmp.txtSearch.on("render",function(){
			this.mon(this.el, {
                scope: this,                
                keypress: function(e){					
					if (e.getKey() == e.ENTER){
						this.bottomToolbar.doRefresh();
					}
					return false;
				}
            });
		},cmp);
		
		
		cmp.store.on('load',function(){
			var grid= this.getGrid();
			
			if (grid!=undefined){
				var selMod= grid.getSelectionModel();
				selMod.selectFirstRow(true);
				this.mostrarOcultarBotones();			
			}
			
		},cmp);
		
		cmp.store.on('beforeload',function(){			
			if (this.txtSearch)
			this.store.baseParams = this.store.baseParams || {};
			this.store.baseParams.query=this.txtSearch.getValue();
			
		},cmp);					
		
		//--------------------------------------------------------------------------------------------
		// Mantener la seleccion
		//--------------------------------------------------------------------------------------------
		cmp.store.on('beforeload',function(store, options){										
			//Para volver a seleccionar el elemento despues de recargar
			var selected=this.getGrid().getSelected();			
			var idSeleccionado=( selected != undefined)? selected.id : 0;
			options.params.idSeleccionado = idSeleccionado;			
		},cmp);
		
		cmp.store.on('load',function(store, records, options){
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
		},cmp);
		//--------------------------------------------------------------------------------------------
		
		
		cmp.on("rowdblclick",cmp.editar,cmp);
		
		cmp.bottomToolbar.bind(cmp.store);
		//cmp.bottomToolbar.doRefresh();
	}	
}