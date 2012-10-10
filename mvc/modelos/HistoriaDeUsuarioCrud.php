<?php
use Doctrine\Common\ClassLoader;
use Doctrine\DBAL\DriverManager;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Pagination\Paginator;

require_once 'entidades_de_doctrine/Historia_de_usuario.php';
require_once 'pdo_modelo_crud.php';


require_once '../lego_core/manejador_crud.php';
class HistoriaDeUsuarioCrud extends ManejadorCrud{
	var $modelo="Historia_de_usuario";
	var $campos=array("id","descripcion",'fk_estado', "fk_sprint", "fk_proyecto",'es_backlog','detalles','prioridad');	
	
	function getQueryBusqueda(){
	
		if ($_POST['idUbicacion']=='sprints'){
			$query= "SELECT m FROM ".$this->modelo." m WHErE m.descripcion LIKE :query AND  m.fk_proyecto=:fk_proyecto AND m.es_backlog=0"; 
			
		}else if ($_POST['idUbicacion']=='backlog'){
			$query="SELECT m FROM ".$this->modelo." m WHErE m.descripcion LIKE :query AND  m.fk_proyecto=:fk_proyecto AND m.es_backlog=1 ";
			
		}else if ( is_numeric($_POST['idUbicacion']) ){
			$query="SELECT m FROM ".$this->modelo." m WHErE m.descripcion LIKE :query AND  m.fk_proyecto=:fk_proyecto AND m.es_backlog=0 AND m.fk_sprint=:fk_sprint  ";
}
		$estado=0;
		if ( isset($_POST['estado']) ){
			if (is_numeric( $_POST['estado']) && $_POST['estado']  !=0 ){
				$estado=$_POST['estado'];				
			}
		}
		if ($estado!=0){
		
			$query = $query." and m.fk_estado=:fk_estado ";
		}
		$order="order by m.prioridad DESC";
			
		return $query.$order;
	}
	
	function beforeNew($mod) {
		$mod->fk_proyecto=$_SESSION['MODS']['SCRUM']['PROYECTO_ID'];				
		return $mod;
	}
	
	public function moditicarQuery($query){
	
		if ($_POST['idUbicacion']=='sprints'){			
			$query=$query->setParameter(':fk_proyecto',$_SESSION['MODS']['SCRUM']['PROYECTO_ID']);		
			//$query=$query->setParameter(':esbacklog',0);		
		}else if ($_POST['idUbicacion']=='backlog'){			
	
			$query=$query->setParameter(':fk_proyecto',$_SESSION['MODS']['SCRUM']['PROYECTO_ID']);		
		}else if ( is_numeric($_POST['idUbicacion'])){			
				//echo $_POST['idUbicacion'];
			$query=$query->setParameter(':fk_proyecto',$_SESSION['MODS']['SCRUM']['PROYECTO_ID']);		
			$query=$query->setParameter(':fk_sprint',$_POST['idUbicacion']);		
			
		}
		//$query=$query->setParameter(':query',$_POST['query']);		
		//------------------------------------------------------------------
		$estado=0;
		if ( isset($_POST['estado']) ){
			if (is_numeric( $_POST['estado']) && $_POST['estado']  !=0 ){
				$estado=$_POST['estado'];				
			}
		}
		if ($estado!=0){			
			$query=$query->setParameter(':fk_estado',$estado);					
		}
		//print_r($query);
		return $query;
	}
	
	function moverArriba($idHistoria){
		$success=false;
		
		$aMover=$this->obtener(array('id'=>$idHistoria));
		
		
		$query= "SELECT m FROM ".$this->modelo." m WHErE m.prioridad >:prioridad AND m.fk_sprint=:fk_sprint AND  m.fk_proyecto=:fk_proyecto order by m.prioridad ASC"; 
		$em=$this->getEM();
		$query = $em->createQuery($query)
			->setFirstResult(0)
			->setMaxResults(1);	
			
		$query->setParameter(':prioridad',$aMover->prioridad);
		$query->setParameter(':fk_sprint',$aMover->fk_sprint);
		$query->setParameter(':fk_proyecto',$aMover->fk_proyecto);
		
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
		$msg="";
		$aMover=$this->obtener(array('id'=>$idHistoria));
		
		
		$query= "SELECT m FROM ".$this->modelo." m WHErE m.prioridad <:prioridad AND m.fk_sprint=:fk_sprint AND m.fk_proyecto=:fk_proyecto order by m.prioridad DESC"; 
		$em=$this->getEM();
		$query = $em->createQuery($query);
		//Establecer valores
		$query->setFirstResult(0);
		$query->setMaxResults(1);				
		$query->setParameter(':prioridad',$aMover->prioridad);
		$query->setParameter(':fk_sprint',$aMover->fk_sprint);
		$query->setParameter(':fk_proyecto',$aMover->fk_proyecto);
		
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
		
		return array("success"=>$success,'msg'=>$msg,'movido'=>$aMover->id);		
	}
	
	function mover(){
		
	}
	

	function obtener($params){
		$em = $this->getEM();		

		
		$id=$params['id'];				
		$modelo = $em->find( $this->modelo, $id );
		
		if ( !empty($modelo) )
		if ( !is_null($modelo->fk_estado) ){
			$mod= new Modelo_PDO();
			
			$mod->tabla='scrum_estados_de_historia';
			$estado	=$mod->obtener(array('id'=>$modelo->fk_estado) );			
			
			$modelo->nombreEstado=$estado['nombre'];
		}
		
		return $modelo;
	}
	
	function guardar($params){
	
		$mod = $this->getModelObject();
		
	
		$mod = $this->ligarParametros($mod, $params);
		//Todo, sacarlas del esquema y validarlas de manera automaticaa
		
		$em=$this->getEm();
		
		if (!empty($mod->id) ){
			$mod = $em->merge($mod);			
		}else{
			$mod=$this->beforeNew($mod);
		}
				
		$exito=$em->persist($mod);		  
		$exito= $em->flush();
		
		$exito=true;
		if (!$exito){
			return $exito;
		}
		
		if ( !is_null($mod->fk_estado) ){
			$modPdo= new Modelo_PDO();
			
			$modPdo->tabla='scrum_estados_de_historia';
			$estado	=$modPdo->obtener(array('id'=>$mod->fk_estado) );			
			
			$mod->nombreEstado=$estado['nombre'];
		}
		
		return $mod;		
		
	}
	
}
?>