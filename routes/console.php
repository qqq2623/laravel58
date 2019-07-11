<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');


Artisan::command("news" , function(){
	$message = date("Y-m-d H:i:s" , time()) . "---我是一条新的广播";
	broadcast(new App\Events\News($message));
	$this->comment("News Sent");
})->describe("发送广播");