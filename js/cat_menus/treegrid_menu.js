TreeGridMenu =Ext.extend(Ext.ux.tree.TreeGrid, { 
	//title: 'Menus',
	width: 500,
	height: 300,	
	enableDD: true,
	border:false,
	columns:[{
		header: 'Menu',
		dataIndex: 'text',
		width: 230
	},{
		header: 'xtype',
		width: 100,
		dataIndex: 'xtype',		
	},{
		header: 'icon',
		width: 150,
		dataIndex: 'icon'
	}],	
	/*root: {
        nodeType: 'async',
        text: 'Ext JS',
        draggable: false,
        id: 'source'
    },	*/
	initComponent : function() {
		this.loader= new Ext.tree.TreeLoader({dataUrl: '/menus/listar'});
		listado_historias_y_tareas.superclass.initComponent.call(this);
				
	}
});
Ext.reg('TreeGridMenu', TreeGridMenu);