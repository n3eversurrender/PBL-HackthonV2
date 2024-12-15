<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class KursusSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');

        // Daftar judul kursus yang berhubungan dengan dunia fabrikasi di Batam
        $kursus_titles = [
            'Pelatihan Pengelasan Listrik untuk Pemula',
            'Pelatihan Pemrograman Mesin CNC di Dunia Fabrikasi',
            'Desain dan Prototyping 3D dalam Proses Fabrikasi',
            'Pengenalan Mesin Pemotong Laser untuk Fabrikasi',
            'Pembuatan Mold dan Die untuk Produksi Massal',
            'Teknik Pengelasan MIG dan TIG untuk Fabrikasi',
            'Manajemen Proyek di Industri Fabrikasi',
            'Teknik Pemrograman Robot Industri di Batam',
            'Pelatihan Pengoperasian Mesin Milling untuk Fabrikasi',
            'Pembuatan Prototipe dengan Teknologi Additive Manufacturing',
            'Kursus Pengelasan Aluminium dan Baja untuk Fabrikasi',
            'Pengoperasian Mesin Laser Cutting di Batam',
            'Pembuatan Alat Ukur untuk Konstruksi dan Fabrikasi',
            'Pelatihan Pengoperasian Mesin Gerinda di Industri Fabrikasi',
            'Teknik Perawatan Mesin dalam Industri Fabrikasi',
            'Pelatihan Pengelasan Stainless Steel dan Inox',
            'Desain Cetakan untuk Fabrikasi Plastik di Batam',
            'Kursus Pembuatan Alat-alat Konstruksi dari Logam',
            'Teknik Finishing dan Polishing untuk Produk Fabrikasi',
            'Pengantar Desain CAD untuk Produksi Fabrikasi',
            'Pelatihan Pengelasan dan Pembuatan Struktur Baja',
            'Proses Manufaktur Komponen Elektronik untuk Fabrikasi',
            'Pelatihan Pengoperasian Mesin Pabrik Komponen Logam',
            'Kursus Pengelasan Mig dan Tig untuk Profesional',
            'Pembuatan Jembatan dan Struktur Baja untuk Infrastruktur',
            'Teknik Penggunaan Printer 3D dalam Proses Fabrikasi',
            'Teknik Perawatan dan Reparasi Alat Fabrikasi',
            'Pelatihan Menggunakan Mesin Bubut untuk Fabrikasi',
            'Desain dan Pembuatan Produk untuk Industri Konstruksi',
            'Pelatihan Proses Pemotongan dan Perakitan Logam',
        ];

        $lokasi_batam = [
            'Nagoya',
            'Batam Center',
            'Baloi',
            'Muka Kuning',
            'Sei Beduk',
            'Teban',
            'Batu Aji',
            'Lubuk Baja',
            'Simpang Base',
            'Tanjung Uncang',
            'Kabil',
            'Bintan Center',
            'Bintan',
            'Tiban',
            'Kampung Belian',
            'Batam Kota',
            'Jodoh',
            'Batu Besar',
            'Batu Ampar',
            'Teluk Tering'
        ];

        foreach ($kursus_titles as $index => $judul) {
            DB::table('kursus')->insert([
                'pengguna_id' => $faker->numberBetween(1, 5),
                'kategori_id' => $faker->numberBetween(1, 5),
                'judul' => $judul,  // Judul kursus yang sudah disesuaikan
                'deskripsi' => $this->generateDescription($judul),  // Deskripsi yang disesuaikan dengan judul
                'harga' => $faker->randomElement([
                    3100000,
                    3200000,
                    3300000,
                    3400000,
                    3500000,
                    3600000,
                    3700000,
                    3800000,
                    3900000,
                    4000000,
                    4100000,
                    4200000,
                    4300000,
                    4400000,
                    4500000,
                    4600000,
                    4700000,
                    4800000,
                    4900000,
                    5000000,
                    5100000,
                    5200000,
                    5300000,
                    5400000,
                    5500000,
                    5600000,
                    5700000,
                    5800000,
                    5900000,
                    6000000,
                    6100000,
                    6200000,
                    6300000,
                    6400000,
                    6500000,
                    6600000,
                    6700000,
                    6800000,
                    6900000,
                    7000000,
                    7100000,
                    7200000,
                    7300000,
                    7400000,
                    7500000,
                    7600000,
                    7700000,
                    7800000,
                    7900000,
                    8000000,
                    8100000,
                    8200000,
                    8300000,
                    8400000,
                    8500000,
                    8600000,
                    8700000,
                    8800000,
                    8900000,
                    9000000,
                    9100000,
                    9200000,
                    9300000,
                    9400000,
                    9500000,
                    9600000,
                    9700000,
                    9800000,
                    9900000,
                    10000000
                ]),
                'tingkat_kesulitan' => $faker->randomElement(['Pemula', 'Menengah', 'Lanjutan']),
                'status' => $faker->randomElement(['Aktif']),
                'tgl_mulai' => $faker->date('Y-m-d', '2025-12-31'),
                'tgl_selesai' => $faker->date('Y-m-d', '2025-12-31'),
                'kapasitas' => $faker->numberBetween(10, 30),
                'lokasi' => 'Batam ' . $faker->randomElement($lokasi_batam),  // Lokasi di Batam
                'foto_kursus' => null,  // Foto di-set null
            ]);
        }
    }

    // Fungsi untuk generate deskripsi sesuai dengan judul
    private function generateDescription($judul)
    {
        $faker = Faker::create('id_ID');  // Pindahkan Faker ke dalam fungsi

        switch ($judul) {
            case 'Pelatihan Pengelasan Listrik untuk Pemula':
                return "Pelatihan ini ditujukan bagi pemula yang ingin mempelajari dasar-dasar pengelasan listrik. Peserta akan dikenalkan dengan peralatan pengelasan, teknik dasar pengelasan yang aman, serta penerapannya dalam industri fabrikasi. Kursus ini sangat penting bagi mereka yang ingin memulai karir di industri manufaktur di Batam.";
            case 'Pelatihan Pemrograman Mesin CNC di Dunia Fabrikasi':
                return "Kursus ini memberikan pemahaman mendalam tentang pengoperasian mesin CNC (Computer Numerical Control), termasuk cara membaca gambar teknik dan pemrograman mesin untuk produksi komponen presisi. Pelatihan ini sangat relevan dengan kebutuhan industri manufaktur di Batam yang mengandalkan mesin CNC untuk produksi komponen presisi.";
            case 'Desain dan Prototyping 3D dalam Proses Fabrikasi':
                return "Pelatihan ini mengajarkan peserta cara mendesain produk menggunakan perangkat lunak CAD dan mencetak prototipe menggunakan printer 3D. Dengan keterampilan ini, peserta dapat menghasilkan prototipe untuk evaluasi dan pengujian, yang sangat dibutuhkan dalam industri fabrikasi di Batam.";
            case 'Pengenalan Mesin Pemotong Laser untuk Fabrikasi':
                return "Kursus ini memberikan pelatihan mengenai pengoperasian mesin pemotong laser untuk memotong bahan seperti logam, plastik, dan kayu. Peserta akan mempelajari cara pengaturan dan pemrograman mesin untuk menghasilkan potongan dengan presisi tinggi, sesuai dengan kebutuhan produksi di Batam.";
            case 'Pembuatan Mold dan Die untuk Produksi Massal':
                return "Pelatihan ini dirancang untuk mengajarkan pembuatan mold dan die yang digunakan dalam proses produksi massal. Peserta akan mempelajari teknik merancang dan membuat cetakan yang dapat digunakan untuk memproduksi komponen dalam jumlah besar, sangat diperlukan di industri besar di Batam.";
            case 'Teknik Pengelasan MIG dan TIG untuk Fabrikasi':
                return "Kursus ini berfokus pada teknik pengelasan MIG (Metal Inert Gas) dan TIG (Tungsten Inert Gas) yang banyak digunakan dalam industri fabrikasi. Peserta akan mempelajari cara mengelas berbagai jenis logam, termasuk baja dan aluminium, dengan teknik yang tepat untuk menghasilkan sambungan yang kuat dan tahan lama.";
            case 'Manajemen Proyek di Industri Fabrikasi':
                return "Pelatihan ini memberikan keterampilan manajerial yang dibutuhkan untuk mengelola proyek-proyek fabrikasi. Peserta akan mempelajari cara merencanakan, mengatur, dan mengendalikan proyek dari awal hingga akhir, termasuk pengelolaan anggaran, sumber daya, dan waktu yang sangat penting dalam industri fabrikasi di Batam.";
            case 'Teknik Pemrograman Robot Industri di Batam':
                return "Pelatihan ini mengajarkan peserta cara memprogram robot industri untuk tugas-tugas otomatisasi dalam proses fabrikasi. Peserta akan belajar cara mengoptimalkan penggunaan robot dalam lini produksi, sesuai dengan perkembangan pesat teknologi di Batam yang banyak menggunakan robot dalam produksi.";
            case 'Pelatihan Pengoperasian Mesin Milling untuk Fabrikasi':
                return "Pelatihan ini memberikan keterampilan praktis dalam pengoperasian mesin milling, yang digunakan untuk memotong dan membentuk bahan logam dan plastik. Peserta akan diajarkan cara mengoperasikan mesin dengan aman dan efektif untuk menghasilkan komponen presisi yang dibutuhkan di industri fabrikasi.";
            case 'Pembuatan Prototipe dengan Teknologi Additive Manufacturing':
                return "Kursus ini memberikan pemahaman tentang teknologi Additive Manufacturing (AM), termasuk penggunaan printer 3D untuk membuat prototipe. Peserta akan belajar cara mendesain dan mencetak prototipe yang dapat digunakan untuk pengujian dan evaluasi, yang relevan untuk industri manufaktur di Batam.";
            case 'Kursus Pengelasan Aluminium dan Baja untuk Fabrikasi':
                return "Pelatihan ini berfokus pada teknik pengelasan yang khusus untuk aluminium dan baja. Peserta akan mempelajari perbedaan antara pengelasan bahan logam ringan dan berat, serta teknik yang tepat untuk menghasilkan sambungan yang kuat dan tahan lama pada bahan stainless steel dan baja.";
            case 'Pengoperasian Mesin Laser Cutting di Batam':
                return "Pelatihan ini mengajarkan peserta cara mengoperasikan mesin laser cutting yang digunakan untuk memotong berbagai bahan, termasuk logam, plastik, dan kayu. Peserta akan mempelajari pengaturan dan pemrograman mesin untuk memastikan hasil pemotongan yang presisi.";
            case 'Pembuatan Alat Ukur untuk Konstruksi dan Fabrikasi':
                return "Kursus ini mengajarkan peserta cara mendesain dan membuat alat ukur yang digunakan dalam proses fabrikasi dan konstruksi. Peserta akan mempelajari berbagai jenis alat ukur serta cara penggunaannya dalam industri fabrikasi di Batam.";
            case 'Pelatihan Pengoperasian Mesin Gerinda di Industri Fabrikasi':
                return "Pelatihan ini memberikan keterampilan dalam mengoperasikan mesin gerinda yang digunakan untuk memotong dan merapikan bahan logam dan material lainnya. Peserta akan mempelajari teknik pengoperasian dan pengaturan mesin gerinda untuk menghasilkan produk yang sesuai dengan spesifikasi yang diinginkan.";
            case 'Teknik Perawatan Mesin dalam Industri Fabrikasi':
                return "Kursus ini mengajarkan teknik-teknik perawatan dan pemeliharaan mesin yang digunakan dalam fabrikasi. Peserta akan mempelajari cara merawat dan memperbaiki mesin fabrikasi untuk memastikan kelancaran operasional dan mengurangi downtime di industri fabrikasi.";
            case 'Pelatihan Pengelasan Stainless Steel dan Inox':
                return "Pelatihan ini mengajarkan teknik pengelasan pada material stainless steel dan inox. Peserta akan mempelajari berbagai metode pengelasan yang digunakan untuk menyambung material ini, yang banyak digunakan di industri manufaktur dan konstruksi di Batam.";
            case 'Desain Cetakan untuk Fabrikasi Plastik di Batam':
                return "Kursus ini mengajarkan desain cetakan untuk fabrikasi plastik, mulai dari perancangan hingga produksi cetakan. Peserta akan mempelajari teknik dan material yang digunakan dalam proses pembuatan cetakan untuk industri plastik yang banyak berkembang di Batam.";
            case 'Kursus Pembuatan Alat-alat Konstruksi dari Logam':
                return "Pelatihan ini memberikan keterampilan dalam pembuatan alat konstruksi yang terbuat dari logam. Peserta akan mempelajari teknik pembuatan alat-alat seperti palu, bor, dan kunci pas yang digunakan di berbagai proyek konstruksi dan fabrikasi.";
            case 'Teknik Finishing dan Polishing untuk Produk Fabrikasi':
                return "Pelatihan ini mengajarkan teknik finishing dan polishing untuk menghasilkan produk akhir yang halus dan estetis. Peserta akan belajar cara menghaluskan dan memberi finishing produk fabrikasi untuk memastikan kualitas dan daya tahan produk.";
            case 'Pengantar Desain CAD untuk Produksi Fabrikasi':
                return "Kursus ini memperkenalkan penggunaan perangkat lunak CAD (Computer-Aided Design) untuk desain produk fabrikasi. Peserta akan mempelajari cara mendesain komponen dan produk dengan menggunakan teknologi CAD untuk mempermudah proses fabrikasi.";
            case 'Pelatihan Pengelasan dan Pembuatan Struktur Baja':
                return "Pelatihan ini berfokus pada pengelasan dan pembuatan struktur baja yang digunakan dalam berbagai proyek besar, seperti pembangunan gedung dan infrastruktur. Peserta akan mempelajari teknik-teknik pengelasan dan fabrikasi struktur baja yang kuat dan tahan lama.";
            case 'Proses Manufaktur Komponen Elektronik untuk Fabrikasi':
                return "Kursus ini mengajarkan proses manufaktur untuk komponen elektronik yang digunakan dalam fabrikasi. Peserta akan mempelajari cara merakit, menguji, dan memproduksi komponen elektronik yang digunakan dalam perangkat dan produk akhir.";
            case 'Pelatihan Pengoperasian Mesin Pabrik Komponen Logam':
                return "Pelatihan ini memberikan pemahaman tentang cara mengoperasikan mesin di pabrik komponen logam, seperti mesin bubut, mesin CNC, dan mesin milling. Peserta akan belajar cara memproduksi komponen logam untuk berbagai aplikasi industri.";
            case 'Kursus Pengelasan Mig dan Tig untuk Profesional':
                return "Kursus ini dirancang untuk para profesional yang ingin meningkatkan keterampilan pengelasan mereka dengan metode MIG (Metal Inert Gas) dan TIG (Tungsten Inert Gas). Peserta akan mempelajari teknik pengelasan yang lebih lanjut dan aplikasinya dalam berbagai industri.";
            case 'Pembuatan Jembatan dan Struktur Baja untuk Infrastruktur':
                return "Pelatihan ini mengajarkan cara merancang dan membuat struktur baja untuk jembatan dan proyek infrastruktur lainnya. Peserta akan mempelajari teknik konstruksi yang digunakan untuk memastikan kekuatan dan ketahanan struktur baja yang dibangun.";
            case 'Teknik Penggunaan Printer 3D dalam Proses Fabrikasi':
                return "Kursus ini mengajarkan penggunaan printer 3D dalam proses fabrikasi untuk membuat komponen dan prototipe. Peserta akan belajar cara mendesain dan mencetak produk dengan teknologi 3D untuk industri fabrikasi yang berkembang pesat di Batam.";
            case 'Teknik Perawatan dan Reparasi Alat Fabrikasi':
                return "Pelatihan ini berfokus pada perawatan dan perbaikan alat-alat yang digunakan dalam fabrikasi. Peserta akan mempelajari cara merawat dan memperbaiki mesin dan alat yang digunakan untuk memastikan kelancaran proses produksi.";
            case 'Pelatihan Menggunakan Mesin Bubut untuk Fabrikasi':
                return "Pelatihan ini mengajarkan penggunaan mesin bubut dalam proses fabrikasi untuk memotong dan membentuk bahan logam. Peserta akan mempelajari teknik-teknik pemrograman dan pengoperasian mesin bubut untuk menghasilkan produk presisi.";
            case 'Desain dan Pembuatan Produk untuk Industri Konstruksi':
                return "Kursus ini memberikan keterampilan dalam mendesain dan membuat produk yang digunakan dalam industri konstruksi. Peserta akan mempelajari cara membuat berbagai produk konstruksi yang aman dan efektif untuk proyek besar.";
            case 'Pelatihan Proses Pemotongan dan Perakitan Logam':
                return "Pelatihan ini mengajarkan proses pemotongan dan perakitan logam untuk menghasilkan produk jadi. Peserta akan mempelajari teknik-teknik pemotongan dan pengelasan yang digunakan dalam produksi logam.";
            default:
                return $faker->paragraph(10);  // Jika tidak ada kecocokan, gunakan paragraf acak dari Faker
        }
    }
}
