<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->id(); // ID otomatis
            $table->string('judul'); // Kolom untuk judul berita
            $table->string('images')->nullable(); // Kolom untuk gambar berita 
            $table->text('isi'); // Kolom untuk isi berita
            $table->date('tanggal'); // Kolom untuk tanggal berita
            $table->timestamps(); // Kolom untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita');
    }
};
