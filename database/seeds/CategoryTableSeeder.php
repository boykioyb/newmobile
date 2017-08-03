<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $categories = [
    		['name' => 'Game Online', 'parent_id' => 0],
    		['name' => 'Game Offline', 'parent_id' => 1],
    		['name' => 'Kham Pha', 'parent_id' => 1],
    		['name' => 'PC/CONSOLE', 'parent_id' => 1],
    		['name' => 'Esport', 'parent_id' => 2],
    		['name' => 'Mobile', 'parent_id' => 1],
    		['name' => 'Gaming Gear', 'parent_id' => 3],
    		['name' => 'Manga Film', 'parent_id' => 1],
    	];
    	foreach ($categories as $value) {
    		DB::table('categories')->insert($value);
    	}
    }
}
