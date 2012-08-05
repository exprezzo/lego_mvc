<?php


class Controlador{
	function __construct(){		
		//echo "<H1>Saludos desde el controlador principal</H1>";
	}
	
	function getVista(){
		if ( !isset($this->vistaObj) ){
			require_once PATH_NUCLEO.'vista/vista.php';
			$this->vistaObj = new Vista();
		}
		return $this->vistaObj;
	}
	function inicio(){
		$vista= $this->getVista();
		
		return $vista->render('','inicio');		
	}
	//comportamiento crud 
	
	function listar(){}
	function crear(){}
	function obtener(){}
	function actualizar(){}
	function borrar(){}
	function ligarParametros(){}
	
}
?>