/*
 * File: Scrum.js
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
    
	observarNodo:function(node){		
		
		if ( !Ext.isObject(node.events.click) )		
			node.on('click',function( elNodo, e ) {				
				
				
				switch(elNodo.attributes.tipo){
					case 'backlog':																						
						var params={
							xtype:'gridHistoriadeUsuario',
							tipo:elNodo.attributes.tipo,
							idReg:'backlog'
						}											
						node.fireEvent('mostrarTab', params);
						//this.tabPanel.mostrarTab(params);					
					break;
					case 'sprints':				
						var params={
							xtype:'gridSprints',
							idReg:'sprints'
						};
						node.fireEvent('mostrarTab', params);
						//this.tabPanel.mostrarTab(params);						
					break;
					case 'sprint':
						var params={
							xtype:'gridHistoriadeUsuario',
							tipo:elNodo.attributes.tipo,
							idSprint:elNodo.id,
							idReg:'sprint_'+elNodo.id							
						};
						//this.tabPanel.mostrarTab(params);
						node.fireEvent('mostrarTab', params);
					break;
				}			
			},this);
		
		
		
		
		
		node.on('append',function ( tree, nodoPadre, nodoHijo, index ) {				
			//Los nodos hijo pierden los eventos al cuando se recarga el root, pero no pierden sus atributos				
			
			if( nodoPadre.id=='sprints' )
				nodoHijo.attributes.tipo='sprint';
				
			if (nodoHijo.id=='sprints'){
				nodoHijo.expand( true );
			}
			this.observarNodo(nodoHijo);
		},this);
		
		if (node.attributes.id=='backlog' || node.attributes.id=='' || node.attributes.id=='sprints')
			node.attributes.tipo=node.id;					
	},
    initComponent: function() {
        
		Scrum.superclass.initComponent.call(this);		
		
		this.arbolGrid.on('click',function(node, e){			
			if (node.attributes != undefined){
				//this.txtId.setValue(node.attributes.id);
				//this.recargar();
			}
		},this);
		
		this.lblProyecto.on('render',function(){
			this.lblProyecto.el.on('click',function(){
				var params={
					xtype:'gridProyectos',
					icon:'/imagenes/Human-O2/16x16/actions/gtk-preferences.png'					
				}
				this.tabPanel.mostrarTab(params);	
			},this);
		},this);
		
		// Para observar el movimiento de los nodos
		var root=this.arbolGrid.getRootNode();
		this.observarNodo(root);							
		
		this.arbolGrid.loader.on('load',function(){
			var root=this.arbolGrid.getRootNode();
			root.expand(true);
		},this);		
		
		this.on('eliminado',this.recargarArbol,this);
		
		this.btnRefresh.on('click',this.recargarArbol,this);
		
		if (this.btnRefresh!=undefined){			
			this.btnRefresh.on('click',this.recargarArbol,this);
		}
		
		
		
		Ext.apply(this.tabPanel,comportamiento_tab_manager);
		this.tabPanel.activarComportamiento();
		
		this.cmbProyectos.store= new  stoProyectos();		
		this.cmbProyectos.store.on('load',function(store , records, options){
			var id_proyecto=this.cmbProyectos.getValue();
			
			if ( options.seleccionar==true ) {
				this.cmbProyectos.setValue( records[0].id );			
				this.seleccionarProyecto();				
			}else{
				console.log(options);
				this.cmbProyectos.setValue( Modulos.Scum.idProyecto );
			}
			this.cmbProyectos.focus();
		},this);
		
		this.cmbProyectos.on('select',function(){
			this.seleccionarProyecto();
		},this);
		
		this.getConfig();			
		
		this.menuBacklog = new Ext.menu.Menu({
			items:[{
				xtype:'menuitem',
				text:'Backlog Menu',
				iconCls:'btnGuardar16_icon'
			}]
		});
		
		this.menuSprints = new Ext.menu.Menu({
			items:[{
				xtype:'menuitem',
				text:'Sprints Menu',
				iconCls:'btnGuardar16_icon'
			}]
		});
		
		this.menuSprint = new Ext.menu.Menu({
			items:[{
				xtype:'menuitem',
				text:'Sprint Menu',
				iconCls:'btnGuardar16_icon'
			}]
		});
			
		this.arbolGrid.on('contextmenu',function(nodo){
			
			
			var  nodoEl = nodo.getUI().getEl();
			
			
				
			switch(nodo.attributes.tipo){
				case 'backlog':				
					this.menuBacklog.show(nodoEl,'tr-bl');
					this.menuSprint.setVisible(false);
					this.menuSprints.setVisible(false);
					//alert("Mostrar Acciones del Backlog");
				break;
				case 'sprints':
					this.menuSprints.show(nodoEl,'tr-bl');
					this.menuBacklog.setVisible(false);
					this.menuSprint.setVisible(false);
					//alert("Mostrar Acciones Sprints");
				break;
				case 'sprint':
					this.menuSprint.show(nodoEl,'tr-bl');
					this.menuBacklog.setVisible(false);
					this.menuSprints.setVisible(false);
					//alert("Mostrar Acciones del Sprint");
				break;
			}
			
			return true;
		},this);
		
		
    },
	
	listeners:{
		
						
	},
	recargarArbol:function(){		
		var arbol=this.arbolGrid;
		var root=arbol.getRootNode();
		var loader=arbol.loader;
		loader.load(root);
		root.expand(true);						
	},	
	onNuevo:function(){
		return false;
		var selMod=this.arbolGrid.getSelectionModel();
		var node = selMod.getSelectedNode();
		this.txtProyecto.setValue( this.cmbProyectos.getValue() );
		
		if (node==undefined) {
			this.txtPadre.setValue( 1 );
		}else{
			this.txtPadre.setValue(node.attributes.id);		
		}				
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
					this.recargarArbol();
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