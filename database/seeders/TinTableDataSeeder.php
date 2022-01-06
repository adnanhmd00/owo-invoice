<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;

class TinTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 3; $i++) { 
	    	User::create([
	            'state' => str_random(8),
	            'state_code' => str_random(12).'@mail.com',
	            'tin_code' => bcrypt('123456')
	        ]);
    	}
    }
}