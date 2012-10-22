comportamiento_tab_manager={
	
	/* Params
	xtype: El xtype del tab por abrir
	id: opcional, identificador de la identidad.
	*/
	mostrarTab:function(params){
		
		var tab=this.encontrarTab(params);
		
		if ( tab==false )
			tab = this.agregarTab(params);
		
		tab.show();
		return tab;
	},
	
	activarComportamiento:function(){
			
		this.on('mostrarTab', function(params){			
			this.mostrarTab(params);
			return false;
		}, this);
		this.on('crearTab', this.mostrarTab, this);
		this.on('recargarTab', this.recargarTab, this);
		
	},
	
	recargarTab:function(){
		//Si lo encuentra lo recarga, si no lo encuentra lo agega
	},
	
	agregarTab:function(params){
		var config={
			closable:true,
			setTitle: function( title, iconCls ){
				title=title.substring(0,40)+'...';
				 this.title = title;
				 
				if(this.header && this.headerAsText){
					this.header.child('span').update(title);
				}
				
				if(iconCls){
					this.setIconClass(iconCls);
				}
				
				this.fireEvent('titlechange', this, title);
				return this;
			}
		};
		
		Ext.apply( config, params );
		
		return this.add(config);
	},
	
	encontrarTab:function(params){
		
		for(item in this.items.items){
			item=this.items.items[item];	
			
			if( params.idReg == undefined			)params.idReg=0;
			
			if ( item.getTabId != undefined ){				
				
				if ( item.getTabId() == params.xtype + '_' + params.idReg ){
					return item;
				}
				
			}
		}
		return false;
	}

}