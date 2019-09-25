<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Content-Type");
    include '../../control/UserControl.php';

    $data = file_get_contents('php://input');
    $obj =  json_decode($data);
    //echo $obj->titulo;

    if(!empty($data)){	
        $userControl = new UserControl();
        $userControl->insert($obj);
        header('Location:listar.php');
    }
?>