<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_create_pengumuman_table.php
public function up()
{
    Schema::create('pengumuman', function (Blueprint $table) {
        $table->id();
        $table->string('judul');
        $table->string(column: 'images');
        $table->text('isi');
        $table->date('tanggal');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengumuman');
    }
};