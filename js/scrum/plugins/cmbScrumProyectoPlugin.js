
var cmbScrumProyectoPlugin={
	init:function(p){
		if (p.store==undefined){
			alert("Agrege un store al combo para activar el plugin Scrum Proyecto");
		}
		p.store.on('load',function(store , records, options){
			var id_proyecto=p.getValue();			
			for (var i=0; i<records.length; i++ ){
				if (records[i].data.predeterminado ==1){
					p.setValue( records[i].id );
					p.fireEvent('proyectoSeleccionado', records[i].id);
					//this.seleccionarProyecto( records[i].id );
				}
			}			
		},this);
	}
}