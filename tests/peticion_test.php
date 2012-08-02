<?php

require_once 'peticion_testcase.php';
require_once 'PHPUnit.php';

$suite  = new PHPUnit_TestSuite("PeticionTestcase");
$phpunit= new PHPUnit();
$result = $phpunit->run($suite);
echo $result -> toString();

?>