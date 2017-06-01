<?php

namespace HelpfulRobot\Responder;

use Closure;

trait Responds
{
    public function closure()
    {
        return Closure::fromCallable([$this, "run"]);
    }
}
