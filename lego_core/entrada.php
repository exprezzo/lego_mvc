<?php
	require_once 'request.php';
	require_once 'despachador.php';	
	require_once 'controlador/controlador.php';
	
	//----------------- procesa la URL
	try{
		$_Peticion = new Request();	
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
