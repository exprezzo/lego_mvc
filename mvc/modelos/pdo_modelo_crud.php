<?php
use Doctrine\Common\ClassLoader;
use Doctrine\DBAL\DriverManager;

require '../terceros/DoctrineDBAL/Doctrine/Common/ClassLoader.php';


class Modelo_PDO implements ICrud{								
	
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
/*	===============================================================================
		ICrud
	=============================================================================== */	
	function obtener($params){
		
		$id=$params['id'];
		
		$sql = 'SELECT * FROM modelo_test WHERE id=:id';		
		$con = $this->getConexion();
		$sth = $con->prepare($sql);		
		$sth->bindValue(':id',$id);		
		$sth->execute();
		$modelos = $sth->fetchAll(PDO::FETCH_ASSOC);
		
		if ( empty($modelos) ){
			throw new Exception("El modelo no existe"); //TODO: agregar numero de error, crear una exception MiEscepcion
		}
		
		if ( sizeof($modelos) > 1 ){
			throw new Exception("El identificador está duplicado"); //TODO: agregar numero de error, crear una exception MiEscepcion
		}
		
		return $modelos[0];		
	
		
	}
	
	function guardar( $params ){
		$dbh=$this->getConexion();
		
		$id=$params['id'];
		$nombre=$params['nombre'];
		
		if ( empty($id) ){
			//           CREAR
			$sql='INSERT INTO modelo_test SET nombre= :nombre , fecha_de_creacion= now()';
			$sth = $dbh->prepare($sql);				
			//$sth->bindValue(":dispositivoId",$dispositivoId, PDO::PARAM_INT);								
			$sth->bindValue(":nombre",$nombre,PDO::PARAM_STR);					
		}else{
			//	         ACTUALIZAR
			$sql='UPDATE modelo_test SET nombre= :nombre WHERE id= :id, fecha_de_actualizacion=now()';
			$sth = $dbh->prepare($sql);							
			$sth->bindValue(":id",$id,PDO::PARAM_INT);			
			$sth->bindValue(":nombre",$nombre,PDO::PARAM_STR);
		}
			
		$exito = $sth->execute();
		
		if (!$exito){			
			//Logger->logear   		PENDIENTE: LOGEAR
		}
		
		//$this->obtener($id);
		return $exito;
	}
	
	function crear(){}
	
	function actualizar(){}
		
	function borrar(){}
	
	function listar(){}
/*  ===============================================================================
		fin de ICrud
	=============================================================================== */
		
}
?>