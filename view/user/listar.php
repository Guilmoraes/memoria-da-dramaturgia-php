<?php
    include '../../control/UserControl.php';
    $userControl = new UserControl();
    $res = $userControl->findAll();
    $res->headers->set('Content-Type', 'application/json');
    $res->headers->set('Access-Control-Allow-Origin', '*');
    $res->headers->set('Access-Control-Allow-Credentials', 'true');
    $res->headers->set('Access-Control-Max-Age', '60');
    $res->headers->set('Access-Control-Allow-Headers', 'AccountKey,x-requested-with, Content-Type, origin, authorization, accept, client-security-token, host, date, cookie, cookie2');
    $res->headers->set('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');


    echo $res;
?>