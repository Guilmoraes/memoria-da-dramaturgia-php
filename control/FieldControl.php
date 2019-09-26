<?php
include '../../model/Field.php';

class FieldControl{
	function insert($obj){
		$field = new Field();
		return $field->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$field = new Field();
		return $field->update($obj,$id);
	}

	function findAll(){
		$field = new Field();
		return $field->findAll();
	}
}

?>