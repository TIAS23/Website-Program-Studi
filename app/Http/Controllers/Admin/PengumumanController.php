<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengumuman;


class PengumumanController extends Controller
{
     public function index()
    {
        $pengumuman = Pengumuman::all(); // Mengambil semua data pengumuman
        return view('admin.pengumuman', compact('pengumuman')); // Mengirim data ke view
    }

    // Menampilkan form untuk menambah pengumuman
    public function create()
    {
        return view('pengumuman.create');
    }

    // Menyimpan pengumuman baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
            'images' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $pengumuman = new Pengumuman();
        $pengumuman->judul = $request->input('judul');
        $pengumuman->isi = $request->input('isi');
        $pengumuman->tanggal = $request->input('tanggal');

        if ($request->hasFile('images')) {
            $image = $request->file('images');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('images');
            $image->move($destinationPath, $imageName); // Pindahkan gambar ke folder public/images
            $pengumuman->images = $imageName; // Simpan nama file gambar
        }

        $pengumuman->save();

        return redirect()->route('admin.pengumuman')->with('success', 'Pengumuman berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit pengumuman
    public function edit($id)
{
    $pengumuman = Pengumuman::findOrFail($id);
    return view('admin.pengumuman', compact('pengumuman'));
}


    // Mengupdate pengumuman
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
            'images' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        $pengumuman = Pengumuman::findOrFail($id);
        $pengumuman->judul = $request->input('judul');
        $pengumuman->isi = $request->input('isi');
        $pengumuman->tanggal = $request->input('tanggal');
    
        if ($request->hasFile('images')) {
            if ($pengumuman->images) {
                $oldImagePath = public_path('images/' . $pengumuman->images);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
    
            $image = $request->file('images');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('images');
            $image->move($destinationPath, $imageName);
            $pengumuman->images = $imageName;
        }
    
        $pengumuman->save();
    
        return redirect()->route('admin.pengumuman')->with('success', 'Pengumuman berhasil diperbarui.');
    }
    
    

    // Menghapus pengumuman
    public function destroy($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        // Hapus gambar jika ada
        if ($pengumuman->images) {
            $imagePath = public_path('images/' . $pengumuman->images);
        }

        $pengumuman->delete();

        return redirect()->route('admin.pengumuman')->with('success', 'Pengumuman berhasil dihapus.');
    }
    public function search(Request $request)
{
    $query = $request->input('query');
    $pengumuman = Pengumuman::where('judul', 'like', "%{$query}%")
        ->orWhere('isi', 'like', "%{$query}%")
        ->orWhere('tanggal', 'like', "%{$query}%")
        ->get();

    return view('admin.pengumuman', compact('pengumuman'));
}



}