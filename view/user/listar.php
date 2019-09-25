<?php
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    include '../../control/UserControl.php';
    $userControl = new UserControl();

    echo json_encode($userControl->findAll());
?>