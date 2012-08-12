<?php
require_once '../mvc/i_crud.php';
require_once '../mvc/modelos/pdo_modelo_crud.php';

require_once 'PHPUnit.php';

class Pruebas_Al_Modelo_Pdo extends PHPUnit_TestCase{
	
	function setUp() {
		$this->numPruebas=100;
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
		
	function test_algo(){
		$this->assertTrue(false);
	}	
		
	private function limpiar($pdo){
		$sql = 'truncate modelo_test';		
		$con = $pdo->getConexion();
		$sth = $con->prepare($sql);				
		$sth->execute();		
		return true;
	}
	
	function test_guardar(){ 
		$mod_pdo= new Modelo_PDO();		
		$con=$mod_pdo->getConexion();
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
			$this->id=$con->lastInsertId();
		}
		
		$nuevo_total= $this->contar($mod_pdo);
		 
		$comparacion= ($nuevo_total == $this->numPruebas );
		
		$this->assertTrue( $exito && $comparacion );	
	}
	/*
	function test_guardarSinParams(){ 
		$this->assertTrue( false );
	}
	*/
				
	function test_listar(){
		$mod_pdo= new Modelo_PDO();		
		$numPruebas = $this->numPruebas;				
		$diferencia=5;
		
		$total=$this->contar($mod_pdo);		
		$params=array(
			'limit'=>$limit=$numPruebas-$diferencia,
			'start'=>0
		);		
		$res = $mod_pdo->listar( $params );		
		
		$success=$res['success'];
		$total=$res['total'];
		$datos=$res['datos'];		
		$numDatos=sizeof($datos);
		
		
		$this->assertTrue( $numDatos== $limit && $numPruebas == $total && $success && ($numPruebas-$diferencia) == $numDatos );		
	}
	
	function test_obtener(){
		$mod_pdo= new Modelo_PDO();		
		
		$id=$this->numPruebas -1;	
		$mod_pdo= new Modelo_PDO();		
		$modelo = $mod_pdo->obtener( array('id'=>$id) );		
		$this->assertTrue( $modelo['id']==$id );					
	}
	/*
	function test_obtenerSinParams(){ 	
		$this->assertTrue(false);
	}
	
	function test_obtenerSinLimit(){ 	
		$this->assertTrue(false);
	}
	
	function test_obtenerSinStart(){ 	
		$this->assertTrue(false);
	}
	
	function test_obtenerLimitNoNumerico(){ 	
		$this->assertTrue(false);
	}
	
	function test_obtenerStartNoNumerico(){ 	
		$this->assertTrue(false);
	}
	*/
	/*function test_actualizar(){
		$this->assertTrue(false);			
	} */
		
	function test_borrar(){ 
		$mod_pdo= new Modelo_PDO();		
		
		$totalAntes = $this->contar($mod_pdo);
		
		$id=$this->numPruebas - 1;	
		$mod_pdo = new Modelo_PDO();								
		
		$exito = $mod_pdo->borrar( array('id'=>$id) );
		$totalDespues=$this->contar($mod_pdo);
		
		
		$this->assertTrue( $exito &&  $totalAntes == ($totalDespues +1) );		
	}		
	/*
	function test_borrarSinId(){ 	
		$this->assertTrue(false);
	}
	
	function test_borrarSinParams(){ 	
		$this->assertTrue(false);
	}*/
}
?>