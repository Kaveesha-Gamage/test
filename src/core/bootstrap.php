<?php
$REQUEST_URI = $_SERVER['REQUEST_URI'];
$request = rtrim($REQUEST_URI, '/');

if($request === $APP_ROOT){
    $APP_ROUTE = 'home';
}

else if($request === $APP_ROOT . '/demos'){
    $APP_ROUTE = 'demos';
}
else if(strpos($request, $APP_ROOT . 'demos/?ref=fb-2020010102') !== FALSE){
    $APP_ROUTE = 'demos';
}
else if($request === $APP_ROOT . '/contact'){
    $APP_ROUTE = 'contact';
}
else if($request === $APP_ROOT . '/terms'){
    $APP_ROUTE = 'terms';
}
else if($request === $APP_ROOT . '/nugegoda'){
    $APP_ROUTE = 'redirect';
}
else if($request === $APP_ROOT . '/ikman/nugegoda'){
    $APP_ROUTE = 'redirect';
}
else if($request === $APP_ROOT . '/ikman/ads/?ad=website+price+plans'){
    $APP_ROUTE = 'redirect';
}
else if(strpos($request, $APP_ROOT . '/promote') !== FALSE){
    $APP_ROUTE = 'redirect';
}
else if(strpos($request, $APP_ROOT . '/open') !== FALSE){
    $APP_ROUTE = 'redirect';
}
else if(strpos($request, $APP_ROOT . '/ads') !== FALSE){
    $APP_ROUTE = 'ads';
}
else if($request === $APP_ROOT . '/error-404'){
    $APP_ROUTE = 'error-404';
}
else if($request === $APP_ROOT . '/au'){
    $APP_ROUTE = 'au/home';
}
else if($request === $APP_ROOT . '/au/contact'){
    $APP_ROUTE = 'au/contact';
}
else{
    header('location: '. $APP_ROOT . '/error-404');
}


require $MODULES_LOAD . '/core/build-route.php';

require $MODULES_LOAD . '/pages/'.$APP_ROUTE.'.page.php';