/*
 * File: gridProyectos.ui.js
 * 
 * This file was generated by Ext Designer version 1.1.2.
 * http://www.sencha.com/products/designer/
 *
 * This file will be auto-generated each and everytime you export.
 *
 * Do NOT hand edit this file.
 */

gridProyectosUi = Ext.extend(Ext.grid.GridPanel, {
    title: 'Lista  de proyectos',
    width: 400,
    height: 250,
    autoExpandColumn: 'colNombre',
    initComponent: function() {
        this.columns = [
            {
                xtype: 'gridcolumn',
                header: 'nombre',
                dataIndex: 'nombre',
                sortable: true,
                width: 300,
                id: 'colNombre'
            },
            {
                xtype: 'templatecolumn',
                header: 'Default',
                sortable: true,
                width: 100,
                dataIndex: 'predeterminado',
                tpl: '<div class="estado_{predeterminado}"></div>'
            }
        ];
        this.bbar = {
            xtype: 'paging',
            displayInfo: true
        };
        this.tbar = {
            xtype: 'toolbar',
            items: [
                {
                    xtype: 'button',
                    text: 'Editar',
                    iconCls: 'btnEditarIcon_16',
                    itemId: 'btnEditar',
                    arrowAlign: 'bottom',
                    ref: '../btnEditar'
                },
                {
                    xtype: 'button',
                    text: 'Eliminar',
                    iconCls: 'btnEliminarIcon_16',
                    itemId: 'btnEliminar',
                    ref: '../btnEliminar'
                },
                {
                    xtype: 'button',
                    text: 'Nuevo',
                    iconCls: 'btnNuevoIcon_16',
                    itemId: 'btnNuevo',
                    ref: '../btnNuevo'
                },
                {
                    xtype: 'tbseparator'
                },
                {
                    xtype: 'button',
                    text: 'Establecer como Default',
                    iconCls: 'btnDefault',
                    ref: '../btnDefault'
                },
                {
                    xtype: 'tbfill'
                },
                {
                    xtype: 'trigger',
                    triggerClass: 'x-form-search-trigger',
                    ref: '../txtSearch'
                }
            ]
        };
        gridProyectosUi.superclass.initComponent.call(this);
    }
});
