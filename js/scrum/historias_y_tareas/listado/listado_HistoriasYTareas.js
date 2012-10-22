/*
 * File: listado_HistoriasYTareas.js
 * 
 * This file was generated by Ext Designer version 1.1.2.
 * http://www.sencha.com/products/designer/
 *
 * This file will be generated the first time you export.
 *
 * You should implement event handling and custom methods in this
 * class.
 */

listado_HistoriasYTareas = Ext.extend(listado_HistoriasYTareasUi, {
	xtype_del_form:"edicionHistoria",	
	plugins:[CatGridPlugin],    
	view: new Ext.grid.GroupingView({
            forceFit:true
            ,groupTextTpl: '{gvalue} ({[values.rs.length]} {[values.rs.length > 1 ? "Tareas" : "Tarea"]})'
        }),
	initComponent: function() {		
        listado_HistoriasYTareas.superclass.initComponent.call(this);								
		//----------------------------------
		this.store=new stoHistoriasYTareas();
		//----------------------------------
		this.configurarGrid();				
		//----------------------------------		
		this.configComboMover();
		
		this.configBotonesMover();		
		
		this.configComboEstados();
				
		this.configurarComboProyectos();
		
	},
	
	mostrarOcultarBotones:function(){  //PENDIENTE: encontrar manera de evitar copiar el contenido
		var sel=this.getSelectionModel();
			
		if(sel.getCount()==0){
			this.btnEditar.setDisabled(true);											
			this.btnEliminar.setDisabled(true);				
			this.btnUp.setDisabled(true);				
			this.btnDown.setDisabled(true);			
		}else{
			this.btnEditar.setDisabled(false);							
			this.btnEliminar.setDisabled(false);			
			this.btnUp.setDisabled(false);		
			this.btnDown.setDisabled(false);
		}
	},
	editParams:function(params){
		var ubicacion={};
		var idUbicacion=this.cmbUbicaciones.getValue();		
		if (idUbicacion != "backlog" && idUbicacion != "sprints"){
			ubicacion.sprintId=idUbicacion;
		}
		params.masConfig=ubicacion;
		return params;
	},
	
	configurarGrid:function(){
		this.on('rowcontextmenu',function( grid, rowIndex, e ){		
			var xy = e.getXY();						
			var record=this.getStore().getAt( rowIndex );			
			var menu = this.getContextMenu();
			menu.showAt(xy);
			menu.idUbicacion=this.cmbUbicaciones.getValue();
			menu.selected=record.data;
			e.stopEvent();
			return false;
		},this);
		
		this.store.on('beforeload',function(store, options){			
		//PENDIENTE: Explicar este bloque de codigo
			if (this.initialConfig.tipo == undefined) 
				this.initialConfig.tipo='backlog';
			options.params.tipo=this.initialConfig.tipo;			
			options.params.idUbicacion=this.cmbUbicaciones.getValue();
			if (this.initialConfig.tipo=='sprint'){			
				options.params.sprintId=this.initialConfig.idSprint;				
			}
			
		},this);
		
		this.store.on('load',function(store, records, options){
			if (options.params!=undefined)
			if (options.params.idSeleccionado != undefined && options.params.idSeleccionado!=0){
				var record= store.getById(options.params.idSeleccionado);				
				var index=-1;
				if (record!=undefined)
					index= store.indexOf( record );
				
				if (index>-1){
					this.getSelectionModel().selectRow(index);
				}				
			}
				
				
		},this);
	},
	
	
	configComboMover:function(){
		this.cmbUbicaciones.store=new stoProyectos({
			idProperty:'id',
			url: '/historias/listarUbicaciones'
		});		
		
		this.cmbUbicaciones.on("select",function(){
			this.bottomToolbar.doRefresh();
		},this);
	},
	configComboEstados:function(){
	
		this.cmbEstado.store=new stoEstadoHistoria();
		this.cmbEstado.on('select',function( combo, record, index){
			// Filtrar la busqueda por el estado seleccionado.
			this.bottomToolbar.doRefresh();
		},this);
    },
	configBotonesMover:function(){
	
		this.btnUp.on("click",this.moverArriba,this);
		this.btnDown.on("click",this.moverAbajo,this);
		
	},
	//Muestra sprints y Backlog , filtra la ubicacion actual		
	moverArriba:function(){
		this.moverHistoria('up');
	},
	moverAbajo:function(){
		this.moverHistoria('down');
	},
	moverHistoria:function(direccion){
		var idHistoria=0;
		
		var grid=this;
		var sel=grid.getSelected();
		if (sel!=undefined) 
			idHistoria=sel.id;
			
		if (idHistoria==0) return false;
		
		Ext.Ajax.request({
		   url: '/historias/mover_historia',
		   params: {
				idHistoria:idHistoria,
				direccion:direccion
		   },
		   scope:this,
		   success: function(response, opts){
			  var result = Ext.decode(response.responseText);			  
			  if (result.success===true){												
				this.bottomToolbar.doRefresh();
			  }else{				
					alert(result.msg); 
			  }			  
		   },
		   failure: function(response, opts) {
			  //console.log('server-side failure with status code ' + response.status);
		   }
		});
	},
	getContextMenu:function(){
		if (this.ctxMenu == undefined)
		this.ctxMenu = new ctxHistoria();
		this.ctxMenu.on('reubicarHistoria',this.preguntarReubicarHistoria, this);
		
		
		this.ctxMenu.cmbMover.store.removeAll();
		this.ctxMenu.cmbMover.reset();
		this.ctxMenu.cmbMover.store.load();
		
		return this.ctxMenu;
	},
	preguntarReubicarHistoria:function(historia, destino){
		//console.log("historia"); console.log(historia);
		//console.log("destino"); console.log(destino);
		Ext.Msg.show({
		   title:'Reubicar?',
		   msg: 'Desea reubicar la historia?',
		   buttons: Ext.Msg.YESNO,
		   scope:this,
		   fn: function(btn){
				if (btn=="yes"){
					this.reubicarHistoria(historia, destino);
				}
		   },		   
		   icon: Ext.MessageBox.QUESTION
		});
		
	},
	reubicarHistoria:function(historia, destino){ //entre sprints y la pila de producto.				
				
		if (historia==undefined || destino==undefined) return;
		var params={
			idHistoria:historia.id,
			idDestino:destino.id
		} ;
		Ext.Ajax.request({
		   url: '/historias/mover',
		   params: params,
		   scope:this,
		   success: function(response, opts){
			  var result = Ext.decode(response.responseText);
			  if (result.success===true){
				this.bottomToolbar.doRefresh();
				if (result.msg)
					topMsg.setAlert("Historias", result.msg); 
			  }else{				
					alert(result.msg); 
			  }			  
		   },
		   failure: function(response, opts) {
			  //console.log('server-side failure with status code ' + response.status);
		   }
		});
	},
	configurarComboProyectos:function(){
		this.cmbProyectos.store= new stoProyecto();		
		
		this.cmbProyectos.initPlugin(cmbScrumProyectoPlugin);		
		this.cmbProyectos.on('proyectoSeleccionado',function(proyectoId){			
			this.seleccionarProyecto( proyectoId );
		},this);
		
		
		this.cmbProyectos.on('select',function(){
			this.seleccionarProyecto();
		},this);
		
		this.cmbProyectos.store.load();
		
		
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
					this.cmbUbicaciones.store.removeAll();
					this.cmbUbicaciones.reset();
					this.cmbUbicaciones.store.load();
					this.store.loadData({datos:{}});
					this.cmbUbicaciones.setValue('backlog');
					this.bottomToolbar.doRefresh();					
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
Ext.reg('listado_historias_y_tareas', listado_HistoriasYTareas);