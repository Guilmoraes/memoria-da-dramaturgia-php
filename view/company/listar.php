<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Content-Type");
    include '../../control/CompanyControl.php';
    $companyControl = new CompanyControl();

    echo json_encode($companyControl->findAll());
?>