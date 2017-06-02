<?php

namespace HelpfulRobot\Process
{
    function start($tag, $command, $log = null)
    {
        $file = $log ?? sha1($command);
        $path = "> {$file} 2> {$file}";

        exec("{$command} tag={$tag} {$path} &");

        return identify($tag);
    }

    function identify($tag)
    {
        exec("ps -ax | grep tag={$tag}", $lines);
        $parts = explode(" ", trim($lines[0]));

        return (int) $parts[0];
    }

    function stop($tag)
    {
        $pid = identify($tag);

        if ($pid < 1) {
            return;
        }

        exec("kill -9 {$pid}");
    }
}
