<?php
require_once '../lego_core/request.php';
require_once 'PHPUnit.php';
class RequestTestcase extends PHPUnit_TestCase{
	 // constructor of the test suite
    function FCTestcase($name) {
       $this->PHPUnit_TestCase($name);
    }
	
	// override sobre PHPUnit_TestCase 
	// called before the test functions
    function setUp() {
        //$this->request = new Request();
    }

    // called after the test functions     
	// override sobre PHPUnit_TestCase 
    function tearDown() { 		
        // delete your instance
        //unset($this->request);
    }
	
	function testPeticionSinAccion(){
		$controlador="elcontrolador";		
		$url="/".$controlador;
		$_SERVER['PATH_INFO'] = $url;
		$request=new Request();
		$this->assertTrue($controlador == $request->controlador && $request->accion == 'index');
	}
	
	function testPeticionConAccion(){
		$controlador="elcontrolador";
		$accion="laaccion";		
		$url="/".$controlador.'/'.$accion;
		$_SERVER['PATH_INFO'] = $url;
		$request=new Request();
		$this->assertTrue($controlador == $request->controlador && $accion == $request->accion);
	}
	
	function testPeticionExtra(){
		$controlador="elcontrolador";
		$accion="laaccion";		
		$url="/".$controlador.'/'.$accion.'/otraCos';
		$_SERVER['PATH_INFO'] = $url;
		try{
			$request=new Request();
			$error=false;
		}catch(Exception $e){
			$error=true;
		}		
		$this->assertTrue($error);
	}
	
	function testRaiz(){		
		$url="";
		$_SERVER['PATH_INFO'] = $url;
		$request=new Request();
		$this->assertTrue("home" == $request->controlador && "index" == $request->accion);
	}
}

?>