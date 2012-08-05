<?php
class Controlador{
	function __construct(){
		
		//echo "<H1>Saludos desde el controlador principal</H1>";
	}
	
	function index(){
		return array(
			'success'=>true,
			'msg'=>'accion index ejecutada con éxito'
		);
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