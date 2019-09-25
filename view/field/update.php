<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Content-Type");
    include '../../control/FieldControl.php';
    
    $data = file_get_contents('php://input');
    $obj =  json_decode($data);

    $id = $obj->id;
    if(!empty($data)){	
        $fieldControl = new FieldControl();
        $fieldControl->update($obj , $id);
        header('Location:listar.php');
    }
?>