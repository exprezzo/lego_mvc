<?php
require_once '../lego_core/controlador/controlador.php';
require_once '../mvc/controladores/ControladorDeCatalogo.php';
require_once 'PHPUnit.php';

class ControladorDeCatalogoTestcase extends PHPUnit_TestCase{
	 
	 //==================================================================================
	 // constructor of the test suite
    /*function FCTestcase($name) {
       $this->PHPUnit_TestCase($name);
    }*/
	
	// override sobre PHPUnit_TestCase 
	// called before the test functions
    function setUp() {
		if (!defined("PATH_NUCLEO") ) define ("PATH_NUCLEO",'../lego_core/');
		if (!defined('VISTAS_PATH') ) define ('VISTAS_PATH',PATH_NUCLEO.'/vistas/');
    }
   
	//==================================================================================
	function testListar(){		
		$this->assertTrue(false);
	}	
	function testObtener(){		
		$this->assertTrue(false);
	}	
	function testGuardar(){		
		$this->assertTrue(false);
	}	
	
	function testDespuesDeGuardar(){		
		$this->assertTrue(false);
	}	
	
	function testBorrar(){		
		$this->assertTrue(false);
	}	
	
	function testGetModeloDelCatalogo(){		
		$this->assertTrue(false);
	}	
	
	function testProcesarPeticion(){		
		$this->assertTrue(false);
	}
	
	function testGetPostParams(){		
		$this->assertTrue(false);
	}		
}

?>