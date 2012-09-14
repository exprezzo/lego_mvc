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
	loader: {		
		url: '/menus/listar'		
	}
});
Ext.reg('TreeGridMenu', TreeGridMenu);