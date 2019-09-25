<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    include '../../control/CompanyControl.php';
    $companyControl = new CompanyControl();

    echo json_encode($companyControl->findAll());
?>