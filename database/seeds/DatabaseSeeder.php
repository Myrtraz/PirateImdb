<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(CategorySeed::class);
         $this->call(MovieSeed::class);
         $this->call(AdminSeeder::class);
    }
}
