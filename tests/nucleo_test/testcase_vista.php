<?php
require_once '../lego_core/vista/vista.php';
require_once 'PHPUnit.php';
class VistaTestcase extends PHPUnit_TestCase{

	function setUp() {
		if (!defined('PATH_NUCLEO') ) define ('PATH_NUCLEO','../lego_core/');
		if (!defined('VISTAS_PATH') ) define ('VISTAS_PATH',PATH_NUCLEO.'/vista/');
    }
	
	function testRender(){
		ob_start();
		$vista= new Vista();
		
		$respuesta = $vista->render('','inicio');
		ob_end_clean();
		$esperado=array(
			'success'=>true,
			'msg'=>'accion render ejecutada con éxito'
		);
		$this->assertTrue($respuesta['success'] == $esperado['success'] );
	}
	
	function testValidarParametros(){
		$this->assertTrue( false );
	}
}

?>