<?php


class Controlador{

	function __construct(){				
	}
	
	function getVista(){
		if ( !isset($this->vistaObj) ){
			require_once PATH_NUCLEO.'vista/vista.php';
			$this->vistaObj = new Vista();
		}
		return $this->vistaObj;
	}
		
	function procesarPeticion($peticion){
		$vista= $this->getVista();		
		return $vista->mostrar($peticion->accion);			
	}
	
	/*function antesdeProcesarPeticion($peticion){
		// return false;  //false para detener la peticion
	}
	
	function despuesdeProcesarPeticion($peticion){
		// return false;  //false para detener la peticion
	}	*/
	//comportamiento crud 
	
	function listar(){}
	function crear(){}
	function obtener(){}
	function actualizar(){}
	function borrar(){}
	function ligarParametros(){}
	
}
?>