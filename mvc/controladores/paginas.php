<?php
class Paginas extends Controlador{ //extends Controlador
	//TODO: pasar a Controlador	
		
	function procesarPeticion($peticion){
		require_once('../mvc/modelos/doctrine_model.php');
		$modelo = new DoctrineModel();
		$vista= $this->getVista();		
		$vista->plantillaContenido='contenido/'.$peticion->accion;	
		return $vista->mostrar('inicio');
		
	}
}
?>