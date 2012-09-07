<?php

require_once '../mvc/modelos/menu_pdo_model.php';

class Menus extends Controlador{ //extends Controlador
	//TODO: pasar a Controlador	
	function getModelObject(){
		
		if ( !isset($this->modObj) ){
			$this->modObj = new Menu_PDO_Model();
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
	
	function getMenus(){
		$modObj= $this->getModelObject();
		
		if ( !is_numeric($_POST['node']) ){
			$padre=$_POST['padreId'];
		}else{
			$padre=$_POST['node'];
		}
		
		$params=array(
			'padreId'=>$padre
		);		
		
		$res = $modObj->getMenus( $params );
		echo json_encode($res['data']);
		return $res;		
	}		
	
}
?>