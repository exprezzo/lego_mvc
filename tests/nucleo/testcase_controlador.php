<?php
require_once '../lego_core/controlador/controlador.php';
require_once 'PHPUnit.php';
class ControladorTestcase extends PHPUnit_TestCase{
	 
	 //==================================================================================
	 // constructor of the test suite
    function FCTestcase($name) {
       $this->PHPUnit_TestCase($name);
    }
	
	// override sobre PHPUnit_TestCase 
	// called before the test functions
    function setUp() {
		
    }

    // called after the test functions     
	// override sobre PHPUnit_TestCase 
    function tearDown() { 		
        // delete your instance
        //unset($this->request);
    }
	//==================================================================================
	
	function testIndex(){
		$controlador= new Controlador();
		$respuesta = $controlador->index();
		$esperado=array(
			'success'=>true,
			'msg'=>'accion index ejecutada con éxito'
		);
		$this->assertTrue($respuesta['success'] == $esperado['success'] && $respuesta['msg'] == $esperado['msg']);
	}	
}

?>