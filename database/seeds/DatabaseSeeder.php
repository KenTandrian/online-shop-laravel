<?php

use Database\Seeders\BooksTableSeeder;
use Database\Seeders\RoleTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BooksTableSeeder::class);
        $this->call(RoleTableSeeder::class);
    }
}
