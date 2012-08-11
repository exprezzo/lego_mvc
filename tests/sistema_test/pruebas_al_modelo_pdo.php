<?php
require_once '../mvc/i_crud.php';
require_once '../mvc/modelos/pdo_modelo_crud.php';

require_once 'PHPUnit.php';

class Pruebas_Al_Modelo_Pdo extends PHPUnit_TestCase{
	
	function setUp() {
		$this->numPruebas=9000;
		//if (!defined('PATH_NUCLEO') ) define ('PATH_NUCLEO','../lego_core/');
		//if (!defined('VISTAS_PATH') ) define ('VISTAS_PATH','../mvc/vistas/');		
    }
	
	private function contar($pdo){
		$sql = 'SELECT Count(*) as total FROM modelo_test';		
		$con = $pdo->getConexion();
		$sth = $con->prepare($sql);				
		$sth->execute();
		$modelos = $sth->fetchAll(PDO::FETCH_ASSOC);
		$total=$modelos[0]['total'];
		return $total;
	}
	
	private function limpiar($pdo){
		$sql = 'DELETE FROM modelo_test WHERE 1';		
		$con = $pdo->getConexion();
		$sth = $con->prepare($sql);				
		$sth->execute();		
		return true;
	}
	
	function test_guardar(){ 
		$mod_pdo= new Modelo_PDO();		
		
		$this->limpiar($mod_pdo);
		$total_inicial=$this->contar($mod_pdo);
		
		$numPruebas = $this->numPruebas;		
		
		$total_anterior=$this->contar($mod_pdo);
		for($i=0; $i<$this->numPruebas; $i++ ){
			
			$params=array(
				'id'=>0,
				'nombre'=>'Test de guardado No '.($total_anterior + 1)
			);
			$total_anterior++;
			$exito = $mod_pdo->guardar( $params );		
		}
		
		$nuevo_total= $this->contar($mod_pdo);
		 
		$comparacion= ($nuevo_total == $this->numPruebas );
		
		$this->assertTrue( $exito && $comparacion );	
	}
		
	function test_obtener(){
		$this->assertTrue(false);return false;
		
		$mod_pdo= new Modelo_PDO();		
		$modelo = $mod_pdo->obtener( array('id'=>1) );		
		$this->assertTrue( $modelo['id']==1 );		
	}
	
	function test_listar(){
		$this->assertTrue(false);			
	}	
	
	/*
	function test_crear(){
		$this->assertTrue(false);			
	}
	
	function test_actualizar(){
		$this->assertTrue(false);			
	} */
		
	function test_borrar(){ 
		$this->assertTrue(false);			
	}
		
	
}
?>