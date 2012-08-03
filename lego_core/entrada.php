<?php
	require_once 'peticion.php';
	require_once 'despachador.php';	
	require_once 'controlador/controlador.php';
	
	//----------------- procesa la URL
	try{
		$_Peticion = new Peticion();	
	}catch(Exception $e){
		echo $e->getMessage();	exit;
	}
		
	//----------------- despacha
	$despachador= new Despachador();
	try{
		$despachador->despachar( $_Peticion );
	}catch(Exception $e){
		echo $e->getMessage();	exit;
	}
	
		
?>
