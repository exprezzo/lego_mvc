/*
 * File: stoProyectos.js
 * 
 * This file was generated by Ext Designer version 1.1.2.
 * http://www.sencha.com/products/designer/
 *
 * This file will be auto-generated each and everytime you export.
 *
 * Do NOT hand edit this file.
 */

stoProyectos = Ext.extend(Ext.data.JsonStore, {
    constructor: function(cfg) {
        cfg = cfg || {};
        stoProyectos.superclass.constructor.call(this, Ext.apply({
            storeId: 'MyStore',
            root: 'datos',
            url: '/proyectos/listar',
            fields: [
                {
                    name: 'id'
                },
                {
                    name: 'nombre'
                }
            ]
        }, cfg));
    }
});
Ext.reg('stoProyectos', stoProyectos);