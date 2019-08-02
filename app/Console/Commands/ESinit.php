<?php

namespace App\Console\Commands;

use GuzzleHttp\Client;
use Illuminate\Console\Command;

class ESinit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'es:index';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'index laravel es';

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
//		$client = new Client();
//	    $this->createTemplate($client);
//	    $this->creatIndex($client);
    }

//	public function createTemplate(Client $client){
//		$url = config('scout.elasticsearch.hosts')[0].'/'.config('scout.elasticsearch.index');
//		$client->put($url , [
//			'json' => [
//				"settings" => []
//			]
//		]);
//	}
}
