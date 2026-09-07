<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Akun Admin Utama
        User::create([
            'name' => 'Admin OSIS',
            'email' => 'admin@osis.sch.id',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        // Akun Pemilih (Siswa)
        User::create([
            'name' => 'Siswa Pemilih 1',
            'email' => 'siswa1@osis.sch.id',
            'password' => Hash::make('password123'),
            'role' => 'siswa',
        ]);

        // Akun Pemilih (Guru)
        User::create([
            'name' => 'Guru Pemilih 1',
            'email' => 'guru1@osis.sch.id',
            'password' => Hash::make('password123'),
            'role' => 'guru',
        ]);
    }
}