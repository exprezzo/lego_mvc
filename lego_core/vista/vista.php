<?php
class  Vista{
	function render($controlador = '', $accion = ''){	
		$rutaVista=VISTAS_PATH.$accion.'.php.html';
				
		$vista_existe = ( file_exists($rutaVista) ) ? true : false;
		
		if ($vista_existe) {
			require_once($rutaVista); 
			$success=true;
			$msg='accion render ejecutada con éxito';			
		}else{		
			$success=false;
			$msg='No existe la vista: '.$rutaVista;						
		}
				
		return array(
			'success'=>$success,
			'msg'=>$msg
		);
	}
	
	function setRutaContenido($rutaContenido){
		$this->rutaContenido=$rutaContenido;
	}
}
/**/
?>
