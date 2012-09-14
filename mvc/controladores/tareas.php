<?php

require_once '../mvc/modelos/tarea_crud.php';
require '../mvc/doctrine/entities/tarea.php';

class Tareas extends Controlador{ //extends Controlador
	
	function getModelObject(){
		
		if ( !isset($this->modObj) ){			
			/*     
			
			El modelo debe implementar las funciones de la interfaz crud.
			
			$this->modObj = new Menu_PDO_Model(); ¿ Menu_PDO_Model extends ICRUD ?
			
			*/
			$this->modObj = new TareaCrud();	
		}		
		return $this->modObj;
	}	
	
	function moditicarQuery($query){
		$query->setParameter('fk_historia');
		return $query;
	}
	function getQueryBusqueda(){
		return "SELECT m FROM ".$this->modelo." m WHErE m.descripcion LIKE :query order BY m.descripcion ASC"; 
	}
}
?>