<?php
include '../mvc/modelos/crud_model.php';
include '../mvc/modelos/ModeloControladorDeCatalogo.php';

class ControladorDeCatalogo extends Controlador{ //extends Controlador
	//TODO: pasar a Controlador	
	
	function listar(){
		$params = $this->getPostParams();
		$crudModel = new ModeloControladorDeCatalogo();
		$respuesta = $crudModel->listar( $params );
		return $respuesta;
	}
	
	function obtener(){
		$params = $this->getPostParams();
		$crudModel = new ModeloControladorDeCatalogo();
		$respuesta = $crudModel->obtener( $params );
		return $respuesta;
	}
	
	//crear y actualizar
	function guardar(){	
		$params = $this->getPostParams();
		$crudModel = new ModeloControladorDeCatalogo();
		$respuesta = $crudModel->guardar( $params );
		return $respuesta;
	}
	
	function despuesDeGuardar($params){
		
		$respuesta=array(
			'success'=>true,
			'msg'=>'accion de guardar servida con exito',
			'data'=>array()
		);
		
		json_encode($respuesta);
		return $respuesta;
	}
	
	
	function borrar(){
		$params = $this->getPostParams();
		$crudModel = new ModeloControladorDeCatalogo();
		$respuesta = $crudModel->obtener( $params );
		return $respuesta;
	}
	
	
	
	private function getModeloDelCatalogo(){
		if ( !isset( $this->modelo ) ){
			$this->modelo =  new ModeloControladorDeCatalogo();
		}
		return $this->modelo; 
	}
	
	private function getPostParams(){
		return array();
	}
	
	function procesarPeticion($peticion){		
		
		$vista= $this->getVista();		
		$vista->plantillaContenido='contenido/crud';	
		
		return $vista->mostrar($layout = 'inicio');		
	}
}
?>