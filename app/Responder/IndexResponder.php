<?php

namespace HelpfulRobot\Responder;

use Aerys\Request;
use Aerys\Response;

class IndexResponder
{
    use Responds;

    public function run(Request $req, Response $res)
    {
        $res->end("hello world: responder");
    }
}
