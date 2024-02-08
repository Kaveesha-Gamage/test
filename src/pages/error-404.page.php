<?php

/**
 * Available Keys on page
 * page_title
 * base_path
 */

$page = new stdClass();

$page = $ROUTE_DATA;

ob_start();
include $TEMPLATE_LOAD . "/head.tpl.php";
$page->tpl_head = ob_get_clean();


ob_start();
include $TEMPLATE_LOAD . "/_footer-script.tpl.php";
$page->tpl_footer_script = ob_get_clean();


require $TEMPLATE_LOAD . '/'.$APP_ROUTE.'.tpl.php';