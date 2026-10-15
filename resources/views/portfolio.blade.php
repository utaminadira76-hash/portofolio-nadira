<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - {{ $nama }}</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Alpine.js CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-slate-900 text-slate-100 font-sans antialiased">

    <!-- Navbar -->
    <nav class="fixed top-0 left-0 z-50 bg-slate-900/90 backdrop-blur-md border-b border-slate-800 w-full shadow-sm">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="#beranda" class="text-2xl font-bold tracking-wider text-white">Portofolio<span class="text-indigo-400">.</span></a>
            <div class="hidden md:flex space-x-8 text-sm font-semibold text-slate-300">
                <a href="#beranda" class="hover:text-white transition">Beranda</a>
                <a href="#about" class="hover:text-white transition">About</a>
                <a href="#services" class="hover:text-white transition">Services</a>
                <a href="#portofolio" class="hover:text-white transition">Portofolio</a>
                <a href="#sertifikat" class="hover:text-white transition">Sertifikat</a>
                <a href="#kontak" class="hover:text-white transition">Kontak</a>
                
            </div>
            <a href="#kontak" class="hidden md:inline-block px-5 py-2.5 rounded-full bg-indigo-600 hover:bg-indigo-500 text-white font-bold transition shadow-lg shadow-indigo-600/25">Hubungi Saya</a>
        </div>
    </nav>

   <!-- Beranda / Hero Section -->
<section id="beranda" class="relative min-h-screen w-full flex items-center bg-slate-900 pt-20 px-6">
    <div class="relative z-10 max-w-7xl mx-auto w-full py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center w-full">
            
            <!-- Kolom Kiri: Teks & Typing Effect -->
            <div class="space-y-6">
                <span class="px-3.5 py-1.5 text-xs font-bold tracking-wider text-indigo-300 bg-indigo-950/90 border border-indigo-800/80 rounded-full uppercase shadow-sm">Welcome to my portfolio</span>
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-white leading-tight">Halo, Saya <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-400">{{ $nama }}</span></h1>
                
                <!-- Typing Effect -->
                <div class="text-xl text-indigo-300 font-bold h-8 flex items-center"
                     x-data="{
                        words: ['Web Enthusiast', 'Front-End Developer', 'UI/UX Designer', 'Software Engineer'],
                        text: '',
                        wordIndex: 0,
                        charIndex: 0,
                        isDeleting: false,
                        type() {
                            let current = this.words[this.wordIndex];
                            if (this.isDeleting) {
                                this.text = current.substring(0, this.charIndex - 1);
                                this.charIndex--;
                            } else {
                                this.text = current.substring(0, this.charIndex + 1);
                                this.charIndex++;
                            }

                            if (!this.isDeleting && this.text === current) {
                                setTimeout(() => this.isDeleting = true, 2000);
                            } else if (this.isDeleting && this.text === '') {
                                this.isDeleting = false;
                                this.wordIndex = (this.wordIndex + 1) % this.words.length;
                            }

                            setTimeout(() => this.type(), this.isDeleting ? 100 : 150);
                        }
                     }"
                     x-init="type()">
                    <span><span x-text="text"></span><span class="animate-pulse text-indigo-400 font-extrabold ml-1">|</span></span>
                </div>

                <p class="text-slate-300 font-normal leading-relaxed max-w-2xl text-lg drop-shadow-sm">{{ $tentang }}</p>
                
                <div class="flex flex-wrap items-center gap-4 pt-4">
                    <a href="#about" class="px-6 py-3 rounded-lg bg-indigo-600 hover:bg-indigo-500 text-white font-bold transition shadow-lg shadow-indigo-600/30">Let's Start</a>
                    <a href="{{ asset('cv/CV Nadira Utami.pdf') }}" download class="px-6 py-3 rounded-lg bg-purple-600 hover:bg-purple-500 text-white font-bold transition shadow-lg shadow-purple-600/30 flex items-center gap-2">
                        <i class="fa-solid fa-download"></i> Unduh CV
                    </a>
                </div>

                <!-- Tautan Sosial Media -->
                <div class="flex items-center gap-3 pt-2">
                    <!-- GitHub -->
                    <a href="{{ $github ?? '#' }}" target="_blank" class="p-2.5 bg-slate-800/80 hover:bg-indigo-600 text-slate-300 hover:text-white rounded-full transition duration-300 border border-slate-700 shadow" title="GitHub">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                    </a>
                    <!-- LinkedIn -->
                    <a href="{{ $linkedin ?? '#' }}" target="_blank" class="p-2.5 bg-slate-800/80 hover:bg-indigo-600 text-slate-300 hover:text-white rounded-full transition duration-300 border border-slate-700 shadow" title="LinkedIn">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.239-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                    <!-- Instagram -->
                    <a href="{{ $instagram ?? '#' }}" target="_blank" class="p-2.5 bg-slate-800/80 hover:bg-indigo-600 text-slate-300 hover:text-white rounded-full transition duration-300 border border-slate-700 shadow" title="Instagram">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Container Foto Hero (dengan Efek Stroke Putih & Badge Statistics) -->
            <div class="relative flex items-center justify-center pt-10 lg:pt-0">
                
                <!-- Lingkaran Cahaya Glow Background -->
                <div class="absolute w-80 h-80 bg-indigo-600/20 rounded-full blur-3xl -z-10"></div>

                <!-- Container Foto Utama -->
                <div class="relative inline-block z-10">
                    
                    <!-- Foto Utama dengan Efek Garis Tepi (Stroke Putih Stiker) -->
                    <img src="{{ asset('images/raw.png') }}" 
                         alt="{{ $nama }}" 
                         class="w-80 sm:w-96 md:w-[450px] lg:w-[500px] h-auto object-cover 
                                drop-shadow-[0_0_3px_rgba(255,255,255,0.9)] drop-shadow-[0_0_12px_rgba(255,255,255,0.4)]">

                </div>
            </div>

        </div>
    </div>
