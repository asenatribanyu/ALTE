<?php

namespace Database\Seeders;

use App\Models\Artikel;
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

        Artikel::create([
            'author' => 'Admin',
            'judul' => 'Kata Pengantar',
            'file' => 'artikel/Kata Pengantar.pdf'
        ]);
        Artikel::create([
            'author' => 'Admin',
            'judul' => 'Panduan Keselamatan',
            'file' => 'artikel/Panduan Keselamatan.pdf'
        ]);
        Artikel::create([
            'author' => 'Admin',
            'judul' => 'Prosdur Inventaris Peralatan Laboratorium',
            'file' => 'artikel/Prosdur inventaris peralatan labor.pdf'
        ]);
        Artikel::create([
            'author' => 'Admin',
            'judul' => 'Prosedur Izin Melaksanakan Tugas Akhir di Laboratorium',
            'file' => 'artikel/Prosedur izin melaksanakan tugas akhir di laboratorium.pdf'
        ]);
        Artikel::create([
            'author' => 'Admin',
            'judul' => 'Prosedur Keselamatan Kegiatan Laboratorium',
            'file' => 'artikel/Prosedur keselamatan kegiatan laboratorium.pdf'
        ]);
        Artikel::create([
            'author' => 'Admin',
            'judul' => 'Prosedur Pelaksanaan Praktikum',
            'file' => 'artikel/prosedur pelaksanaan praktikum.pdf'
        ]);
        Artikel::create([
            'author' => 'Admin',
            'judul' => 'Prosedur Peminjaman Peralatan Laboratorium',
            'file' => 'artikel/Prosedur peminjaman peralatan Labor.pdf'
        ]);
        Artikel::create([
            'author' => 'Admin',
            'judul' => 'Prosedur Pengadaan Bahan Habis Pakai Laboratorium',
            'file' => 'artikel/Prosedur pengadaan bahan habis pakai laboratorium.pdf'
        ]);
        Artikel::create([
            'author' => 'Admin',
            'judul' => 'Prosedur Perbaikan Alat Laboratorium',
            'file' => 'artikel/prosedur perbaikan alat labor.pdf'
        ]);
        Artikel::create([
            'author' => 'Admin',
            'judul' => 'Sturktur Organisasi',
            'file' => 'artikel/sturktur organisasi.pdf'
        ]);
        Artikel::create([
            'author' => 'Admin',
            'judul' => 'Tata Tertib Praktikum',
            'file' => 'artikel/tata tertib praktikum.pdf'
        ]);
    }
}
