<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $book = Book::get();
        return view('admin.book.index', compact('book'));
    }

    public function create()
    {
        return view('admin.book.create');
    }

    public function store(Request $request)
    {
        $title = $request->title;
        $author = $request->author;
        $publisher = $request->publisher;

        $book = new Book;
        $book->title = $title;
        $book->author = $author;
        $book->publisher = $publisher;
        $book->save();

        return redirect('admin/book');
    }

    public function edit($id)
    {
        $book = Book::find($id);
        return view('admin.book.update', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $title = $request->title;
        $author = $request->author;
        $publisher = $request->publisher;

        $book = Book::find($id);
        $book->title = $title;
        $book->author = $author;
        $book->publisher = $publisher;
        $book->save();

        return redirect('admin/book');
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();

        return redirect('admin/book');
    }
}
