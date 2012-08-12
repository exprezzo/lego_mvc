<?php
	
require_once 'sistema_test/pruebas_al_modelo_pdo.php';
require_once 'plantilla_resultados.php';
require_once 'PHPUnit.php';

$suite  = new PHPUnit_TestSuite("Pruebas_Al_Modelo_Pdo");
$phpunit= new PHPUnit();
$result = $phpunit->run($suite);
imprimirResultado($result);
?>