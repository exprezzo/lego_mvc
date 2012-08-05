<?php
class Paginas extends Controlador{ //extends Controlador
	//TODO: pasar a Controlador
	
	function inicio2(){
		echo 'Bienvenidos a planktom';
	}
	
	
	
	function cambiarContenido($plantillaContenido){
		$vista= $this->getVista();
		$vista->plantillaContenido=$plantillaContenido;
		return parent::inicio();
	}
	
	
	/*
	function caracteristicas(){
		return $this->cambiarContenido('contenido/caracteristicas');		
	}
	
	function ejemplos(){
		return $this->cambiarContenido('contenido/ejemplos');		
	}
	
	function home(){
		return $this->cambiarContenido('contenido/home');		
	}
	
	function docs(){
		return $this->cambiarContenido('contenido/docs');		
	}
	
	function noticias(){
		return $this->cambiarContenido('contenido/home');		
	}
	
	function foro(){
		return $this->cambiarContenido('contenido/home');		
	}
	
	function inicio(){
		return $this->cambiarContenido('contenido/home');		
	}
	*/
	
	
	
	function despedida2(){
		echo "<h1>Accion  despedida</h1>";
	}
}
?>