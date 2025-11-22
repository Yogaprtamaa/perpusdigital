<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id(); // Primary key otomatis (kolom id)
            $table->string('title'); // Judul buku
            $table->string('isbn')->unique(); // ISBN unik
            $table->string('author'); // Nama penulis (nanti bisa relasi juga)
            $table->integer('year'); // Tahun terbit
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
