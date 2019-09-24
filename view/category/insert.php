<?php
    include '../../control/CategoryControl.php';
    
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    $data = file_get_contents('php://input');
    $obj =  json_decode($data);
    //echo $obj->titulo;

    if(!empty($data)){	
        $categoryControl = new CategoryControl();
        $categoryControl->insert($obj);
        header('Location:listar.php');
    }
?>