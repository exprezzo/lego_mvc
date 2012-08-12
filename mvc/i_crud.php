<?php
interface ICrud{

	function obtener($params);
	
	function guardar( $params ); //crear y actualizar		
		
	function borrar($params);
	
	function listar($params);

}
?>