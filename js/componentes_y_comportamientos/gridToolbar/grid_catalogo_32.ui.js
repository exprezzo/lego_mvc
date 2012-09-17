/*
 * File: grid_catalogo_32.ui.js
 * 
 * This file was generated by Ext Designer version 1.1.2.
 * http://www.sencha.com/products/designer/
 *
 * This file will be auto-generated each and everytime you export.
 *
 * Do NOT hand edit this file.
 */

grid_catalogo_32Ui = Ext.extend(Ext.Toolbar, {
    initComponent: function() {
        this.items = [
            {
                xtype: 'button',
                text: 'Nuevo',
                iconCls: 'btnNuevoIcon',
                itemId: 'btnNuevo',
                scale: 'medium',
                iconAlign: 'top',
                ref: 'btnNuevo'
            },
            {
                xtype: 'button',
                text: 'Eliminar',
                iconCls: 'btnEliminarIcon',
                scale: 'medium',
                iconAlign: 'top',
                ref: 'btnEliminar'
            },
            {
                xtype: 'button',
                text: 'Editar',
                iconCls: 'btnEditarIcon',
                scale: 'medium',
                iconAlign: 'top',
                ref: 'btnEditar'
            },
            {
                xtype: 'tbseparator'
            },
            {
                xtype: 'tbfill'
            },
            {
                xtype: 'trigger',
                itemId: 'txtSearch',
                boxMinWidth: 32,
                cls: 'x-form-text-search-32',
                emptyText: 'escribe para buscar...',
                ctCls: 'x-form-filtro-busqueda-32',
                triggerClass: 'x-form-icono-trigger-32',
                width: 250,
                ref: 'txtSearch'
            }
        ];
        grid_catalogo_32Ui.superclass.initComponent.call(this);
    }
});
