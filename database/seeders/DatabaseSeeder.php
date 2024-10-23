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
        //     'deskripsi' => '',
        //     'file' => 'artikel/Kata Pengantar.pdf'
        // ]);

        Artikel::create([
            'author' => 'Admin',
            'judul' => 'Panduan Keselamatan',
            'deskripsi' => 'Dokumen ini adalah Panduan Keselamatan Kegiatan Praktikum, yang berfokus pada keselamatan saat melakukan kegiatan di laboratorium, khususnya terkait listrik. Panduan ini mencakup tips untuk menghindari bahaya listrik, seperti penggunaan alat pelindung diri (APD) yang sesuai, pengecekan peralatan sebelum digunakan, dan langkah-langkah jika terjadi kecelakaan listrik. Praktikan diharapkan selalu waspada, mematuhi aturan, dan melaporkan kerusakan yang berpotensi membahayakan kepada teknisi atau pembimbing.',
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
            'deskripsi' => 'Dokumen ini mengatur Prosedur Inventarisasi Peralatan Laboratorium. Isinya mencakup langkah-langkah dalam pencatatan, pengecekan, dan pendataan peralatan labor yang dilakukan secara berkala setiap 6 bulan. Proses ini melibatkan teknisi atau laboran yang mencatat jumlah, kondisi, dan informasi terkait peralatan, serta kepala laboratorium yang memeriksa dan mengoordinasikan data tersebut dengan program studi. Tujuannya agar peralatan tercatat dengan baik dan dapat dimanfaatkan secara optimal sesuai dengan standar mutu yang ditetapkan.',
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
            'deskripsi' => 'Dokumen ini menjelaskan Prosedur Izin Melaksanakan Tugas Akhir di Laboratorium. Isinya mengatur langkah-langkah yang harus diikuti mahasiswa untuk mendapatkan izin menggunakan laboratorium dalam penyelesaian tugas akhir. Proses dimulai dengan pengajuan surat permohonan, diikuti dengan persiapan laboratorium oleh teknisi, dan berakhir dengan pelaksanaan tugas akhir di bawah bimbingan dosen. Setelah tugas selesai, mahasiswa melaporkan ke teknisi dan mengembalikan kokarde yang dipinjam.',
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
            'deskripsi' => 'Dokumen ini membahas Prosedur Keselamatan Kegiatan di Laboratorium, yang mengatur tata cara kerja yang aman di laboratorium. Isinya mencakup langkah-langkah untuk persiapan, pelaksanaan, dan penyelesaian kegiatan di laboratorium, termasuk prosedur jika terjadi keadaan darurat seperti kebakaran atau gempa. Prosedur ini melibatkan teknisi, pengguna laboratorium, dan pembimbing, serta menekankan pentingnya koordinasi dan kepatuhan terhadap aturan keselamatan selama bekerja di laboratorium.',
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
            'deskripsi' => 'Dokumen ini menjelaskan Prosedur Pelaksanaan Praktikum. Di dalamnya terdapat panduan tentang bagaimana praktikum dilakukan, mulai dari perencanaan jadwal oleh kepala laboratorium, persiapan alat oleh teknisi, hingga pelaksanaan praktikum oleh mahasiswa dengan bimbingan dosen atau instruktur. Mahasiswa juga dibimbing dalam analisis data dan penulisan laporan. Setelah praktikum selesai, dilakukan ujian dan penilaian, yang kemudian hasilnya dicatat dan diarsipkan. Semua ini bertujuan agar praktikum berjalan lancar dan sesuai dengan standar yang ditetapkan.',
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
            'deskripsi' => 'Dokumen ini berisi panduan Prosedur Peminjaman Peralatan Laboratorium. Prosesnya dimulai dengan mahasiswa mengajukan surat permohonan peminjaman yang diketahui oleh dosen pembimbing kepada kepala laboratorium. Kemudian, teknisi atau laboran menyiapkan peralatan yang diperlukan dan mengarsipkan bon peminjaman. Mahasiswa menggunakan peralatan di bawah pengawasan dosen atau laboran, dan setelah selesai, mereka harus mengembalikan peralatan tersebut. Teknisi akan memeriksa kondisi alat, dan jika ada kerusakan, mahasiswa dapat dikenakan sanksi. Jika peralatan dalam kondisi baik, bon peminjaman dikembalikan kepada mahasiswa.',
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
            'deskripsi' => 'Dokumen ini berisi panduan tentang Prosedur Pengadaan Bahan Habis Pakai Laboratorium. Di dalamnya dijelaskan langkah-langkah pengadaan bahan yang diperlukan untuk praktikum, mulai dari teknisi atau laboran mengusulkan kebutuhan, hingga pengadaan dan pendistribusian bahan oleh bagian perencanaan. Proses ini melibatkan beberapa pihak seperti kepala laboratorium, program studi, dan jurusan, untuk memastikan bahan tersedia tepat waktu dan sesuai kebutuhan.',
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
            'deskripsi' => 'Dokumen ini menjelaskan langkah-langkah untuk memperbaiki alat laboratorium. Di dalamnya ada panduan tentang cara melaporkan kerusakan, mengecek, memperbaiki, dan mengembalikan alat yang rusak. Tujuannya supaya proses perbaikan alat berjalan lancar dan semua pihak yang terlibat, seperti teknisi, dosen, dan kepala lab, bisa bekerja sama dengan baik agar alat-alat lab selalu siap digunakan.',
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
            'deskripsi' => 'Dokumen ini menjelaskan Struktur Organisasi Laboratorium. Di dalamnya diuraikan peran dan tanggung jawab masing-masing anggota yang terlibat dalam pengelolaan laboratorium, termasuk kepala laboratorium, dosen pengampu, teknisi, dan dosen koordinator bidang kajian (KBK). Kepala laboratorium bertanggung jawab atas seluruh kegiatan dan aset laboratorium, sedangkan dosen pengampu mengelola pelaksanaan praktikum. Teknisi membantu dalam perawatan alat serta persiapan laboratorium, dan dosen KBK berperan dalam bimbingan dan pengembangan kegiatan laboratorium.',
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
            'deskripsi' => 'Dokumen ini berisi Tata Tertib Pelaksanaan Praktikum yang harus diikuti oleh praktikan selama kegiatan praktikum. Beberapa aturan penting termasuk kewajiban mengikuti seluruh modul percobaan, datang tepat waktu, memakai baju praktikum, dan menjaga peralatan laboratorium. Praktikan juga dilarang menggunakan peralatan tanpa izin instruktur dan harus mematuhi prosedur keselamatan. Pelanggaran terhadap tata tertib ini dapat mengakibatkan praktikum dinyatakan gagal.',
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
