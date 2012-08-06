<?php
	//  Planktom 		
	require_once '../config.php';		
	require_once 'despachador.php';		
	//----------------- despacha
	$despachador = new Despachador();
	
	try{
		$_Peticion=$despachador->getPeticion();
		$result=$despachador->despacharPeticion();
		
		if ( $result['success']==false ) {
			echo $result['msg'];
		}
	}catch(Exception $e){
		echo "El sistema ha sufrido un fallo, consulte con el administrador del sistema";
		//TODO: Logear el error   -------
	}
	
		
?>
