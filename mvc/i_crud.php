<?php
interface ICrud{

	function obtener($params); //getById
	
	function guardar( $params ); //crear y actualizar		
		
	function borrar($params);
	
	function listar($params);//paginar

}
?>