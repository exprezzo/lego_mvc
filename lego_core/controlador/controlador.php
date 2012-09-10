<?php


class Controlador{

	function __construct(){				
	}
	
	function getVista(){
		if ( !isset($this->vistaObj) ){
			require_once PATH_NUCLEO.'vista/vista.php';
			$this->vistaObj = new Vista();
		}
		return $this->vistaObj;
	}
		
	function procesarPeticion($peticion){
		$vista= $this->getVista();		
		return $vista->mostrar($peticion->accion);			
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
	
	function crear(){}
	function guardar(){
		$modObj= $this->getModelObject();		
		$params = $this->bindParams();
		
		$res = $modObj->guardar( $params );		

		$success=true;				
		$respuesta= array(
			'success'=>$success,
			'data'=> $res
		);
				
		echo json_encode($respuesta);
		return $respuesta;
	}
	private function bindParams(){
		
		return $_REQUEST;		
	}
	
	function actualizar(){}
	function borrar(){}
	function ligarParametros(){}
	function eliminar(){
		$modObj= $this->getModelObject();				
		$params=array();
		
		if ( !isset($_POST['id']) ){
			$id=$_POST['datos'];
		}else{
			$id=$_POST['id'];
		}
		$params['id']=$id;
		
		$res=$modObj->borrar($params);
		$respuesta = array(
			'success'=>$res
		);
		
		echo json_encode($respuesta);
		
		return $respuesta;
	}
}
?>