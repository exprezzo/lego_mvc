<?php
require_once 'peticion.php';
require_once 'controlador/controlador.php';
require_once 'vista/vista.php';
class Despachador{
	var $_peticion;
	function despacharPeticion(){
		
		$msgExito = 'petición servida con éxito';
		$msgFalla = 'La petición no puede servirse';
		
		$peticion=$this->getPeticion();				
		
		//  Carga dinámica del controlador   -------------------------
		require_once PATH_CONTROLADORES.$peticion->controlador.'.php';
		$controller=new $peticion->controlador;		
		$accion=$peticion->accion;
		//  Aqui se decide entre ejecutar accion o cargar vista
		if (method_exists($controller, $accion)){				
			$respuesta = $controller->$accion();						
		}else{
			unset($controller);			
			$vista=new Vista();			
			$respuesta = $vista->render($peticion->controlador, $accion);		
		}	
		//------------------------------------
		if ( $respuesta['success'] == true ){
			$respuesta['msg'] = $msgExito;
		}else{
			$respuesta['msg'] = $msgFalla;
		}
		return $respuesta;						
	}
	function getPeticion(){
		if ( $this->_peticion == null ){
			$this->_peticion = new Peticion();
		}
		return $this->_peticion;
	}
}
?>