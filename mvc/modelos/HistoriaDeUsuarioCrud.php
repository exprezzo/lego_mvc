<?php
use Doctrine\Common\ClassLoader;
use Doctrine\DBAL\DriverManager;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Pagination\Paginator;

require_once 'entidades_de_doctrine/Historia_de_usuario.php';
require '../lego_core/manejador_crud.php';
class HistoriaDeUsuarioCrud extends ManejadorCrud{
	var $modelo="Historia_de_usuario";
	var $campos=array("id","descripcion", "fk_sprint", "fk_proyecto",'es_backlog','detalles');	
	
	function getQueryBusqueda(){
	
		if ($_POST['tipo']=='sprint'){
			return "SELECT m FROM ".$this->modelo." m WHErE m.descripcion LIKE :query AND  m.fk_proyecto=:fk_proyecto AND m.es_backlog=0 AND m.fk_sprint=:fk_sprint"; 
		}else if ($_POST['tipo']=='backlog'){
			return "SELECT m FROM ".$this->modelo." m WHErE m.descripcion LIKE :query AND  m.fk_proyecto=:fk_proyecto AND m.es_backlog=1"; 
		}
		
	}
	function beforeNew($mod) {
		$mod->fk_proyecto=$_SESSION['MODS']['SCRUM']['PROYECTO_ID'];		
		return $mod;
	}
	
	public function moditicarQuery($query){
		if ($_POST['tipo']=='sprint'){			
			$query=$query->setParameter(':fk_proyecto',$_SESSION['MODS']['SCRUM']['PROYECTO_ID']);		
			$query=$query->setParameter(':fk_sprint',$_POST['sprintId']);		
		}else if ($_POST['tipo']=='backlog'){			
			$query=$query->setParameter(':fk_proyecto',$_SESSION['MODS']['SCRUM']['PROYECTO_ID']);		
		}
		
		return $query;
	}
}
?>