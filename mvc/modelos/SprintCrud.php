<?php
use Doctrine\Common\ClassLoader;
use Doctrine\DBAL\DriverManager;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Pagination\Paginator;

require_once 'entidades_de_doctrine/Sprint.php';
require '../lego_core/manejador_crud.php';
class SprintCrud extends ManejadorCrud{
	var $modelo="Sprint";
	var $campos=array('id', 'nombre' );	
	
}
?>