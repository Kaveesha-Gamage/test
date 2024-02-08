<?php

$userData = array(
    'HTTP_USER_AGENT' => $_SERVER['HTTP_USER_AGENT'],
    'REMOTE_ADDR' => $_SERVER['REMOTE_ADDR'],
    'REQUEST_TIME' => $_SERVER['REQUEST_TIME'],
    'REQUEST_REF' => $_GET['ref'],
    'REQUEST_FBCLID' => $_GET['fbclid']
);

// $userData = json_encode($userData);
$fileData = file_get_contents($MODULES_LOAD . '/log/page-access.log');

$fileDataArray = json_decode($fileData);

array_push($fileDataArray, $userData);

$userData = json_encode($fileDataArray);

file_put_contents($MODULES_LOAD . '/log/page-access.log', $userData);