<?php
require_once '../lego_core/vista/vista.php';
require_once 'PHPUnit.php';
class VistaTestcase extends PHPUnit_TestCase{
	 
	
	function testRender(){
		$vista= new Vista();
		$respuesta = $vista->render();
		$esperado=array(
			'success'=>true,
			'msg'=>'accion render ejecutada con éxito'
		);
		$this->assertTrue($respuesta['success'] == $esperado['success'] && $respuesta['msg'] == $esperado['msg']);
	}	
}

?>