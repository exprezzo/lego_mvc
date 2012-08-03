<?php
require_once '../../lego_core/peticion.php';
require_once '../../lego_core/despachador.php';
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
		define ("PATH_CONTROLADORES",'../../lego_core/controlador/');
        //$this->request = new Request();
    }

    // called after the test functions     
	// override sobre PHPUnit_TestCase 
    function tearDown() { 		
        // delete your instance
        //unset($this->request);
    }
	//==================================================================================
	
	function testControlador(){
		$controlador="Controlador";		
		$url="/".$controlador;
		$_SERVER['PATH_INFO'] = $url;
		$request=new Peticion();
		$despachador=new Despachador();
		global $_Peticion;
		$_Peticion = $request;
		$despachador->despachar($request);
		
		$this->assertTrue($controlador == $request->controlador && $request->accion == 'index');
	}
	
	/*function testPeticionConAccion(){
		$controlador="elcontrolador";
		$accion="laaccion";		
		$url="/".$controlador.'/'.$accion;
		$_SERVER['PATH_INFO'] = $url;
		$request=new Peticion();
		$this->assertTrue($controlador == $request->controlador && $accion == $request->accion);
	}
	
	function testPeticionExtra(){
		$controlador="elcontrolador";
		$accion="laaccion";		
		$url="/".$controlador.'/'.$accion.'/otraCos';
		$_SERVER['PATH_INFO'] = $url;
		try{
			$request=new Peticion();
			$error=false;
		}catch(Exception $e){
			$error=true;
		}		
		$this->assertTrue($error);
	}
	
	function testRaiz(){
		$url="";
		$_SERVER['PATH_INFO'] = $url;
		$request=new Peticion();
		$this->assertTrue("home" == $request->controlador && "index" == $request->accion);
	}*/
}

?>