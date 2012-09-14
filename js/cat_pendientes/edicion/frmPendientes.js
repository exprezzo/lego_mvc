/*
 * File: frmPendientes.js
 * Date: Sun Sep 09 2012 08:48:34 GMT-0600 (Hora verano, Montañas (México))
 * 
 * This file was generated by Ext Designer version 1.1.2.
 * http://www.sencha.com/products/designer/
 *
 * This file will be generated the first time you export.
 *
 * You should implement event handling and custom methods in this
 * class.
 */

frmPendientes = Ext.extend(frmPendientesUi, {	
    initComponent: function() {		
        frmPendientes.superclass.initComponent.call(this);				
		//--------------------------------------
		this.txtId.setVisible(false);	
		this.txtGrupo.setVisible(false);			
		//--------------------------------------
		this.on('activate',function(){
			if (this.cargado==undefined){
				this.txtGrupo.setValue( this.initialConfig.masConfig.id );
			}		
		},this);
		
		Ext.applyIf(this,comportamiento_formulario);
		this.controlador='ctrl_pendientes';
		this.activarComportamiento();				
		
		//this.configurarGrid();
		
		Ext.applyIf(this.tabTareas,comportamiento_tab_manager);
		this.tabTareas.activarComportamiento();
		
		this.on('afterrender',function(){
			this.gridTareas.idReg=this.idReg;		
			this.gridTareas.bottomToolbar.doRefresh();
		},this);		
		
    },			
	onNuevo:function(){
		this.txtGrupo.setValue( this.initialConfig.masConfig.id );
	},
	actualizarTitulo:function(	action ){			
		if (action=="guardado" || action=="edicion")
			this.setTitle( this.txtNombre.getValue() );
	}
});
Ext.reg('frmPendientes', frmPendientes);