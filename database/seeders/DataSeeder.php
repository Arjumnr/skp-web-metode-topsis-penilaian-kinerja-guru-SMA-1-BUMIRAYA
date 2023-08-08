<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => bcrypt('123'),
            'created_at' => now(),
        ]);

//         1) Kompetensi Pedagodik (K1)
// Kategori yang di nilai di kompetensi pedagodik:
// a) Menguasai karakteristik peserta didik dari
// aspek fisik, moral, sosial, kultural, emosional,
// dan intelektual.
// b) .
// c) .
// d) Menyelenggarakan pembelajaran yang
// mendidik.
// e) Memanfaatkan teknologi informasi dan
// komunikasi untuk kepentingan pembelajaran.
// f) Memfasilitasi pengembangan potensi peserta
// didik untuk mengaktualisasikan berbagai
// potensi yang dimiliki.
// g) Berkomunikasi secara efektif, empatik, dan
// santun dengan peserta didik.
// h) Menyelenggarakan penilaian dan evaluasi
// proses dan hasil belajar.
// i) Memanfaatkan hasil penilaian dan evaluasi
// untuk kepentingan pembelajaran.
// j) Melakukan tindakan reflektif untuk
// peningkatan kualitas pembelajaran
// 2) Kompetensi Kepribadian (K2)
// Kategori penilaian kompetensi Kepribadian:
// a) Bertindak sesuai dengan norma agama,
// hukum, sosial, dan kebudayaan nasional
// Indonesia.
// b) Menampilkan diri sebagai pribadi yang jujur,
// berakhlak mulia, dan teladan bagi peserta didik
// dan masyarakat.
// c) Menampilkan diri sebagai pribadi yang
// mantap, stabil, dewasa, arif, dan berwibawa.
// d) Menunjukkan etos kerja, tanggung jawab yang
// tinggi, rasa bangga menjadi guru, dan rasa
// percaya diri.
// e) Menjunjung tinggi kode etik profesi guru.
// 3) Kompetensi Sosial (K3)
// Kategori penilaian kompetensi kepribadian:
// a) Bersikap inklusif, bertindak objektif, serta
// tidak diskriminatif karena pertimbangan jenis
// kelamin, agama, ras, kondisi fisik, latar
// belakang keluarga, dan status sosial ekonomi.
// b) Berkomunikasi secara efektif, empatik, dan
// santun dengan sesama pendidik, tenaga
// kependidikan, orang tua, dan masyarakat.
// c) Beradaptasi di tempat bertugas di seluruh
// wilayah Republik Indonesia yang memiliki
// keragaman sosial budaya.
// d) Berkomunikasi dengan komunitas profesi
// sendiri dan profesi lain secara lisan dan tulisan
// atau bentuk lain.
// 4) Kompetensi Profesional (K4)
// Kategori kompetensi profesional:
// a) Menguasai materi, struktur, konsep, dan pola
// pikir keilmuan yang mendukung mata
// pelajaran yang diampu.
// b) Menguasai standar kompetensi dan
// kompetensi dasar mata pelajaran/bidang
// pengembangan yang diampu.
// c) Mengembangkan materi pembelajaran yang
// diampu secara kreatif.
// d) Mengembangkan keprofesionalan secara
// berkelanjutan dengan melakukan tindakan
// reflektif.
// e) Memanfaatkan teknologi informasi dan
// komunikasi untuk berkomunikasi dan
// mengembangkan diri. 

        $dataPertanyaan = [
            [
                'kode' => 'K1',
                'nama_kriteria' => 'Kompetensi Pedagodik (K1)',
                'pertanyaan' => 'Menguasai karakteristik peserta didik dari aspek fisik, moral, sosial, kultural, emosional, dan intelektual',
            ],
            [
                'kode' => 'K1',
                'nama_kriteria' => 'Kompetensi Pedagodik (K1)',
                'pertanyaan' => 'Menguasai teori belajar dan prinsip-prinsip pembelajaran yang mendidik',
            ],
            [
                'kode' => 'K1',
                'nama_kriteria' => 'Kompetensi Pedagodik (K1)',
                'pertanyaan' => 'Mengembangkan kurikulum yang terkait dengan mata pelajaran/bidang pengembangan yang diampu',
            ],
            [
                'kode' => 'K1',
                'nama_kriteria' => 'Kompetensi Pedagodik (K1)',
                'pertanyaan' => 'Menyelenggarakan pembelajaran yang
                mendidik',
            ],
            [
                'kode' => 'K1',
                'nama_kriteria' => 'Kompetensi Pedagodik (K1)',
                'pertanyaan' => 'Memanfaatkan teknologi informasi dan
                komunikasi untuk kepentingan pembelajaran',
            ],
            [
                'kode' => 'K1',
                'nama_kriteria' => 'Kompetensi Pedagodik (K1)',
                'pertanyaan' => 'Memfasilitasi pengembangan potensi peserta
                didik untuk mengaktualisasikan berbagai
                potensi yang dimiliki',
            ],
            [
                'kode' => 'K1',
                'nama_kriteria' => 'Kompetensi Pedagodik (K1)',
                'pertanyaan' => 'Berkomunikasi secara efektif, empatik, dan
                santun dengan peserta didik',
            ],
            [
                'kode' => 'K1',
                'nama_kriteria' => 'Kompetensi Pedagodik (K1)',
                'pertanyaan' => 'Menyelenggarakan penilaian dan evaluasi
                proses dan hasil belajar',
            ],
            [
                'kode' => 'K1',
                'nama_kriteria' => 'Kompetensi Pedagodik (K1)',
                'pertanyaan' => 'Memanfaatkan hasil penilaian dan evaluasi
                untuk kepentingan pembelajaran',
            ],
            [
                'kode' => 'K1',
                'nama_kriteria' => 'Kompetensi Pedagodik (K1)',
                'pertanyaan' => 'Melakukan tindakan reflektif untuk
                peningkatan kualitas pembelajaran',
            ],
        ];

        foreach ($dataPertanyaan as $pertanyaan) {
            DB::table('kriteria')->insert([
                'kode' => $pertanyaan['kode'],
                'nama_kriteria' => $pertanyaan['nama_kriteria'],
                'pertanyaan' => $pertanyaan['pertanyaan'],
                'created_at' => now(),
            ]);
        }

        $dataGuru = [
            [
                'nip' => '123456789',
                'nama_guru' => 'Ibnu, S.Pd',
                'jenis_kelamin' => 'Laki-laki',
                'no_telp' => '08123456789',
                'foto' => '',
            ],

        ];

        foreach ($dataGuru as $guru) {
            DB::table('guru')->insert([
                'nip' => $guru['nip'],
                'nama_guru' => $guru['nama_guru'],
                'jenis_kelamin' => $guru['jenis_kelamin'],
                'no_telp' => $guru['no_telp'],
                'foto' => $guru['foto'],
                'created_at' => now(),
            ]);
        }
    }
}
