<?php
error_reporting(E_ALL);
// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Methods: GET, POST');

$MODULES_LOAD = __DIR__ . '/src';
$TEMPLATE_LOAD = __DIR__ . '/templates';
$APP_ROOT = '';
$APP_ROUTE = null;

// require 'settings.dev.php';

require $MODULES_LOAD . '/core/bootstrap.php';
