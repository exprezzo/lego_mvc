/*
 * File: stoTareas.js
 * Date: Fri Sep 07 2012 22:48:41 GMT-0600 (Hora verano, Montañas (México))
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
            root: 'data'
        }, cfg));
    }
});
Ext.reg('stoTareas', stoTareas);new stoTareas();