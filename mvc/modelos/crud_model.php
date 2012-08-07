<?php
use Doctrine\Common\ClassLoader;
use Doctrine\DBAL\DriverManager;

require '../terceros/DoctrineDBAL/Doctrine/Common/ClassLoader.php';
class CrudModel{


	function obtener(){
	}
	
	//crear y actualizar
	function guardar(){	
	}
	
	
	function borrar(){
	}
	
	function listar(){
	}
	
	function doctrine(){
		$classLoader = new ClassLoader('Doctrine', '../terceros/DoctrineDBAL/');
		$classLoader->register();
		$config = new \Doctrine\DBAL\Configuration();
		
		$connectionParams = array(
			'dbname' => 'planktom',
			'user' => 'root',
			'password' => '',
			'host' => 'localhost',
			'driver' => 'pdo_mysql',
		);
		$conn = DriverManager::getConnection($connectionParams, $config);		

		$sql = "SELECT * FROM test";
		$stmt = $conn->query($sql); // Simple, but has several drawbacks
		while ($row = $stmt->fetch()) {
			echo $row['nombre'];
		}
		//echo "Hola desde DoctrineModel";
	}
}
?>