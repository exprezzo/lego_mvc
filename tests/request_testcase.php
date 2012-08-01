<?php
require_once '../lego_core/request.php';
require_once 'PHPUnit.php';
class RequestTestcase extends PHPUnit_TestCase{
	 // constructor of the test suite
    function FCTestcase($name) {
       $this->PHPUnit_TestCase($name);
    }
	
	// called before the test functions will be executed
    // this function is defined in PHPUnit_TestCase and overwritten
    // here
    function setUp() {
        // create a new instance of
        //$this->request = new Request();
    }

    // called after the test functions are executed
    // this function is defined in PHPUnit_TestCase and overwritten
    // here
    function tearDown() {
        // delete your instance
        //unset($this->request);
    }
	
	function testPeticionSinAccion(){
		$controlador="elcontrolador";		
		$url="/".$controlador;
		$_SERVER['PATH_INFO'] = $url;
		$request=new Request();
		$this->assertTrue($controlador == $request->controlador && $request->accion == 'default');
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
		$this->assertTrue("default" == $request->controlador && "default" == $request->accion);
	}
}

?>