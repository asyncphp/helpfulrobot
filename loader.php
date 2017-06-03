<?php

require_once __DIR__ . "/vendor/autoload.php";

Pre\Plugin\addMacroPath(__DIR__ . "/macros.pre");

Pre\Plugin\process(__DIR__ . "/config.pre");
