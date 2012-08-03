<?php

require_once 'testcase_despachador.php';
require_once 'PHPUnit.php';

$suite  = new PHPUnit_TestSuite("DespachadorTestcase");
$phpunit= new PHPUnit();
$result = $phpunit->run($suite);
echo $result -> toString();

?>