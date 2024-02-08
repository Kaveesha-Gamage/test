<?php

/**
 * Available Keys on page
 *
 * meta_description
 * meta_keywords
 * page_title
 * base_path
 */

$page = new stdClass();

$page = $ROUTE_DATA;

ob_start();
include $TEMPLATE_LOAD . "/head.tpl.php";
$page->tpl_head = ob_get_clean();


ob_start();
include $TEMPLATE_LOAD . "/navbar.tpl.php";
$page->tpl_navbar = ob_get_clean();


ob_start();
include $TEMPLATE_LOAD . "/header.tpl.php";
$page->tpl_header = ob_get_clean();

ob_start();
include $TEMPLATE_LOAD . "/_footer-script.tpl.php";
$page->tpl_footer_script = ob_get_clean();

ob_start();
include $TEMPLATE_LOAD . "/footer.tpl.php";
$page->tpl_footer = ob_get_clean();


require $TEMPLATE_LOAD . '/'.$APP_ROUTE.'.tpl.php';