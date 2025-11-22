<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Tampilkan semua buku
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    /**
     * Form tambah buku
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Simpan buku baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'  => 'required',
            'isbn'   => 'required|unique:books',
            'author' => 'required',
            'year'   => 'required|integer',
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')->with('success', 'Buku berhasil ditambahkan!');
    }

    /**
     * Detail buku
     */
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    /**
     * Form edit buku
     * (WAJIB pakai Book $book agar route resource jalan)
     */
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    /**
     * Update buku
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title'  => 'required',
            'isbn'   => 'required',
            'author' => 'required',
            'year'   => 'required|integer',
        ]);

        $book->update([
            'title'  => $request->title,
            'isbn'   => $request->isbn,
            'author' => $request->author,
            'year'   => $request->year,
        ]);

        return redirect()->route('books.index')->with('success', 'Buku berhasil diperbarui!');
    }

    /**
     * Hapus buku
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Buku berhasil dihapus!');
    }
}
