<?php

require_once '../mvc/modelos/SprintCrud.php';

class Sprints extends Controlador{ 
	
	function getModelObject(){		
		if ( !isset($this->modObj) ){	
			$this->modObj = new SprintCrud();	
		}
		
		return $this->modObj;
	}
	
}
?>