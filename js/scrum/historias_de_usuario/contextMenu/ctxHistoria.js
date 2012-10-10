ctxHistoria = Ext.extend(Ext.menu.Menu, {
	bubbleEvents:['reubicarHistoria'],
    initComponent: function() {
        this.items = [
            {
                xtype: 'panel',
                layout: 'table',
                width: 320,
                unstyled: true,
                style: '',
                items: [
                    {
                        xtype: 'spacer',
                        width: 27
                    },
                    {
                        xtype: 'displayfield',
                        value: 'Enviar a: ',
                        width: 66
                    },
                    {
                        xtype: 'spacer',
                        width: 5
                    },
                    {
                        xtype: 'combo',
                        displayField: 'nombre',
                        valueField: 'id',
                        minChars: 0,
                        triggerAction: 'all',
                        ref: '../cmbMover'
                    }
                ]
            }
        ];
		
        ctxHistoria.superclass.initComponent.call(this);
		this.configComboMover();
    },
	configComboMover:function(){		
		
		if (this.initialConfig.tipo==undefined)
			this.initialConfig.tipo='backlog';
		this.on('afterrender',function(){
			this.cmbMover.store=new stoProyectos({
				idProperty:'id',
				url: '/historias/getDestinos'
			});
			
			this.cmbMover.on("select",function(combo, record, index){
				this.fireEvent("reubicarHistoria",this.selected, record);
			},this);
			
			this.cmbMover.store.on('beforeload', function(store, options){
				options.params.tipo=this.initialConfig.tipo;
				options.params.idUbicacion=this.idUbicacion;
				if (this.initialConfig.tipo=='sprint'){
					options.params.sprintId=this.initialConfig.idSprint;
					
				}
			},this);			
		},this);		
		
		// this.btnMover.on('click',function(){			
			// this.fireEvent("reubicarHistoria",this.selected);
		// },this);
	}
	
});
