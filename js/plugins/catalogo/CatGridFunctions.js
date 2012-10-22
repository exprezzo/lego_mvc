var CatGridFunctions={
	
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
		
	}
}