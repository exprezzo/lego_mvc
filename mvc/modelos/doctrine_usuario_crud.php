<?php
use Doctrine\Common\ClassLoader;
use Doctrine\DBAL\DriverManager;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Pagination\Paginator;

/*require '../terceros/DoctrineORM-2.3.0-RC1/Doctrine/Common/ClassLoader.php';
require '../mvc/doctrine/entities/modelo.php';*/
require '../lego_core/manejador_crud.php';

class DoctrineUsuario extends ManejadorCrud{
	var $modelo="Usuario";
	var $campos=array("id","nombre", "email",'pass');
	/*
	var $campos_de_mapeo=array("id","nombre", "email",'pass');
	*/
	/*function getQueryBusqueda(){
		return "SELECT m FROM ".$this->modelo." m WHErE m.nombre LIKE :query order BY m.prioridad ASC"; 
	}*/
	
}	
?>