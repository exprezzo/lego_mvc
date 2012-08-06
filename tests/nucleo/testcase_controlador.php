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
		if (!defined("PATH_NUCLEO") ) define ("PATH_NUCLEO",'../lego_core/');
		if (!defined('VISTAS_PATH') ) define ('VISTAS_PATH',PATH_NUCLEO.'/vista/');
    }
   
	//==================================================================================
	function testGetVista(){
		$controlador = new Controlador();
		$vista=$controlador->getVista();		
		$this->assertTrue($vista instanceof Vista);
	}	
	
	function testProcesarPeticion(){
		require_once(PATH_NUCLEO.'peticion.php');
		$peticion=new Peticion();
		$peticion->controlador='Controlador';
		$peticion->accion='inicio';
		$controlador = new Controlador();
		ob_start();
		$resp=$controlador->procesarPeticion($peticion);
		ob_end_clean();
		$this->assertTrue($resp['success']);
	}
	
	/*function testAntesdeProcesarPeticion(){
		$controlador = new Controlador();
		require_once(PATH_NUCLEO.'peticion.php');
		$peticion=new Peticion();
		$controlador->antesdeProcesarPeticion($peticion);
		$this->assertTrue(true);
	}
	function testDespuesdeProcesarPeticion(){
		$controlador = new Controlador();
		require_once(PATH_NUCLEO.'peticion.php');
		$peticion=new Peticion();
		$controlador->despuesdeProcesarPeticion($peticion);
		$this->assertTrue(true);
	}*/		
	
}

?>