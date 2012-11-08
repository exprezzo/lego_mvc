<?php
class Pages extends Controlador{ //extends Controlador
	//TODO: pasar a Controlador	
		
	function ProcesarPeticion($peticion){
		
		$vista= $this->getVista();		
		$vista->plantillaContenido='../memez/'.$peticion->accion;	
				
		return $vista->mostrar($layout = 'front');		
	}		
}
?>