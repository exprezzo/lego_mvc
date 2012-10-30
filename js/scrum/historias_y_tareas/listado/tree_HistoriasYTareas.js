listado_historias_y_tareas =Ext.extend(Ext.ux.tree.TreeGrid, { 	
	width: 500,
	height: 300,	
	enableDD: true,
	border:false,
	rootVisible : false,
	columns:[{
		header: 'Text',
		dataIndex: 'text',
		width: 230
	},{
		header: 'estado',
		width: 50,
		dataIndex: 'fk_estado',
		tpl:'<tpl for="."><div class="x-combo-list-item" style="clear:both"><div class="scrum_estado_id_{fk_estado}" style="float:left;"></div><div style="float:left; margin-left:10px;"></div></div></tpl>'
	}],	
	//root: new Ext.tree.AsyncTreeNode({text: 'Historias',id:1}),
	
	initComponent : function() {
		this.loader= new Ext.tree.TreeLoader({
			dataUrl: '/Historias/paginarHistorias',
			autoload:false
		});
		listado_historias_y_tareas.superclass.initComponent.call(this);			
		this.on('dblclick',function(node, e){
			
			switch(node.attributes.tipo){
				case 'historia':					
					this.fireEvent('editarHistoria', node.id);					
				break;
				case 'tarea':
					this.fireEvent('editarTarea', node.id);
				break;
			}	
		},this);
	},
	configArbol:function(){
		this.loader.on('beforeload',function(arbol, nodo){
			arbol.baseParams.idProyecto=this.cmbProyectos.getValue();
			arbol.baseParams.idUbicacion=this.cmbUbicaciones.getValue();
		},this);		
	},
	 actualizar:function(){
		var root=this.getRootNode();
		var loader=this.loader;
		loader.load(root);	 
	 }	
});
Ext.reg('tree_historias_y_tareas', listado_historias_y_tareas);