<?php
include '../../model/Category.php';

class CategoryControl{
	function insert($obj){
		$category = new Category();
		return $category->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$category = new Category();
		return $category->update($obj,$id);
	}

	function findAll(){
		$category = new Category();
		return $category->findAll();
	}
}

?>