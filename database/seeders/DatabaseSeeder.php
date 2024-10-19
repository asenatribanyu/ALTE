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
        ]);
        
        Formulir::create([
            'name' => 'Berita Acara Pelaksanaan Praktikum',
            'file' => 'berita_acara_pelaksanaan_praktikum.pdf'
        ]);
        
        Formulir::create([
            'name' => 'Daftar Penilaian Pelaksanaan Praktikum',
            'file' => 'daftar_penilaian_pelaksanaan_praktikum.pdf'
        ]);
        
        Formulir::create([
            'name' => 'Daftar Nilai Akhir Praktikum',
            'file' => 'daftar_nilai_akhir_praktikum.pdf'
        ]);
        
        Formulir::create([
            'name' => 'Daftar Inventaris Alat Laboratorium',
            'file' => 'daftar_inventaris_alat_labor.pdf'
        ]);

        // Artikel::create([
        //     'author' => 'Admin',
        //     'judul' => 'Kata Pengantar',
        //     'deskripsi' => 'Lorem ipsum odor amet, consectetuer adipiscing elit. Hac mi elit velit hendrerit nullam tempus dictum interdum. Ullamcorper porta risus rhoncus nisl donec porttitor senectus cubilia. Inceptos habitasse felis scelerisque hendrerit scelerisque scelerisque. Platea faucibus faucibus ligula magna donec, leo at inceptos. Placerat ridiculus consequat feugiat et dui. Varius feugiat mi; consequat imperdiet ad leo in? Porttitor elit risus tempus aliquet, vel sem.',
        //     'file' => 'artikel/Kata Pengantar.pdf'
        // ]);

        Artikel::create([
            'author' => 'Admin',
            'judul' => 'Panduan Keselamatan',
            'deskripsi' => 'Lorem ipsum odor amet, consectetuer adipiscing elit. Hac mi elit velit hendrerit nullam tempus dictum interdum. Ullamcorper porta risus rhoncus nisl donec porttitor senectus cubilia. Inceptos habitasse felis scelerisque hendrerit scelerisque scelerisque. Platea faucibus faucibus ligula magna donec, leo at inceptos. Placerat ridiculus consequat feugiat et dui. Varius feugiat mi; consequat imperdiet ad leo in? Porttitor elit risus tempus aliquet, vel sem.',
            'file' => 'artikel/Panduan Keselamatan.pdf'
        ]);

        Artikel::create([
            'author' => 'Admin',
            'judul' => 'Prosdur Inventaris Peralatan Laboratorium',
            'deskripsi' => 'Lorem ipsum odor amet, consectetuer adipiscing elit. Hac mi elit velit hendrerit nullam tempus dictum interdum. Ullamcorper porta risus rhoncus nisl donec porttitor senectus cubilia. Inceptos habitasse felis scelerisque hendrerit scelerisque scelerisque. Platea faucibus faucibus ligula magna donec, leo at inceptos. Placerat ridiculus consequat feugiat et dui. Varius feugiat mi; consequat imperdiet ad leo in? Porttitor elit risus tempus aliquet, vel sem.',
            'file' => 'artikel/Prosdur inventaris peralatan labor.pdf'
        ]);

        Artikel::create([
            'author' => 'Admin',
            'judul' => 'Prosedur Izin Melaksanakan Tugas Akhir di Laboratorium',
            'deskripsi' => 'Lorem ipsum odor amet, consectetuer adipiscing elit. Hac mi elit velit hendrerit nullam tempus dictum interdum. Ullamcorper porta risus rhoncus nisl donec porttitor senectus cubilia. Inceptos habitasse felis scelerisque hendrerit scelerisque scelerisque. Platea faucibus faucibus ligula magna donec, leo at inceptos. Placerat ridiculus consequat feugiat et dui. Varius feugiat mi; consequat imperdiet ad leo in? Porttitor elit risus tempus aliquet, vel sem.',
            'file' => 'artikel/Prosedur izin melaksanakan tugas akhir di laboratorium.pdf'
        ]);

        Artikel::create([
            'author' => 'Admin',
            'judul' => 'Prosedur Keselamatan Kegiatan Laboratorium',
            'deskripsi' => 'Lorem ipsum odor amet, consectetuer adipiscing elit. Hac mi elit velit hendrerit nullam tempus dictum interdum. Ullamcorper porta risus rhoncus nisl donec porttitor senectus cubilia. Inceptos habitasse felis scelerisque hendrerit scelerisque scelerisque. Platea faucibus faucibus ligula magna donec, leo at inceptos. Placerat ridiculus consequat feugiat et dui. Varius feugiat mi; consequat imperdiet ad leo in? Porttitor elit risus tempus aliquet, vel sem.',
            'file' => 'artikel/Prosedur keselamatan kegiatan laboratorium.pdf'
        ]);

        Artikel::create([
            'author' => 'Admin',
            'judul' => 'Prosedur Pelaksanaan Praktikum',
            'deskripsi' => 'Lorem ipsum odor amet, consectetuer adipiscing elit. Hac mi elit velit hendrerit nullam tempus dictum interdum. Ullamcorper porta risus rhoncus nisl donec porttitor senectus cubilia. Inceptos habitasse felis scelerisque hendrerit scelerisque scelerisque. Platea faucibus faucibus ligula magna donec, leo at inceptos. Placerat ridiculus consequat feugiat et dui. Varius feugiat mi; consequat imperdiet ad leo in? Porttitor elit risus tempus aliquet, vel sem.',
            'file' => 'artikel/prosedur pelaksanaan praktikum.pdf'
        ]);

        Artikel::create([
            'author' => 'Admin',
            'judul' => 'Prosedur Peminjaman Peralatan Laboratorium',
            'deskripsi' => 'Lorem ipsum odor amet, consectetuer adipiscing elit. Hac mi elit velit hendrerit nullam tempus dictum interdum. Ullamcorper porta risus rhoncus nisl donec porttitor senectus cubilia. Inceptos habitasse felis scelerisque hendrerit scelerisque scelerisque. Platea faucibus faucibus ligula magna donec, leo at inceptos. Placerat ridiculus consequat feugiat et dui. Varius feugiat mi; consequat imperdiet ad leo in? Porttitor elit risus tempus aliquet, vel sem.',
            'file' => 'artikel/Prosedur peminjaman peralatan Labor.pdf'
        ]);

        Artikel::create([
            'author' => 'Admin',
            'judul' => 'Prosedur Pengadaan Bahan Habis Pakai Laboratorium',
            'deskripsi' => 'Lorem ipsum odor amet, consectetuer adipiscing elit. Hac mi elit velit hendrerit nullam tempus dictum interdum. Ullamcorper porta risus rhoncus nisl donec porttitor senectus cubilia. Inceptos habitasse felis scelerisque hendrerit scelerisque scelerisque. Platea faucibus faucibus ligula magna donec, leo at inceptos. Placerat ridiculus consequat feugiat et dui. Varius feugiat mi; consequat imperdiet ad leo in? Porttitor elit risus tempus aliquet, vel sem.',
            'file' => 'artikel/Prosedur pengadaan bahan habis pakai laboratorium.pdf'
        ]);

        Artikel::create([
            'author' => 'Admin',
            'judul' => 'Prosedur Perbaikan Alat Laboratorium',
            'deskripsi' => 'Lorem ipsum odor amet, consectetuer adipiscing elit. Hac mi elit velit hendrerit nullam tempus dictum interdum. Ullamcorper porta risus rhoncus nisl donec porttitor senectus cubilia. Inceptos habitasse felis scelerisque hendrerit scelerisque scelerisque. Platea faucibus faucibus ligula magna donec, leo at inceptos. Placerat ridiculus consequat feugiat et dui. Varius feugiat mi; consequat imperdiet ad leo in? Porttitor elit risus tempus aliquet, vel sem.',
            'file' => 'artikel/prosedur perbaikan alat labor.pdf'
        ]);

        Artikel::create([
            'author' => 'Admin',
            'judul' => 'Sturktur Organisasi',
            'deskripsi' => 'Lorem ipsum odor amet, consectetuer adipiscing elit. Hac mi elit velit hendrerit nullam tempus dictum interdum. Ullamcorper porta risus rhoncus nisl donec porttitor senectus cubilia. Inceptos habitasse felis scelerisque hendrerit scelerisque scelerisque. Platea faucibus faucibus ligula magna donec, leo at inceptos. Placerat ridiculus consequat feugiat et dui. Varius feugiat mi; consequat imperdiet ad leo in? Porttitor elit risus tempus aliquet, vel sem.',
            'file' => 'artikel/sturktur organisasi.pdf'
        ]);

        Artikel::create([
            'author' => 'Admin',
            'judul' => 'Tata Tertib Praktikum',
            'deskripsi' => 'Lorem ipsum odor amet, consectetuer adipiscing elit. Hac mi elit velit hendrerit nullam tempus dictum interdum. Ullamcorper porta risus rhoncus nisl donec porttitor senectus cubilia. Inceptos habitasse felis scelerisque hendrerit scelerisque scelerisque. Platea faucibus faucibus ligula magna donec, leo at inceptos. Placerat ridiculus consequat feugiat et dui. Varius feugiat mi; consequat imperdiet ad leo in? Porttitor elit risus tempus aliquet, vel sem.',
            'file' => 'artikel/tata tertib praktikum.pdf'
        ]);
    }
}
