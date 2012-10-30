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

class TareaCrud extends ManejadorCrud{
	var $modelo="Tarea";
	var $campos=array("id","descripcion", "dificutad",'tiempo_estimado','estado','usuarioAsignado','fk_historia');
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
	
}	
?>