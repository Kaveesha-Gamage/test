<?php
$logfile = '/log/redirect-stats-'.date('Y-m-d').'.log.json';

$userData = array(
    'REQUEST_URI'=>$_SERVER['REQUEST_URI'],
    'HTTP_USER_AGENT' => $_SERVER['HTTP_USER_AGENT'],
    'REMOTE_ADDR' => $_SERVER['REMOTE_ADDR'],
    'REQUEST_TIME' => date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']),
    'REQUEST_REF' => $_GET['ref'],
    'REQUEST_FBCLID' => $_GET['fbclid'],
    'REQUEST_AD' => $_GET['ad'],
);

// $userData = json_encode($userData);
$fileData = file_get_contents($MODULES_LOAD . $logfile);

$fileDataArray = json_decode($fileData);
if($fileDataArray == null){
    $fileDataArray = [];
}
array_push($fileDataArray, $userData);

$userData = json_encode($fileDataArray);

file_put_contents($MODULES_LOAD . $logfile, $userData);