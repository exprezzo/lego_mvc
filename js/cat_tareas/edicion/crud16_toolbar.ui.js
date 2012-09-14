/*
 * File: crud16_toolbar.ui.js
 * Date: Thu Sep 13 2012 23:03:23 GMT-0600 (Hora verano, Montañas (México))
 * 
 * This file was generated by Ext Designer version 1.1.2.
 * http://www.sencha.com/products/designer/
 *
 * This file will be auto-generated each and everytime you export.
 *
 * Do NOT hand edit this file.
 */

crud16_toolbarUi = Ext.extend(Ext.Toolbar, {
    initComponent: function() {
        this.items = [
            {
                xtype: 'button',
                text: 'Guardar',
                iconCls: 'btnGuardarIcon_16',
                itemId: 'btnGuardar',
                arrowAlign: 'bottom',
                ref: 'btnGuardar'
            },
            {
                xtype: 'button',
                text: 'Eliminar',
                iconCls: 'btnEliminarIcon_16',
                itemId: 'btnEliminar',
                ref: 'btnEliminar'
            },
            {
                xtype: 'button',
                text: 'Nuevo',
                iconCls: 'btnNuevoIcon_16',
                itemId: 'btnNuevo',
                ref: 'btnNuevo'
            },
            {
                xtype: 'button',
                text: 'Recargar',
                iconCls: 'btnRecargarIcon_16',
                itemId: 'btnRecargar',
                ref: 'btnRecargar'
            },
            {
                xtype: 'tbseparator'
            },
            {
                xtype: 'tbfill'
            },
            {
                xtype: 'button',
                text: 'Switch',
                iconCls: 'btnSwitchIcon_16',
                itemId: 'btnSwitch',
                ref: 'btnSwitch'
            }
        ];
        crud16_toolbarUi.superclass.initComponent.call(this);
    }
});
