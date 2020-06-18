<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	 //$this->call(UserSeeder::class);

    	$this->call(CategorySeeder::class);

        DB::table('users')->insert([
            'name' => 'Andres',
            'email' => 'omega@example.com',
            'password' => Hash::make('omega1234')
        ]); 
    }
}
