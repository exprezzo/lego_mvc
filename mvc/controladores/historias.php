<?php

require_once '../mvc/modelos/EstadosHistoriaCrud.php';
require_once '../mvc/modelos/HistoriaDeUsuarioCrud.php';
require_once '../mvc/modelos/SprintCrud.php';

class Historias extends Controlador{ 
	
	
	// function listar(){
		// $modObj= $this->getModelObject();
		
		// $params=$this->getFindParams();		
		
		// $res = $modObj->listar( $params );				
		
		// echo json_encode($res);
		// return $res;		
	// }
	
	function mover(){
	
		if ( !isset($_POST['idDestino']) || empty($_POST['idDestino']) ){
			echo json_encode( array('success'=>false,'msg'=>'debe seleccionar el destino') );
			return array('success'=>true);
		}
		
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
	
	function mover_historia(){
			
		$idHistoria = $_POST['idHistoria'];
		$direccion = $_POST['direccion'];
		
		$success=false;
		$msg="Todavia no se implementa";
		$res=array('success'=>$success,'msg'=>$msg,'tipo'=>'exception');
		$modelo=$this->getModelObject();
		
		try{
			if ($direccion == 'up'){
				$res=$modelo->moverArriba($idHistoria);
			}else if ($direccion == 'down'){
				$res=$modelo->moverAbajo($idHistoria);
			}
		}catch(Exception $e){
			$success=false;
			$msg=$e->getMessage();
			$res=array('success'=>$success,'msg'=>$msg,'tipo'=>'exception');
		}
		
		echo json_encode($res);
		return array('success'=>true);
	}
	
	
	function getDestinos(){
		//del proyecto actual, devuelvo una lista con el backlog y todos los sprints, omitiendo el origen de la historia.
		
		if ($_POST['idUbicacion']=='backlog'){
			//Mostrar todos los sprints
			$es_backlog=true;
		}else if ($_POST['idUbicacion']=='sprints'){
			//mostrar el backlog y todos los sprints
			$es_backlog=false;
			$sprints=false;	
		}else if ( is_numeric($_POST['idUbicacion'])){
			//mostrar el backlog
			$es_backlog=false;
			$sprint_id=$_POST['idUbicacion'];
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
			echo $e->getMessage(); 
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
	
	function listarUbicaciones(){
		ob_start();
		$resp	=array();
		$resp['success']=true;
		
		$resp['datos'] = array(
			array('id'=>'backlog','nombre'=>'Backlog','seleccionable'=>true),
			array('id'=>'sprints','nombre'=>'Sprints','seleccionable'=>false)
		);
		
		$this->modObj = new SprintCrud();	
		$respuesta = $this->listar();
		
		$datos=array_merge($resp['datos'], $respuesta['datos']);
				
		$resp['datos']=$datos;
		ob_end_clean();
		echo json_encode($resp);
		return $resp;
	}
	
	function paginarHistorias(){
		
		if ( empty( $_SESSION['MODS']['SCRUM']['PROYECTO_ID'] ) ){
			$resp=array(
				'success'=>false,
				'msg'=>'Scrum: Seleccione un proyecto'
			);		
			echo json_encode($resp);exit;			
		}
		
		$idProyecto=$_SESSION['MODS']['SCRUM']['PROYECTO_ID'];
		
		$idUbicacion = $_POST['idUbicacion'];
		
		$sql='select 			
			h.id,
			"historia" as tipo,
			h.descripcion as text,
			fk_estado
		 from scrum_historias_de_usuario h 		
		where h.fk_proyecto=:fk_proyecto and';
		
		$esBacklog=true;
		$todosSprints=false;
		
		if ($idUbicacion=='backlog'){
			$sql.=' es_backlog=1';
			$todosSprints=false;
		}else if ($idUbicacion=='sprints'){
			$esBacklog=false;
			$todosSprints=true;
			$sql.=' es_backlog=0';
		}else{
			$esBacklog=false;
			$todosSprints=false;
			$sql.=' es_backlog=0 and fk_sprint=:fk_sprint';
		}
		
		$mod=new Modelo_PDO();
		$con=$mod->getConexion();
		$sth = $con->prepare($sql);	
		
		$sth->bindValue(':fk_proyecto',$idProyecto);		
		
		if (!$esBacklog && !$todosSprints){
			$sth->bindValue(':fk_sprint', $idUbicacion);
		}
		
		$sth->execute();
		$modelos = $sth->fetchAll(PDO::FETCH_ASSOC);		
		
		for($i=0; $i<sizeof($modelos); $i++){
			
			$sqlTarea="select 			
			id ,
			'tarea' as tipo,
			true as leaf,
			descripcion as text,
			fk_estado
			from scrum_tareas t
			where t.fk_historia=".$modelos[$i]['id'];
			$sth = $con->prepare($sqlTarea);
			$sth->execute();
			//echo 'ID: '.$modelos[$i]['id'];
			//echo $sqlTarea;
			$tareas = $sth->fetchAll(PDO::FETCH_ASSOC);		
			$modelos[$i]['children']=$tareas;
		}
		
		$resp=array(
			'success'=>true,
			'datos'=>$modelos
		);
		echo json_encode($modelos);
		
		return $resp;
	}
}
?>