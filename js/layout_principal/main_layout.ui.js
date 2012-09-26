/*
 * File: main_layout.ui.js
 * 
 * This file was generated by Ext Designer version 1.1.2.
 * http://www.sencha.com/products/designer/
 *
 * This file will be auto-generated each and everytime you export.
 *
 * Do NOT hand edit this file.
 */

main_layoutUi = Ext.extend(Ext.Viewport, {
    layout: 'border',
    initComponent: function() {
        this.items = [
            {
                xtype: 'panel',
                region: 'north',
                width: 100,
                height: 45,
                collapsible: true,
                collapseMode: 'mini',
                split: true,
                hideCollapseTool: true,
                cls: 'x-panel-mc'
            },
            {
                xtype: 'panel',
                layout: 'border',
                region: 'center',
                items: [
                    {
                        xtype: 'tabpanel',
                        activeTab: 0,
                        region: 'center',
                        border: false,
                        style: '',
                        bodyStyle: 'border-style:solid;border-width:0 0 0 1px;',
                        ref: '../tabPanel',
                        items: [
                            {
                                xtype: 'panel',
                                title: 'Home',
                                bodyStyle: 'padding:10px;',
                                cls: '',
                                ref: '../../pnlHome'
                            }
                        ]
                    },
                    {
                        xtype: 'panel',
                        region: 'west',
                        layout: 'fit',
                        width: 300,
                        iconCls: '',
                        split: true,
                        collapseMode: 'mini',
                        border: false,
                        style: 'border-style: sodli;border-width:0 1px 0 0;',
                        autoShow: true,
                        items: [
                            {
                                xtype: 'treepanel',
                                border: false,
                                rootVisible: false,
                                bubbleEvents: [
                                    'click'
                                ],
                                cls: 'custom_tree',
                                ref: '../../treeMenus',
                                root: {
                                    text: 'Tree Node',
                                    id: 1
                                },
                                loader: {
                                    url: '/menus/listar'
                                }
                            }
                        ],
                        tbar: {
                            xtype: 'toolbar',
                            items: [
                                {
                                    xtype: 'spacer',
                                    width: 5
                                },
                                {
                                    xtype: 'trigger',
                                    triggerClass: 'x-form-search-trigger',
                                    disabled: true
                                },
                                {
                                    xtype: 'tbfill'
                                },
                                {
                                    xtype: 'button',
                                    iconCls: 'x-tbar-loading',
                                    ref: '../../../btnRefresh'
                                }
                            ]
                        }
                    }
                ]
            },
            {
                xtype: 'container',
                region: 'south',
                width: 100,
                height: 25,
                items: [
                    {
                        xtype: 'label',
                        text: 'Status Var'
                    }
                ]
            }
        ];
        main_layoutUi.superclass.initComponent.call(this);
    }
});
