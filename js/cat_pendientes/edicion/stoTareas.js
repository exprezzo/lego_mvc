/*
 * File: stoTareas.js
 * Date: Thu Sep 13 2012 22:59:52 GMT-0600 (Hora verano, Montañas (México))
 * 
 * This file was generated by Ext Designer version 1.1.2.
 * http://www.sencha.com/products/designer/
 *
 * This file will be auto-generated each and everytime you export.
 *
 * Do NOT hand edit this file.
 */

stoTareas = Ext.extend(Ext.data.JsonStore, {
    constructor: function(cfg) {
        cfg = cfg || {};
        stoTareas.superclass.constructor.call(this, Ext.apply({
            storeId: 'stoTareas',
            root: 'datos',
            messageProperty: 'msg',
            fields: [
                {
                    name: 'id'
                },
                {
                    name: 'descripcion'
                },
                {
                    name: 'dificultad'
                },
                {
                    name: 'tiempo_estimado'
                },
                {
                    name: 'estado'
                },
                {
                    name: 'usuarioAsignado'
                }
            ]
        }, cfg));
    }
});
Ext.reg('stoTareas', stoTareas);new stoTareas();