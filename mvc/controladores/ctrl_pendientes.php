<?php
require_once '../mvc/modelos/pendientes_crud.php';

class Ctrl_Pendientes extends Controlador{ //extends Controlador
	//TODO: pasar a Controlador	
	function getModelObject(){
		if ( !isset($this->modObj) ){
			$this->modObj = new PendientesCrud();
		}		
		return $this->modObj;
	}
	
		
}
?>