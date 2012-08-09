<?php
require_once '../mvc/modelos/modelodecatalogo.php';
require_once 'PHPUnit.php';

class CrudModel_TestCase extends PHPUnit_TestCase{
	
	function setUp() {
		//if (!defined('PATH_NUCLEO') ) define ('PATH_NUCLEO','../lego_core/');
		//if (!defined('VISTAS_PATH') ) define ('VISTAS_PATH','../mvc/vistas/');
    }
	
	function testListar(){
		$model=new ModeloDeCatalogo();
		$this->assertTrue(false);			
	}
	
}
?>