<?php
	//  Planktom 		
	require_once '../config.php';		
	require_once 'despachador.php';		
	//----------------- despacha
	$despachador= new Despachador();
	try{
		$despachador->despacharPeticion();
	}catch(Exception $e){
		echo "El sistema ha sufrido un fallo, consulte con el administrador del sistema";
		//-------
		//TODO: Logear el error
	}
	
		
?>
