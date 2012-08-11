<?php
require_once '../lego_core/controlador/controlador.php';
require_once '../lego_core/peticion.php';
require_once '../mvc/controladores/paginas.php';
require_once 'PHPUnit.php';
class Paginas_TestCase extends PHPUnit_TestCase{
	
	function setUp() {
		if (!defined('PATH_NUCLEO') ) define ('PATH_NUCLEO','../lego_core/');
		if (!defined('VISTAS_PATH') ) define ('VISTAS_PATH','../mvc/vistas/');
    }
	
	function testMostrarInicio(){
		$pagina = new Paginas();
		
		$peticion=new Peticion();
		$peticion->controlador='Paginas';
		$peticion->accion='inicio';
		ob_start();
		$resp= $pagina->procesarPeticion($peticion);
		ob_end_clean();
		$this->assertTrue($resp['success']);			
	}
	
}
?>