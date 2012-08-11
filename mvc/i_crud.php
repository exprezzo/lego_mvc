<?php
interface ICrud{

	function obtener();
	
	function guardar(); //crear y actualizar
	
	function crear(); 
	
	function actualizar(); 
		
	function borrar();
	
	function listar();

}
?>