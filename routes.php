<?php

use Aerys\Request;
use Aerys\Response;
use Aerys\Router;
use HelpfulRobot\Responder\IndexResponder;

return function (Router $router) {
    $router->get("/", (new IndexResponder())->closure());

    // $router->get(
    //     "/{name}", function(Request $req, Response $res, array $params) {
    //         $res->end("hello " . $params["name"]);
    //     }
    // );
    //
    // $router->post(
    //     "/", function(Request $req, Response $res) {
    //         $res->end("hello world: post");
    //     }
    // );
    //
    // $router->put(
    //     "/", function(Request $req, Response $res) {
    //         $res->end("hello world: put");
    //     }
    // );
    //
    // $router->route(
    //     "DELETE", "/", function(Request $req, Response $res) {
    //         $res->end("hello world: delete");
    //     }
    // );
};
