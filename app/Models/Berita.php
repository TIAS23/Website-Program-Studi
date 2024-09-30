<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
     // Table name (optional, if not following Laravel's default naming convention)
     protected $table = 'berita';
    protected $fillable = [
        'judul', 'isi', 'tanggal', 'images'
    ];
}