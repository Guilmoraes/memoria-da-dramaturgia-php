<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
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