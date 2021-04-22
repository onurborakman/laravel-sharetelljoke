<?php
//Onur Akman
//CST-323
//01/10/2021
//This is my own work
namespace App\Http\Controllers;

use App\Services\Business\SecurityService;
use App\Services\Data\Utility\ILogger;
use Illuminate\Http\Request;
use App\Models\Joke;

class NavigationController extends Controller
{
    protected $logger;
    private $securityService;
    public function __construct(ILogger $logger){
        $this->logger = $logger;
        $this->securityService = new SecurityService($logger);
    }

    //Function to show home page
    public function showHome(){
        $this->logger->info("Entering showHome() in NavigationController");
        $this->logger->info("Exiting showHome() in NavigationController");
        return view('main');
    }
    //Function to pick a random joke from the database and display it to the user
    public function showJoke(){
        $this->logger->info("Entering showJoke() in NavigationController");
        $jokes = NULL;
        try{
            $jokes = $this->securityService->read();
        }catch(\Exception $e){
            $this->logger->error("Exiting showJoke() with ERROR => ERROR ", array("ERROR_INFO"=>$e));
        }
        $count = count($jokes);
        $maxForRandom = $count - 1;
        $joke = NULL;
        if($count == 0){
            $joke = new Joke();
            $joke->title = "We are sorry but there are currently 0 jokes in our system...";
            $joke->content = "Have a nice day...";
            $joke->author = "Administration";
            $joke->created_at = "";
            $this->logger->info("Exiting showJoke() in NavigationController with no returned data");
            $this->logger->info("DEFAULT PARAMETER ",
                array(
                    "title"=>$joke->title,
                    "content"=>$joke->content,
                    "author"=>$joke->author,
                    "created_at"=>$joke->created_at
                ));
        }else{
            $random = rand(0, $maxForRandom);
            $joke = $jokes[$random];
            $this->logger->info("Exiting showJoke() in NavigationController with returned data");
            $this->logger->info("PARAMETER ",
                array(
                    "title"=>$joke->title,
                    "content"=>$joke->content,
                    "author"=>$joke->author,
                    "created_at"=>$joke->created_at
                ));
        }
        return view('joke', ['joke' => $joke]);
    }
    //Function to show Tell a Joke page
    public function showShare(){
        $this->logger->info("Entering showShare() in NavigationController");
        $this->logger->info("Exiting showShare() in NavigationController");
        return view('share');
    }
    //Function to insert the joke to the database
    public function shareJoke(Request $request){
        $this->logger->info("Entering shareJoke() in NavigationController");
        $joke = Joke::create($request->all());
        $result = NULL;
        try{
            $result = $this->securityService->write($joke);
        }catch (\Exception $e){
            $this->logger->error("Exiting shareJoke() in NavigationController with ERROR => ERROR ", array("ERROR_INFO"=>$e));
        }
        $this->logger->info("Exiting shareJoke() in NavigationController with SUCCESS");
        return view('share_result', ['result' => $result]);
    }
}
