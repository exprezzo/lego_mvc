<?php
require_once 'pdo_modelo_crud.php';

class Menu_PDO_Model extends Modelo_PDO{								
		
	function getMenus($params){
		$con = $this->getConexion();
		
		$padre=$params['padreId'];
				
		$sql = 'SELECT id,nombre as text,xtype FROM sistema_menus where padre =:padre ';		
		$sth = $con->prepare($sql);
		$sth->bindValue(':padre',$padre,PDO::PARAM_INT);
		
		$exito = $sth->execute();

		$modelos = $sth->fetchAll(PDO::FETCH_ASSOC);				
		if ( !$exito ){
			throw new Exception("Error listando: ".$sql); //TODO: agregar numero de error, crear una exception MiEscepcion
		}
							
		return array(
			'success'=>true,			
			'data'=>$modelos
		);
	}
	
	function listarMenus($padre){				
		$nodosPadre=$this->getHijos($padre);
		
		$nodos=$this->obtenerTodosLosHijos($nodosPadre); 
		return $nodos;
		
	}
	
	function obtenerTodosLosHijos($nodos){
		for($i=0; $i < sizeof($nodos); $i++ ){
			$nodo=$nodos[$i];
			$hijos=$this->getHijos($nodo['id']);
			
			
			if ( empty($hijos) ){
				$nodos[$i]['leaf']=1;				
			}else{
				$hijos=$this->obtenerTodosLosHijos($hijos);
				$nodos[$i]['children'] = $hijos;
			}			
		}
		return $nodos;		
	}
	
	function getHijos($padreId){
		$con = $this->getConexion();	
		$sql = 'SELECT id,nombre as text,xtype FROM sistema_menus where padre =:padre ';		
		$sth = $con->prepare($sql);
		$sth->bindValue(':padre',$padreId,PDO::PARAM_INT);
		
		$exito = $sth->execute();

		$menus = $sth->fetchAll(PDO::FETCH_ASSOC);				
		if ( !$exito ){
			throw new Exception("Error listando: ".$sql); //TODO: agregar numero de error, crear una exception MiEscepcion
		}
							
		return $menus;
	}
	
	
	
/*  ===============================================================================
		fin de ICrud
	=============================================================================== */
		
}
?>