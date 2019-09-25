<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Content-Type");
    include '../../control/PostControl.php';
    $postControl = new PostControl();

    echo json_encode($postControl->findAll(), JSON_UNESCAPED_UNICODE)
    
?>