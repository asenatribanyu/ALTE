<?php

namespace Database\Seeders;

use App\Models\Formulir;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(10)->create([
            'email_verified_at' => '2024-10-14 10:28:18',
            'role' => 'mahasiswa',
        ]);
        
        Formulir::create([
            'name' => 'Surat Bon Peminjaman Alat',
            'file' => 'surat_bon_peminjaman_alat.pdf'
        ]);Formulir::create([
            'name' => 'Berita Acara Pelaksanaan Praktikum',
            'file' => 'berita_acara_pelaksanaan_praktikum.pdf'
        ]);Formulir::create([
            'name' => 'Daftar Penilaian Pelaksanaan Praktikum',
            'file' => 'daftar_penilaian_pelaksanaan_praktikum.pdf'
        ]);Formulir::create([
            'name' => 'Daftar Nilai Akhir Praktikum',
            'file' => 'daftar_nilai_akhir_praktikum.pdf'
        ]);Formulir::create([
            'name' => 'Daftar Inventaris Alat Laboratorium',
            'file' => 'daftar_inventaris_alat_labor.pdf'
        ]);
    }
}
