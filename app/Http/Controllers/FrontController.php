<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function index()
    {
        $book = Book::get();
        return view('index', compact('book'));
    }

    public function list()
    {
        $book = Book::get();
        return view('list',compact('book'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function buy($id)
    {

        $transaction = new Transaction;
        $transaction->amount = 1;
        $transaction->user_id = Auth::user()->id;
        $transaction->book_id = $id;
        $transaction->save();

        return redirect('/user/mybook');
    }

    public function mybook()
    {
        $transactions = User::find(Auth::user()->id)
            ->transactions()
            ->with(['user', 'book'])
            ->get();
        return view('user/mybook',compact('transactions'));
    }
}
