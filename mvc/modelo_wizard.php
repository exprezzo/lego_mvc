<?php
use Doctrine\Common\ClassLoader;
use Doctrine\DBAL\DriverManager;
require '../terceros/DoctrineDBAL/Doctrine/Common/ClassLoader.php';

$wizard=new modeloWizard();
$wizard->init();
class modeloWizard{
	function init(){
		echo "Hola mundo";
	}
	
	function getConexion(){		
		if ( !isset($this->db) ){
			try {
				$db = new PDO('mysql:host=localhost;dbname=coral_mvc;charset=UTF-8', 'root', '',array(
					PDO::ATTR_PERSISTENT => true
				));				
				$this->db=$db;
			} catch (PDOException $e) {
				print "Error!: " . $e->getMessage() . "<br/>";
				die();
			}
		}
		return $this->db;
	}
	
	function obtenerCampos($params){
		/*
		
		
		*/
		$sql = 'SELECT COLUMN_NAME, DATA_TYPE, IS_NULLABLE, COLUMN_DEFAULT
  FROM INFORMATION_SCHEMA.COLUMNS
  WHERE table_name = 'modelo_test'';		
		$con = $this->getConexion();
		$sth = $con->prepare($sql);				
		$sth->execute();
		$campos = $sth->fetchAll(PDO::FETCH_ASSOC);
		
		if ( empty($campos) ){
			throw new Exception("Error al ejecutar la consulta : ".$sql); //TODO: agregar numero de error, crear una exception MiEscepcion
		}
				
		return $campos;		
	
		
	}
}
?>