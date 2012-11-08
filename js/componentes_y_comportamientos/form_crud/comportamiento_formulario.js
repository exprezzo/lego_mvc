comportamiento_formulario={
	//controlador:'modelo',
	getTabId:function(){
		var id= this.txtId.getValue(); 
		if ( id==''){
			id=0;
		}
		var id=this.xtype + '_' + id;
		
		return id;
	},
	focusItem:function(){
		this.txtId.focus(true);
	},
	guardar:function( params ){
		this.el.mask();
		
		this.getForm().submit({
			clientValidation: true,
			scope:this,
			url: '/'+ this.controlador + '/guardar',
			success:function(form, action){
				if (action.result.success == true){
					topMsg.setAlert(this.controlador,"La informaci&oacute;n ha sido almacenada");
					this.getForm().setValues(action.result.data);
					this.actualizarTitulo('guardado');
					this.focusItem();
					this.fireEvent('guardado');
				}
				this.el.unmask();
			},
			failure:function(){
				this.el.unmask();
			}
		});
	},
	listar:function( params ){
		alert("listar");
	},
	eliminarRegistro:function(){
		
		Ext.Ajax.request({
		   url: '/'+this.controlador+'/eliminar',
		   params:{id:this.txtId.getValue()},
		   scope:this,
		   success: function(res, params){
				var respuesta=Ext.decode(res.responseText);
				if (respuesta.success==true){
					topMsg.setAlert(this.controlador,"Informaci&oacute;n eliminada");
					this.fireEvent("eliminado");
					this.actualizarTitulo('eliminado');
				}
		   },
		   failure: function(){
				Ext.Msg.show({
				   title:'ERROR AL ELIMINAR',
				   msg: 'ERROR AL INTENTAR ELIMINAR',
				   buttons: Ext.Msg.OK,
				   scope:this,				   
				   icon: Ext.MessageBox.ERROR
				});
		   },
		   headers: {
			   'my-header': 'foo'
		   }
		});
	},
	eliminar:function( params ){
		Ext.Msg.show({
		   title:'Eliminar?',
		   msg: 'Al eliminar este registro ya no podr&aacute; recuperar',
		   buttons: Ext.Msg.YESNO,
		   scope:this,
		   fn: function(btn){
				if (btn=='yes'){					
					this.eliminarRegistro();
				}				
		   },		   
		   icon: Ext.MessageBox.QUESTION
		});
	},
	obtener:function( params ){
		this.recargar();
	},
	actualizarTitulo:function(	action ){				
		this.setTitle(action);
	},
	b4Nuevo:function(){
	},
	nuevo:function( params ){		
		this.b4Nuevo();
		this.getForm().reset();								
		this.actualizarTitulo('Nuevo');
		this.datos=false;
		this.recargar();		
		this.fireEvent('nuevo');
		this.onNuevo();
		/**/
	},
	onNuevo:function(){
	},
	recargar:function(){
		var params=this.getDatos();
		this.el.mask();		
		this.getForm().load({
			params:params,			
			url: '/'+ this.controlador + '/obtener',			
			scope:this,
			success:function(form, action){				
				this.el.unmask();					
				if (action.result.success == true){				
					
					var msg= ( Ext.isEmpty(action.result.msg) )? "Informaci&oacuten obtenida" : action.result.msg;
					topMsg.setAlert(this.controlador, msg);
					this.actualizarTitulo('edicion');		
					
					this.fireEvent('cargado');
					this.focusItem();
				}
			},
			failure:function(asd){
				console.log('failure');
				console.log(asd);
				this.el.unmask();
			}
		});
	},
	getDatos:function(){			
		return this.getForm().getValues();
	},
	activarComportamiento:function( params ){							
		if ( this.topToolbar != undefined){
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
		}
		
		if ( this.btnGuardar )
		this.btnGuardar.on('click',this.guardar, this);
		if ( this.btnEliminar )
		this.btnEliminar.on('click',this.eliminar, this);
		if ( this.btnRecargar )
		this.btnRecargar.on('click',this.obtener, this );
		if ( this.btnNuevo )
		this.btnNuevo.on('click',this.nuevo, this);								
		if ( this.btnSwitch )
		this.btnSwitch.on('click',this.listar, this);
		
		this.on('activate',function(){
			if (this.cargado==undefined){
			
			
				this.cargado=true;																
				
				if (this.idReg!=undefined) this.txtId.setValue(this.idReg);
				this.idReg==undefined;
				if ( this.esNuevo() ){					
					this.nuevo();
				}else{					
					this.recargar();
				}
			}		
		},this);
	},
	esNuevo:function(){
		var id=this.txtId.getValue();		
		if (id=='undefined' || id==0){
			return true;
		}else{
			return false;
		}
	}
};