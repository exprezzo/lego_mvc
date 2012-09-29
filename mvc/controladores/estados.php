<?php

require_once '../mvc/modelos/EstadosHistoriaCrud.php';

class Estados extends Controlador{ 
	
	
	function getModelObject(){		
		if ( empty( $_SESSION['MODS']['SCRUM']['PROYECTO_ID'] ) ){
			$resp=array(
				'success'=>false,
				'msg'=>'Scrum: Seleccione un proyecto'
			);			
			echo json_encode($resp);exit;			
		}
		
		if ( !isset($this->modObj) ){	
			$this->modObj = new EstadosHistoriaCrud();	
		}
		
		return $this->modObj;
	}
	
}
?>