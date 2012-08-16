comportamiento_formulario={		
	controlador:'modelo',
	guardar:function( params ){
		this.el.mask();
		this.form.submit({
			clientValidation: true,
			scope:this,
			url: '/'+ this.controlador + '/guardar',
			success:function(){
				this.el.unmask();
			},
			failure:function(){
				this.el.unmask();
			}
		});
	},
	listar:function( params ){
		alert("listar");
	},
	eliminar:function( params ){
		alert("eliminar");
	},
	obtener:function( params ){
		this.recargar();
	},
	nuevo:function( params ){
		alert("preparar");
	},
	recargar:function(){
		var params=this.getDatos();
		this.el.mask();
		this.form.load({
			params:params,			
			url: '/'+ this.controlador + '/obtener',
			scope:this,
			success:function(){
				this.el.unmask();
			},
			failure:function(){
				this.el.unmask();
			}
		});
	},
	getDatos:function(){
		return this.datos || {};
	},
	activarComportamiento:function( params ){							
		this.btnGuardar.on('click',this.guardar, this);
		this.btnEliminar.on('click',this.eliminar, this);
		this.btnRecargar.on('click',this.obtener, this );
		this.btnNuevo.on('click',this.nuevo, this);								
		this.btnSwitch.on('click',this.listar, this);
		
		this.on('activate',function(){
			if (this.cargado==undefined){
				this.cargado=true;
				if (this.datos != undefined){
					this.recargar();
					
				}
			}
		},this);
	}
};