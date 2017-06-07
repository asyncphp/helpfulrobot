<?php

define("BASE_PATH", realpath(__DIR__ . "/.."));

require_once BASE_PATH . "/vendor/autoload.php";

$loader = new Dotenv\Dotenv(BASE_PATH);
$loader->load();

Pre\Plugin\addMacroPath(BASE_PATH . "/macros.pre");
Pre\Plugin\process(BASE_PATH . "/helpers.pre");
