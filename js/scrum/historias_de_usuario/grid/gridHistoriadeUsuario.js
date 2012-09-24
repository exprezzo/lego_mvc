/*
 * File: gridHistoriadeUsuario.js
 * 
 * This file was generated by Ext Designer version 1.1.2.
 * http://www.sencha.com/products/designer/
 *
 * This file will be generated the first time you export.
 *
 * You should implement event handling and custom methods in this
 * class.
 */

gridHistoriadeUsuario = Ext.extend(gridHistoriadeUsuarioUi, {    
	initComponent: function() {
        gridHistoriadeUsuario.superclass.initComponent.call(this);
		this.store=new stoHistoriasDUsuario({			
			api:{
				read: '/Historias/listar',
				create: '/Historias/crear',
				update: '/Historias/guardar',
				destroy: '/Historias/eliminar'
			},
			writer:new Ext.data.JsonWriter({
				encode: true,
				writeAllFields: true // write all fields, not just those that changed
			})
		});
		this.bottomToolbar.bind(this.store);
		//----------------------------------
	//  para que este grid se comporte como un grid del catalogo crud, ejecutamos la siguiente linea
	
		Ext.apply(this,comportamiento_grid,{
			xtype_del_form:"edicionHistoria"
		});	
		
	//  y asi se activa el comporstamiento
		this.activarComportamiento();
		
		this.store.on('beforeload',function(store, options){
			console.log("this");console.log(this);
			console.log("beforeload options"); console.log(options);
			options.params.tipo=this.initialConfig.tipo;
			if (this.initialConfig.tipo=='sprint'){
				options.params.sprintId=this.initialConfig.idSprint;
			}
		},this);
	//----------------------------------
		this.bottomToolbar.doRefresh();
    }
});
Ext.reg('gridHistoriadeUsuario', gridHistoriadeUsuario);