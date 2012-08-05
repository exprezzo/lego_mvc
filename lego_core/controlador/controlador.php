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
	
	function mostrarVista(){
		$vista= $this->getVista();
		
		return $vista->render('','inicio');		
	}
	
	private function cambiarContenido($plantillaContenido){
		$vista= $this->getVista();
		$vista->plantillaContenido=$plantillaContenido;
		return $vista->render('','inicio');	
	}
		
	function procesarPeticion($peticion){
		$vista= $this->getVista();
		$vista->plantillaContenido='contenido/'.$peticion->accion;
		return $vista->mostrar('inicio');	
		
		
	}		
	
	/* */
	/*function inicio(){
		$vista= $this->getVista();
		$vista->plantillaContenido = '/contenido/home/';
		return $vista->mostrar('inicio');		
	}*/
	//comportamiento crud 
	
	function listar(){}
	function crear(){}
	function obtener(){}
	function actualizar(){}
	function borrar(){}
	function ligarParametros(){}
	
}
?>