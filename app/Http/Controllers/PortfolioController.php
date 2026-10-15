<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'Nadira Utami',
            'profesi' => 'Mahasiswa Teknologi Informasi',
            'tentang' => 'Mahasiswa jurusan Teknologi Informasi, prodi D3 Sistem Infomasi. Web Enthusiast & Front-End Enthusiast dari Politeknik Negeri Padang yang passionate membangun solusi digital berdampak nyata.',
            
            'foto' => 'images/profil.jpg',
            'github' => 'https://github.com/utaminadira76-hash',
            'linkedin' => 'https://linkedin.com/in/nadira-utami-2966ba379',
            'instagram' => 'https://instagram.com/ndrryaa_?cplk=amQxN3B5MWFieTdy',
            'email' => 'utaminadira76@gmail.com',

            'services' => [
                [
                    'icon' => 'pen-nib', 
                    'title' => 'Desain UI/UX',
                    'desc' => 'Merancang antarmuka pengguna yang modern, intuitif, dan pengalaman pengguna yang nyaman pada aplikasi web maupun mobile.'
                ],
                [
                    'icon' => 'laptop-code',
                    'title' => 'Tugas / Proyek Akademik',
                    'desc' => 'Berpengalaman merancang sistem informasi berbasis web untuk kebutuhan tugas besar atau studi kasus.'
                ],
                [
                    'icon' => 'users',
                    'title' => 'Kerja Tim & Kolaborasi',
                    'desc' => 'Terbiasa bekerja dalam tim menggunakan Git untuk kontrol versi kode.'
                ]
            ],

            'portfolios' => [
                [
                    'title' => 'Sistem Informasi Perpustakaan Kampus',
                    'category' => 'Proyek Kuliah',
                    'images' => 'images/PBL.png',
                    'desc' => 'Proyek pertama saya bersama 3 rekan saya (Rafly,Satria,Jeksen) Aplikasi berbasis web untuk pengelolaan data anggota, peminjaman buku, dan laporan menggunakan Laravel.'
                ],
                [
                    'title' => 'GisSekolah',
                    'category' => 'Proyek Kuliah',
                    'images' => 'images/pbl gis.png',
                    'desc' => 'GIS Sekolah adalah sistem informasi berbasis komputer yang dirancang untuk mengumpulkan, mengelola, menganalisis, dan menyajikan data geografis (keruangan) yang berkaitan dengan lokasi sekolah dan fasilitas pendidikannya.'
                ],
                [
                    'title' => 'BookBase',
                    'category' => 'Proyek Kuliah',
                    'images' => 'images/bookbase.jpg',
                    'desc' => 'Aplikasi manajemen buku berbasis web ini dikembangkan menggunakan Laravel dan MySQL untuk tugas mata kuliah framework, yang dilengkapi fitur CRUD lengkap untuk mengelola data buku, kategori, serta pencarian judul secara responsif dengan antarmuka Tailwind CSS.'
                ],
                [
                    'title' => 'WordPress',
                    'category' => 'Proyek Kuliah',
                    'images' => 'images/web.png',
                    'desc' => '"Fakta Dibalik Dunia" adalah sebuah situs web berbasis WordPress yang dirancang dengan konsep blog informatif. Platform WordPress dipilih karena kemudahannya dalam mengelola konten artikel, fleksibilitas penggunaan tema, serta dukungan plugin'
                ],
                [
                    'title' => 'Smart Student',
                    'category' => 'Proyek Kuliah',
                    'images' => 'images/imk 3.png',
                    'desc' => 'Smart Student adalah konsep perancangan aplikasi digital (baik berbasis mobile maupun web) yang dirancang khusus untuk membantu pelajar atau mahasiswa dalam mengelola seluruh aktivitas akademik, tugas, dan manajemen waktu secara lebih terstruktur, efisien, dan modern.'
                ],
                [
                    'title' => 'Manga List',
                    'category' => 'Proyek Mandiri',
                    'images' => 'images/manga 1.png',
                    'desc' => 'Manga List adalah platform atau situs web berbasis digital yang dirancang khusus untuk membaca komik (manga, manhwa, atau manhua) secara online langsung melalui browser. Proyek ini berfokus pada kemudahan akses, kenyamanan membaca, serta manajemen koleksi komik agar penikmat manga dapat menikmati bab-bab cerita favorit mereka dengan rapi dan terstruktur.'
                ]   
            ],

            'certificates' => [
                [
                    'title' => 'AWS Academy Cloud Foundations',
                    'issuer' => 'AWS',
                    'images' => 'images/aws.png',
                    'desc' => 'Pelatihan dasar komputasi awan dan arsitektur infrastruktur cloud dari AWS Academy.',
                    'date' => 'September 2026'
                ],
                [
                    'title' => 'HCIA-Datacom V1.0',
                    'issuer' => 'Huawei',
                    'images' => 'images/hwai.jpeg',
                    'desc' => 'Sertifikasi kompetensi jaringan komputer, perutean, dan switching tingkat dasar.',
                    'date' => 'September 2026'
                ]
            ]
        ];

        return view('portfolio', $data);
    }
}