/*
 * File: gridModelo.js
 * Date: Sun Aug 12 2012 20:36:23 GMT-0600 (Hora verano, Montañas (México))
 * 
 * This file was generated by Ext Designer version 1.1.2.
 * http://www.sencha.com/products/designer/
 *
 * This file will be generated the first time you export.
 *
 * You should implement event handling and custom methods in this
 * class.
 */

gridModelo = Ext.extend(gridModeloUi, {
    initComponent: function() {
        gridModelo.superclass.initComponent.call(this);
		
		this.store=new stoModelo({url: '/Ctrl_Modelo/listar'});
		this.bottomToolbar.bind(this.store);
		this.bottomToolbar.doRefresh();
    }
});
Ext.reg('gridModelo', gridModelo);