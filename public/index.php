<?php
ob_start(function ($html) {
    return str_replace(["\n", "\t", "  "], "", $html);
});

define("ROOT", dirname(__DIR__));
include_once ROOT . "/controllers/api.controller/api.controller.php";
include_once ROOT . "/controllers/views.controller/views.controller.php";
Views_controller::view();
Views_controller::view();

$html = ob_end_flush();