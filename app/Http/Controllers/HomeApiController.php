<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Http\Request;

class HomeApiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Mungkin Anda tidak memerlukan middleware 'auth' di sini, tergantung kebutuhan API Anda
    }

    /**
     * Show the list of barang in JSON format.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $barangs = Barang::paginate(20);
        return response()->json(['barangs' => $barangs], 200);
    }
}
