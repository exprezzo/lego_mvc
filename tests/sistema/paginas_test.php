<?php

require_once 'paginas_testcase.php';
require_once 'PHPUnit.php';

$suite  = new PHPUnit_TestSuite("Paginas_Testcase");
$phpunit= new PHPUnit();
$result = $phpunit->run($suite);
echo $result -> toString();

?>