/*
 * File: gridTareas.js
 * 
 * This file was generated by Ext Designer version 1.1.2.
 * http://www.sencha.com/products/designer/
 *
 * This file will be generated the first time you export.
 *
 * You should implement event handling and custom methods in this
 * class.
 */

gridTareas = Ext.extend(gridTareasUi, {
    initComponent: function() {
        gridTareas.superclass.initComponent.call(this);
		this.store=new stoTareas({
			url: '/tareas/listar',
			writer:new Ext.data.JsonWriter({
				encode: true,
				writeAllFields: true // write all fields, not just those that changed
			})
		});
		Ext.apply(this,comportamiento_grid,{
			xtype_del_form:"frmTarea"
		});	
		//-------------------------------------------------------------		
		// Comportamiento Detalle del Maestro
		//-------------------------------------------------------------
		
		this.store.on('beforeload',function(store, options){						
			options.params={fk_historia: this.idReg};			
		},this);		
		
		//  y asi se activa el comportamiento
		this.activarComportamiento();
    }
});
Ext.reg('gridTareas', gridTareas);