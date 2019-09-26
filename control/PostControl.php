<?php
include '../../model/Post.php';

class PostControl{
	function insert($obj){
		$category = new Post();
		return $category->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$category = new Post();
		return $category->update($obj,$id);
	}

	function findAll(){
		$category = new Post();
		return $category->findAll();
	}
}

?>