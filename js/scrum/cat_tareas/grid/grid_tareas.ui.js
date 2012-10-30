/*
 * File: grid_tareas.ui.js
 * 
 * This file was generated by Ext Designer version 1.1.2.
 * http://www.sencha.com/products/designer/
 *
 * This file will be auto-generated each and everytime you export.
 *
 * Do NOT hand edit this file.
 */

grid_tareasUi = Ext.extend(Ext.grid.GridPanel, {
    title: 'Renombrar Lista',
    initComponent: function() {
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
                    iconCls: 'btnEditar',
                    itemId: 'btnEditar',
                    arrowAlign: 'bottom',
                    ref: '../btnEditar'
                },
                {
                    xtype: 'button',
                    text: 'Eliminar',
                    iconCls: 'btnEliminar',
                    itemId: 'btnEliminar',
                    ref: '../btnEliminar'
                },
                {
                    xtype: 'button',
                    text: 'Nuevo',
                    iconCls: 'btnNuevo',
                    itemId: 'btnNuevo',
                    ref: '../btnNuevo'
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
                    ref: '../txtSearch'
                },
                {
                    xtype: 'tbseparator'
                },
                {
                    xtype: 'buttongroup',
                    columns: 2,
                    items: [
                        {
                            xtype: 'button',
                            text: 'Button 1'
                        },
                        {
                            xtype: 'button',
                            text: 'Button 2'
                        }
                    ]
                }
            ]
        };
        this.columns = [
            {
                xtype: 'gridcolumn',
                header: 'id',
                dataIndex: 'id',
                sortable: true,
                width: 100
            },
            {
                xtype: 'gridcolumn',
                header: 'descripcion',
                dataIndex: 'descripcion',
                sortable: true,
                width: 100
            },
            {
                xtype: 'gridcolumn',
                header: 'prioridad',
                dataIndex: 'prioridad',
                sortable: true,
                width: 100
            },
            {
                xtype: 'gridcolumn',
                header: 'fk_historia',
                dataIndex: 'fk_historia',
                sortable: true,
                width: 100
            },
            {
                xtype: 'gridcolumn',
                header: 'detalles',
                dataIndex: 'detalles',
                sortable: true,
                width: 100
            },
            {
                xtype: 'gridcolumn',
                header: 'fk_estado',
                dataIndex: 'fk_estado',
                sortable: true,
                width: 100
            },
            {
                xtype: 'gridcolumn',
                header: 'estimado',
                dataIndex: 'estimado',
                sortable: true,
                width: 100
            },
            {
                xtype: 'gridcolumn',
                header: 'duracion',
                dataIndex: 'duracion',
                sortable: true,
                width: 100
            }
        ];
        grid_tareasUi.superclass.initComponent.call(this);
    }
});
