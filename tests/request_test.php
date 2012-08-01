<?php

require_once 'request_testcase.php';
require_once 'PHPUnit.php';

$suite  = new PHPUnit_TestSuite("RequestTestcase");
$phpunit= new PHPUnit();
$result = $phpunit->run($suite);
echo $result -> toString();

?>