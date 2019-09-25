<?php
include '../../model/User.php';

class UserControl{
	function insert($obj){
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
		$user = new User();
		return $user->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
		$user = new User();
		return $user->update($obj,$id);
	}

	function findAll(){
		header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
		header('Access-Control-Allow-Credentials: true');
		header('Content-Type: application/json');
		$user = new User();
		return $user->findAll();
	}
}

?>