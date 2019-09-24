<?php
    include '../../control/CompanyControl.php';
    
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    $data = file_get_contents('php://input');
    $obj =  json_decode($data);

    $id = $obj->id;
    if(!empty($data)){	
        $companyControl = new CompanyControl();
        $companyControl->update($obj , $id);
        header('Location:listar.php');
    }
?>