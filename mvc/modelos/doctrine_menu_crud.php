<?php
use Doctrine\Common\ClassLoader;
use Doctrine\DBAL\DriverManager;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Pagination\Paginator;

/*require '../terceros/DoctrineORM-2.3.0-RC1/Doctrine/Common/ClassLoader.php';
require '../mvc/doctrine/entities/modelo.php';*/
require '../lego_core/manejador_crud.php';

class DoctrineMenu extends ManejadorCrud{
	var $modelo="Menu";
	var $campos=array("id","nombre", "xtype",'orden','padre','icon');
	/*function getQueryBusqueda(){
		return "SELECT m FROM ".$this->modelo." m WHErE m.nombre LIKE :query order BY m.prioridad ASC"; 
	}*/
	
	function listarMenus($padre){				
		$nodosPadre=$this->getHijos($padre);
		
		$nodos=$this->obtenerTodosLosHijos($nodosPadre); 
		return $nodos;
		
	}
	
	function obtenerTodosLosHijos($nodos){
		for($i=0; $i < sizeof($nodos); $i++ ){
			$nodo=$nodos[$i];
			$hijos=$this->getHijos($nodo['id']);
			
			
			if ( empty($hijos) ){
				$nodos[$i]['leaf']=1;				
			}else{
				$hijos=$this->obtenerTodosLosHijos($hijos);
				$nodos[$i]['children'] = $hijos;
			}			
		}
		return $nodos;		
	}
	
	function getHijos($padreId){
		$con = $this->getConexion();	
		$sql = 'SELECT id,nombre as text,xtype,icon as iconCls FROM sistema_menus where padre =:padre ';		
		$sth = $con->prepare($sql);
		$sth->bindValue(':padre',$padreId,PDO::PARAM_INT);
		
		$exito = $sth->execute();

		$menus = $sth->fetchAll(PDO::FETCH_ASSOC);				
		if ( !$exito ){
			throw new Exception("Error listando: ".$sql); //TODO: agregar numero de error, crear una exception MiEscepcion
		}
							
		return $menus;
	}
}
?>