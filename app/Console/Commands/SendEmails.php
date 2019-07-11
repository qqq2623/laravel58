<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     * 控制台命令的名称和签名。
     * @var string
     */
    protected $signature = 'sendEmail:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '发送邮件';

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
//        if($this->confirm("Do you wish to send a Email ?")){
//	        \DB::table("admin_user")->first()->delete();
//        }
    }
}
