<?php
use Doctrine\Common\ClassLoader;
use Doctrine\DBAL\DriverManager;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Pagination\Paginator;

require '../terceros/DoctrineORM-2.3.0-RC1/Doctrine/Common/ClassLoader.php';
require '../mvc/doctrine/entities/modelo.php';

class ManejadorDePendientes{
	$modelo="Pendiente";
	$campos=array("nombre", "descripcion");
	
	function obtener($params){
		$em = $this->getEM();
		$id=$params['id'];
		$modelo = $em->find( $this->modelo, $id );		
		return $modelo;		
	}
	
	function ligarParametros(){
		foreach($campo in $this->campos){
			echo $campo;
		}
	}
	
	function guardar($params){
		$mod = new Modelo;
		$this->ligarParametros();exit;
		//Todo, sacarlas del esquema y validarlas de manera automaticaa
		$mod->nombre=$params['nombre'];
		$mod->nombre=$params['descripcion'];
		
		$mod->id=$params['id'];
		
		$em=$this->getEm();
		
		if (!empty($mod->id) ){
			$mod = $em->merge($mod);
		}
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
	
	function getQueryBusqueda(){
		return "SELECT m FROM Modelo m WHErE m.nombre LIKE :query"; 
	}
	
	function listar($params){
		
		$dql = $this->getQueryBusqueda();
		//echo $dql;
		$start=$params['start'];
		$limit=$params['limit'];
		$query=$params['query'];
		$entityManager=$this->getEM();
		try{
		$query = $entityManager->createQuery($dql)								
							   ->setParameter(':query','%'.$query.'%')
							   ->setFirstResult($start)
							   ->setMaxResults($limit);		
		
		$paginator = new Paginator($query, $fetchJoinCollection = true);		
		
		$total = count($paginator);
		}catch(Exception $e){
			echo $e->getMessage();
			exit;
		}
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