<?php

require_once '../mvc/modelos/HistoriaDeUsuarioCrud.php';

class Historias extends Controlador{ 
	
	function getModelObject(){		
		if ( !isset($this->modObj) ){	
			$this->modObj = new HistoriaDeUsuarioCrud();	
		}
		
		return $this->modObj;
	}
	
	
	function getQueryBusqueda(){
		return "SELECT m,m.descripcion as text FROM ".$this->modelo." m WHErE m.nombre LIKE :query  m.fk_proyecto=:fk_proyecto"; 
	}
		
	public function moditicarQuery($query){
		$query=$query->setParameter(':fk_proyecto',$_POST['proyecto_id']);		
		return $query;
	}
	
	function listar(){
		//el nodo padre es el proyecto
		if ( !is_numeric($_POST['node']) ){
			$padre=$_POST['padreId'];
		}else{
			$padre=$_POST['node'];
		}
		
		$proyecto=$_POST['proyecto_id'];
		
		$modObj= $this->getModelObject();
		$menus=$modObj->listarMenus($padre, $proyecto);
		
		echo json_encode($menus);
		exit;		
	}
	
	function guardar(){
		if ( $_POST['id'] == 1){
			throw new Exception("El nodo raiz no puede editarse");
		}
		return parent::guardar();
	}
	function eliminar(){
		if ( $_POST['id'] == 1){
			throw new Exception("El nodo raiz no puede eliminarse");
		}
		return parent::eliminar();
	}
}
?>