<?php

require_once 'testcase_controlador.php';
require_once 'PHPUnit.php';

$suite  = new PHPUnit_TestSuite("ControladorTestcase");
$phpunit= new PHPUnit();
$result = $phpunit->run($suite);
echo $result -> toString();

?>