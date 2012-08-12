<?php
require_once '../mvc/i_crud.php';
require_once '../mvc/modelos/doctrine_modelo_crud.php';

require_once 'PHPUnit.php';

class Pruebas_Al_Modelo_Doctrine extends PHPUnit_TestCase{
	
	function setUp() {
		$this->numPruebas=100;		
    }
	
	private function contar($modObj){
		$conn=$modObj->getConexion();
		$sql = "SELECT COUNT(*) as total FROM modelo_test";		
		$stmt = $conn->query($sql);
		$total=0;
		while ($row = $stmt->fetch()) {
			$total = $row['total'];
		}
		return $total;
	}
	
	private function limpiar($conn){
		$sql = "truncate modelo_test";
		$stmt = $conn->query($sql);
		return true;
	}
	
	function test_guardar(){ 
		$modObj= new DoctrineModel();		
		$conn=$modObj->getConexion();
		$this->limpiar($conn);				
		
		$numPruebas = $this->numPruebas;		
		
		$total_anterior=$this->contar($modObj);
		for($i=0; $i<$this->numPruebas; $i++ ){
			
			$params=array(
				'id'=>0,
				'nombre'=>'Doctrine save test No '.($total_anterior + 1)
			);
			$total_anterior++;
			$exito = $modObj->guardar( $params );					
		}
		
		$nuevo_total= $this->contar($modObj);
		 
		$comparacion= ($nuevo_total == $this->numPruebas );
		
		$this->assertTrue( $exito && $comparacion );	
	}
				
	function test_listar(){		
		$modObj= new DoctrineModel();						
		$numPruebas = $this->numPruebas;						
		$diferencia=5;
		
		$total=$this->contar( $modObj );		
		$params=array(
			'limit'=>$limit=$numPruebas-$diferencia,
			'start'=>0
		);		
		$res = $modObj->listar( $params );		
		
		$success=$res['success'];
		$total=$res['total'];
		$datos=$res['datos'];		
		$numDatos=sizeof($datos);
		
		
		$this->assertTrue( $numDatos== $limit && $numPruebas == $total && $success && ($numPruebas-$diferencia) == $numDatos );	
	}
	
	function test_obtener(){	
		$mod = new DoctrineModel();
		
		$id =9;
		$params=array('id'=>$id);		
		$obj=$mod->obtener($params);				
		$this->assertTrue( $obj->id==$id );
	}
	
		
	function test_borrar(){ 
		$modObj= new DoctrineModel();								
		$totalAntes = $this->contar($modObj);		
		$id=$this->numPruebas - 1;			
		
		$exito = $modObj->borrar( array('id'=>$id) );
		$totalDespues=$this->contar($modObj);
		
		
		$this->assertTrue( $exito &&  $totalAntes == ($totalDespues +1) );		
	}				
	
}
?>