/*
 * File: grid16_toolbar.ui.js
 * 
 * This file was generated by Ext Designer version 1.1.2.
 * http://www.sencha.com/products/designer/
 *
 * This file will be auto-generated each and everytime you export.
 *
 * Do NOT hand edit this file.
 */

grid16_toolbarUi = Ext.extend(Ext.Toolbar, {
    initComponent: function() {
        this.items = [
            {
                xtype: 'button',
                text: 'Editar',
                iconCls: 'btnEditarIcon_16',
                itemId: 'btnEditar',
                arrowAlign: 'bottom',
                ref: 'btnEditar'
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
                xtype: 'tbseparator'
            },
            {
                xtype: 'tbfill'
            },
            {
                xtype: 'trigger',
                triggerClass: 'x-form-search-trigger',
                ref: 'txtSearch'
            }
        ];
        grid16_toolbarUi.superclass.initComponent.call(this);
    }
});
