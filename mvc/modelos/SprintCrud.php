<?php


require_once 'entidades_de_doctrine/Sprint.php';
require_once '../lego_core/manejador_crud.php';
class SprintCrud extends ManejadorCrud{
	var $modelo="Sprint";
	var $campos=array('id', 'nombre','fk_proyecto' );	
	
	function getQueryBusqueda(){
		return "SELECT m FROM ".$this->modelo." m WHErE m.nombre LIKE :query AND m.fk_proyecto=:fk_proyecto"; 
	}
		
	public function moditicarQuery($query){
	
			$query=$query->setParameter(':fk_proyecto',$_SESSION['MODS']['SCRUM']['PROYECTO_ID'] );		
	
		return $query;
		
	}
}
?>