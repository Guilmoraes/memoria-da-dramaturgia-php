<?php
    include '../../control/PostControl.php';
    $postControl = new PostControl();

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    echo json_encode($postControl->findAll(), JSON_UNESCAPED_UNICODE)
    
?>