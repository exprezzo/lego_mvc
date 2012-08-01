<?php

require_once 'testcase.php';
require_once 'PHPUnit.php';

$suite  = new PHPUnit_TestSuite("StringTest");
$phpunit=new PHPUnit();
$result = $phpunit->run($suite);

echo $result -> toString();
?>