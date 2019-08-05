<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
    		'name' => 'SiAdmin',
        'role' => 'admin',
    		'email' => 'SiAdmin@SiAdmin.com',
    		'password' => bcrypt('123456'), //Hash default laravel
    		'created_at' => date('Y-m-d H:i:s'),
    		'updated_at' => date('Y-m-d H:i:s'),
    	]);
    }
}
