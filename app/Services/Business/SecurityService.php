<?php
namespace App\Services\Business;
use App\Models\Joke;
use App\Services\Data\SecurityDAO;
use App\Services\Data\Utility\ILogger;

class SecurityService{
    protected $logger;
    private $securityDAO;
    public function __construct(ILogger $logger){
        $this->logger = $logger;
        $this->securityDAO = new SecurityDAO($logger);
    }
    //Function to get all jokes
    public function read(){
        $this->logger->info("Entering read() in SecurityService");
        $this->logger->info("Exiting read() in SecurityService");
        return $this->securityDAO->read();
    }
    //Function to save a joke to database
    public function write(Joke $joke){
        $this->logger->info("Entering write() in SecurityService");
        $this->logger->info("Exiting write() in SecurityService");
        return $this->securityDAO->write($joke);
    }
}
