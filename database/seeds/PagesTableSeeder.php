<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
        	[	
        		'page_name' => 'HOME',
        		'page_abbr' => 'HM', 
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	],
        	[
        		'page_name' => 'ABOUT',
        		'page_abbr' => 'AB', 
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	],
        	[
        		'page_name' => 'SERVICES',
        		'page_abbr' => 'SV', 
        		'created_at' => \Carbon\Carbon::now(),
        		'updated_at' => \Carbon\Carbon::now(),
        	],
            [
                'page_name' => 'UTME',
                'page_abbr' => 'UTME', 
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'page_name' => 'SSCE',
                'page_abbr' => 'SSCE', 
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'page_name' => 'ALEVEL',
                'page_abbr' => 'ALEVEL', 
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'page_name' => 'INT-COLLEGES',
                'page_abbr' => 'INT-COL', 
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'page_name' => 'OVERSEAS-ADMINSSION',
                'page_abbr' => 'OV-ADM', 
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
        ]);
    }
}
