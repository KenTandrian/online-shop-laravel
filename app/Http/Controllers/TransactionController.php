<?php

namespace App\Http\Controllers;

use App\Book;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index()
    {
        $transaction = Transaction::join('users', 'transactions.user_id', '=', 'users.id')
            ->join('books', 'transactions.book_id', '=', 'books.id')
            ->get();
        return view('admin.transaction.index', compact('transaction'));
    }

    public function create()
    {
        $book = Book::get();
        return view('admin.transaction.create', compact('book'));
    }

    public function store(Request $request)
    {
        $amount = $request->amount;
        $book_id = $request->book_id;

        $transaction = new Transaction;
        $transaction->amount = $amount;
        $transaction->user_id = Auth::user()->id;
        $transaction->book_id = $book_id;
        $transaction->save();

        return redirect('admin/transaction');
    }

    public function edit($id)
    {
        $transaction = Transaction::find();
        return view('admin.transaction.update', compact('transaction'));
    }

    public function update(Request $request, $id)
    {
        $amount = $request->amount;
        $book_id = $request->book_id;

        $transaction = Transaction::find($id);
        $transaction->amount = $amount;
        $transaction->user_id = Auth::user()->id;
        $transaction->book_id = $book_id;
        $transaction->save();

        return redirect('admin/transaction');
    }

    public function destroy($id)
    {
        $transaction = Transaction::find($id);
        $transaction->delete();

        return redirect('admin/transaction');
    }
}
