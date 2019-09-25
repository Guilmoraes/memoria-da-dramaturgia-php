<?php
    include '../../control/UserControl.php';
    $userControl = new UserControl();
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

    echo json_encode($userControl->findAll());
?>