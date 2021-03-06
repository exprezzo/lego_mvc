/*
 * File: EstadoHistoria.js
 * 
 * This file was generated by Ext Designer version 1.1.2.
 * http://www.sencha.com/products/designer/
 *
 * This file will be auto-generated each and everytime you export.
 *
 * Do NOT hand edit this file.
 */

EstadoHistoria = Ext.extend(Ext.data.JsonStore, {
    constructor: function(cfg) {
        cfg = cfg || {};
        EstadoHistoria.superclass.constructor.call(this, Ext.apply({
            root: 'datos',
            url: '/estados/paginar',
            fields: [
                {
                    name: 'id'
                },
                {
                    name: 'nombre'
                },
                {
                    name: 'descripcion'
                },
                {
                    name: 'icon'
                },
                {
                    name: 'default'
                }
            ]
        }, cfg));
    }
});
Ext.reg('EstadoHistoria', EstadoHistoria);