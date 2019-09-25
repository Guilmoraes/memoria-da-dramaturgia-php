<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Content-Type");
    include '../../control/FieldControl.php';
    
    $data = file_get_contents('php://input');
    $obj =  json_decode($data);

    if(!empty($data)){	
        $fieldControl = new FieldControl();
        $fieldControl->insert($obj);
        header('Location:listar.php');
    }
?>