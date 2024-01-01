<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'isbn',
        'published_at',
        'quantity',
    ];

    public function bookCheckouts()
    {
        return $this->hasMany(BookCheckout::class);
    }
}
