<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data untuk user admin
        User::updateOrCreate([
            'email' => 'john@example.com'
        ], [
            'name' => 'John Doe',
            'password' => Hash::make('password123'), // Password yang di-hash
            'alamat' => '123 Main Street',
            'nohp' => '081234567890',
            'role' => 'admin',
            'jabatan' => 'Administrator',
            'nama_lengkap' => 'Johnathan Doe',
        ]);

        // Data untuk user mahasiswa
        User::updateOrCreate([
            'email' => 'jane@example.com'
        ], [
            'name' => 'Jane Smith',
            'password' => Hash::make('password456'), // Password yang di-hash
            'alamat' => '456 Elm Street',
            'nohp' => '089876543210',
            'role' => 'mahasiswa',
            'jabatan' => 'Student',
            'nama_lengkap' => 'Jane Smith',
        ]);

        // Data untuk user kaprodi
        User::updateOrCreate([
            'email' => 'alice.johnson@example.com'
        ], [
            'name' => 'Dr. Alice Johnson',
            'password' => Hash::make('password789'), // Password yang di-hash
            'alamat' => '789 Pine Avenue',
            'nohp' => '087654321098',
            'role' => 'kaprodi',
            'jabatan' => 'Kaprodi',
            'nama_lengkap' => 'Alice Johnson',
        ]);

        // Anda bisa menambahkan lebih banyak data sesuai kebutuhan
    }
}
