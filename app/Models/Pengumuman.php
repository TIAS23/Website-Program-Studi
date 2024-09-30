<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;

    // Table name (optional, if not following Laravel's default naming convention)
    protected $table = 'pengumuman';

    // Fillable fields
    protected $fillable = ['judul','images', 'isi', 'tanggal'];
    
}
