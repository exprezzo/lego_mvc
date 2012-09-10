/*
 * File: gridPendientes.ui.js
 * 
 * This file was generated by Ext Designer version 1.1.2.
 * http://www.sencha.com/products/designer/
 *
 * This file will be auto-generated each and everytime you export.
 *
 * Do NOT hand edit this file.
 */

gridPendientesUi = Ext.extend(Ext.grid.GridPanel, {
    title: 'Listado',
    width: 449,
    height: 254,
    autoExpandColumn: 'colNombre',
    initComponent: function() {
        this.tbar = {
            xtype: 'toolbar',
            items: [
                {
                    xtype: 'button',
                    text: 'Nuevo',
                    iconCls: 'btnNuevoIcon',
                    itemId: 'btnNuevo',
                    scale: 'medium',
                    iconAlign: 'top',
                    ref: '../btnNuevo'
                },
                {
                    xtype: 'button',
                    text: 'Eliminar',
                    iconCls: 'btnEliminarIcon',
                    scale: 'medium',
                    iconAlign: 'top',
                    ref: '../btnEliminar'
                },
                {
                    xtype: 'button',
                    text: 'Editar',
                    iconCls: 'btnEditarIcon',
                    scale: 'medium',
                    iconAlign: 'top',
                    ref: '../btnEditar'
                },
                {
                    xtype: 'tbseparator'
                },
                {
                    xtype: 'tbfill'
                },
                {
                    xtype: 'textfield',
                    itemId: 'txtSearch',
                    ref: '../txtSearch'
                },
                {
                    xtype: 'button',
                    text: 'Switch',
                    iconCls: 'btnSwitchIcon',
                    scale: 'medium',
                    iconAlign: 'top',
                    ref: '../btnSwitch'
                }
            ]
        };
        this.bbar = {
            xtype: 'paging',
            displayInfo: true
        };
        this.columns = [
            {
                xtype: 'gridcolumn',
                header: 'Nombre',
                dataIndex: 'nombre',
                sortable: true,
                width: 100,
                id: 'colNombre'
            },
            {
                xtype: 'gridcolumn',
                header: 'Prioridad',
                dataIndex: 'prioridad',
                sortable: true,
                width: 100
            }
        ];
        gridPendientesUi.superclass.initComponent.call(this);
    }
});