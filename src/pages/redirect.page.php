<?php
if($request === $APP_ROOT . '/ikman/nugegoda'){
    $_GET['ref'] = 'ikman';
    require $MODULES_LOAD . '/core/redirect-stats.php';
    header('location: https://goo.gl/maps/3EwnWGSRpu8Buwed8');
}

if($request === $APP_ROOT . '/nugegoda'){
    require $MODULES_LOAD . '/core/redirect-stats.php';
    header('location: https://goo.gl/maps/3EwnWGSRpu8Buwed8');
}

if($request === $APP_ROOT . '/ikman/ads/?ad=website+price+plans'){
    $_GET['ref'] = 'ikman';
    $_GET['ad'] = 'website+price+plans';
    require $MODULES_LOAD . '/core/redirect-stats.php';
    header('location: https://ikman.lk/en/ad/web-site-design-and-development-company-for-sale-colombo');
}

if(
    strpos($request, $APP_ROOT . '/promote/') !== FALSE
    || strpos($request, $APP_ROOT . '/open/') !== FALSE){
    require $MODULES_LOAD . '/core/redirect-stats.php';
    header('location: https://deviitor.com/ads/?ad='.urlencode($_GET['ad']));
}