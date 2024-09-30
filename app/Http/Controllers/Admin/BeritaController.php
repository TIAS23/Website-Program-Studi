<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
     public function index()
    {
        $berita = Berita::all(); // Mengambil semua data berita
        return view('admin.berita', compact('berita')); // Mengirim data ke view
    }

    // Menampilkan form untuk menambah berita
    public function create()
    {
        return view('berita.create');
    }

    // Menyimpan berita baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
            'images' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $berita = new Berita();
        $berita->judul = $request->input('judul');
        $berita->isi = $request->input('isi');
        $berita->tanggal = $request->input('tanggal');

        if ($request->hasFile('images')) {
            $image = $request->file('images');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('images');
            $image->move($destinationPath, $imageName); // Pindahkan gambar ke folder public/images
            $berita->images = $imageName; // Simpan nama file gambar
        }

        $berita->save();

        return redirect()->route('admin.berita')->with('success', 'Berita berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit berita
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita', compact('berita'));
    }

    // Mengupdate berita
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
            'images' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $berita = Berita::findOrFail($id);
        $berita->judul = $request->input('judul');
        $berita->isi = $request->input('isi');
        $berita->tanggal = $request->input('tanggal');

        if ($request->hasFile('images')) {
            $image = $request->file('images');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('images');
            $image->move($destinationPath, $imageName);
            $berita->images = $imageName;
        }

        $berita->save();

        return redirect()->route('admin.berita')->with('success', 'Berita berhasil diperbarui.');
    }

    // Menghapus berita
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        // Hapus gambar jika ada
        if ($berita->images) {
            $imagePath = public_path('images/' . $berita->images);
        }

        $berita -> delete();

        return redirect()->route('admin.berita')->with('success', 'Berita berhasil dihapus.');
    }
    public function search(Request $request)
{
    $query = $request->input('query');
    $berita = Berita::where('judul', 'like', "%{$query}%")
        ->orWhere('isi', 'like', "%{$query}%")
        ->orWhere('tanggal', 'like', "%{$query}%")
        ->get();

    return view('admin.berita', compact('berita'));
}



}