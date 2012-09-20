/*
 * File: Scrum.js
 * Date: Wed Sep 19 2012 20:29:03 GMT-0600 (Hora verano, Montañas (México))
 * 
 * This file was generated by Ext Designer version 1.1.2.
 * http://www.sencha.com/products/designer/
 *
 * This file will be generated the first time you export.
 *
 * You should implement event handling and custom methods in this
 * class.
 */
Modulos={
	Scum:{
		idProyecto:0
	}
}

Scrum = Ext.extend(ScrumUi, {
    initComponent: function() {
        Scrum.superclass.initComponent.call(this);
		
		this.cmbProyectos.store= new stoProyectos();
		
		this.cmbProyectos.store.on('load',function(store , records, options){
			var id_proyecto=this.cmbProyectos.getValue();
			
			if ( options.seleccionar==true ) {
				this.cmbProyectos.setValue( records[0].id );			
				this.seleccionarProyecto();
			}else{
				
				this.cmbProyectos.setValue( Modulos.Scum.idProyecto );			
			}
			this.cmbProyectos.focus();
		},this);
		
		this.cmbProyectos.on('select',function(){
			this.seleccionarProyecto();
		},this);
		this.getConfig();
    },	
	getConfig:function(){
		Ext.Ajax.request({
			url: '/scrum/getConfig',			
			scope:this,
			success: function( response, options){
				var resp=Ext.decode(response.responseText);
				if (resp.success==true){
					if ( Ext.isEmpty(resp.idProyecto) ){
						this.cmbProyectos.store.load({seleccionar:true});						
					}else{
						Modulos.Scum.idProyecto=resp.idProyecto;	
						
						this.cmbProyectos.store.load();
					}
				}else{
					alert(resp.msg);
				}
			},
			failure: function(){
				alert("FALLA: seleccionarProyecto");
			}
		});
	},
	seleccionarProyecto:function(){
	
		var idProyecto=this.cmbProyectos.getValue();
		
		Ext.Ajax.request({							//Notifica al servidor del proyecto seleccionado 
			url: '/scrum/seleccionarProyecto',
			params:{idProyecto:idProyecto},
			scope:this,
			success: function( response, options){
			
				var resp=Ext.decode(response.responseText);				
				if (resp.success==true){
					topMsg.setAlert(this.controlador,resp.msg);
					Modulos.Scum.idProyecto = this.cmbProyectos.getValue();
					this.cmbProyectos.setValue(Modulos.Scum.idProyecto);					
				}else{
					this.cmbProyectos.setValue(Modulos.Scum.idProyecto);					
					alert(resp.msg);
				}
			
			},
		   failure: function(){
				alert("FALLA: seleccionarProyecto");
		   }
		});
		
		
		
	}
});
Ext.reg('Scrum', Scrum);