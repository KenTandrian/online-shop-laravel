<?php

namespace Database\Seeders;

use App\Book;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = new Book();
        $book->title = "Ceritaku";
        $book->author = "Dika";
        $book->publisher = "Ankita";
        $book->save();
    }
}
