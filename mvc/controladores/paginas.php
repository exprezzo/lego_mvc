<?php
class Paginas extends Controlador{ //extends Controlador
	//TODO: pasar a Controlador
	
	function inicio2(){
		echo 'Bienvenidos a planktom';
	}
	
	function inicio(){
		return $this->cambiarContenido('contenido');
	}
	
	function cambiarContenido($plantillaContenido){
		$vista= $this->getVista();
		$vista->plantillaContenido=$plantillaContenido;
		return parent::inicio();
	}
	
	function caracteristicas(){
		$this->cambiarContenido('caracteristicas');		
	}
	
	function ejemplos(){
		$this->cambiarContenido('caracteristicas');		
	}
	
	
	
	function despedida2(){
		echo "<h1>Accion  despedida</h1>";
	}
}
?>