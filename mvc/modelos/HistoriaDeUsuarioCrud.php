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
	var $campos=array("id","descripcion", "fk_historia", "fk_proyecto",'prioridad','dificultad','tiempo_estimado','tiempo_real','estado');	
	
	/*
		Comportamiento Arbol
		listarArbol
		obtenerTodosLosHijos
		getHijos
	*/

	function listarMenus($padre, $proyecto){				
		$nodosPadre=$this->getHijos($padre,$proyecto);
		
		$nodos=$this->obtenerTodosLosHijos($nodosPadre, $proyecto); 
		return $nodos;
		
	}
	
	function obtenerTodosLosHijos($nodos, $proyecto){
		for($i=0; $i < sizeof($nodos); $i++ ){
			$nodos[$i]['text'] = $nodos[$i]['descripcion'];
			$nodo=$nodos[$i];
			$hijos=$this->getHijos($nodo['id'], $proyecto);
			
			
			if ( empty($hijos) ){
				$nodos[$i]['leaf']=1;				
			}else{
				$hijos=$this->obtenerTodosLosHijos($hijos, $proyecto);
				$nodos[$i]['children'] = $hijos;
			}			
		}
		return $nodos;		
	}
	
	function getHijos($padreId, $proyecto){
		$con = $this->getConexion();	
		$sql = 'SELECT id, descripcion, fk_proyecto, fk_historia FROM scrum_historias_de_usuario where fk_historia=:padre AND fk_proyecto=:fk_proyecto ';		
		$sth = $con->prepare($sql);
		$sth->bindValue(':padre',$padreId,PDO::PARAM_INT);
		$sth->bindValue(':fk_proyecto',$proyecto,PDO::PARAM_INT);
		
		$exito = $sth->execute();

		$menus = $sth->fetchAll(PDO::FETCH_ASSOC);				
		if ( !$exito ){
			throw new Exception("Error listando: ".$sql); //TODO: agregar numero de error, crear una exception MiEscepcion
		}
							
		return $menus;
	}
}
?>