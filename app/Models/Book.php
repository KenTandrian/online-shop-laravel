<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';

    /**
     * Get the transactions of this book.
     */
    public function transactions() 
    {
        return $this->hasMany(Transaction::class);
    }
}
