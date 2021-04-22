<?php
namespace App\Services\Data;
use App\Models\Joke;
use App\Services\Data\Utility\ILogger;

class SecurityDAO{
    protected $logger;
    public function __construct(ILogger $logger){
        $this->logger = $logger;
    }
    //Function to get all the jokes from the database
    public function read(){
        $this->logger->info("Entering read() in SecurityDAO");
        try{
            $this->logger->info("Exiting read() in SecurityDAO with SUCCESS");
            return Joke::all();
        }catch(\Exception $e){
            $this->logger->error("Exiting read() in SecurityDAO with ERROR => ERROR ", array("ERROR_INFO"=>$e));
        }
    }
    //Function to save the joke to the database
    public function write(Joke $joke){
        $this->logger->info("Entering write() in SecurityDAO");
        try{
            $this->logger->info("Exiting write() in SecurityDAO with SUCCESS");
            return $joke->save();
        }catch(\Exception $e){
            $this->logger->error("Exiting write() in SecurityDAO with ERROR => ERROR ", array("ERROR_INFO"=>$e));
        }
    }
}
