<?php
require_once '../mvc/modelos/manejador_de_pendientes.php';

class Ctrl_Modelo extends Controlador{ //extends Controlador
	//TODO: pasar a Controlador	
	function getModelObject(){
		
		if ( !isset($this->modObj) ){
			$this->modObj = new ManejadorModel();
		}
		
		return $this->modObj;
	}
	private function getFindParams(){
		$limit=(empty($_REQUEST['limit']))?100 : $_REQUEST['limit'];
		$start=(empty($_REQUEST['start']))?0 : $_REQUEST['start'];
		$query=(empty($_REQUEST['query']))? "" : $_REQUEST['query'];
		$params=array(
			'limit'=>$limit,
			'start'=>$start,
			'query'=>$query
		);		
		return $params;
	}
	
	function listar(){
		$modObj= $this->getModelObject();
		
		$params=$this->getFindParams();		
		
		$res = $modObj->listar( $params );				
		echo json_encode($res);
		return $res;		
	}
	
	function obtener(){
		$modObj= $this->getModelObject();							
		
		$params=$this->bindParams();
		$res = $modObj->obtener( $params );		
			
		$success=true;		
		$respuesta= array(
			'success'=>$success,
			'data'=>$res
		);
		echo json_encode($respuesta);
		return $respuesta;		
	}		
	
	private function bindParams(){
		
		$id=(empty($_REQUEST['id']))? 0 : $_REQUEST['id'];
		$uuid=(empty($_REQUEST['uuid']))? '' : $_REQUEST['uuid'];
		$nombre=(empty($_REQUEST['nombre']))? '' : $_REQUEST['nombre'];
		
		$params=array(
			'id'=>$id,
			'uuid'=>$uuid,
			'nombre'=>$nombre,
		);				
		return $params;		
	}
	
	function guardar(){
		$modObj= $this->getModelObject();		
		$params = $this->bindParams();
		
		$res = $modObj->guardar( $params );		
				
		$success=true;		
		$respuesta= array(
			'success'=>$success,
			'data'=>$res
		);
		echo json_encode($respuesta);
		return $respuesta;		
	}
	
	function eliminar(){
		$modObj= $this->getModelObject();				
		$params=array(
			'id'=>$_POST['datos']
		);
		$res=$modObj->borrar($params);
		$respuesta = array(
			'success'=>$res
		);
		
		echo json_encode($respuesta);
		
		return $respuesta;
	}
	
}
?>