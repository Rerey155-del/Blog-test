<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dosen; // Mengimpor model Dosen

class DosenSeeder extends Seeder
{
    public function run(): void
    {
        // Menambahkan data dengan Eloquent
        Dosen::create([
            'nama' => 'Dr. Bambang',
            'email' => 'bambang@example.com',
            'mata_kuliah' => 'Pemrograman Web',
        ]);

        Dosen::create([
            'nama' => 'Prof. Siti',
            'email' => 'siti@example.com',
            'mata_kuliah' => 'Basis Data',
        ]);
    }
}
