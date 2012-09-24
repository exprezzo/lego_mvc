/*
 * File: edicionHistoria.js
 * 
 * This file was generated by Ext Designer version 1.1.2.
 * http://www.sencha.com/products/designer/
 *
 * This file will be generated the first time you export.
 *
 * You should implement event handling and custom methods in this
 * class.
 */

edicionHistoria = Ext.extend(edicionHistoriaUi, {    
	initComponent: function() {
        edicionHistoria.superclass.initComponent.call(this);
		this.controlador='historias';
		
		this.on("afterrender",function(){
			Ext.applyIf(this,comportamiento_formulario);		
			this.activarComportamiento();			
		},this);
		
		this.on('nuevo',function(){
			console.log("this nuevo"); console.log(this);
			var sprintId=this.initialConfig.masConfig.idSprint;
			if ( sprintId!=undefined){
				this.txtSprint.setValue(sprintId);
				this.txtBacklog.setValue(0);
			}else{
				this.txtSprint.setValue(0);
				this.txtBacklog.setValue(1);
			}
		},this);
			
		
    },
	actualizarTitulo:function(	action ){		
		if (action=="guardado" || action=="edicion")
			this.setTitle(this.txtDescripcion.getValue() );
	}
});
Ext.reg('edicionHistoria', edicionHistoria);