<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'books';

    // Kolom yang bisa diisi (mass assignable)
    protected $fillable = [
        'title',
        'isbn',
        'author',
        'year',
    ];
}
