<?php
use Doctrine\Common\ClassLoader;
use Doctrine\DBAL\DriverManager;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Pagination\Paginator;

/*require '../terceros/DoctrineORM-2.3.0-RC1/Doctrine/Common/ClassLoader.php';
require '../mvc/doctrine/entities/modelo.php';*/
require '../lego_core/manejador_crud.php';

class DoctrineModel extends ManejadorCrud{
	
	var $modelo="Pendientes";
	var $campos=array("nombre", "descripcion");

	
	
}
?>