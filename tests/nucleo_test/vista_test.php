<?php

require_once 'testcase_vista.php';
require_once 'PHPUnit.php';

$suite  = new PHPUnit_TestSuite("VistaTestcase");
$phpunit= new PHPUnit();
$result = $phpunit->run($suite);
echo $result -> toString();

?>