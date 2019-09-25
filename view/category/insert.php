<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    include '../../control/CategoryControl.php';
    
    $data = file_get_contents('php://input');
    $obj =  json_decode($data);
    //echo $obj->titulo;

    if(!empty($data)){	
        $categoryControl = new CategoryControl();
        $categoryControl->insert($obj);
        header('Location:listar.php');
    }
?>