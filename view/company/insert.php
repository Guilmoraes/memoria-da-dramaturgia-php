<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Content-Type");
    include '../../control/CompanyControl.php';
    
    $data = file_get_contents('php://input');
    $obj =  json_decode($data);

    if(!empty($data)){	
        $companyControl = new CompanyControl();
        $companyControl->insert($obj);
        header('Location:listar.php');
    }
?>