<?php
require_once '../mvc/modelos/doctrine_modelo_crud.php';

class Ctrl_Pendientes extends Controlador{ //extends Controlador
	//TODO: pasar a Controlador	
	function getModelObject(){
		
		if ( !isset($this->modObj) ){
			$this->modObj = new DoctrineModel();
		}
		
		return $this->modObj;
	}
	
	
		
	
	private function bindParams(){
		
		$id=(empty($_REQUEST['id']))? 0 : $_REQUEST['id'];
		$uuid=(empty($_REQUEST['uuid']))? '' : $_REQUEST['uuid'];
		$nombre=(empty($_REQUEST['nombre']))? '' : $_REQUEST['nombre'];
		$descripcion=(empty($_REQUEST['descripcion']))? '' : $_REQUEST['descripcion'];
		
		$params=array(
			'id'		 =>$id,
			'uuid'		 =>$uuid,
			'nombre'	 =>$nombre,
			'descripcion'=>$descripcion
		);				
		return $_REQUEST;		
	}
	
	
	
	
	
}
?>