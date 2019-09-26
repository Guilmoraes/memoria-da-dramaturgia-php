<?php
include '../../model/User.php';

class UserControl{
	function insert($obj){
		$user = new User();
		return $user->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$user = new User();
		return $user->update($obj,$id);
	}

	function findAll(){
		$user = new User();
		return $user->findAll();
	}
}

?>