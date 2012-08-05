<?php
require_once '../lego_core/controlador/controlador.php';
require_once 'PHPUnit.php';
class ControladorTestcase extends PHPUnit_TestCase{
	 
	 //==================================================================================
	 // constructor of the test suite
    /*function FCTestcase($name) {
       $this->PHPUnit_TestCase($name);
    }*/
	
	// override sobre PHPUnit_TestCase 
	// called before the test functions
    function setUp() {
		define ("PATH_NUCLEO",'../lego_core/');
		define ('VISTAS_PATH',PATH_NUCLEO.'/vista/');
    }
   
	//==================================================================================
	
	function testIndex(){
		
		
		$controlador= new Controlador();
		ob_start();
		$respuesta = $controlador->inicio();		
		ob_end_clean();
		$esperado=array(
			'success'=>true,
			'msg'=>'accion inicio ejecutada con éxito'
		);
		$this->assertTrue($respuesta['success'] == $esperado['success'] );
	}	
	
	
}

?>