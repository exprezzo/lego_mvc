<?php
require_once '../lego_core/despachador.php';
require_once 'PHPUnit.php';
class DespachadorTestcase extends PHPUnit_TestCase{
	 
	 //==================================================================================	 
	// override sobre PHPUnit_TestCase 
	// called before the test functions
    function setUp() {
		if ( !defined('PATH_CONTROLADORES') ) define ("PATH_CONTROLADORES",'../lego_core/controlador/');       
		if ( !defined('PATH_NUCLEO') )        define ("PATH_NUCLEO",'../lego_core/');
		if ( !defined('VISTAS_PATH') )   define ("VISTAS_PATH",PATH_NUCLEO.'vista/');
		
    }

    // called after the test functions     
	// override sobre PHPUnit_TestCase 
    function tearDown() { 		
        // delete your instance
        //unset($this->request);
    }
	//==================================================================================
	
	function testGetPeticion(){
		//---------------------------------------
		//	Construyo una URL de prueba		
		$_SERVER['PATH_INFO'] = '/'.$controlador="Controlador";
		//---------------------------------------
		$despachador=new Despachador();		
		$resultado = $despachador->getPeticion();		
		$esperado=array(
			'controlador'=>$controlador,
			'accion'=>'inicio'
		);
		
		$this->assertTrue($resultado->controlador == $esperado['controlador'] && $resultado->accion == $esperado['accion']);
	}
	
	function testDespacharAccion(){
		//---------------------------------------
		//	Construyo una URL de prueba		
		$_SERVER['PATH_INFO'] = '/'.$controlador="Controlador";
		//---------------------------------------
		$despachador=new Despachador();		
		ob_start();
		$resultado = $despachador->despacharPeticion();		
		ob_end_clean();
		$esperado=array(
			'success'=>true,
			'msg'=>'petición servida con éxito'
		);
		
		$this->assertTrue($resultado['success'] == $esperado['success'] && $resultado['msg'] == $esperado['msg']);
	}	
	
	function testDespacharVista(){
		//---------------------------------------
		//	Construyo una URL de prueba		
		$_SERVER['PATH_INFO'] = '/'.$controlador="Controlador".'/inicio';
		//---------------------------------------
		$despachador=new Despachador();		
		ob_start();
		$resultado = $despachador->despacharPeticion();		
		ob_end_clean();
		$esperado=array(
			'success'=>true,
			'msg'=>'petición servida con éxito'
		);
		
		$this->assertTrue($resultado['success'] == $esperado['success'] && $resultado['msg'] == $esperado['msg']);		
	}
	
	function testControladorNoEncontrado(){
		//---------------------------------------
		//	Construyo una URL de prueba		
		$_SERVER['PATH_INFO'] = '/'.$controlador="ControladorX".'/inicio';
		//---------------------------------------
		$despachador=new Despachador();		
		ob_start();
		$resultado = $despachador->despacharPeticion();		
		ob_end_clean();
		$esperado=array(
			'success'=>false,
			'msg'=>'petición servida con éxito'
		);		
		$this->assertTrue($resultado['success'] == $esperado['success'] );	
	}
	
	function testAccionNoEncontrada(){
		
		//---------------------------------------
		//	Construyo una URL de prueba		
		$_SERVER['PATH_INFO'] = '/'.$controlador="Controlador".'/noexiste';
		//---------------------------------------
		$despachador=new Despachador();		
		ob_start();
		$resultado = $despachador->despacharPeticion();		
		ob_end_clean();
		$esperado=array(
			'success'=>false,
			'msg'=>'La petición no puede servirse'
		);
				
		$this->assertTrue( $resultado['success'] == $esperado['success'] );
	}
}
?>