<?
require_once 'sistema_test/pruebas_al_modelo_doctrine.php';
require_once 'plantilla_resultados.php';
require_once 'PHPUnit.php';

$suite  = new PHPUnit_TestSuite("Pruebas_Al_Modelo_Doctrine");
$phpunit= new PHPUnit();
$result = $phpunit->run($suite);
echo '<h1>Pruebas al modelo Doctrine</h1>';
imprimirResultado($result);
?>