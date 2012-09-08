<?php
use Doctrine\Common\ClassLoader;
use Doctrine\DBAL\DriverManager;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Pagination\Paginator;
require '../mvc/doctrine/entities/pendientes.php';
require '../terceros/DoctrineORM-2.3.0-RC1/Doctrine/Common/ClassLoader.php';
require '../mvc/doctrine/entities/modelo.php';

class ManejadorCrud {
//  var $modelo="Modelo";
//	var $campos=array("nombre", "descripcion");
	
	function getQueryBusqueda(){
		return "SELECT m FROM ".$this->modelo." m WHErE m.nombre LIKE :query"; 
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
	
	function obtener($params){
		$em = $this->getEM();
		$id=$params['id'];
		$modelo = $em->find( $this->modelo, $id );		
		return $modelo;		
	}
	
	function getModelObject(){
		return new $this->modelo();
	}
	
	function ligarParametros($mod, $parametros){
		foreach($this->campos as $campo ){
			if (isset( $parametros[$campo] )){				
				$mod->$campo = $parametros[$campo];				
			}			
		}
		return $mod;
	}
	
	function guardar($params){
		$mod = $this->getModelObject();
		$mod = $this->ligarParametros($mod, $params);
		//Todo, sacarlas del esquema y validarlas de manera automaticaa
		
		$em=$this->getEm();
		
		if (!empty($mod->id) ){
			$mod = $em->merge($mod);
			$nuevo=true;
		}else{
			$nuevo=true;
		}
		$em->persist($mod);
		$em->flush();
		
		
		return $mod;
	}
	
	function borrar( $params ){
		$id=$params['id'];
		$modelo=$this->getModelObject();
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
			'dbname' => 'experimentos',
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
			'dbname' => 'experimentos',
			'user' => 'root',
			'password' => '',
			'host' => 'localhost',
			'driver' => 'pdo_mysql',
		);
		
		$conn = DriverManager::getConnection($connectionParams, $config);		
		return $conn;
	}
	
}
?>