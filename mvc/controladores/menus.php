<?php
require_once '../mvc/modelos/pdo_modelo_crud.php';

class Menus extends Controlador{ //extends Controlador
	//TODO: pasar a Controlador	
	function getModelObject(){
		
		if ( !isset($this->modObj) ){
			$this->modObj = new Modelo_PDO();
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
	
}
?>