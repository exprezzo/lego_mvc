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
		$accion=$peticion->accion;
		//  Carga dinámica del controlador   -------------------------
		$ejecutar=false;
		
		//Si existe el controlador y tiene el metodo, se ejecuta el metodo
		//si el metodo no existe, se ejecuta 'procesarPeticion'
		
		if ( file_exists(PATH_CONTROLADORES.$peticion->controlador.'.php') ){
			require_once (PATH_CONTROLADORES.$peticion->controlador.'.php');
			$controller=new $peticion->controlador;		
			
			//  Aqui se decide entre ejecutar accion o cargar vista
			if (method_exists($controller, $accion)){				
				$respuesta = $controller->$accion();				
			}else{				
				$respuesta = $controller->procesarPeticion($peticion);											
			}
		}else{
			$respuesta=array(
				'success'=>false
			);
		}
		
		//------------------------------------
		if ( $respuesta['success'] == true ){
			$respuesta['msg'] = $msgExito;
		}else{
			print_r($respuesta);
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