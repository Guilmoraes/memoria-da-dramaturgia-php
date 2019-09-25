<?php
include '../../model/Field.php';

class FieldControl{
	function insert($obj){
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: Content-Type");
		$field = new Field();
		return $field->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: Content-Type");
		$field = new Field();
		return $field->update($obj,$id);
	}

	function findAll(){
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: Content-Type");
		$field = new Field();
		return $field->findAll();
	}
}

?>