<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Content-Type");
    include '../../control/CategoryControl.php';
    $categoryControl = new CategoryControl();

    echo json_encode($categoryControl->findAll());
?>