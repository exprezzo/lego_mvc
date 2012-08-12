<?php
use Doctrine\Common\ClassLoader;
use Doctrine\DBAL\DriverManager;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Pagination\Paginator;

require '../terceros/DoctrineORM-2.3.0-RC1/Doctrine/Common/ClassLoader.php';
require '../mvc/doctrine/entities/modelo.php';

class DoctrineModel{
	
	function obtener($params){
		$em = $this->getEM();
		$id=$params['id'];
		$modelo = $em->find( "Modelo", $id );		
		return $modelo;		
	}
	
	function guardar($params){
		$mod = new Modelo;
		$mod->nombre=$params['nombre'];
		$mod->id=$params['id'];
		$em=$this->getEm();
		$em->persist($mod);
		$em->flush();
		return true;
	}
	
	function borrar( $params ){
		$id=$params['id'];
		$modelo=new Modelo();
		$modelo->id=$id;
		
		$em=$this->getEm();		
		$entity = $em->merge($modelo);
		$em->remove($entity);
		$em->flush();
		
		return true;
	}	
	
	function getEM(){
		$classLoader = new ClassLoader('Doctrine', '../terceros/DoctrineORM-2.3.0-RC1/','../mvc/doctrine/','../mvc/doctrine/entities','/mvc/doctrine/entities/','/mvc/doctrine/');
		$classLoader->register();
		$config = new \Doctrine\DBAL\Configuration();
		
		$connectionParams = array(
			'dbname' => 'coral_mvc',
			'user' => 'root',
			'password' => '',
			'host' => 'localhost',
			'driver' => 'pdo_mysql',
		);
		
		$path = array('../mvc/doctrine/','../mvc/doctrine/entities','/mvc/doctrine/entities/','/mvc/doctrine/');
		$config = Setup::createAnnotationMetadataConfiguration($path, true);
		$entityManager = EntityManager::create($connectionParams, $config);
		
		return $entityManager;							
	}
	
	function getConexion(){
		$classLoader = new ClassLoader('Doctrine', '../terceros/DoctrineORM-2.3.0-RC1/','../mvc/doctrine/','../mvc/doctrine/entities','/mvc/doctrine/entities/','/mvc/doctrine/');
		$classLoader->register();
		$config = new \Doctrine\DBAL\Configuration();
		
		$connectionParams = array(
			'dbname' => 'coral_mvc',
			'user' => 'root',
			'password' => '',
			'host' => 'localhost',
			'driver' => 'pdo_mysql',
		);
		
		$conn = DriverManager::getConnection($connectionParams, $config);		
		return $conn;
	}
	
	function listar($params){
		$dql = "SELECT m FROM Modelo m";
		$start=$params['start'];
		$limit=$params['limit'];
		$entityManager=$this->getEM();
		$query = $entityManager->createQuery($dql)
							   ->setFirstResult($start)
							   ->setMaxResults($limit);

		$paginator = new Paginator($query, $fetchJoinCollection = true);		
		$total = count($paginator);
		$modelos=array();
		foreach ($paginator as $post) {			
			$modelos[]=$post;
		}	
		return array(
			'success'=>true,
			'total'=>$total,
			'datos'=>$modelos
		);
	}
	
}
?>