/*
 * File: stoModelo.js
 * Date: Sat Aug 18 2012 21:21:42 GMT-0600 (Hora verano, Montañas (México))
 * 
 * This file was generated by Ext Designer version 1.1.2.
 * http://www.sencha.com/products/designer/
 *
 * This file will be auto-generated each and everytime you export.
 *
 * Do NOT hand edit this file.
 */

stoModelo = Ext.extend(Ext.data.JsonStore, {
    constructor: function(cfg) {
        cfg = cfg || {};
        stoModelo.superclass.constructor.call(this, Ext.apply({
            storeId: 'stoModelo',
            root: 'datos',
            messageProperty: 'msg',
            api: {
                read: '/Ctrl_Modelo/listar',
                create: '/Ctrl_Modelo/crear',
                update: '/Ctrl_Modelo/guardar',
                destroy: '/Ctrl_Modelo/eliminar'
            },
            fields: [
                {
                    name: 'uuid'
                },
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
Ext.reg('stoModelo', stoModelo);new stoModelo();