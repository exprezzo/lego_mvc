<?php
class Pendientes extends Controlador{ //extends Controlador
	 //TODO: pasar a Controlador	
		
	//=======================================================
	// Procesamiento de las vistas
	//=======================================================
	function ProcesarPeticion($peticion){
		
		$vista= $this->getVista();		
		$vista->plantillaContenido='contenido/'.$peticion->accion;	
		
		//return $vista->mostrar($layout = 'inicio');		
		return $vista->mostrar($layout = 'crud');		
	}
	
	function crud(){
		
		$vista= $this->getVista();	
		$vista->plantillaContenido='contenido/crud';	
		
		return $vista->mostrar($layout = 'crud');		
	}
	
	//=======================================================
	//	funciones de la interfaz crud
	//=======================================================
	function getModelObject(){
		
		if ( !isset($this->modObj) ){
			$this->modObj = new DoctrineModel();
		}	
		return $this->modObj;
	}
	
}
?>