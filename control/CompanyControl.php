<?php
include '../../model/Company.php';

class CompanyControl{
	function insert($obj){
		$company = new Company();
		return $company->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$company = new Company();
		return $company->update($obj,$id);
	}

	function findAll(){
		$company = new Company();
		return $company->findAll();
	}
}

?>