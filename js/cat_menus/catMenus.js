/*
 * File: catMenus.js
 * Date: Sat Sep 08 2012 17:21:29 GMT-0600 (Hora verano, Montañas (México))
 * 
 * This file was generated by Ext Designer version 1.1.2.
 * http://www.sencha.com/products/designer/
 *
 * This file will be generated the first time you export.
 *
 * You should implement event handling and custom methods in this
 * class.
 */

catMenus = Ext.extend(catMenusUi, {
	actualizarTitulo:function(	action ){				
	},
    initComponent: function() {
        catMenus.superclass.initComponent.call(this);
		
		this.txtId.setVisible(false);
		this.txtPadre.setVisible(false);
		
		this.treeMenus.on('click',function(node, e){			
			if (node.attributes != undefined){
				this.txtId.setValue(node.attributes.id);
				this.recargar();
			}			
		},this);
		
		this.treeMenus.loader.on('load',function(){
			var root=this.treeMenus.getRootNode();
			root.expand(true);
		},this);
		
		this.controlador='menus';
		Ext.applyIf(this,comportamiento_formulario);
		this.activarComportamiento();
		
		var form=this.getForm();
		form.on("actioncomplete",function(form, action){
			if (action.type!='load'){
				this.recargarArbol();
			}			
		},this);
		
		this.on('eliminado',this.recargarArbol,this);
		//form.on("actioncomplete",this.recargarArbol,this);
		//form.on("actioncomplete",this.recargarArbol,this);
		
		
		
		this.btnRefresh.on('click',this.recargarArbol,this);
		
		if (this.btnRefresh!=undefined){			
			this.btnRefresh.on('click',this.recargarArbol,this);
		}
		this.recargarArbol();
		
    },
	recargarArbol:function(){
		var arbol=this.treeMenus;
		var root=arbol.getRootNode();
		var loader=arbol.loader;
		loader.load(root);		
	},
	onNuevo:function(){
		var selMod=this.treeMenus.getSelectionModel();
		var node = selMod.getSelectedNode();
		if (node==undefined) {
			this.txtPadre.setValue(0);
		}else{
			this.txtPadre.setValue(node.attributes.id);
		}
		
		
	},
	getForm:function(){
		return this.frmEdicion.getForm();
	}
	
});
Ext.reg('catMenus', catMenus);