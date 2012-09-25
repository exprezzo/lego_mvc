/*
 * File: gridSprints.js
 * 
 * This file was generated by Ext Designer version 1.1.2.
 * http://www.sencha.com/products/designer/
 *
 * This file will be generated the first time you export.
 *
 * You should implement event handling and custom methods in this
 * class.
 */

gridSprints = Ext.extend(gridSprintsUi, {
    initComponent: function() {
        gridSprints.superclass.initComponent.call(this);
		this.store=new stoProyectos({
			idProperty:'id',
			url: '/sprints/listar',
			api:{
				read: '/sprints/listar',
				create: '/sprints/crear',
				update: '/sprints/guardar',
				destroy: '/sprints/eliminar'
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
			xtype_del_form:"edicionSprint"
		});	
		
	//  y asi se activa el comporstamiento
		this.activarComportamiento();
	//----------------------------------
		this.bottomToolbar.doRefresh();
		
    }
});
Ext.reg('gridSprints', gridSprints);