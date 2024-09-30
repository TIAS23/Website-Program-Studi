<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.data_user', compact('users'));
    }

    public function create()
    {
        return view('admin.data_user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'alamat' => 'nullable|string|max:255',
            'nohp' => 'nullable|string|max:20',
            'role' => 'required|string|max:50',
            'jabatan' => 'nullable|string|max:255',
            'nama_lengkap' => 'nullable|string|max:255',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'alamat' => $request->alamat,
            'nohp' => $request->nohp,
            'role' => $request->role,
            'jabatan' => $request->jabatan,
            'nama_lengkap' => $request->nama_lengkap,
        ]);

        return redirect()->route('admin.data_user')->with('success', 'Pengguna berhasil ditambahkan.');
    }

    public function edit(User $user)
    {
        return view('admin.data_user.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'alamat' => 'nullable|string|max:255',
            'nohp' => 'nullable|string|max:20',
            'role' => 'required|string|max:50',
            'jabatan' => 'nullable|string|max:255',
            'nama_lengkap' => 'nullable|string|max:255',
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $user->password,
            'alamat' => $request->alamat,
            'nohp' => $request->nohp,
            'role' => $request->role,
            'jabatan' => $request->jabatan,
            'nama_lengkap' => $request->nama_lengkap,
        ]);

        return redirect()->route('admin.data_user')->with('success', 'Pengguna berhasil diperbarui.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.data_user')->with('success', 'Pengguna berhasil dihapus.');
    }
}
