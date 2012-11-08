<?php

require '../mvc/modelos/pdo_modelo_crud.php';

class Users extends Controlador{ //extends Controlador
	
	function getModelObject(){
		
		if ( !isset($this->modObj) ){			
			
			$this->modObj = new Modelo_PDO();	
		}		
		return $this->modObj;
	}	
	
}
?>