<?php
$APP_CONFIGS = file_get_contents($MODULES_LOAD . '/config/app-configs.json');


/**
 *
 * @APP_CONFIGS stdClass
 */
$APP_CONFIGS = json_decode($APP_CONFIGS);


/**
 *
 * @ROUTE_DATA stdClass
 */
$ROUTE_DATA = $APP_CONFIGS->$APP_ROUTE;