<?php
class Pendientes extends Controlador{ //extends Controlador
	//TODO: pasar a Controlador	
		
	//=======================================================
	// Procesamiento de las vistas
	//=======================================================
	function ProcesarPeticion($peticion){
		
		$vista= $this->getVista();		
		$vista->plantillaContenido='contenido/'.$peticion->accion;	
		
		//return $vista->mostrar($layout = 'inicio');		
		return $vista->mostrar($layout = 'crud');		
	}
	
	function crud(){
		
		$vista= $this->getVista();		
		$vista->plantillaContenido='contenido/crud';	
		
		return $vista->mostrar($layout = 'crud');		
	}
	
	//=======================================================
	//	funciones de la interfaz crud
	//=======================================================
	function getModelObject(){
		
		if ( !isset($this->modObj) ){
			$this->modObj = new DoctrineModel();
		}	
		return $this->modObj;
	}
	
	/*
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
	}*/
}
?>