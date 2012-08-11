<?php
use Doctrine\Common\ClassLoader;
use Doctrine\DBAL\DriverManager;

require '../terceros/DoctrineDBAL/Doctrine/Common/ClassLoader.php';


class DoctrineModel{
	function listar(){
	}
	
	function obtener(){
		$conn = $this->getConexion();
	}
	
	function getConexion(){
		$classLoader = new ClassLoader('Doctrine', '../terceros/DoctrineDBAL/');
		$classLoader->register();
		$config = new \Doctrine\DBAL\Configuration();
		
		$connectionParams = array(
			'dbname' => 'symfony',
			'user' => 'root',
			'password' => '',
			'host' => 'localhost',
			'driver' => 'pdo_mysql',
		);
		$conn = DriverManager::getConnection($connectionParams, $config);		
		return $conn;
	}
	
	function DoctrineModel(){
		$conn = $this->getConexion();

		$sql = "SELECT * FROM blog";
		$stmt = $conn->query($sql); // Simple, but has several drawbacks
		while ($row = $stmt->fetch()) {
			echo $row['nombre'];
		}
		//echo "Hola desde DoctrineModel";
	}
}
?>