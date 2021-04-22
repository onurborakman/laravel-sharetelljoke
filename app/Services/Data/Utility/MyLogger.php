<?php

namespace App\Services\Data\Utility;

//require_once('/vendor/autoload.php');
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\LogglyHandler;
use Monolog\Formatter\LogglyFormatter;

class MyLogger implements ILogger
{
    protected $logger;
    public function __construct(){
        $this->logger = new Logger('JokeApp');
        //$this->logger->pushHandler(new StreamHandler('php://stdout', Logger::DEBUG));
	    $this->logger->pushHandler(new LogglyHandler('fa9f66b6-2c89-4667-a34a-ce6baddb34f2/tag/jokeapp', Logger::INFO));
    }

    public function debug($message, $data=array())
    {
        $this->logger->debug($message . (count($data) != 0 ? 'DATA: ' . print_r($data, true) : ""));
    }

    public function info($message, $data=array())
    {
        $this->logger->info($message . (count($data) != 0 ? 'DATA: ' . print_r($data, true) : ""));
    }

    public function warning($message, $data=array())
    {
        $this->logger->warning($message . (count($data) != 0 ? 'DATA: ' . print_r($data, true) : ""));
    }

    public function error($message, $data=array())
    {
        $this->logger->error($message . (count($data) != 0 ? 'DATA: ' . print_r($data, true) : ""));
    }
}
