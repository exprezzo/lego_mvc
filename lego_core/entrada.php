<?php
	require_once 'request.php';
	try{
		$request = new Request();	
	}catch(Exception $e){
		echo $e->getMessage();
		exit;
	}
		
	//-----------------
	//    dispatch
	$controlador=$request->controlador;
	$accion= $request->accion;
	echo 'Controlador: '.$controlador.'<br>';
	echo 'Accion: '.$accion;
	
?>
