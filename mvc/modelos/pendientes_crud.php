<?php
use Doctrine\Common\ClassLoader;
use Doctrine\DBAL\DriverManager;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Pagination\Paginator;

/*require '../terceros/DoctrineORM-2.3.0-RC1/Doctrine/Common/ClassLoader.php';
require '../mvc/doctrine/entities/modelo.php';*/
require '../lego_core/manejador_crud.php';

class PendientesCrud extends ManejadorCrud{
	/*
	Configuracion:
	
	$modelo: es el nombre de  la entidad de doctrine (ORM)
	$campos: 
	*/
	var $modelo="Pendientes";
	var $campos=array("id","nombre", "descripcion",'prioridad','grupo');
	
	function getQueryBusqueda(){
		return "SELECT m FROM ".$this->modelo." m WHErE m.nombre LIKE :query AND m.grupo =:grupo order BY m.prioridad ASC"; 
	}
	
	
	function moditicarQuery($query){
		//Si la peticion es listar, agrego el grupo para filtrar la busqueda
		global $_Peticion;
		if ($_Peticion->accion=='listar'){
			$grupo=$_POST['base'];			
			$query->setParameter(':grupo',$grupo);
			return $query;
		}
		
		
	}
}
?>