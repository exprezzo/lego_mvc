<?php

require_once '../mvc/modelos/SprintCrud.php';

class Sprints extends Controlador{ 
	
	function getModelObject(){		
		if ( empty( $_SESSION['MODS']['SCRUM']['PROYECTO_ID'] ) ){
			$resp=array(
				'success'=>false,
				'msg'=>'Scrum: Seleccione un proyecto'
			);
			
			echo json_encode($resp);exit;			
		}
		$_POST['fk_proyecto']=$_SESSION['MODS']['SCRUM']['PROYECTO_ID'];
		$_REQUEST['fk_proyecto']=$_SESSION['MODS']['SCRUM']['PROYECTO_ID'];
		if ( !isset($this->modObj) ){	
			$this->modObj = new SprintCrud();	
		}
		return $this->modObj;
	}
	
	
	function getSprints(){
		ob_start();
		$respuesta=$this->listar();
		for ($i=0; $i<sizeof($respuesta['datos']); $i++  ){
			$respuesta['datos'][$i]->text = $respuesta['datos'][$i]->nombre;
			$respuesta['datos'][$i]->leaf = 1;
		}
		ob_end_clean();
		
		echo json_encode($respuesta['datos']); 
		
		return $respuesta;
	}
	
	
	
	
}
?>