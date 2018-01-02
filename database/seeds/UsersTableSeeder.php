<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	[	
        		'name' => 'sanusi yusuf korede',
        		'email' => 'sanusikorede@gmail.com', 
        		'password' => Hash::make('fecunduser'),
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	],
        	[
        		'name' => 'fecund college user',
        		'email' => 'fecunduser@gmail.com', 
        		'password' => Hash::make('fecunduser'),
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	],

        ]);
    }
}
