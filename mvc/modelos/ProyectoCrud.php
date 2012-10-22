<?php
use Doctrine\Common\ClassLoader;
use Doctrine\DBAL\DriverManager;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Pagination\Paginator;

require_once 'entidades_de_doctrine/Proyecto.php';
require_once 'pdo_modelo_crud.php';

require '../lego_core/manejador_crud.php';
class ProyectoCrud extends ManejadorCrud{
	var $modelo="Proyecto";
	var $campos=array('id', 'nombre', 'descripcion','predeterminado' );		
	
	function establecerDefault($idProyecto){
		$success=false;
		$msg="";
		$mod=new Modelo_PDO();
		$con = $mod->getConexion();
		
		$sql="UPDATE scrum_proyectos set predeterminado=0";		
		$sth = $con->prepare($sql);				
		$sth->execute();
		
		$sql="UPDATE scrum_proyectos set predeterminado=1 WHERE id=:idProyecto";
		
		$sth = $con->prepare($sql);
		$sth->bindValue(':idProyecto',$idProyecto);
		$res=$sth->execute();
		return array(
			'success'=>$res
		);
	}
	
	
}
?>