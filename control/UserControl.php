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
		$user = new User();
		return $user->findAll();
	}
}

?>