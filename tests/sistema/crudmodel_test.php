<?php

require_once 'crudmodel_testcase.php';
require_once 'PHPUnit.php';

$suite  = new PHPUnit_TestSuite("CrudModel_Testcase");
$phpunit= new PHPUnit();
$result = $phpunit->run($suite);
echo $result -> toString();

?>