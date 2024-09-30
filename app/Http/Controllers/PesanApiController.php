<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Pesanan;
use App\Models\DetailPesanan;
use App\Models\Barang;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PesanApiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $barang = Barang::where('id', $id)->first();

        return response()->json(['barang' => $barang], 200);
    }

    public function pesan(Request $request, $id)
    {
        $barang = Barang::where('id', $id)->first();
        $tanggal = Carbon::now();

        // validasi apakah melebihi stok
        if ($request->jumlah_pesan > $barang->stok) {
            return response()->json(['message' => 'Stok tidak mencukupi', 'status' => 'error'], 400);
        }

        // cek validasi
        $cek_pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        
        // simpan ke database pesanan
        if (empty($cek_pesanan)) {
            $pesanan = new Pesanan;
            $pesanan->user_id = Auth::user()->id;
            $pesanan->tanggal = $tanggal;
            $pesanan->status = 0;
            $pesanan->jumlah_harga = 0;
            $pesanan->kode = mt_rand(100, 999);
            $pesanan->save();
        }

        // simpan ke database pesanan detail
        $pesanan_baru = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();

        // cek pesanan detail
        $cek_pesanan_detail = DetailPesanan::where('barang_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();

        if (empty($cek_pesanan_detail)) {
            $pesanan_detail = new DetailPesanan;
            $pesanan_detail->barang_id = $barang->id;
            $pesanan_detail->pesanan_id = $pesanan_baru->id;
            $pesanan_detail->jumlah = $request->jumlah_pesan;
            $pesanan_detail->jumlah_harga = $barang->harga * $request->jumlah_pesan;
            $pesanan_detail->save();
        } else {
            $pesanan_detail = DetailPesanan::where('barang_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();

            $pesanan_detail->jumlah = $pesanan_detail->jumlah + $request->jumlah_pesan;

            // harga sekarang
            $harga_pesanan_detail_baru = $barang->harga * $request->jumlah_pesan;
            $pesanan_detail->jumlah_harga = $pesanan_detail->jumlah_harga + $harga_pesanan_detail_baru;
            $pesanan_detail->update();
        }

        // jumlah total
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga + $barang->harga * $request->jumlah_pesan;
        $pesanan->update();

        return response()->json(['message' => 'Pesanan Sukses Masuk Keranjang', 'status' => 'success'], 200);
    }

    public function check_out()
    {
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $pesanan_details = [];

        if (!empty($pesanan)) {
            $pesanan_details = DetailPesanan::where('pesanan_id', $pesanan->id)->get();
        }

        return response()->json(['pesanan' => $pesanan, 'pesanan_details' => $pesanan_details], 200);
    }

    public function delete($id)
    {
        $pesanan_detail = DetailPesanan::where('id', $id)->first();

        $pesanan = Pesanan::where('id', $pesanan_detail->pesanan_id)->first();

        // Periksa apakah ada lebih dari satu pesanan_detail yang terhubung dengan pesanan
        $jumlah_pesanan_detail = DetailPesanan::where('pesanan_id', $pesanan->id)->count();

        if ($jumlah_pesanan_detail > 1) {
            // Jika lebih dari satu pesanan_detail, hapus hanya pesanan_detail yang bersangkutan
            $pesanan->jumlah_harga = $pesanan->jumlah_harga - $pesanan_detail->jumlah_harga;
            $pesanan->save();

            $pesanan_detail->delete();
        } else {
            // Jika hanya ada satu pesanan_detail, hapus pesanan beserta pesanan_detail
            $pesanan_detail->delete();
            $pesanan->delete();
        }

        return response()->json(['message' => 'Pesanan Sukses Dihapus', 'status' => 'success'], 200);
    }

    public function konfirmasi()
    {
        $user = User::where('id', Auth::user()->id)->first();

        if (empty($user->alamat) || empty($user->nohp)) {
            return response()->json(['message' => 'Identitas harus dilengkapi', 'status' => 'error'], 400);
        }

        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();

        if (!empty($pesanan)) {
            $pesanan_id = $pesanan->id;
            $pesanan->status = 1;
            $pesanan->update();

            $pesanan_details = DetailPesanan::where('pesanan_id', $pesanan_id)->get();

            foreach ($pesanan_details as $pesanan_detail) {
                $barang = Barang::where('id', $pesanan_detail->barang_id)->first();
                $barang->stok = $barang->stok - $pesanan_detail->jumlah;
                $barang->update();
            }

            return response()->json(['message' => 'Pesanan Sukses Check Out. Silahkan Lanjutkan Proses Pembayaran', 'status' => 'success'], 200);
        } else {
            return response()->json(['message' => 'Pesanan tidak ditemukan', 'status' => 'error'], 404);
        }
    }
}
