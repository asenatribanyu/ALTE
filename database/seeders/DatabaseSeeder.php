<?php

namespace Database\Seeders;

use App\Models\Artikel;
use App\Models\Artikelfile;
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

        User::create([
            'name' => 'Admin',
            'npm' => '000000',
            'password' => bcrypt('admin'),
            'email'=> 'admin@gmail.com',
            'email_verified_at' => '2024-10-14 10:28:18',
            'role' => 'admin',
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
            'file' => 'artikel/Panduan Keselamatan.pdf',
            'thumbnail' => 'thumbnail/panduan keselamatan kegiatan praktikum.png'
        ]);

        Artikelfile::create([
            'artikel_id' => '1',
            'file' => 'artikelfile/Panduan Keselamatan-1.png'
        ]);

        Artikelfile::create([
            'artikel_id' => '1',
            'file' => 'artikelfile/Panduan Keselamatan-2.png'
        ]);

        Artikel::create([
            'author' => 'Admin',
            'judul' => 'Prosedur Inventaris Peralatan Laboratorium',
            'deskripsi' => 'Lorem ipsum odor amet, consectetuer adipiscing elit. Hac mi elit velit hendrerit nullam tempus dictum interdum. Ullamcorper porta risus rhoncus nisl donec porttitor senectus cubilia. Inceptos habitasse felis scelerisque hendrerit scelerisque scelerisque. Platea faucibus faucibus ligula magna donec, leo at inceptos. Placerat ridiculus consequat feugiat et dui. Varius feugiat mi; consequat imperdiet ad leo in? Porttitor elit risus tempus aliquet, vel sem.',
            'file' => 'artikel/Prosdur inventaris peralatan labor.pdf',
            'thumbnail' => 'thumbnail/prosedur inventaris peralatan labor.png'
        ]);

        Artikelfile::create([
            'artikel_id' => '2',
            'file' => 'artikelfile/Prosedur inventaris peralatan labor-1.png'
        ]);

        Artikelfile::create([
            'artikel_id' => '2',
            'file' => 'artikelfile/Prosedur inventaris peralatan labor-2.png'
        ]);

        Artikel::create([
            'author' => 'Admin',
            'judul' => 'Prosedur Izin Melaksanakan Tugas Akhir di Laboratorium',
            'deskripsi' => 'Lorem ipsum odor amet, consectetuer adipiscing elit. Hac mi elit velit hendrerit nullam tempus dictum interdum. Ullamcorper porta risus rhoncus nisl donec porttitor senectus cubilia. Inceptos habitasse felis scelerisque hendrerit scelerisque scelerisque. Platea faucibus faucibus ligula magna donec, leo at inceptos. Placerat ridiculus consequat feugiat et dui. Varius feugiat mi; consequat imperdiet ad leo in? Porttitor elit risus tempus aliquet, vel sem.',
            'file' => 'artikel/Prosedur izin melaksanakan tugas akhir di laboratorium.pdf',
            'thumbnail' => 'thumbnail/prosedur melaksanakan tugas akhir di labor.png'
        ]);

        Artikelfile::create([
            'artikel_id' => '3',
            'file' => 'artikelfile/prosedur izin melaksanakan tugas akhir di laboratorium-1.png'
        ]);

        Artikel::create([
            'author' => 'Admin',
            'judul' => 'Prosedur Keselamatan Kegiatan Laboratorium',
            'deskripsi' => 'Lorem ipsum odor amet, consectetuer adipiscing elit. Hac mi elit velit hendrerit nullam tempus dictum interdum. Ullamcorper porta risus rhoncus nisl donec porttitor senectus cubilia. Inceptos habitasse felis scelerisque hendrerit scelerisque scelerisque. Platea faucibus faucibus ligula magna donec, leo at inceptos. Placerat ridiculus consequat feugiat et dui. Varius feugiat mi; consequat imperdiet ad leo in? Porttitor elit risus tempus aliquet, vel sem.',
            'file' => 'artikel/Prosedur keselamatan kegiatan laboratorium.pdf',
            'thumbnail' => 'thumbnail/prosedur keselamatan kegiatan di labor.png'
        ]);

         Artikelfile::create([
            'artikel_id' => '4',
            'file' => 'artikelfile/Prosedur keselamatan kegiatan laboratorium-1.png'
        ]);
        Artikelfile::create([
            'artikel_id' => '4',
            'file' => 'artikelfile/Prosedur keselamatan kegiatan laboratorium-2.png'
        ]);

        Artikel::create([
            'author' => 'Admin',
            'judul' => 'Prosedur Pelaksanaan Praktikum',
            'deskripsi' => 'Lorem ipsum odor amet, consectetuer adipiscing elit. Hac mi elit velit hendrerit nullam tempus dictum interdum. Ullamcorper porta risus rhoncus nisl donec porttitor senectus cubilia. Inceptos habitasse felis scelerisque hendrerit scelerisque scelerisque. Platea faucibus faucibus ligula magna donec, leo at inceptos. Placerat ridiculus consequat feugiat et dui. Varius feugiat mi; consequat imperdiet ad leo in? Porttitor elit risus tempus aliquet, vel sem.',
            'file' => 'artikel/prosedur pelaksanaan praktikum.pdf',
            'thumbnail' => 'thumbnail/prosedur pelaksanaan praktikum.png'
        ]);

        Artikelfile::create([
            'artikel_id' => '5',
            'file' => 'artikelfile/prosedur pelaksanaan praktikum-1.png'
        ]);
        Artikelfile::create([
            'artikel_id' => '5',
            'file' => 'artikelfile/prosedur pelaksanaan praktikum-2.png'
        ]);

        Artikel::create([
            'author' => 'Admin',
            'judul' => 'Prosedur Peminjaman Peralatan Laboratorium',
            'deskripsi' => 'Lorem ipsum odor amet, consectetuer adipiscing elit. Hac mi elit velit hendrerit nullam tempus dictum interdum. Ullamcorper porta risus rhoncus nisl donec porttitor senectus cubilia. Inceptos habitasse felis scelerisque hendrerit scelerisque scelerisque. Platea faucibus faucibus ligula magna donec, leo at inceptos. Placerat ridiculus consequat feugiat et dui. Varius feugiat mi; consequat imperdiet ad leo in? Porttitor elit risus tempus aliquet, vel sem.',
            'file' => 'artikel/Prosedur peminjaman peralatan Labor.pdf',
            'thumbnail' => 'thumbnail/prosedur peminjaman peralatan labor.png'
        ]);

        Artikelfile::create([
            'artikel_id' => '6',
            'file' => 'artikelfile/Prosedur peminjaman peralatan  Labor-1.png'
        ]);
        Artikelfile::create([
            'artikel_id' => '6',
            'file' => 'artikelfile/Prosedur peminjaman peralatan  Labor-2.png'
        ]);

        Artikel::create([
            'author' => 'Admin',
            'judul' => 'Prosedur Pengadaan Bahan Habis Pakai Laboratorium',
            'deskripsi' => 'Lorem ipsum odor amet, consectetuer adipiscing elit. Hac mi elit velit hendrerit nullam tempus dictum interdum. Ullamcorper porta risus rhoncus nisl donec porttitor senectus cubilia. Inceptos habitasse felis scelerisque hendrerit scelerisque scelerisque. Platea faucibus faucibus ligula magna donec, leo at inceptos. Placerat ridiculus consequat feugiat et dui. Varius feugiat mi; consequat imperdiet ad leo in? Porttitor elit risus tempus aliquet, vel sem.',
            'file' => 'artikel/Prosedur pengadaan bahan habis pakai laboratorium.pdf',
            'thumbnail' => 'thumbnail/prosedur pengadaan bahan habis pakai labor.png'
        ]);
        Artikelfile::create([
            'artikel_id' => '7',
            'file' => 'artikelfile/Prosedur pengadaan bahan habis pakai laboratorium-1.png'
        ]);

        Artikel::create([
            'author' => 'Admin',
            'judul' => 'Prosedur Perbaikan Peralatan Laboratorium',
            'deskripsi' => 'Lorem ipsum odor amet, consectetuer adipiscing elit. Hac mi elit velit hendrerit nullam tempus dictum interdum. Ullamcorper porta risus rhoncus nisl donec porttitor senectus cubilia. Inceptos habitasse felis scelerisque hendrerit scelerisque scelerisque. Platea faucibus faucibus ligula magna donec, leo at inceptos. Placerat ridiculus consequat feugiat et dui. Varius feugiat mi; consequat imperdiet ad leo in? Porttitor elit risus tempus aliquet, vel sem.',
            'file' => 'artikel/prosedur perbaikan alat labor.pdf',
            'thumbnail' => 'thumbnail/prosedur perbaikan peralatan labor.png'
        ]);

        Artikelfile::create([
            'artikel_id' => '8',
            'file' => 'artikelfile/prosedur perbaikan alat labor-1.png'
        ]);

        Artikel::create([
            'author' => 'Admin',
            'judul' => 'Sturktur Organisasi',
            'deskripsi' => 'Lorem ipsum odor amet, consectetuer adipiscing elit. Hac mi elit velit hendrerit nullam tempus dictum interdum. Ullamcorper porta risus rhoncus nisl donec porttitor senectus cubilia. Inceptos habitasse felis scelerisque hendrerit scelerisque scelerisque. Platea faucibus faucibus ligula magna donec, leo at inceptos. Placerat ridiculus consequat feugiat et dui. Varius feugiat mi; consequat imperdiet ad leo in? Porttitor elit risus tempus aliquet, vel sem.',
            'file' => 'artikel/sturktur organisasi.pdf',
            'thumbnail' => 'thumbnail/struktur organisasi.png'
        ]);

        Artikelfile::create([
            'artikel_id' => '9',
            'file' => 'artikelfile/struktur organisasi-1.png'
        ]);
        Artikelfile::create([
            'artikel_id' => '9',
            'file' => 'artikelfile/struktur organisasi-2.png'
        ]);

        Artikel::create([
            'author' => 'Admin',
            'judul' => 'Tata Tertib Pelaksanaan Praktikum',
            'deskripsi' => 'Lorem ipsum odor amet, consectetuer adipiscing elit. Hac mi elit velit hendrerit nullam tempus dictum interdum. Ullamcorper porta risus rhoncus nisl donec porttitor senectus cubilia. Inceptos habitasse felis scelerisque hendrerit scelerisque scelerisque. Platea faucibus faucibus ligula magna donec, leo at inceptos. Placerat ridiculus consequat feugiat et dui. Varius feugiat mi; consequat imperdiet ad leo in? Porttitor elit risus tempus aliquet, vel sem.',
            'file' => 'artikel/tata tertib praktikum.pdf',
            'thumbnail' => 'thumbnail/tata tertib pelaksanaan praktikum.png'
        ]);

        Artikelfile::create([
            'artikel_id' => '10',
            'file' => 'artikelfile/tata tertib praktikum-1.png'
        ]);
        
        Artikelfile::create([
            'artikel_id' => '10',
            'file' => 'artikelfile/tata tertib praktikum-2.png'
        ]);
    }
}
