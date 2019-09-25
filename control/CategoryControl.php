<?php
include '../../model/Category.php';

class CategoryControl{
	function insert($obj){
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: Content-Type");
		$category = new Category();
		return $category->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: Content-Type");
		$category = new Category();
		return $category->update($obj,$id);
	}

	function findAll(){
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: Content-Type");
		$category = new Category();
		return $category->findAll();
	}
}

?>