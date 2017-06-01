<?php

use Aerys\Host;
use Aerys\Request;
use Aerys\Response;

use function Aerys\root;
use function Aerys\router;

$host = new Host();
$host->expose("*", 8888);

$host->use($root = root(__DIR__ . "/public"));
$host->use($router = router());

$routes = require __DIR__ . "/routes.php";
$routes($router);
