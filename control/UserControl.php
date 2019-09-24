<?php
include '../../model/User.php';

class UserControl{
	function insert($obj){
		$user = new User();
		//echo $obj->titulo;
		return $user->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$user = new User();
		return $user->update($obj,$id);
	}

	function delete($obj,$id){
		$user = new User();
		return $user->delete($obj,$id);
	}

	function find($id = null){

	}

	function findAll(){
		$user = new User();
		return $user->findAll();
	}
}

?>