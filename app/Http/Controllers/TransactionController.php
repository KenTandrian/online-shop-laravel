<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index()
    {
        $transaction = Transaction::with(['user', 'book'])->get();
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
        $transaction = Transaction::find($id);
        $book = Book::get();
        return view('admin.transaction.update', compact(['transaction', 'book']));
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
