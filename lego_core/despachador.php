<?php
class Despachador{
	function despachar($_Peticion){
		$nombreControlador=$_Peticion->controlador;
		$accion= $_Peticion->accion;
		//echo 'Controlador: '.$controlador.'<br>';  echo 'Accion: '.$accion;		
		//echo "<pre>"; print_r($_SERVER); echo "</pre>";
		//Carga din�mica del controlador
		include '../mvc/controladores/'.$nombreControlador.'.php';
		$controller=new $nombreControlador;
		$controller->$accion();	
	}
}
?>