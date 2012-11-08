<?php
use Doctrine\Common\ClassLoader;
use Doctrine\DBAL\DriverManager;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Pagination\Paginator;

/*
require '../terceros/DoctrineORM-2.3.0-RC1/Doctrine/Common/ClassLoader.php';
require '../mvc/doctrine/entities/modelo.php';
*/
require '../lego_core/manejador_crud.php';
require 'pdo_modelo_crud.php';

class TareaCrud extends ManejadorCrud{
	var $modelo="Tarea";
	var $campos=array("id","descripcion", "dificutad",'tiempo_estimado','estado','usuarioAsignado','fk_historia','fk_estado');
	/*
	var $campos_de_mapeo=array("id","nombre", "email",'pass');
	*/
	function getQueryBusqueda(){
		return "SELECT m FROM ".$this->modelo." m WHErE m.descripcion LIKE :query AND m.fk_historia=:fk_historia order BY m.descripcion ASC"; 
	}
	function moditicarQuery($query){
		//Si la peticion es listar, agrego el grupo para filtrar la busqueda
		global $_Peticion;
		if ($_Peticion->accion=='listar'){			
			$historia=$_POST['fk_historia'];			
			$query->setParameter(':fk_historia',$historia);
			return $query;
		}
	}
	
	function obtener($params){
		$em = $this->getEM();		

		
		$id=$params['id'];				
		$modelo = $em->find( $this->modelo, $id );
		
		if ( !empty($modelo) ){
			if ( !is_null($modelo->fk_estado) ){
				$mod= new Modelo_PDO();
				
				$mod->tabla='scrum_estados_de_historia';
				$estado	=$mod->obtener(array('id'=>$modelo->fk_estado) );			
				
				$modelo->nombreEstado=$estado['nombre'];
			}
		}else{			
			$modelo = new Tarea();
			$modelo->nombreEstado="Pendiente";
			$modelo->fk_estado=1;
			$modelo->descripcion="Nueva Tarea";
			//$modelo->fk_proyecto=$_SESSION['MODS']['SCRUM']['PROYECTO_ID'];				
		}
		
		
		return $modelo;
	}
	
}	
?>