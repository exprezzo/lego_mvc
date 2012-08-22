<?php
require_once 'login_helper.php';
class LoginModel implements ILogin{
	var $loginHelper;
	
	function LoginModel(){
		$this->loginHelper=new LoginHelper();
	}
	
	function identificar($username, $pass){
		
	}
	
	function identificado(){
		return false;
	}
	
	function seleccionarCorporativo($corpId){
		$corporativo=array();
		return false;
	}     
	
	function seleccionarEmpresa($empId){
		$empresa=array();
		return false;
	}
	
	function seleccionarSucursal($sucId){
		$sucursal=array();
		return false;
	}
	
	function seleccionarAlmacen($almacenId){
		$almacen=array();
		return false;
	}
	
	function entrar (){
	}
	
	function salir (){
	}
	
}
?>