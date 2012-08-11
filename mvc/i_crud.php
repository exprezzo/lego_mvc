<?php
interface ICrud{

	function obtener($params);
	
	function guardar( $params ); //crear y actualizar
	
	function crear(); 
	
	function actualizar(); 
		
	function borrar();
	
	function listar();

}
?>