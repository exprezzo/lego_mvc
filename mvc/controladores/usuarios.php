<?php

require_once '../mvc/modelos/menu_pdo_model.php';
require_once '../mvc/modelos/doctrine_usuario_crud.php';
require '../mvc/doctrine/entities/usuario.php';

class Usuarios extends Controlador{ //extends Controlador
	
	function getModelObject(){
		
		if ( !isset($this->modObj) ){			
			/*     
			
			El modelo debe implementar las funciones de la interfaz crud.
			
			$this->modObj = new Menu_PDO_Model(); ¿ Menu_PDO_Model extends ICRUD ?
			
			*/
			$this->modObj = new DoctrineUsuario();	
		}		
		return $this->modObj;
	}	
	
	function moditicarQuery($query){
		return $query;
	}
}
?>