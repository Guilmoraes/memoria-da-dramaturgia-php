<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
include '../../control/UserControl.php';
$userControl = new UserControl();

echo json_encode($userControl->findAll());


?>