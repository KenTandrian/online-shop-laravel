<?php

namespace Database\Seeders;

use App\Models\Book;
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
        // Book 1
        $book = new Book;
        $book->title = "Eloquent JavaScript, Third Edition";
        $book->author = "Marijn Haverbeke";
        $book->publisher = "No Starch Press";
        $book->save();

        // Book 2
        $book = new Book;
        $book->title = "Practical Modern JavaScript";
        $book->author = "Nicolás Bevacqua";
        $book->publisher = "O'Reilly Media";
        $book->save();
        
        // Book 3
        $book = new Book;
        $book->title = "Understanding ECMAScript 6";
        $book->author = "Nicholas C. Zakas";
        $book->publisher = "No Starch Press";
        $book->save();

        // Book 4
        $book = new Book;
        $book->title = "Speaking JavaScript";
        $book->author = "Axel Rauschmayer";
        $book->publisher = "O'Reilly Media";
        $book->save();

        // Book 5
        $book = new Book;
        $book->title = "Learning JavaScript Design Patterns";
        $book->author = "Addy Osmani";
        $book->publisher = "O'Reilly Media";
        $book->save();

        // Book 6
        $book = new Book;
        $book->title = "You Don't Know JS Yet";
        $book->author = "Kyle Simpson";
        $book->publisher = "Independently published";
        $book->save();

        // Book 7
        $book = new Book;
        $book->title = "Pro Git";
        $book->author = "Scott Chacon and Ben Straub";
        $book->publisher = "Apress; 2nd edition";
        $book->save();

        // Book 8
        $book = new Book;
        $book->title = "Rethinking Productivity in Software Engineering";
        $book->author = "Caitlin Sadowski, Thomas Zimmermann";
        $book->publisher = "Apress";
        $book->save();
    }
}
