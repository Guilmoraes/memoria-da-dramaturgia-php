<?php
include '../../model/Company.php';

class CompanyControl{
	function insert($obj){
		$company = new Company();
		//echo $obj->titulo;
		return $company->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$company = new Company();
		return $company->update($obj,$id);
	}

	function delete($obj,$id){
		$company = new Company();
		return $company->delete($obj,$id);
	}

	function find($id = null){

	}

	function findAll(){
		$company = new Company();
		return $company->findAll();
	}
}

?>