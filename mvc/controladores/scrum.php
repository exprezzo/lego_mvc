<?php

require_once '../mvc/modelos/SprintCrud.php';

class Scrum extends Controlador{ 
	
	function seleccionarProyecto(){
			
		$respuesta=array();
		$this->initModScrum();		
		
		$_SESSION['MODS']['SCRUM']['PROYECTO_ID']=$_POST['idProyecto'];
		
		$respuesta['success']=true;
		$respuesta['msg']="Scrum: Proyecto Seleccionado";
		echo json_encode($respuesta);
		
		return $respuesta;
	}
	
	function initModScrum(){
		if ( !isset( $_SESSION['MODS'] ) ){
			$_SESSION['MODS']=array();		
		}
		if ( !isset( $_SESSION['MODS']['SCRUM'] ) ){
			$_SESSION['MODS']['SCRUM']=array();		
		}
	}
	
	function getConfig(){
		$respuesta=array();
		$respuesta['success']=true;
		
		$this->initModScrum();
		
		if ( empty( $_SESSION['MODS']['SCRUM']['PROYECTO_ID'] ) ){
			$respuesta['idProyecto']=0;
		}else{
			$respuesta['idProyecto']=$_SESSION['MODS']['SCRUM']['PROYECTO_ID'];
		}
		
		echo json_encode($respuesta);
		
		return $respuesta;
	}
	/*
	getDestinos: nos da las ubicaciones a donde podemos mover nuestra historia de usuario
	
	params: 
	
	esBacklog: booleano
	sprintId: identificador del sprint de origen
	
	*/
	function getModelObject(){		
		if ( empty( $_SESSION['MODS']['SCRUM']['PROYECTO_ID'] ) ){
			$resp=array(
				'success'=>false,
				'msg'=>'Scrum: Seleccione un proyecto'
			);			
			echo json_encode($resp);exit;			
		}
		
		if ( !isset($this->modObj) ){	
			$this->modObj = new SprintCrud();	
		}
		
		return $this->modObj;
	}
	
}
?>