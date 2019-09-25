<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Content-Type");
    include '../../control/FieldControl.php';
    $fieldControl = new FieldControl();

    echo json_encode($fieldControl->findAll());
?>