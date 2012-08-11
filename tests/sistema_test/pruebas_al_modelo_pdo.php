<?php
require_once '../mvc/i_crud.php';
require_once '../mvc/modelos/pdo_modelo_crud.php';

require_once 'PHPUnit.php';

class Pruebas_Al_Modelo_Pdo extends PHPUnit_TestCase{
	
	function setUp() {
		//if (!defined('PATH_NUCLEO') ) define ('PATH_NUCLEO','../lego_core/');
		//if (!defined('VISTAS_PATH') ) define ('VISTAS_PATH','../mvc/vistas/');
    }
	
	function test_obtener(){
		$this->assertTrue(false);		
	}
	
	function test_guardar(){ 
		$this->assertTrue(false);	
	}
		
	
	function test_crear(){
		$this->assertTrue(false);			
	}
	
	function test_actualizar(){
		$this->assertTrue(false);			
	} 
		
	function test_borrar(){ 
		$this->assertTrue(false);			
	}
		
	function test_listar(){
		$this->assertTrue(false);			
	}	
}
?>