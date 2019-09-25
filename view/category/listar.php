<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    include '../../control/CategoryControl.php';
    $categoryControl = new CategoryControl();

    echo json_encode($categoryControl->findAll());
?>