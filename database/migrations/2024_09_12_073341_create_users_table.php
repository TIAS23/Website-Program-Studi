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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // ID auto-increment
            $table->string('name'); // Nama pengguna
            $table->string('email')->unique(); // Email yang unik
            $table->timestamp('email_verified_at')->nullable(); // Tanggal verifikasi email
            $table->string('password'); // Password pengguna
            $table->string('alamat')->nullable(); // Alamat pengguna, nullable artinya tidak wajib diisi
            $table->string('nohp')->nullable(); // Nomor telepon pengguna, nullable artinya tidak wajib diisi
            $table->string('role'); // Kolom role untuk menyimpan peran pengguna
            $table->string('jabatan')->nullable(); // Kolom jabatan, nullable artinya tidak wajib diisi
            $table->string('nama_lengkap'); // Nama lengkap pengguna
            $table->rememberToken(); // Token untuk "Remember Me" saat login
            $table->timestamps(); // Tanggal dibuat dan diperbarui
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
