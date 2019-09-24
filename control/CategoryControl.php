<?php
include '../../model/Category.php';

class CategoryControl{
	function insert($obj){
		$category = new Category();
		//echo $obj->titulo;
		return $category->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$category = new Category();
		return $category->update($obj,$id);
	}

	function delete($obj,$id){
		$category = new Category();
		return $category->delete($obj,$id);
	}

	function find($id = null){

	}

	function findAll(){
		$category = new Category();
		return $category->findAll();
	}
}

?>