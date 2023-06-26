<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    
    public function detail_pesanan()
	{
	     return $this->hasMany('App\Models\DetailPesanan','barang_id', 'id');
	}
}
