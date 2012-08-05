<?php
require_once 'peticion.php';
require_once 'controlador/controlador.php';
class Despachador{
	var $_peticion;
	function despacharPeticion(){
		$peticion=$this->getPeticion();				
		//Carga din�mica del controlador		
		require_once PATH_CONTROLADORES.$peticion->controlador.'.php';
		$controller=new $peticion->controlador;
		$accion=$peticion->accion;
		$controller->$accion();	
		return array(
			'success'=>true,
			'msg'=>'petici�n servida con �xito'
		);
	}
	function getPeticion(){
		if ( $this->_peticion == null ){
			$this->_peticion = new Peticion();
		}
		return $this->_peticion;
	}
}
?>