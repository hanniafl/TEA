<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    public function handle(){
        $botman=app("botman");
        $botman->hears("{message}", function($botman,$message){
            if($message=="Hi"){
                $this->askName($botman);
            }else{
                $botman->reply("Escribe Hi para empezar la conversación");
            }
        });

        $botman->listen();

    }

    public function askName($botman){
        $botman->ask("Hola Cuál es tu nombre?", function(Answer $answer){
            $name=$answer->getText();
            $this->say("Gusto en conocerte ".$name);
        });
    }
}
