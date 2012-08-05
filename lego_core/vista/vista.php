<?php
class  Vista{
	function mostrar($accion){
		$rutaVista=VISTAS_PATH.$accion.'.php.html';
				
		$vista_existe = ( file_exists($rutaVista) ) ? true : false;
		
		if ($vista_existe) {
			$this->antesdeMostrar($accion);
			require_once($rutaVista); 
			$this->despuesdeMostrar($accion);
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
	
	function antesdeMostrar($accion){
	
	}
	
	function despuesdeMostrar($accion){
		
	}
	function render($controlador = '', $accion = ''){	
		return $this->mostrar($accion);
	}
	
	function setRutaContenido($rutaContenido){
		$this->rutaContenido=$rutaContenido;
	}
}
/**/
?>
