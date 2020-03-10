<?php

use Illuminate\Database\Seeder;

use App\Category;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Category::create(['name' => 'Drama']);
    	Category::create(['name' => 'Action']);
    	Category::create(['name' => 'Comedy']);
    	Category::create(['name' => 'Horror']);
    	Category::create(['name' => 'Adventure']);
    }
}
