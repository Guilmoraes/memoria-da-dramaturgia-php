<?php
include '../../conexao/Conexao.php';

class Company extends Conexao{
	public $id;
    public $name;

    public function insert($obj){
    	$sql = "INSERT INTO company(name) VALUES (:name)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('name',  $obj->name);
    	return $consulta->execute();

	}

	public function update($obj,$id = null){
		$sql = "UPDATE company SET name = :name WHERE id = :id ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('name', $obj->name);
		$consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function find($id = null){
		$sql = "SELECT * FROM company WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id', $id);
		$consulta->execute();
		return $consulta->fetchAll();
	}

	public function findAll(){
		$sql = "SELECT * FROM company";
		$consulta = Conexao::prepare($sql);
        $consulta->execute();
		return $consulta->fetchAll(PDO::FETCH_CLASS, 'Company');
	}

}

?>