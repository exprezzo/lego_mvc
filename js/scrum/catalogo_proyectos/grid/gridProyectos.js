/*
 * File: gridProyectos.js
 * 
 * This file was generated by Ext Designer version 1.1.2.
 * http://www.sencha.com/products/designer/
 *
 * This file will be generated the first time you export.
 *
 * You should implement event handling and custom methods in this
 * class.
 */

gridProyectos = Ext.extend(gridProyectosUi, {
    initComponent: function() {
        gridProyectos.superclass.initComponent.call(this);
			
		this.store=new stoProyectos({			
			api:{
				read: '/proyectos/listar',
				create: '/proyectos/crear',
				update: '/proyectos/guardar',
				destroy: '/proyectos/eliminar'
			},
			writer:new Ext.data.JsonWriter({
				encode: true,
				writeAllFields: true 
			})
		});
		this.bottomToolbar.bind(this.store);
		//----------------------------------
		//  agrego el comportamiento estandar del grid
	
		Ext.apply(this,comportamiento_grid,{
			xtype_del_form:"frmProyecto"
		});
		this.activarComportamiento();
		
		//�Que tal as�?
		
		//ComportamientoGrid.agregarA(this,{config});
		
		//Comportamiento_ComboIcon.aplicarA(combo,config);
		
		//mejor o que
		
		
	//----------------------------------
		this.bottomToolbar.doRefresh();
    }
});
Ext.reg('gridProyectos', gridProyectos);