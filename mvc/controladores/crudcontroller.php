<?php
include '../mvc/modelos/crud_model.php';

class CrudController extends Controlador{ //extends Controlador
	//TODO: pasar a Controlador	
	
	function obtener(){
	
	}
	
	//crear y actualizar
	function guardar(){	
	}
	
	
	function borrar(){
	}
	
	function listar(){
		$crudModel = new CrudModel();
	}
	
	function procesarPeticion($peticion){		
		$vista= $this->getVista();		
		$vista->plantillaContenido='contenido/crud';	
		
		return $vista->mostrar($layout = 'inicio');		
	}
}
?>