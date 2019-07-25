<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Swoole\WebSocket\Server;

class SwooleSever extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'swoole:server';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'swoole websocket start';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
	    //创建server
        $server = new \swoole_websocket_server("0.0.0.0" , 9501);

	    $server->on("open" , function(Server $server , $request){
//		    $this->info($request->fd . "连接成功");
		    echo $request->fd . "连接成功";
	    });

	    $server->on("message" , function(Server $server , $request){
		    $msg = $request->data;

		    foreach($server->connections as $fd){
			    $server->push($fd , $msg);
		    }
	    });

	    $server->on("close" , function(Server $server , $request){
//		       $this->info($request->fd . "断开连接");
		    echo $request->fd . "断开连接";
	    });

	    $server->start();
    }
}
