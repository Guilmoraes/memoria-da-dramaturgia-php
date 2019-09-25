<?php
    include '../../config/util.php';
    cors();
    include '../../control/CompanyControl.php';
    $companyControl = new CompanyControl();

    echo json_encode($companyControl->findAll());
?>