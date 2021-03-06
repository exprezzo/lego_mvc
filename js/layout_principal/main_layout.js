/*
 * File: main_layout.js
 * Date: Wed Sep 05 2012 23:57:27 GMT-0600 (Hora verano, Montañas (México))
 * 
 * This file was generated by Ext Designer version 1.1.2.
 * http://www.sencha.com/products/designer/
 *
 * This file will be generated the first time you export.
 *
 * You should implement event handling and custom methods in this
 * class.
 */

main_layout = Ext.extend(main_layoutUi, {
    initComponent: function() {
        main_layout.superclass.initComponent.call(this);		
		
		this.configurarComportamientoMenu();
		
		Ext.apply(this.tabPanel, comportamiento_tab_manager,{
		
		
		});
		this.tabPanel.activarComportamiento();	

		
		
		if (this.btnRefresh!=undefined){			
			this.btnRefresh.on('click',function(){
				this.recargarArbol(this.treeMenus);
			},this);
		}				
		
		this.treeMenus.loader.on('load',function(){
			var root=this.treeMenus.getRootNode();
			root.expand(true);
		},this);
    },
	recargarArbol:function(arbol){		
		var root=arbol.getRootNode();
		var loader=arbol.loader;
		loader.load(root);	
	},
	configurarComportamientoMenu:function(){
		/*
		Ext.apply(this.tabPanel, comportamiento_tree_menu);
		this.tabPanel.activarComportamientoTreeMenu();
		*/
		this.treeMenus.getRootNode().expand();		
		//this.treeSistema.getRootNode().expand();
		
		this.on('click',function(node, e){
			if (node.attributes != undefined){
				this.procesarClick(node.attributes);
			}			
		},this);
	},
	procesarClick:function(attribs){	
		if ( !Ext.isEmpty(attribs.xtype) ){		
			var params={
				closable:true,
			};
			
			if ( !Ext.isEmpty(attribs.icon) ){
				params.iconCls=Ext.ux.TDGi.iconMgr.getIcon(attribs.icon);
			}
			Ext.applyIf(params,attribs);
						
			var tab=this.tabPanel.mostrarTab(params);			
			//tab.show();
		}
	}
});
Ext.reg('main_layout', main_layout);