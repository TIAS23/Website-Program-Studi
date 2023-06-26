<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pesanan;
use App\Models\User;
use App\Models\DetailPesanan;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$pesanans = Pesanan::where('user_id', Auth::user()->id)->where('status', '!=', 0)->get();

    	return view('history.index', compact('pesanans'));
    }

    public function detail($id)
    {
    	$pesanan = Pesanan::where('id', $id)->first();
    	$pesanan_details = DetailPesanan::where('pesanan_id', $pesanan->id)->get();

        return view('history.detail', compact('pesanan', 'pesanan_details'));
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

        return redirect()->route('home', $pesanan->id)->with('success', 'Pembayaran berhasil disimpan.');
    }
}
