<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    public function index()
    {
        $products = Barang::all();
        $kategoris = Kategori::all(); // Mengambil semua kategori dari database
        return view('kategori.kategori', compact('products', 'kategoris'));
    }

    public function filterByCategory($id_kategori)
    {
        $products = Barang::where('id_kategoris', $id_kategori)->get();
        $kategoris = Kategori::all(); // Mengambil semua kategori
        return view('kategori.kategori', compact('products', 'kategoris'));
    }


    public function create()
    {
        $products = Barang::all();
        $kategoris = Kategori::all(); // Mengambil semua kategori
        return view('tambahbarang.tambah_barang', compact('kategoris'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'keterangan' => 'nullable|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'id_kategoris' => 'required|integer|exists:kategoris,id'
        ]);

        $gambar = $request->file('gambar');
        $nama_file = time() . '.' . $gambar->getClientOriginalExtension();
        $gambar->move(public_path('images'), $nama_file);

        Barang::create([
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'keterangan' => $request->keterangan,
            'gambar' => $nama_file,
            'id_kategoris' => $request->id_kategoris,
        ]);

        return redirect('/home')->with('success', 'Barang berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $barang = Barang::find($id);
        $kategoris = Kategori::all(); // Mengambil semua kategori
        return view('editbarang.edit_barang', compact('barang', 'kategoris'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'keterangan' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'id_kategoris' => 'required|integer|exists:kategoris,id'
        ]);

        $barang = Barang::findOrFail($id);
        $barang->nama_barang = $request->nama_barang;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
        $barang->keterangan = $request->keterangan;
        $barang->id_kategoris = $request->id_kategoris;

        if ($request->hasFile('gambar')) {
            if ($barang->gambar) {
                Storage::delete('public/images/' . $barang->gambar);
            }

            $gambar = $request->file('gambar');
            $nama_file = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('images'), $nama_file);

            $barang->gambar = $nama_file;
        }

        $barang->save();

        return redirect('/home')->with('success', 'Barang berhasil diupdate.');
    }

    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);

        if ($barang->gambar) {
            Storage::delete('public/images/' . $barang->gambar);
        }

        $barang->delete();

        return redirect('/home')->with('success', 'Barang berhasil dihapus.');
    }
}
