<?php
include '../../conexao/Conexao.php';

class Category extends Conexao{
	public $id;
	public $name;
	public $color;

    public function insert($obj){
    	$sql = "INSERT INTO category(name,color) VALUES (:name,:color)";
    	$consulta = Conexao::prepare($sql);
		$consulta->bindValue('name',  $obj->name);
		$consulta->bindValue('color',  $obj->color);
    	return $consulta->execute();
	}

	public function update($obj,$id = null){
		$sql = "UPDATE category SET name = :name, color = :color WHERE id = :id ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('name', $obj->name);
		$consulta->bindValue('color', $obj->color);
		$consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function find($id = null){
		$sql = "SELECT * FROM category WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id', $id);
		$consulta->execute();
		return $consulta->fetchAll();
	}

	public function findAll(){
		$sql = "SELECT * FROM category";
		$consulta = Conexao::prepare($sql);
        $consulta->execute();
		return $consulta->fetchAll(PDO::FETCH_CLASS, 'Category');
	}

}

?>