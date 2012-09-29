<?php
use Doctrine\Common\ClassLoader;
use Doctrine\DBAL\DriverManager;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Pagination\Paginator;

require_once 'entidades_de_doctrine/Historia_de_usuario.php';
require_once '../lego_core/manejador_crud.php';
class HistoriaDeUsuarioCrud extends ManejadorCrud{
	var $modelo="Historia_de_usuario";
	var $campos=array("id","descripcion",'fk_estado', "fk_sprint", "fk_proyecto",'es_backlog','detalles','prioridad');	
	
	function getQueryBusqueda(){
	
		if ($_POST['tipo']=='sprint'){
			return "SELECT m FROM ".$this->modelo." m WHErE m.descripcion LIKE :query AND  m.fk_proyecto=:fk_proyecto AND m.es_backlog=0 AND m.fk_sprint=:fk_sprint order by m.prioridad DESC"; 
		}else if ($_POST['tipo']=='backlog'){
			return "SELECT m FROM ".$this->modelo." m WHErE m.descripcion LIKE :query AND  m.fk_proyecto=:fk_proyecto AND m.es_backlog=1 order by m.prioridad DESC"; 
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
	
	function moverArriba($idHistoria){
		$success=false;
		
		$aMover=$this->obtener(array('id'=>$idHistoria));
		
		
		$query= "SELECT m FROM ".$this->modelo." m WHErE m.prioridad >:prioridad AND m.fk_sprint=:fk_sprint order by m.prioridad ASC"; 
		$em=$this->getEM();
		$query = $em->createQuery($query)
			->setFirstResult(0)
			->setMaxResults(1);	
			
		$query->setParameter(':prioridad',$aMover->prioridad);
		$query->setParameter(':fk_sprint',$aMover->fk_sprint);
		
		$destino = $query->getResult();

		if ( empty($destino) ){
			return array("success"=>false,'msg'=>'no existen elementos de mayor prioridad');		
		}
		$destino=$destino[0];
		
		$prioridadOrigen=$aMover->prioridad;		
		$prioridadDestino=$destino->prioridad;
		
		
		
		
		
		
		$destino = $em->merge($destino);		
		$aMover = $em->merge($aMover);
		
		$aMover->prioridad=$prioridadDestino;
		$destino->prioridad = $prioridadOrigen;
		
		$success=$em->flush();
		
		//PENDIENTE: ¿Y SI NO SE MOVIO NADA?
		$success=true;
		
		return array("success"=>$success,'msg'=>'En proceso moverArriba');		
	}
	
	function moverAbajo($idHistoria){
		$success=false;
		
		$aMover=$this->obtener(array('id'=>$idHistoria));
		
		
		$query= "SELECT m FROM ".$this->modelo." m WHErE m.prioridad <:prioridad AND m.fk_sprint=:fk_sprint order by m.prioridad DESC"; 
		$em=$this->getEM();
		$query = $em->createQuery($query)
			->setFirstResult(0)
			->setMaxResults(1);	
			
		$query->setParameter(':prioridad',$aMover->prioridad);
		$query->setParameter(':fk_sprint',$aMover->fk_sprint);
		
		$destino = $query->getResult();

		if ( empty($destino) ){
			return array("success"=>false,'msg'=>'no existen elementos de mayor prioridad');		
		}
		$destino=$destino[0];
		
		$prioridadOrigen=$aMover->prioridad;		
		$prioridadDestino=$destino->prioridad;
		
		$destino = $em->merge($destino);		
		$aMover = $em->merge($aMover);
		
		$aMover->prioridad=$prioridadDestino;
		$destino->prioridad = $prioridadOrigen;
		
		$success=$em->flush();
		
		//PENDIENTE: ¿Y SI NO SE MOVIO NADA?
		$success=true;
		
		return array("success"=>$success,'msg'=>'En proceso moverArriba','movido'=>$aMover->id);		
	}
	
	function mover(){
		
	}
	

	function obtener($params){
		$em = $this->getEM();
		

		$id=$params['id'];				
		$modelo = $em->find( $this->modelo, $id );		
		
		print_r($modelo->Estado);
		$nombre=$modelo->Estado->nombre;
		return $modelo;		
	}
	
}
?>