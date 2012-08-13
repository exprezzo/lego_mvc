<?php
class Paginas extends Controlador{ //extends Controlador
	//TODO: pasar a Controlador	
		
	function ProcesarPeticion($peticion){
		
		$vista= $this->getVista();		
		$vista->plantillaContenido='contenido/'.$peticion->accion;	
		
		return $vista->mostrar($layout = 'inicio');		
	}
	
	function crud(){
		
		$vista= $this->getVista();		
		$vista->plantillaContenido='contenido/crud';	
		
		return $vista->mostrar($layout = 'crud');		
	}
}
?>