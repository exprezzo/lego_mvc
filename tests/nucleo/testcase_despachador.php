<?php
require_once '../lego_core/despachador.php';
require_once 'PHPUnit.php';
class DespachadorTestcase extends PHPUnit_TestCase{
	 
	 //==================================================================================
	 // constructor of the test suite
    function FCTestcase($name) {
       $this->PHPUnit_TestCase($name);
    }
	
	// override sobre PHPUnit_TestCase 
	// called before the test functions
    function setUp() {
		define ("PATH_CONTROLADORES",'../lego_core/controlador/');       
    }

    // called after the test functions     
	// override sobre PHPUnit_TestCase 
    function tearDown() { 		
        // delete your instance
        //unset($this->request);
    }
	//==================================================================================
	
	function testDespachar(){
		//---------------------------------------
		//	Construyo una URL de prueba		
		$_SERVER['PATH_INFO'] = '/'.$controlador="Controlador";
		//---------------------------------------
		$despachador=new Despachador();		
		$resultado = $despachador->despacharPeticion();		
		$esperado=array(
			'success'=>true,
			'msg'=>'petici�n servida con �xito'
		);
		
		$this->assertTrue($resultado['success'] == $esperado['success'] && $resultado['msg'] == $esperado['msg']);
	}	
}

?>