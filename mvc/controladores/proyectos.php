<?php

require_once '../mvc/modelos/ProyectoCrud.php';

class Proyectos extends Controlador{ 
	
	function getModelObject(){		
		if ( !isset($this->modObj) ){	
			$this->modObj = new ProyectoCrud();	
		}
		
		return $this->modObj;
	}
	
	function despuesDeGuardar($respuesta){
		if ($respuesta['success']==true){
			$mod=$respuesta['data'];
			if ($mod->esNuevo==true){
				$_POST['proyectoId']=$mod->id;
				ob_start();
				$this->establecerDefault();
				ob_end_clean();
			}
		}
		return $respuesta;
	}
	
	function establecerDefault(){
		$proyectoId=$_POST['proyectoId'];
		$modObj=$this->getModelObject();
		$res=$modObj->establecerDefault($proyectoId);
		echo json_encode($res);
		
		if ($res['success']==true){
			$_SESSION['MODS']['SCRUM']['PROYECTO_ID']=$proyectoId;
		}
		
		
		return array('success'=>true);
	}
	
}
?>