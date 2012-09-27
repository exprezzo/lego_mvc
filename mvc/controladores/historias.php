<?php

require_once '../mvc/modelos/HistoriaDeUsuarioCrud.php';

class Historias extends Controlador{ 
	
	function mover(){
		
		$idDestino = $_POST['idDestino'];
		
		if ($idDestino=='backlog'){
			$es_backlog=1;
			$fk_sprint=0;
		}else{
			$fk_sprint=$idDestino;
			$es_backlog=0;
		}
		
		$idHistoria = $_POST['idHistoria'];
		$fk_proyecto= $_SESSION['MODS']['SCRUM']['PROYECTO_ID'];
		
		try{
			$modelo=$this->getModelObject();
			$entityManager=$modelo->getEM();
			$con = $modelo->getConexion();				
			
			$sql=	"UPDATE scrum_historias_de_usuario set fk_sprint=:fk_sprint, es_backlog=:es_backlog where fk_proyecto =:fk_proyecto and id=:idHistoria";
			$sth = $con->prepare($sql);
			
			$sth->bindValue(':fk_proyecto',$fk_proyecto,PDO::PARAM_INT);			
			$sth->bindValue(':fk_sprint',$fk_sprint,PDO::PARAM_INT);			
			$sth->bindValue(':es_backlog',$es_backlog,PDO::PARAM_INT);			
			$sth->bindValue(':idHistoria',$idHistoria,PDO::PARAM_INT);			
			
			$exito = $sth->execute();

			if ( !$exito ){
				throw new Exception("Error listando: ".$sql); //TODO: agregar numero de error, crear una exception MiEscepcion
			}		
			
			$res=array(
				'success'=>true,
				'msg'=>'Historia movida'
			);
			
			echo json_encode($res);
			return $res;			
		}catch(Exception $e){
			echo $e; exit;
		}			
	}

	function getDestinos(){
		//del proyecto actual, devuelvo una lista con el backlog y todos los sprints, omitiendo el origen de la historia.
		
		if ($_POST['tipo']=='backlog'){
			$es_backlog=true;
		}else if ($_POST['tipo']=='sprint'){
			$es_backlog=false;
			$sprint_id=$_POST['sprintId'];
		}else{
			throw new Exception("Error");
		}
		
		$fk_proyecto = $_SESSION['MODS']['SCRUM']['PROYECTO_ID'];
		
		try{
			$modelo=$this->getModelObject();
			$entityManager=$modelo->getEM();
			$con = $modelo->getConexion();				
			if ($es_backlog){
				$sql=	"Select * from scrum_sprint where fk_proyecto =:fk_proyecto ";
				$sth = $con->prepare($sql);
				$sth->bindValue(':fk_proyecto',$fk_proyecto,PDO::PARAM_INT);						
			}else{
				$sql=	"Select * from scrum_sprint where fk_proyecto =:fk_proyecto AND id!=:sprint_id";
				$sth = $con->prepare($sql);
				$sth->bindValue(':fk_proyecto',$fk_proyecto,PDO::PARAM_INT);
				$sth->bindValue(':sprint_id',$sprint_id,PDO::PARAM_INT);								
				//Agregar backlog al final
			}
			
			$exito = $sth->execute();

			$destinos = $sth->fetchAll(PDO::FETCH_ASSOC);				
			if ( !$exito ){
				throw new Exception("Error listando: ".$sql); //TODO: agregar numero de error, crear una exception MiEscepcion
			}		
			
			if (!$es_backlog){
				$destinos[]=array('id'=>'backlog','nombre'=>'backlog');
			}
			
			$res=array(
				'success'=>true,
				'datos'=>$destinos
			);
			echo json_encode($res);
			return $res;
			
		
		}catch(Exception $e){
			echo $e; exit;
		}
		
		//$PROYECTO_ID = $_SESSION['MODS']['SCRUM']['PROYECTO_ID']
	}
	function getModelObject(){		
		if ( empty( $_SESSION['MODS']['SCRUM']['PROYECTO_ID'] ) ){
			$resp=array(
				'success'=>false,
				'msg'=>'Scrum: Seleccione un proyecto'
			);
			
			echo json_encode($resp);exit;			
		}
		
		if ( !isset($this->modObj) ){	
			$this->modObj = new HistoriaDeUsuarioCrud();	
		}
		
		return $this->modObj;
	}
	
	/*
	function getQueryBusqueda(){
		return "SELECT m,m.descripcion as text FROM ".$this->modelo." m WHErE m.nombre LIKE :query  m.fk_proyecto=:fk_proyecto"; 
	}
		
	public function moditicarQuery($query){
		$query=$query->setParameter(':fk_proyecto',$_SESSION['MODS']['SCRUM']['PROYECTO_ID']);		
		return $query;
	}*/
	
}
?>