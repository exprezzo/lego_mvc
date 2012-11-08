<?php
	
	$a=1;
	if ($a==0){
		echo "El sistema está en mantenimiento, disculpe los inconvenientes.";
		include 'lego_core/manejador_crud.php';		
		$manejador = new ManejadorCrud();
		$ligarParametros = $manejador->ligarParametros(array());
		echo "FIN";
	}else{
		header("Location: paginas/inicio");
	}
	
?>