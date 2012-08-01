<?php
class Request{
	function Request(){
		// Ruta relativa    http://localhost/lego_mvc/controlador/vista?foo=bar
		//  [PATH_INFO] => /controlador/vista
		
		// Ruta Absoluta    http://lego/controlador/vista?foo=bar 
		//  [PATH_INFO] => /controlador/vista
		
		$url=$_SERVER['PATH_INFO'];		
		$xp = explode ( '/', $url);		
		$size=sizeof($xp);
		
		switch($size){
			case 1:
				$controlador='default';
				$accion		='default';
			break;
			case 2:	// solo escribi� el controlador
				$controlador=$xp[1];
				$accion		='default';
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