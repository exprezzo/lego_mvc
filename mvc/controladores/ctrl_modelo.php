<?php
require_once '../mvc/modelos/doctrine_modelo_crud.php';

class Ctrl_Modelo extends Controlador{ //extends Controlador
	//TODO: pasar a Controlador	
	function getModelObject(){
		
		if ( !isset($this->modObj) ){
			$this->modObj = new DoctrineModel();
		}
		
		return $this->modObj;
	}
	
	function listar(){
		$modObj= $this->getModelObject();
		
		$limit=(empty($_REQUEST['limit']))?100 : $_REQUEST['limit'];
		$start=(empty($_REQUEST['start']))?0 : $_REQUEST['start'];
		
		$params=array(
			'limit'=>$limit,
			'start'=>$start
		);		
		$res = $modObj->listar( $params );		
		
		echo json_encode($res);
		return $res;
		
	}
}
?>