</section>
    <!-- About Section (Dengan Foto Profil di Samping) -->
    <section id="about" class="py-24 px-6 bg-slate-900">
        <div class="max-w-7xl mx-auto">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <h2 class="text-3xl font-bold tracking-tight text-white">About Me</h2>
                <div class="w-16 h-1 bg-indigo-500 mx-auto mt-4 rounded-full"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center">
                
                <!-- Kolom Foto Profil (Mengambil 5 Grid) -->
                <div class="md:col-span-5 flex justify-center">
                    <div class="relative w-full max-w-md mx-auto rounded-2xl overflow-hidden shadow-2xl border-4 border-indigo-500/50 bg-slate-800 p-2 flex items-center justify-center">
                        <img src="{{ asset('images/raraw.jpeg') }}" alt="{{ $nama }}" class="w-full h-auto object-contain rounded-xl">
                    </div>
                </div>

                <!-- Kolom Teks Deskripsi & Progress Bar Keahlian (Mengambil 7 Grid) -->
                <div class="md:col-span-7 space-y-6">
                    <div class="space-y-4 text-slate-300">
                        <h3 class="text-2xl md:text-3xl font-bold text-white">Siapa di balik baris kode ini?</h3>
                        <p class="leading-relaxed">Saya adalah mahasiswa yang antusias dalam dunia pengembangan web, memiliki ketertarikan besar pada struktur backend menggunakan Laravel, desain antarmuka modern UI/UX, serta bahasa pemrograman lainnya seperti JavaScript, Python, dan PHP.</p>
                        <p class="leading-relaxed">Terbiasa menyelesaikan tugas-tugas akademis berbasis web serta aktif mengeksplorasi teknologi baru secara mandiri. Siap berkontribusi dan belajar langsung melalui program magang.</p>
                    </div>

                    <!-- Kotak Keahlian & Teknologi -->
                    <div class="space-y-4 bg-slate-800/60 p-6 rounded-2xl border border-slate-700 shadow-md">
                        <h4 class="text-lg font-bold text-white mb-2">Keahlian & Teknologi</h4>
                        <div class="space-y-3">
                            <div>
                                <div class="flex justify-between text-sm font-semibold mb-1 text-slate-300"><span>PHP / Laravel</span><span>75%</span></div>
                                <div class="w-full bg-slate-900 h-2.5 rounded-full overflow-hidden border border-slate-700"><div class="bg-indigo-500 h-full w-[85%]"></div></div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm font-semibold mb-1 text-slate-300"><span>HTML / Tailwind CSS</span><span>80%</span></div>
                                <div class="w-full bg-slate-900 h-2.5 rounded-full overflow-hidden border border-slate-700"><div class="bg-indigo-500 h-full w-[80%]"></div></div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm font-semibold mb-1 text-slate-300"><span>MySQL / Database</span><span>75%</span></div>
                                <div class="w-full bg-slate-900 h-2.5 rounded-full overflow-hidden border border-slate-700"><div class="bg-indigo-500 h-full w-[75%]"></div></div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm font-semibold mb-1 text-slate-300"><span>Git / Version Control</span><span>70%</span></div>
                                <div class="w-full bg-slate-900 h-2.5 rounded-full overflow-hidden border border-slate-700"><div class="bg-indigo-500 h-full w-[70%]"></div></div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 px-6 max-w-7xl mx-auto">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl font-bold tracking-tight text-white">Keahlian & Layanan</h2>
            <div class="w-16 h-1 bg-indigo-500 mx-auto mt-4 rounded-full"></div>
            <p class="text-slate-400 mt-3">Hal-hal yang bisa saya lakukan dalam pengembangan sistem.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($services as $service)
            <div class="p-8 bg-slate-800/40 hover:bg-slate-800 border border-slate-700/80 rounded-2xl transition duration-300 group shadow-sm">
                <div class="w-14 h-14 rounded-xl bg-indigo-600/20 text-indigo-400 flex items-center justify-center text-2xl mb-6 group-hover:bg-indigo-600 group-hover:text-white transition">
                    <i class="fa-solid fa-{{ $service['icon'] }}"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-white">{{ $service['title'] }}</h3>
                <p class="text-slate-400 text-sm leading-relaxed">{{ $service['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Portofolio Section -->
<section id="portofolio" class="py-20 px-6 bg-slate-900">
    <div class="max-w-7xl mx-auto">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <h2 class="text-3xl font-bold tracking-tight text-white">Portofolio Proyek</h2>
            <div class="w-16 h-1 bg-indigo-500 mx-auto mt-4 rounded-full"></div>
            <p class="text-slate-400 mt-3 text-sm">Daftar proyek kuliah maupun mandiri yang pernah dikerjakan.</p>
        </div>

        <!-- Grid diubah menjadi 4 kolom di layar besar (lg:grid-cols-4) dan lebarnya max-w-7xl -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($portfolios as $portfolio)
            <div class="bg-slate-800/50 border border-slate-700 rounded-xl overflow-hidden hover:border-indigo-500 transition duration-300 group shadow-sm flex flex-col">
                
                <!-- Ketinggian gambar disesuaikan menjadi h-40 agar lebih ringkas -->
                <div class="relative overflow-hidden h-40 w-full shrink-0">
                    <img src="{{ asset($portfolio['images']) }}" alt="{{ $portfolio['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <span class="absolute top-3 left-3 px-2.5 py-0.5 text-[10px] font-bold bg-indigo-600/90 backdrop-blur-sm text-white rounded-full shadow">{{ $portfolio['category'] }}</span>
                </div>

                <!-- Konten teks dengan padding yang disesuaikan -->
                <div class="p-4 space-y-2 flex-1 flex flex-col justify-between">
                    <div>
                        <h3 class="text-base font-bold text-white line-clamp-1 group-hover:text-indigo-400 transition">{{ $portfolio['title'] }}</h3>
                        <p class="text-slate-400 text-xs leading-relaxed mt-1.5 line-clamp-3">{{ $portfolio['desc'] }}</p>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Sertifikat Section -->
<section id="sertifikat" class="py-20 px-6 bg-slate-950">
    <div class="max-w-7xl mx-auto">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <h2 class="text-3xl font-bold tracking-tight text-white">Sertifikat & Pelatihan</h2>
            <div class="w-16 h-1 bg-indigo-500 mx-auto mt-4 rounded-full"></div>
            <p class="text-slate-400 mt-3 text-sm">Daftar sertifikat kompetensi dan pelatihan profesional yang telah diselesaikan.</p>
        </div>

        <!-- Grid 4 kolom untuk sertifikat yang menggunakan perulangan -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($certificates as $certificate)
            <div class="bg-slate-900/50 border border-slate-800 rounded-xl overflow-hidden hover:border-indigo-500 transition duration-300 group shadow-sm flex flex-col">
                
                <!-- Gambar Sertifikat -->
                <div class="relative overflow-hidden h-40 w-full shrink-0 bg-slate-800">
                    <img src="{{ asset($certificate['images']) }}" alt="{{ $certificate['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <span class="absolute top-3 left-3 px-2.5 py-0.5 text-[10px] font-bold bg-purple-600/90 backdrop-blur-sm text-white rounded-full shadow">{{ $certificate['issuer'] }}</span>
                </div>

                <!-- Konten Teks Sertifikat -->
                <div class="p-4 space-y-2 flex-1 flex flex-col justify-between">
                    <div>
                        <h3 class="text-base font-bold text-white line-clamp-1 group-hover:text-indigo-400 transition">{{ $certificate['title'] }}</h3>
                        <p class="text-slate-400 text-xs leading-relaxed mt-1.5 line-clamp-2">{{ $certificate['desc'] }}</p>
                    </div>
                    <div class="pt-2 text-[11px] text-indigo-300 font-medium">
                        Diterbitkan: {{ $certificate['date'] }}
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</section>

    <!-- Kontak Section (WhatsApp & Email) -->
<section id="kontak" class="py-24 px-6 max-w-5xl mx-auto">
    <div class="text-center max-w-2xl mx-auto mb-16">
        <h2 class="text-3xl font-bold tracking-tight text-white">Hubungi Saya</h2>
        <div class="w-16 h-1 bg-indigo-500 mx-auto mt-4 rounded-full"></div>
        <p class="text-slate-400 mt-3">Tertarik merekrut saya untuk magang atau ingin berdiskusi? Silakan hubungi via WhatsApp atau Email.</p>
    </div>

    <!-- Grid 2 Kolom untuk Kontak WhatsApp dan Email -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        
        <!-- Kartu WhatsApp -->
        <div class="bg-slate-800/40 p-8 rounded-2xl border border-slate-700 shadow-md text-center space-y-6 flex flex-col justify-between">
            <div class="space-y-4">
                <div class="w-16 h-16 bg-emerald-600/20 text-emerald-400 rounded-full flex items-center justify-center text-3xl mx-auto shadow-inner">
                    <i class="fa-brands fa-whatsapp"></i>
                </div>
                <div class="space-y-2">
                    <h3 class="text-xl font-bold text-white">WhatsApp</h3>
                    <p class="text-slate-400 text-sm">Respon cepat untuk diskusi langsung atau wawancara singkat.</p>
                </div>
            </div>
            <div class="pt-2">
                <a href="https://wa.me/6285182475261?text=Halo%2C%20saya%20melihat%20portofolio%20Anda%20dan%20ingin%20berdiskusi." target="_blank" class="inline-flex items-center justify-center gap-2 w-full px-6 py-3.5 bg-emerald-600 hover:bg-emerald-500 text-white font-bold rounded-xl transition shadow-lg shadow-emerald-600/30">
                    <i class="fa-brands fa-whatsapp text-xl"></i> Chat via WhatsApp
                </a>
            </div>
        </div>

        <!-- Kartu Email -->
        <div class="bg-slate-800/40 p-8 rounded-2xl border border-slate-700 shadow-md text-center space-y-6 flex flex-col justify-between">
            <div class="space-y-4">
                <div class="w-16 h-16 bg-indigo-600/20 text-indigo-400 rounded-full flex items-center justify-center text-3xl mx-auto shadow-inner">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="space-y-2">
                    <h3 class="text-xl font-bold text-white">Email</h3>
                    <p class="text-slate-400 text-sm">Hubungi saya di email ini.</p>
                </div>
            </div>
            <div class="pt-2">
                <!-- Ganti email@domain.com dengan alamat email Anda yang sebenarnya -->
               <a href="mailto:utaminadira76@gmail.com?subject=Kolaborasi%20Proyek%20/%20Magang&body=Halo%2C%20saya%20melihat%20portofolio%20Anda..." class="inline-flex items-center justify-center gap-2 w-full px-6 py-3.5 bg-indigo-600 hover:bg-indigo-500 text-white font-bold rounded-xl transition shadow-lg shadow-indigo-600/30">
                     <i class="fa-solid fa-envelope text-lg"></i> Kirim Email
                </a>
            </div>
        </div>

    </div>
</section>

    <!-- Footer -->
    <footer class="bg-slate-950 border-t border-slate-800 py-8 px-6 text-center text-slate-400 text-sm">
        <p>&copy; {{ date('Y') }} {{ $nama }}. Dibuat dengan Laravel & Tailwind CSS.</p>
    </footer>

</body>
</html>