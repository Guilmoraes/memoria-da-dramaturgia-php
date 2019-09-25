<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    include '../../control/PostControl.php';
    $postControl = new PostControl();

    echo json_encode($postControl->findAll(), JSON_UNESCAPED_UNICODE)
    
?>