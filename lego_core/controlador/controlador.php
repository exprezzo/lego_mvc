<?php
class Controlador{
	function __construct(){
		global $_Peticion;
		echo "<H1>Saludos desde el controlador ".$_Peticion->controlador."</H1>";
	}
	function index(){
		
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