<?php

# This file is generated, changes you make will be lost.
# Make your changes in /Users/assertchris/Source/helpfulrobot/app/Responder/RobotsResponder.pre instead.

namespace HelpfulRobot\Responder;

use Aerys\Request;
use Aerys\Response;

use function Amp\File\get;

class RobotsResponder
{
    use Responds;

    public function run(Request $req, Response $res)
    {
        $robots = yield $this->robots();
        $res->end("robots: {$robots}");
    }

    private function robots(): \Amp\Promise
    {
        return call_user_func(PRE_ASYNC_WRAPPER, function () {
            return yield get(
            __DIR__ . "/../../public/robots.txt"
        );
        });
    }
}
