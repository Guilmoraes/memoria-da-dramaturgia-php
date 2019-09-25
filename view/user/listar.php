<?php
    include '../../config/util.php';
    cors();
    include '../../control/UserControl.php';
    $userControl = new UserControl();

    echo json_encode($userControl->findAll());
?>