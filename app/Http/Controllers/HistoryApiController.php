<?php

namespace App\Http\Controllers;
use App\Models\Pesanan;
use App\Models\DetailPesanan;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HistoryApiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pesanans = Pesanan::where('user_id', Auth::user()->id)->where('status', '!=', 0)->get();

        return response()->json(['pesanans' => $pesanans], 200);
    }

    public function detail($id)
    {
        $pesanan = Pesanan::where('id', $id)->first();
        $pesanan_details = DetailPesanan::where('pesanan_id', $pesanan->id)->get();

        return response()->json(['pesanan' => $pesanan, 'pesanan_details' => $pesanan_details], 200);
    }

    public function payment(Request $request, $id)
    {
        $pesanan = Pesanan::where('id', $id)->where('user_id', Auth::user()->id)->first();
        $pesanan_details = DetailPesanan::where('pesanan_id', $pesanan->id)->get();

        // Validasi dan proses pembayaran

        // Simpan data pembayaran
        $payment = new Payment();
        $payment->pesanan_id = $pesanan->id;
        $payment->amount = $request->amount;
        $payment->save();

        // Ubah status pesanan menjadi "dibayar"
        $pesanan->status = 1;
        $pesanan->update();

        return response()->json(['message' => 'Pembayaran berhasil disimpan', 'status' => 'success'], 200);
    }
}
