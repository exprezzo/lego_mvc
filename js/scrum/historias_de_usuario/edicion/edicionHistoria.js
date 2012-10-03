/*
 * File: edicionHistoria.js
 * 
 * This file was generated by Ext Designer version 1.1.2.
 * http://www.sencha.com/products/designer/
 *
 * This file will be generated the first time you export.
 *
 * You should implement event handling and custom methods in this
 * class.
 */

edicionHistoria = Ext.extend(edicionHistoriaUi, {    
	initComponent: function() {
        edicionHistoria.superclass.initComponent.call(this);
		this.txtId.setVisible(false);
		this.txtSprint.setVisible(false);
		this.txtBacklog.setVisible(false);
		this.txtEstado.setVisible(false);
		this.txtNombreEstado.setVisible(false);
		this.lblProyecto.setVisible(false);
		this.controlador='historias';
		
		this.on("afterrender",function(){
			Ext.applyIf(this,comportamiento_formulario);		
			this.activarComportamiento();			
		},this);
				
		this.on('nuevo',function(){			
			var sprintId=this.initialConfig.masConfig.idSprint;
			if ( sprintId!=undefined){
				this.txtSprint.setValue(sprintId);
				this.txtBacklog.setValue(0);
			}else{
				this.txtSprint.setValue(0);
				this.txtBacklog.setValue(1);
			}
			this.txtEstado.setValue( this.cmbEstado.getValue() );
		},this);				
		
		this.cmbEstado.store=new stoEstadoHistoria();
		this.cmbEstado.on('select',function( combo, record, index){
			this.txtEstado.setValue(record.id);
		},this);
		
		this.cmbEstado.on('cargado',function( combo, record, index){
			//No nos confiamos en si el combo ya tiene los datos, por estandar, se carga tambien el valor a mostrar, en este caso, nombreEstado			
			//Nomenclatura desde el ExtDesigner, name=Cantidad_en_pesos, ref:txt_Cantidad_en_pesos
			
			/*
			this.ligarCombo({
				id:this.txtEstado,
				nombre:this.txt_NombreEstado
			})
			*/
			
			var estado={
				id:this.txtEstado.getValue(),
				nombre:this.txtNombreEstado.getValue()
			};
			this.cmbEstado.store.loadData({datos:estado});
			this.cmbEstado.setValue(estado.id);
			
		},this);
		//,guardado,nuevo
		this.cmbEstado.store.load();
				
		this.on('guardado',function(){			
			this.cargarCombos();
		},this);
		
		this.on('cargado',function(){			
			this.cargarCombos();
		},this);
		
    },
	cargarCombos:function(){
		var estado={
			id:this.txtEstado.getValue(),
			nombre:this.txtNombreEstado.getValue()
		};
		this.cmbEstado.store.loadData({datos:estado});
		this.cmbEstado.setValue(estado.id);
	},
	actualizarTitulo:function(	action ){
		if (action=="guardado" || action=="edicion")
			this.setTitle(this.txtDescripcion.getValue() );
	},
	
});

Ext.reg('edicionHistoria', edicionHistoria);