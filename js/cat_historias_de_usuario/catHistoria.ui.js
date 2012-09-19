/*
 * File: catHistoria.ui.js
 * 
 * This file was generated by Ext Designer version 1.1.2.
 * http://www.sencha.com/products/designer/
 *
 * This file will be auto-generated each and everytime you export.
 *
 * Do NOT hand edit this file.
 */

catHistoriaUi = Ext.extend(Ext.Panel, {
    title: 'Historias de usuario y tareas',
    height: 250,
    layout: 'border',
    bodyStyle: '',
    initComponent: function() {
        this.items = [
            {
                xtype: 'treepanel',
                region: 'west',
                width: 300,
                border: false,
                enableDD: true,
                split: true,
                collapseMode: 'mini',
                ref: 'arbolGrid',
                root: {
                    text: 'Proyecto',
                    expanded: true,
                    id: 'proyecto',
                    children: [
                        {
                            text: 'Backlog',
                            draggable: true,
                            id: 'backlog'
                        },
                        {
                            text: 'Sprints',
                            draggable: true,
                            id: 'sprints'
                        }
                    ]
                },
                loader: {
                    url: '/historias/listar'
                },
                bbar: {
                    xtype: 'toolbar',
                    style: 'border-width:1px 1px 0 0;',
                    items: [
                        {
                            xtype: 'tbfill'
                        },
                        {
                            xtype: 'button',
                            iconCls: 'x-tbar-loading',
                            ref: '../../btnRefresh'
                        }
                    ]
                },
                tbar: {
                    xtype: 'toolbar',
                    items: [
                        {
                            xtype: 'displayfield',
                            value: 'Proyecto'
                        },
                        {
                            xtype: 'combo',
                            valueField: 'id',
                            displayField: 'nombre',
                            minChars: 0,
                            triggerAction: 'all',
                            itemId: 'cmbProyectos',
                            emptyText: 'cargando proyectos...',
                            ref: '../../cmbProyectos'
                        }
                    ]
                }
            },
            {
                xtype: 'form',
                bodyStyle: 'padding:8px;border-width:0 0px 0px 0px;',
                region: 'center',
                style: 'border-width:0 0px 0px 1px;',
                border: false,
                ref: 'frmEdicion',
                items: [
                    {
                        xtype: 'textfield',
                        fieldLabel: 'Id',
                        anchor: '100%',
                        name: 'id',
                        ref: '../txtId'
                    },
                    {
                        xtype: 'textfield',
                        fieldLabel: 'Padre',
                        anchor: '100%',
                        name: 'fk_historia',
                        ref: '../txtPadre'
                    },
                    {
                        xtype: 'textfield',
                        fieldLabel: 'Proyecto',
                        anchor: '100%',
                        name: 'fk_proyecto',
                        ref: '../txtProyecto'
                    },
                    {
                        xtype: 'textarea',
                        fieldLabel: 'Descripcion',
                        anchor: '100%',
                        name: 'descripcion',
                        allowBlank: false,
                        style: '',
                        labelStyle: 'font-weight:bold;',
                        maxLength: 255,
                        growMax: 255,
                        autoCreate: {
                            tag: 'textarea',
                            maxlength: 250
                        },
                        ref: '../txtDescripcion'
                    },
                    {
                        xtype: 'textfield',
                        fieldLabel: 'Prioridad',
                        width: 50,
                        name: 'prioridad',
                        ref: '../txtPrioridad'
                    },
                    {
                        xtype: 'combo',
                        fieldLabel: 'Estado',
                        name: 'estado',
                        ref: '../txtEstado'
                    }
                ]
            }
        ];
        catHistoriaUi.superclass.initComponent.call(this);
    }
});
