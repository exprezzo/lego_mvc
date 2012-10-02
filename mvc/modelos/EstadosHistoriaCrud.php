<?php
use Doctrine\Common\ClassLoader;
use Doctrine\DBAL\DriverManager;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Pagination\Paginator;

require_once 'entidades_de_doctrine/EstadosDeHistoria.php';
require_once '../lego_core/manejador_crud.php';
class EstadosHistoriaCrud extends ManejadorCrud{
	var $modelo="EstadosDeHistoria";
	var $campos=array("id","nombre", "detalles", "default",'icon');		
}
?>