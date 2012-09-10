<?php

require_once '../mvc/modelos/menu_pdo_model.php';
require_once '../mvc/modelos/doctrine_usuario_crud.php';
require '../mvc/doctrine/entities/usuario.php';

class Usuarios extends Controlador{ //extends Controlador
	//TODO: pasar a Controlador	
	function getModelObject(){
		
		if ( !isset($this->modObj) ){
			//$this->modObj = new Menu_PDO_Model();
			$this->modObj = new DoctrineUsuario();	
		}
		
		return $this->modObj;
	}
	
	
	
	
}
?>