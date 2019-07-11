<?php

use Illuminate\Database\Seeder;

class TestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<10;$i++){
	        DB::table('admin_user')->insert([
		        'real_name' => json_encode([
			        "name" => str_random(10),
	                "age" => 16
		        ]),
		        'user_name' => str_random(10).'@gmail.com',
		        'password' => bcrypt('secret'),
		        'role_id' => array_rand([1,2,3]),
		        'add_time' => time(),
	        ]);
        }
    }
}
