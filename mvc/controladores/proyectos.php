<?php

require_once '../mvc/modelos/ProyectoCrud.php';

class Proyectos extends Controlador{ 
	
	function getModelObject(){		
		if ( !isset($this->modObj) ){	
			$this->modObj = new ProyectoCrud();	
		}
		
		return $this->modObj;
	}
	
}
?>