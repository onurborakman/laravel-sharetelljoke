<?php

namespace App\Services\Data\Utility;

interface ILogger
{
    public function debug($message, $data);
    public function info($message, $data);
    public function warning($message, $data);
    public function error($message, $data);
}
