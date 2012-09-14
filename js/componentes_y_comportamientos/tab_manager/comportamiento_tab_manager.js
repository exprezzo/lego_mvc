comportamiento_tab_manager={
	
	
	mostrarTab:function(params){
		
		var tab=this.encontrarTab(params);
		
		if ( tab==false )
			tab = this.agregarTab(params);
		
		tab.show();						
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
			closable:true
		};
		
		Ext.apply( config, params );
		
		return this.add(config).show();
	},
	
	encontrarTab:function(params){
		
		for(item in this.items.items){
			item=this.items.items[item];			
			if ( item.getTabId != undefined && params.idReg != undefined){				
				
				if ( item.getTabId() == params.xtype + '_' + params.idReg ){
					return item;
				}
			}
		}
		return false;
	}

}