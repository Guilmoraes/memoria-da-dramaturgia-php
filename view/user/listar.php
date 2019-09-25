<?php
    header("Access-Control-Allow-Origin: https://memoria-da-dramaturgia-php.herokuapp.com");
    header('Access-Control-Allow-Credentials: true');
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    include '../../control/UserControl.php';
    $userControl = new UserControl();

    echo json_encode($userControl->findAll());
?>