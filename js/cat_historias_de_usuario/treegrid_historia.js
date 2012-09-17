TreeGridHistoria =Ext.extend(Ext.ux.tree.TreeGrid, { 
	title: 'Historias y tareas',
	width: 500,
	height: 300,	
	enableDD: true,
	border:false,
	columns:[{
		
		header: 'Historia',
		dataIndex: 'descripcion',
		width: '100%'
	}],	
	loader: {		
		url: '/historias/listar'		
	}
});
Ext.reg('TreeGridHistoria', TreeGridHistoria);