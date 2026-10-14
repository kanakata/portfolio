<?php
header_remove("X-Powered-By");
header_remove("x-powered-by");
header("Content-Type: text/html; charset=UTF-8");
header("Cache-Control: no-cache, no-store, must-revalidate");
header("X-Frame-Options: SAMEORIGIN");
ob_start(function ($html) {
    return str_replace(["\n", "\t", "  "], "", $html);
});

define("ROOT", dirname(__DIR__));
include_once ROOT . "/controllers/api.controller/api.controller.php";
include_once ROOT . "/controllers/views.controller/views.controller.php";
Views_controller::view();
Views_controller::view();

$html = ob_end_flush();