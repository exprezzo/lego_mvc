<?php
class Peticion{
	function Peticion(){
		// Ruta relativa    http://localhost/lego_mvc/controlador/vista?foo=bar
		//  [PATH_INFO] => /controlador/vista
		
		// Ruta Absoluta    http://lego/controlador/vista?foo=bar 
		//  [PATH_INFO] => /controlador/vista		
		
		//-------------------------------------------------------------------------------
		$arrAppPath = explode('/',$_SERVER['SCRIPT_NAME']) ;		
		//no nos interesa el primero ni los ultimos dos
		$app_path='/';		
		
		$arrCount=sizeof($arrAppPath);
		for( $i=1;  $i<$arrCount-2; $i++ ){		
			$app_path.=''.$arrAppPath[$i].'/';			
		}
		
		if (!defined('APP_PATH') ) define('APP_PATH',$app_path);				
		//-------------------------------------------------------------------------------
		if ( !isset($_SERVER['PATH_INFO']) ) $_SERVER['PATH_INFO'] = "/paginas/inicio";
		$url=$_SERVER['PATH_INFO'];		
		$xp = explode ( '/', $url);		
		$size=sizeof($xp);
		
		switch($size){
			case 1:
				$controlador='paginas';
				$accion		='inicio';
			break;
			case 2:	// solo escribi� el controlador
				$controlador=$xp[1];
				$accion		='inicio';
			break;			
			case 3:	// escribi� el controlador y la vista
				$controlador=$xp[1];
				$accion		=$xp[2];
			break;
			
			default:
				throw new Exception($url. " No reconocida" );
				// escribi� algo incomprensible, en este caso deberia lanzar una pagina de error
		}
		
		$this->controlador = $controlador;
		$this->accion 	   = $accion;		
	}
}
?>