<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TelegramController extends Controller
{
   public function test(){
       $token = "648557133:AAGyz8be4uBse2ncpRnKXjZF6cdWq0_k-08";
       $bot = new \TelegramBot\Api\Client($token);
// команда для start
       $bot->command('start', function ($message) use ($bot) {
           $answer = 'Добро пожаловать!';
           $bot->sendMessage($message->getChat()->getId(), $answer);
       });

// команда для помощи
       $bot->command('help', function ($message) use ($bot) {
           $answer = 'Команды:
/help - вывод справки';
           $bot->sendMessage($message->getChat()->getId(), $answer);
       });

       $bot->run();
   }
}
