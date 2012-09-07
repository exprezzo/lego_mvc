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
/*  ===============================================================================
		fin de ICrud
	=============================================================================== */
		
}
?>