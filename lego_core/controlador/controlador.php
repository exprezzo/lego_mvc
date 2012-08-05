<?php


class Controlador{
	function __construct(){		
		//echo "<H1>Saludos desde el controlador principal</H1>";
	}
	
	function inicio(){
		require_once PATH_NUCLEO.'vista/vista.php';
		$vista = new Vista();
		
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