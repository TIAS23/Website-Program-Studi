<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class HomeUserController extends Controller
{
    public function homeUser()
    {
        $products = Barang::all();
        return view('welcome', compact('products'));
}
}
