<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	'category' => 'categoria1',
        	'description' => 'esta es una categoria',
        	'imagen' => 'https://picsum.photos/400/400',
        	'pdf' => 'aqui va el pdf',
        	'category_color' => 'blue'
        ]);

        DB::table('categories')->insert([
        	'category' => 'categoria2',
        	'description' => 'esta es una categoria',
        	'imagen' => 'https://picsum.photos/400/400',
        	'pdf' => 'aqui va el pdf',
        	'category_color' => 'red'
        ]);
    }
}
