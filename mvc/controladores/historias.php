<?php

require_once '../mvc/modelos/HistoriaDeUsuarioCrud.php';

class Historias extends Controlador{ 
	
	function getModelObject(){		
		if ( empty( $_SESSION['MODS']['SCRUM']['PROYECTO_ID'] ) ){
			$resp=array(
				'success'=>false,
				'msg'=>'Scrum: Seleccione un proyecto'
			);
			
			echo json_encode($resp);exit;			
		}
		
		if ( !isset($this->modObj) ){	
			$this->modObj = new HistoriaDeUsuarioCrud();	
		}
		
		return $this->modObj;
	}
	
	/*
	function getQueryBusqueda(){
		return "SELECT m,m.descripcion as text FROM ".$this->modelo." m WHErE m.nombre LIKE :query  m.fk_proyecto=:fk_proyecto"; 
	}
		
	public function moditicarQuery($query){
		$query=$query->setParameter(':fk_proyecto',$_SESSION['MODS']['SCRUM']['PROYECTO_ID']);		
		return $query;
	}*/
	
}
?>