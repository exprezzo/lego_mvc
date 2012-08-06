<?php
class Paginas extends Controlador{ //extends Controlador
	//TODO: pasar a Controlador	
		
	function antesdeProcesarPeticion($peticion){
		$vista=$this->getVista();		
		$vista->plantillaContenido='contenido/'.$peticion->accion;	
		return $vista->mostrar('inicio');
	}		
	function procesarPeticion($peticion){
		$vista= $this->getVista();		
		$vista->plantillaContenido='contenido/'.$peticion->accion;	
		return $vista->mostrar('inicio');
		
	}
}
?>