<?php

require_once 'ControladorDeCatalogo_testcase.php';
require_once 'PHPUnit.php';

$suite  = new PHPUnit_TestSuite("ControladorDeCatalogoTestcase");
$phpunit= new PHPUnit();
$result = $phpunit->run($suite);
echo $result -> toString();

?>