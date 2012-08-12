<?php

require_once 'pruebas_al_modelo_doctrine.php';
require_once 'PHPUnit.php';

$suite  = new PHPUnit_TestSuite("Pruebas_Al_Modelo_Doctrine");
$phpunit= new PHPUnit();
$result = $phpunit->run($suite);

echo '<pre>'; print_r($result); echo '</pre>';
//echo $result -> toString();

?>