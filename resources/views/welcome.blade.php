<!doctype html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AHZA Digitals | Future-Ready Software Solutions</title>

    <!-- Google Fonts: Outfit & Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- AOS (Animate On Scroll) Library -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwind Custom Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#0f172a",
                        accent: "#6366f1",
                        secondary: "#4f46e5",
                        surface: "#f8fafc",
                    },
                    fontFamily: {
                        sans: ["Inter", "sans-serif"],
                        heading: ["Outfit", "sans-serif"],
                    },
                    backgroundImage: {
                        'hero-gradient': "linear-gradient(to bottom right, rgba(15, 23, 42, 0.9), rgba(15, 23, 42, 0.7))",
                    }
                },
            },
        };
    </script>

    <style>
        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .glass-dark {
            background: rgba(15, 23, 42, 0.8);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .text-gradient {
            background: linear-gradient(to right, #818cf8, #6366f1, #4f46e5);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        details > summary { list-style: none; }
        details > summary::-webkit-details-marker { display: none; }
        
        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.1);
        }

        /* Marquee Animation */
        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(calc(-250px * 5)); }
        }
        .marquee-track {
            display: flex;
            width: calc(250px * 10);
            animation: scroll 30s linear infinite;
        }
        .marquee-track:hover {
            animation-play-state: paused;
        }
    </style>
</head>
<body class="font-sans text-slate-800 antialiased bg-slate-50">
    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/6287822368008?text=Halo%20AHZA%20Digitals%2C%20saya%20tertarik%20untuk%20mendiskusikan%20proyek%20digital%20saya.%20Bisa%20bantu%20saya%3F"
       target="_blank"
       class="fixed bottom-6 right-6 z-50 bg-[#25D366] hover:bg-[#1ebd5a] text-white w-14 h-14 rounded-full flex items-center justify-center text-3xl shadow-lg shadow-green-500/30 hover:scale-110 transition-transform duration-300"
    >
        <i class="fa-brands fa-whatsapp"></i>
        <!-- Ping Animation -->
        <span class="absolute inline-flex h-full w-full rounded-full bg-[#25D366] opacity-30 animate-ping"></span>
    </a>

    <!-- ================= HEADER / NAVBAR ================= -->
    <header class="fixed w-full top-0 z-50 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-3 cursor-pointer group" onclick="window.scrollTo(0, 0)">
                    <div class="w-11 h-11 bg-accent text-white flex items-center justify-center rounded-2xl font-bold text-2xl shadow-lg shadow-accent/20 group-hover:scale-110 transition-transform duration-300">
                        A
                    </div>
                    <span class="font-heading font-extrabold text-2xl text-primary tracking-tight">AHZA<span class="text-accent">.</span></span>
                </div>

                <!-- Desktop Menu -->
                <nav class="hidden md:flex items-center gap-1">
                    <a href="#home" class="px-4 py-2 text-slate-600 hover:text-accent font-semibold transition-colors">Home</a>
                    <a href="#why-website" class="px-4 py-2 text-slate-600 hover:text-accent font-semibold transition-colors">Mengapa Website?</a>
                    <a href="#solutions" class="px-4 py-2 text-slate-600 hover:text-accent font-semibold transition-colors">Solusi Bisnis</a>
                    <a href="#pricing" class="px-4 py-2 text-slate-600 hover:text-accent font-semibold transition-colors">Paket Investasi</a>
                    <a href="#portfolio" class="px-4 py-2 text-slate-600 hover:text-accent font-semibold transition-colors">Portfolio</a>
                    <a href="#process" class="px-4 py-2 text-slate-600 hover:text-accent font-semibold transition-colors">Process</a>
                    <a href="#contact" class="ml-4 bg-accent hover:bg-secondary text-white px-7 py-3 rounded-2xl font-bold transition-all shadow-xl shadow-accent/25 hover:shadow-accent/40 active:scale-95">
                        Mulai Proyek
                    </a>
                </nav>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-slate-600 hover:text-primary focus:outline-none p-2 bg-white/50 rounded-xl glass">
                        <i class="fa-solid fa-bars-staggered text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu" class="hidden md:hidden absolute top-24 left-6 right-6 p-6 rounded-3xl glass shadow-2xl border border-white/40">
            <nav class="flex flex-col gap-2 text-center">
                <a href="#home" class="py-4 text-slate-700 font-bold hover:bg-white/50 rounded-2xl">Home</a>
                <a href="#why-website" class="py-4 text-slate-700 font-bold hover:bg-white/50 rounded-2xl">Mengapa Website?</a>
                <a href="#solutions" class="py-4 text-slate-700 font-bold hover:bg-white/50 rounded-2xl">Solusi Bisnis</a>
                <a href="#pricing" class="py-4 text-slate-700 font-bold hover:bg-white/50 rounded-2xl">Paket Investasi</a>
                <a href="#portfolio" class="py-4 text-slate-700 font-bold hover:bg-white/50 rounded-2xl">Portfolio</a>
                <a href="#contact" class="mt-4 bg-accent text-white py-5 rounded-2xl font-bold shadow-xl">Mulai Proyek</a>
            </nav>
        </div>
    </header>

    <!-- ================= HERO SECTION ================= -->
    <section id="home" class="relative min-h-screen flex items-center overflow-hidden pt-20">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/images/hero-bg.png') }}" alt="Hero Background" class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-primary/80 backdrop-blur-[2px]"></div>
        </div>

        <!-- Decorative Elements -->
        <div class="absolute top-1/4 -left-20 w-96 h-96 bg-accent/30 rounded-full blur-[160px] animate-pulse"></div>
        <div class="absolute bottom-1/4 -right-20 w-96 h-96 bg-indigo-500/20 rounded-full blur-[160px] animate-pulse" style="animation-delay: 2s"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="max-w-4xl">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-2xl bg-white/10 border border-white/20 text-indigo-300 text-sm font-bold mb-8 backdrop-blur-md" data-aos="fade-down">
                    <span class="relative flex h-3 w-3">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-accent opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-accent"></span>
                    </span>
                    Trusted by Innovators Worldwide
                </div>
                
                <h1 class="text-5xl md:text-7xl font-heading font-extrabold text-white leading-[1.15] mb-8" data-aos="fade-up" data-aos-delay="200">
                    Bikin Bisnis Anda <br/>
                    <span class="text-gradient">Lebih Dipercaya</span> <br/>
                    & Banjir Orderan.
                </h1>
                
                <p class="text-xl md:text-2xl text-slate-300 mb-12 leading-relaxed max-w-2xl font-medium" data-aos="fade-up" data-aos-delay="400">
                    Bukan sekadar website biasa. Kami membangun aset digital profesional yang dirancang khusus untuk membangun kredibilitas brand Anda, mendatangkan leads berkualitas, dan mengotomatiskan penjualan 24 jam nonstop.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-6" data-aos="fade-up" data-aos-delay="600">
                    <a href="#solutions" class="flex justify-center items-center gap-3 bg-accent hover:bg-secondary text-white px-10 py-5 rounded-2xl font-bold text-lg transition-all shadow-2xl shadow-accent/40 group hover:-translate-y-1">
                        <i class="fa-solid fa-lightbulb text-xl group-hover:animate-bounce"></i> Cari Tahu Solusi Bisnis Anda
                    </a>
                    <a href="https://wa.me/6287822368008?text=Halo%20AHZA%20Digitals%2C%20saya%20ingin%20konsultasi%20mengenai%20kebutuhan%20website%20untuk%20menaikkan%20omset%20dan%20kepercayaan%20bisnis%20saya." target="_blank" class="flex justify-center items-center gap-3 bg-white/10 hover:bg-white/20 text-white border border-white/20 px-10 py-5 rounded-2xl font-bold text-lg transition-all backdrop-blur-md hover:-translate-y-1">
                        <i class="fa-brands fa-whatsapp text-2xl"></i> Konsultasi Langsung
                    </a>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-3 text-white/40 animate-bounce">
            <span class="text-xs font-bold tracking-widest uppercase">Scroll</span>
            <i class="fa-solid fa-chevron-down"></i>
        </div>
    </section>

    <!-- ================= TECH STACK MARQUEE ================= -->
    <div class="py-12 bg-white border-b border-slate-100 overflow-hidden relative" data-aos="fade-up" data-aos-offset="0">
        <div class="absolute inset-y-0 left-0 w-32 bg-gradient-to-r from-white to-transparent z-10"></div>
        <div class="absolute inset-y-0 right-0 w-32 bg-gradient-to-l from-white to-transparent z-10"></div>
        
        <div class="marquee-track flex items-center gap-12">
            <!-- First set of logos -->
            <div class="flex items-center gap-4 min-w-[250px] justify-center grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-500">
                <i class="fa-brands fa-laravel text-4xl text-[#FF2D20]"></i>
                <span class="text-xl font-heading font-bold text-slate-700">Laravel</span>
            </div>
            <div class="flex items-center gap-4 min-w-[250px] justify-center grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-500">
                <i class="fa-solid fa-bolt text-4xl text-[#FFA500]"></i>
                <span class="text-xl font-heading font-bold text-slate-700">Filament</span>
            </div>
            <div class="flex items-center gap-4 min-w-[250px] justify-center grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-500">
                <i class="fa-brands fa-vuejs text-4xl text-[#42B883]"></i>
                <span class="text-xl font-heading font-bold text-slate-700">Vue.js</span>
            </div>
            <div class="flex items-center gap-4 min-w-[250px] justify-center grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-500">
                <i class="fa-solid fa-rocket text-4xl text-[#53B9FF]"></i>
                <span class="text-xl font-heading font-bold text-slate-700">Capacitor JS</span>
            </div>
            <div class="flex items-center gap-4 min-w-[250px] justify-center grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-500">
                <i class="fa-brands fa-js text-4xl text-[#F7DF1E]"></i>
                <span class="text-xl font-heading font-bold text-slate-700">JavaScript</span>
            </div>
            
            <!-- Second set (Duplicate for infinite scroll) -->
            <div class="flex items-center gap-4 min-w-[250px] justify-center grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-500">
                <i class="fa-brands fa-laravel text-4xl text-[#FF2D20]"></i>
                <span class="text-xl font-heading font-bold text-slate-700">Laravel</span>
            </div>
            <div class="flex items-center gap-4 min-w-[250px] justify-center grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-500">
                <i class="fa-solid fa-bolt text-4xl text-[#FFA500]"></i>
                <span class="text-xl font-heading font-bold text-slate-700">Filament</span>
            </div>
            <div class="flex items-center gap-4 min-w-[250px] justify-center grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-500">
                <i class="fa-brands fa-vuejs text-4xl text-[#42B883]"></i>
                <span class="text-xl font-heading font-bold text-slate-700">Vue.js</span>
            </div>
            <div class="flex items-center gap-4 min-w-[250px] justify-center grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-500">
                <i class="fa-solid fa-rocket text-4xl text-[#53B9FF]"></i>
                <span class="text-xl font-heading font-bold text-slate-700">Capacitor JS</span>
            </div>
            <div class="flex items-center gap-4 min-w-[250px] justify-center grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-500">
                <i class="fa-brands fa-js text-4xl text-[#F7DF1E]"></i>
                <span class="text-xl font-heading font-bold text-slate-700">JavaScript</span>
            </div>
        </div>
    </div>

    <!-- ================= WHY WEBSITE SECTION ================= -->
    <section id="why-website" class="py-32 bg-slate-50 relative overflow-hidden">
        <!-- Floating shapes -->
        <div class="absolute top-1/3 left-10 w-72 h-72 bg-accent/5 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute bottom-1/3 right-10 w-72 h-72 bg-indigo-500/5 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-20" data-aos="fade-up">
                <h2 class="text-accent font-extrabold tracking-[0.2em] uppercase text-sm mb-4">Pentingnya Website</h2>
                <h3 class="text-4xl md:text-5xl font-heading font-extrabold text-primary leading-tight mb-6">
                    Kenapa Bisnis Anda <br/><span class="text-gradient">Wajib Punya Website</span> Sekarang?
                </h3>
                <p class="text-slate-500 text-lg md:text-xl font-medium">
                    Di era digital, tidak memiliki website resmi membuat bisnis Anda kehilangan potensi omset puluhan juta rupiah dan kalah bersaing dari kompetitor.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Point 1 -->
                <div class="p-8 md:p-10 rounded-[2.5rem] bg-white border border-slate-100 shadow-sm transition-all duration-500 card-hover flex gap-6" data-aos="fade-up">
                    <div class="w-16 h-16 bg-indigo-50 text-indigo-500 rounded-2xl flex items-center justify-center text-3xl flex-shrink-0">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <div>
                        <h4 class="text-2xl font-heading font-bold text-primary mb-3">Membangun Kredibilitas Instan</h4>
                        <p class="text-slate-500 leading-relaxed font-medium">
                            <strong class="text-slate-700">84% pelanggan</strong> lebih percaya pada bisnis yang memiliki website resmi dengan domain sendiri (<code class="bg-slate-100 px-1 py-0.5 rounded text-indigo-500 font-mono text-sm">.com</code>) dibandingkan bisnis yang hanya mengandalkan akun media sosial gratisan.
                        </p>
                    </div>
                </div>

                <!-- Point 2 -->
                <div class="p-8 md:p-10 rounded-[2.5rem] bg-white border border-slate-100 shadow-sm transition-all duration-500 card-hover flex gap-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-emerald-50 text-emerald-500 rounded-2xl flex items-center justify-center text-3xl flex-shrink-0">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <div>
                        <h4 class="text-2xl font-heading font-bold text-primary mb-3">Toko & Portofolio Buka 24 Jam</h4>
                        <p class="text-slate-500 leading-relaxed font-medium">
                            Website Anda adalah tim sales digital terbaik yang <strong class="text-slate-700">bekerja 24 jam nonstop</strong>, menyajikan katalog lengkap dan informasi produk bahkan ketika Anda dan admin Anda sedang tidur terlelap.
                        </p>
                    </div>
                </div>

                <!-- Point 3 -->
                <div class="p-8 md:p-10 rounded-[2.5rem] bg-white border border-slate-100 shadow-sm transition-all duration-500 card-hover flex gap-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-amber-50 text-amber-500 rounded-2xl flex items-center justify-center text-3xl flex-shrink-0">
                        <i class="fa-solid fa-link-slash"></i>
                    </div>
                    <div>
                        <h4 class="text-2xl font-heading font-bold text-primary mb-3">Bebas dari Ketergantungan Sosmed</h4>
                        <p class="text-slate-500 leading-relaxed font-medium">
                            Algoritma media sosial (IG, TikTok, FB) terus berubah dan jangkauan organik Anda bisa drop kapan saja. Website adalah <strong class="text-slate-700">aset digital milik Anda seutuhnya</strong> tanpa intervensi pihak luar.
                        </p>
                    </div>
                </div>

                <!-- Point 4 -->
                <div class="p-8 md:p-10 rounded-[2.5rem] bg-white border border-slate-100 shadow-sm transition-all duration-500 card-hover flex gap-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-sky-50 text-sky-500 rounded-2xl flex items-center justify-center text-3xl flex-shrink-0">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <div>
                        <h4 class="text-2xl font-heading font-bold text-primary mb-3">Mudah Ditemukan Lewat Google</h4>
                        <p class="text-slate-500 leading-relaxed font-medium">
                            Setiap hari ada jutaan orang mencari solusi produk/jasa lewat Google Search. Website yang dioptimasi dengan SEO membuat bisnis Anda <strong class="text-slate-700">muncul di baris terdepan</strong> saat dicari calon pembeli.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= SOLUTIONS / SERVICES SECTION ================= -->
    <section id="solutions" class="py-32 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end gap-8 mb-20">
                <div class="max-w-2xl" data-aos="fade-right">
                    <h2 class="text-accent font-extrabold tracking-[0.2em] uppercase text-sm mb-4">Temukan Solusi Anda</h2>
                    <h3 class="text-4xl md:text-5xl font-heading font-extrabold text-primary leading-tight">
                        Pilih <span class="text-accent">Masalah Bisnis Anda</span>,<br/> Kami Siapkan Solusinya.
                    </h3>
                </div>
                <p class="text-slate-500 text-lg md:text-xl max-w-md font-medium leading-relaxed" data-aos="fade-left" data-aos-delay="200">
                    Setiap bisnis memiliki tantangan berbeda. Klik salah satu kartu masalah di bawah untuk berkonsultasi solusi spesifik via WhatsApp!
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Solution Card 1 -->
                <div class="p-8 rounded-[2.5rem] bg-slate-50 border border-slate-100 transition-all duration-500 card-hover flex flex-col justify-between group" data-aos="fade-up">
                    <div>
                        <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center text-indigo-500 text-3xl mb-8 shadow-sm group-hover:bg-indigo-500 group-hover:text-white transition-all duration-300">
                            <i class="fa-solid fa-building-shield"></i>
                        </div>
                        <span class="text-indigo-500 font-bold text-xs uppercase tracking-widest block mb-2">Masalah 1: Kurang Kredibilitas</span>
                        <h4 class="text-2xl font-heading font-bold text-primary mb-4 leading-snug">"Bisnis saya dikira penipu / belum terpercaya"</h4>
                        <div class="h-px bg-slate-200 my-4"></div>
                        <span class="text-slate-400 font-bold text-[10px] uppercase tracking-wider block mb-1">Rekomendasi Solusi</span>
                        <h5 class="text-lg font-heading font-extrabold text-indigo-600 mb-3">Website Company Profile</h5>
                        <p class="text-slate-500 text-sm leading-relaxed font-medium mb-6">Membangun citra premium, memajang legalitas, profil tim, layanan, dan portofolio agar klien 10x lebih percaya.</p>
                    </div>
                    <a href="https://wa.me/6287822368008?text=Halo%20AHZA%20Digitals%2C%20saya%20tertarik%20membuat%20Website%20Company%20Profile%20agar%20bisnis%20saya%20lebih%20dipercaya%20pelanggan%20dan%20terlihat%20profesional." target="_blank" class="w-full bg-indigo-50 hover:bg-indigo-500 hover:text-white text-indigo-600 font-bold py-4 px-6 rounded-2xl text-center text-sm transition-all duration-300 flex items-center justify-center gap-2">
                        Pilih Solusi Ini <i class="fa-brands fa-whatsapp text-lg"></i>
                    </a>
                </div>

                <!-- Solution Card 2 -->
                <div class="p-8 rounded-[2.5rem] bg-slate-50 border border-slate-100 transition-all duration-500 card-hover flex flex-col justify-between group" data-aos="fade-up" data-aos-delay="100">
                    <div>
                        <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center text-emerald-500 text-3xl mb-8 shadow-sm group-hover:bg-emerald-500 group-hover:text-white transition-all duration-300">
                            <i class="fa-solid fa-store"></i>
                        </div>
                        <span class="text-emerald-500 font-bold text-xs uppercase tracking-widest block mb-2">Masalah 2: Kewalahan Balas Chat</span>
                        <h4 class="text-2xl font-heading font-bold text-primary mb-4 leading-snug">"Capek jawab pertanyaan harga & stok satu-satu"</h4>
                        <div class="h-px bg-slate-200 my-4"></div>
                        <span class="text-slate-400 font-bold text-[10px] uppercase tracking-wider block mb-1">Rekomendasi Solusi</span>
                        <h5 class="text-lg font-heading font-extrabold text-emerald-600 mb-3">E-Commerce & Katalog Online</h5>
                        <p class="text-slate-500 text-sm leading-relaxed font-medium mb-6">Pajang semua produk dengan kategori rapi, harga transparan, stok otomatis, dan integrasi checkout order WhatsApp terstruktur.</p>
                    </div>
                    <a href="https://wa.me/6287822368008?text=Halo%20AHZA%20Digitals%2C%20saya%20tertarik%20membuat%20Website%20Katalog%20%2F%20E-Commerce%20agar%20bisa%20menampilkan%20produk%20secara%20otomatis%20tanpa%20capek%20balas%20chat%20satu-satu." target="_blank" class="w-full bg-emerald-50 hover:bg-emerald-500 hover:text-white text-emerald-600 font-bold py-4 px-6 rounded-2xl text-center text-sm transition-all duration-300 flex items-center justify-center gap-2">
                        Pilih Solusi Ini <i class="fa-brands fa-whatsapp text-lg"></i>
                    </a>
                </div>

                <!-- Solution Card 3 -->
                <div class="p-8 rounded-[2.5rem] bg-slate-50 border border-slate-100 transition-all duration-500 card-hover flex flex-col justify-between group" data-aos="fade-up" data-aos-delay="200">
                    <div>
                        <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center text-rose-500 text-3xl mb-8 shadow-sm group-hover:bg-rose-500 group-hover:text-white transition-all duration-300">
                            <i class="fa-solid fa-bullseye"></i>
                        </div>
                        <span class="text-rose-500 font-bold text-xs uppercase tracking-widest block mb-2">Masalah 3: Jasa Sepi Orderan</span>
                        <h4 class="text-2xl font-heading font-bold text-primary mb-4 leading-snug">"Jasa saya sepi & tidak ada yang kenal"</h4>
                        <div class="h-px bg-slate-200 my-4"></div>
                        <span class="text-slate-400 font-bold text-[10px] uppercase tracking-wider block mb-1">Rekomendasi Solusi</span>
                        <h5 class="text-lg font-heading font-extrabold text-rose-600 mb-3">High-Conversion Landing Page</h5>
                        <p class="text-slate-500 text-sm leading-relaxed font-medium mb-6">Desain satu halaman khusus fokus penawaran jasa Anda dengan copywriting persuasif tinggi agar pengunjung langsung closing ke WA.</p>
                    </div>
                    <a href="https://wa.me/6287822368008?text=Halo%20AHZA%20Digitals%2C%20saya%20tertarik%20membuat%20Landing%20Page%20berkonversi%20tinggi%20agar%20jasa%2Fproduk%20saya%20kebanjiran%20orderan%20dan%20leads." target="_blank" class="w-full bg-rose-50 hover:bg-rose-500 hover:text-white text-rose-600 font-bold py-4 px-6 rounded-2xl text-center text-sm transition-all duration-300 flex items-center justify-center gap-2">
                        Pilih Solusi Ini <i class="fa-brands fa-whatsapp text-lg"></i>
                    </a>
                </div>

                <!-- Solution Card 4 -->
                <div class="p-8 rounded-[2.5rem] bg-slate-50 border border-slate-100 transition-all duration-500 card-hover flex flex-col justify-between group" data-aos="fade-up" data-aos-delay="300">
                    <div>
                        <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center text-amber-500 text-3xl mb-8 shadow-sm group-hover:bg-amber-500 group-hover:text-white transition-all duration-300">
                            <i class="fa-solid fa-gears"></i>
                        </div>
                        <span class="text-amber-500 font-bold text-xs uppercase tracking-widest block mb-2">Masalah 4: Operasional Berantakan</span>
                        <h4 class="text-2xl font-heading font-bold text-primary mb-4 leading-snug">"Sistem kerja & catat kelola data bisnis masih kacau"</h4>
                        <div class="h-px bg-slate-200 my-4"></div>
                        <span class="text-slate-400 font-bold text-[10px] uppercase tracking-wider block mb-1">Rekomendasi Solusi</span>
                        <h5 class="text-lg font-heading font-extrabold text-amber-600 mb-3">Custom Web Application / System</h5>
                        <p class="text-slate-500 text-sm leading-relaxed font-medium mb-6">Aplikasi manajemen internal, kasir, inventori, ERP, atau sistem kustom khusus yang dirancang sesuai dengan SOP bisnis Anda.</p>
                    </div>
                    <a href="https://wa.me/6287822368008?text=Halo%20AHZA%20Digitals%2C%20saya%20tertarik%20membuat%20Web%20App%20%2F%20Sistem%20Kustom%20untuk%20merapikan%20manajemen%20dan%20data%20operasional%20bisnis%20saya." target="_blank" class="w-full bg-amber-50 hover:bg-amber-500 hover:text-white text-amber-600 font-bold py-4 px-6 rounded-2xl text-center text-sm transition-all duration-300 flex items-center justify-center gap-2">
                        Pilih Solusi Ini <i class="fa-brands fa-whatsapp text-lg"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= PRICING SECTION ================= -->
    <section id="pricing" class="py-32 bg-slate-50 relative overflow-hidden">
        <!-- Floating details -->
        <div class="absolute top-1/4 -right-20 w-80 h-80 bg-accent/5 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute bottom-1/4 -left-20 w-80 h-80 bg-indigo-500/5 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-20" data-aos="fade-up">
                <h2 class="text-accent font-extrabold tracking-[0.2em] uppercase text-sm mb-4">Daftar Harga</h2>
                <h3 class="text-4xl md:text-5xl font-heading font-extrabold text-primary leading-tight mb-6">
                    Pilihan Paket <br/><span class="text-gradient">Investasi Digital</span> Anda
                </h3>
                <p class="text-slate-500 text-lg md:text-xl font-medium">
                    Pilih paket penawaran transparan di bawah ini. Semua paket bersifat fleksibel dan dapat dikustomisasi penuh sesuai kebutuhan spesifik bisnis Anda.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch">
                <!-- Package 1: Landing Page -->
                <div class="bg-white rounded-[2.5rem] border border-slate-100 p-8 md:p-10 shadow-sm hover:shadow-2xl transition-all duration-500 card-hover flex flex-col justify-between relative overflow-hidden" data-aos="fade-up">
                    <div>
                        <div class="mb-8">
                            <span class="px-4 py-2 rounded-2xl bg-indigo-50 text-indigo-600 text-xs font-bold uppercase tracking-wider">Leads & Konversi</span>
                        </div>
                        <h4 class="text-3xl font-heading font-extrabold text-primary mb-2">Paket Landing Page</h4>
                        <p class="text-slate-400 font-medium text-sm mb-6">Cocok untuk promosi satu produk unggulan, jasa profesional, atau kampanye promosi terfokus.</p>
                        
                        <div class="flex items-baseline gap-1 mb-8 border-b border-slate-100 pb-8">
                            <span class="text-slate-500 text-sm font-semibold">Mulai Dari</span>
                            <span class="text-4xl md:text-5xl font-heading font-extrabold text-primary">Rp 250rb</span>
                        </div>

                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-indigo-500 mt-1"></i>
                                <span class="text-slate-600 font-medium text-sm">Desain 1 Halaman Responsif Modern</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-indigo-500 mt-1"></i>
                                <span class="text-slate-600 font-medium text-sm">Gratis Domain <code class="bg-slate-50 px-1 py-0.5 rounded text-indigo-500">.com</code> (1 Tahun)</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-indigo-500 mt-1"></i>
                                <span class="text-slate-600 font-medium text-sm">Hosting Premium Berkecepatan Tinggi (1 Tahun)</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-indigo-500 mt-1"></i>
                                <span class="text-slate-600 font-medium text-sm">Integrasi Tombol WhatsApp Interaktif</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-indigo-500 mt-1"></i>
                                <span class="text-slate-600 font-medium text-sm">Optimasi SEO Dasar & Sertifikasi SSL Gratis</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-indigo-500 mt-1"></i>
                                <span class="text-slate-600 font-medium text-sm">AOS Animation & Efek Visual Premium</span>
                            </li>
                        </ul>
                    </div>
                    <a href="https://wa.me/6287822368008?text=Halo%20AHZA%20Digitals%2C%20saya%20tertarik%20mengambil%20Paket%20Landing%20Page%20(Mulai%20dari%20Rp%20250rb)%20untuk%20menaikkan%20leads%20bisnis%20saya.%20Bisa%20bantu%20jelaskan%20detailnya%3F" target="_blank" class="w-full bg-slate-50 hover:bg-indigo-600 hover:text-white text-slate-800 font-bold py-5 px-6 rounded-2xl text-center transition-all duration-300 flex items-center justify-center gap-2 shadow-sm">
                        Ambil Paket Ini <i class="fa-brands fa-whatsapp text-lg"></i>
                    </a>
                </div>

                <!-- Package 2: Company Profile (Terpopuler) -->
                <div class="bg-white rounded-[2.5rem] border-2 border-accent p-8 md:p-10 shadow-xl hover:shadow-2xl transition-all duration-500 card-hover flex flex-col justify-between relative overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                    <!-- Popular Tag -->
                    <div class="absolute top-0 right-0 bg-accent text-white font-extrabold text-xs tracking-wider uppercase py-2 px-8 rounded-bl-3xl">
                        Terpopuler
                    </div>
                    
                    <div>
                        <div class="mb-8">
                            <span class="px-4 py-2 rounded-2xl bg-accent/10 text-accent text-xs font-bold uppercase tracking-wider">Kredibilitas & Brand</span>
                        </div>
                        <h4 class="text-3xl font-heading font-extrabold text-primary mb-2">Paket Company Profile</h4>
                        <p class="text-slate-400 font-medium text-sm mb-6">Pilihan paling tepat untuk membangun citra premium perusahaan, instansi, sekolah, atau UMKM naik kelas.</p>
                        
                        <div class="flex items-baseline gap-1 mb-8 border-b border-slate-100 pb-8">
                            <span class="text-slate-500 text-sm font-semibold">Mulai Dari</span>
                            <span class="text-4xl md:text-5xl font-heading font-extrabold text-accent">Rp 1.7jt</span>
                        </div>

                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-accent mt-1"></i>
                                <span class="text-slate-600 font-medium text-sm">Desain Website Multi-Halaman (Home, About, Jasa, Kontak)</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-accent mt-1"></i>
                                <span class="text-slate-600 font-medium text-sm"><strong class="text-slate-800">Admin Panel Filament 4 (CMS)</strong> - Kelola konten, foto, dan profil secara mandiri tanpa coding!</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-accent mt-1"></i>
                                <span class="text-slate-600 font-medium text-sm">Gratis Domain <code class="bg-slate-50 px-1 py-0.5 rounded text-accent">.com</code> / <code class="bg-slate-50 px-1 py-0.5 rounded text-accent">.id</code> (1 Tahun)</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-accent mt-1"></i>
                                <span class="text-slate-600 font-medium text-sm">Hosting Premium Berkecepatan Tinggi (1 Tahun)</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-accent mt-1"></i>
                                <span class="text-slate-600 font-medium text-sm">Email Bisnis Profesional (misal: <code class="bg-slate-50 px-1 rounded text-accent">halo@namausaha.com</code>)</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-accent mt-1"></i>
                                <span class="text-slate-600 font-medium text-sm">Integrasi Sosial Media, Google Maps & Hubungi Kami WA</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-accent mt-1"></i>
                                <span class="text-slate-600 font-medium text-sm"><strong class="text-slate-800">Garansi Maintenance 3 Bulan</strong> - Bimbingan penuh kelola admin panel, perbaikan bug gratis, & bantuan backup rutin agar web selalu aman.</span>
                            </li>
                        </ul>
                    </div>
                    <a href="https://wa.me/6287822368008?text=Halo%20AHZA%20Digitals%2C%20saya%20tertarik%20mengambil%20Paket%20Company%20Profile%20(Mulai%20dari%20Rp%201.7jt)%20agar%20bisnis%20saya%20lebih%20dipercaya%20dan%20punya%20admin%20panel.%20Bisa%20bantu%20jelaskan%20detailnya%3F" target="_blank" class="w-full bg-accent hover:bg-secondary text-white font-bold py-5 px-6 rounded-2xl text-center transition-all duration-300 flex items-center justify-center gap-2 shadow-lg shadow-accent/20 hover:shadow-accent/40">
                        Ambil Paket Ini <i class="fa-brands fa-whatsapp text-lg"></i>
                    </a>
                </div>

                <!-- Package 3: Custom App & E-Commerce -->
                <div class="bg-white rounded-[2.5rem] border border-slate-100 p-8 md:p-10 shadow-sm hover:shadow-2xl transition-all duration-500 card-hover flex flex-col justify-between relative overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                    <div>
                        <div class="mb-8">
                            <span class="px-4 py-2 rounded-2xl bg-amber-50 text-amber-600 text-xs font-bold uppercase tracking-wider">Otomatisasi & Kustom</span>
                        </div>
                        <h4 class="text-3xl font-heading font-extrabold text-primary mb-2">Custom System & E-Commerce</h4>
                        <p class="text-slate-400 font-medium text-sm mb-6">Sistem manajemen kustom, toko online checkout WA/Sistem, aplikasi internal instansi, sistem kelola PPDB sekolah, dsb.</p>
                        
                        <div class="flex items-baseline gap-1 mb-8 border-b border-slate-100 pb-8">
                            <span class="text-slate-500 text-sm font-semibold">Mulai Dari</span>
                            <span class="text-4xl md:text-5xl font-heading font-extrabold text-primary">Rp 3.5jt</span>
                        </div>

                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-amber-500 mt-1"></i>
                                <span class="text-slate-600 font-medium text-sm">Pengembangan Penuh dengan Laravel / Filament / Vue / Capacitor JS</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-amber-500 mt-1"></i>
                                <span class="text-slate-600 font-medium text-sm">Alur Kerja, Database, dan CRUD Disesuaikan dengan SOP Bisnis Anda</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-amber-500 mt-1"></i>
                                <span class="text-slate-600 font-medium text-sm">Toko Online Checkout Terstruktur Langsung ke Pesan WA atau Pembayaran</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-amber-500 mt-1"></i>
                                <span class="text-slate-600 font-medium text-sm">Sistem Keamanan Data Mutakhir & Proteksi Serangan</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-amber-500 mt-1"></i>
                                <span class="text-slate-600 font-medium text-sm">Pelatihan Operasional Penggunaan Sistem Selesai Pengerjaan</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-amber-500 mt-1"></i>
                                <span class="text-slate-600 font-medium text-sm"><strong class="text-slate-800">Premium Maintenance 6 Bulan</strong> - Pemantauan server, penanganan bug prioritas, backup otomatis berkala, & pendampingan tim operasional eksklusif.</span>
                            </li>
                        </ul>
                    </div>
                    <a href="https://wa.me/6287822368008?text=Halo%20AHZA%20Digitals%2C%20saya%20tertarik%20mengambil%20Paket%20Custom%20System%20%2F%20E-Commerce%20(Mulai%20dari%20Rp%203.5jt)%20untuk%20operasional%20bisnis%20saya.%20Bisa%20bantu%20jelaskan%20detailnya%3F" target="_blank" class="w-full bg-slate-50 hover:bg-amber-500 hover:text-white text-slate-800 font-bold py-5 px-6 rounded-2xl text-center transition-all duration-300 flex items-center justify-center gap-2 shadow-sm">
                        Konsultasi Kustom <i class="fa-brands fa-whatsapp text-lg"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= PORTFOLIO SECTION ================= -->
    <section id="portfolio" class="py-32 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-20">
                <div class="max-w-2xl" data-aos="fade-down">
                    <h2 class="text-accent font-extrabold tracking-[0.2em] uppercase text-sm mb-4">Featured Work</h2>
                    <h3 class="text-4xl md:text-6xl font-heading font-extrabold text-primary">Proyek <span class="text-gradient">Terpilih</span>.</h3>
                </div>
                <a href="{{ route('projects.index') }}" class="mt-8 md:mt-0 px-8 py-4 bg-white rounded-2xl font-bold text-primary shadow-sm hover:shadow-md transition-all flex items-center gap-3 group" data-aos="fade-left" data-aos-delay="200">
                    Semua Proyek <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                @forelse($projects as $project)
                <div class="project-card group cursor-pointer" data-aos="zoom-in-up" data-aos-delay="{{ $loop->index * 100 }}"
                     data-title="{{ $project->title }}"
                     data-category="{{ $project->category ?? 'Web Development' }}"
                     data-image="{{ $project->image ? asset('storage/' . $project->image) : 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80' }}"
                     data-description="{{ $project->description }}"
                     data-url="{{ $project->url }}">
                    <div class="relative overflow-hidden rounded-[2.5rem] bg-white p-4 shadow-sm group-hover:shadow-2xl transition-all duration-500">
                        <div class="relative h-[400px] overflow-hidden rounded-[2rem]">
                            <img src="{{ $project->image ? asset('storage/' . $project->image) : 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80' }}" 
                                 alt="{{ $project->title }}" 
                                 class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700" />
                            <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                                <span class="px-8 py-4 bg-white rounded-2xl font-bold text-primary transform translate-y-10 group-hover:translate-y-0 transition-transform duration-500 shadow-xl">Lihat Detail</span>
                            </div>
                        </div>
                        <div class="pt-8 pb-4 px-4 flex justify-between items-start">
                            <div>
                                <span class="text-accent font-bold text-sm tracking-widest uppercase mb-2 block">{{ $project->category ?? 'Web Development' }}</span>
                                <h4 class="text-3xl font-heading font-bold text-primary group-hover:text-accent transition-colors">{{ $project->title }}</h4>
                                <p class="text-slate-500 mt-3 font-medium line-clamp-2">{{ $project->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <!-- Empty State or Placeholders -->
                <div class="col-span-2 text-center py-20 bg-white rounded-[2.5rem] border-2 border-dashed border-slate-200">
                    <p class="text-slate-400 font-bold text-xl">Belum ada proyek yang dipublikasikan.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- ================= PROCESS SECTION ================= -->
    <section id="process" class="py-32 bg-primary text-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-full h-full opacity-10 pointer-events-none">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 100 C 20 0 50 0 100 100" fill="none" stroke="white" stroke-width="0.1" />
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-24">
                <h2 class="text-accent font-extrabold tracking-[0.2em] uppercase text-sm mb-4" data-aos="fade-down">Our Workflow</h2>
                <h3 class="text-4xl md:text-6xl font-heading font-extrabold mb-8" data-aos="zoom-in">Cara Kami <span class="text-gradient">Bekerja</span>.</h3>
                <p class="text-slate-400 text-xl font-medium" data-aos="fade-up" data-aos-delay="200">Metodologi yang terstruktur untuk memastikan kualitas di setiap tahap pengembangan.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <!-- Step 1 -->
                <div class="relative text-center group" data-aos="fade-right" data-aos-delay="300">
                    <div class="w-24 h-24 mx-auto bg-white/10 rounded-3xl flex items-center justify-center text-4xl mb-8 glass-dark group-hover:bg-accent transition-colors duration-500">
                        01
                    </div>
                    <h4 class="text-2xl font-heading font-bold mb-4">Discovery</h4>
                    <p class="text-slate-400 font-medium">Kami mulai dengan memahami visi, target pasar, dan kebutuhan unik bisnis Anda.</p>
                    <div class="hidden md:block absolute top-12 left-[70%] w-full h-[1px] bg-white/10 border-t-2 border-dashed border-white/20"></div>
                </div>

                <!-- Step 2 -->
                <div class="relative text-center group" data-aos="fade-right" data-aos-delay="450">
                    <div class="w-24 h-24 mx-auto bg-white/10 rounded-3xl flex items-center justify-center text-4xl mb-8 glass-dark group-hover:bg-accent transition-colors duration-500">
                        02
                    </div>
                    <h4 class="text-2xl font-heading font-bold mb-4">Strategy & UI</h4>
                    <p class="text-slate-400 font-medium">Perancangan arsitektur dan desain antarmuka yang mengutamakan pengalaman pengguna.</p>
                    <div class="hidden md:block absolute top-12 left-[70%] w-full h-[1px] bg-white/10 border-t-2 border-dashed border-white/20"></div>
                </div>

                <!-- Step 3 -->
                <div class="relative text-center group" data-aos="fade-right" data-aos-delay="600">
                    <div class="w-24 h-24 mx-auto bg-white/10 rounded-3xl flex items-center justify-center text-4xl mb-8 glass-dark group-hover:bg-accent transition-colors duration-500">
                        03
                    </div>
                    <h4 class="text-2xl font-heading font-bold mb-4">Development</h4>
                    <p class="text-slate-400 font-medium">Proses coding dengan standar tinggi, performa maksimal, dan keamanan data terjamin.</p>
                    <div class="hidden md:block absolute top-12 left-[70%] w-full h-[1px] bg-white/10 border-t-2 border-dashed border-white/20"></div>
                </div>

                <!-- Step 4 -->
                <div class="text-center group" data-aos="fade-right" data-aos-delay="750">
                    <div class="w-24 h-24 mx-auto bg-white/10 rounded-3xl flex items-center justify-center text-4xl mb-8 glass-dark group-hover:bg-accent transition-colors duration-500">
                        04
                    </div>
                    <h4 class="text-2xl font-heading font-bold mb-4">Launch & Scale</h4>
                    <p class="text-slate-400 font-medium">Peluncuran produk dan dukungan berkelanjutan untuk memastikan pertumbuhan bisnis.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= CTA SECTION ================= -->
    <section id="contact" class="py-32 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="bg-accent rounded-[3.5rem] p-12 md:p-24 text-center relative overflow-hidden shadow-2xl shadow-accent/40" data-aos="flip-up">
                <!-- Abstract blobs -->
                <div class="absolute -top-24 -left-24 w-96 h-96 bg-white/10 rounded-full blur-[100px]"></div>
                <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-indigo-900/20 rounded-full blur-[100px]"></div>

                <div class="relative z-10 max-w-3xl mx-auto">
                    <h2 class="text-white/80 font-bold tracking-widest uppercase text-sm mb-6">Mulai Transformasi Digital</h2>
                    <h3 class="text-4xl md:text-7xl font-heading font-extrabold text-white mb-8 leading-tight">
                        Siap Kembangkan <br/> Bisnis Anda <span class="text-indigo-200">Sekarang?</span>
                    </h3>
                    <p class="text-white/80 text-lg md:text-xl font-medium mb-12 max-w-2xl mx-auto leading-relaxed">
                        Jangan biarkan calon pelanggan Anda beralih ke kompetitor hanya karena bisnis Anda belum memiliki website resmi. Hubungi kami sekarang dan dapatkan konsultasi strategi gratis!
                    </p>
                    <div class="flex flex-col sm:flex-row gap-6 justify-center">
                        <a href="https://wa.me/6287822368008?text=Halo%20AHZA%20Digitals%2C%20saya%20ingin%20konsultasi%20gratis%20untuk%20mencari%20solusi%20website%20terbaik%20bagi%20perkembangan%20bisnis%20saya." class="bg-white text-accent px-12 py-6 rounded-[2rem] font-bold text-xl hover:bg-slate-100 transition-all shadow-xl hover:-translate-y-1 flex items-center justify-center gap-3">
                            <i class="fa-brands fa-whatsapp text-2xl"></i> Konsultasi Gratis Sekarang
                        </a>
                        <a href="mailto:ahzadigitals@gmail.com" class="bg-white/10 text-white border border-white/20 px-12 py-6 rounded-[2rem] font-bold text-xl backdrop-blur-md hover:bg-white/20 transition-all hover:-translate-y-1">
                            Kirim Email
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= FOOTER ================= -->
    <footer class="bg-white pt-24 pb-12 border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-16 mb-20">
                <div class="md:col-span-2">
                    <div class="flex items-center gap-3 mb-8">
                        <div class="w-10 h-10 bg-accent text-white flex items-center justify-center rounded-xl font-bold text-xl">A</div>
                        <span class="font-heading font-extrabold text-2xl text-primary tracking-tight">AHZA<span class="text-accent">.</span></span>
                    </div>
                    <p class="text-slate-500 text-xl font-medium leading-relaxed max-w-sm mb-8">
                        Membangun solusi digital kelas dunia dari Indramayu untuk dunia.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="w-12 h-12 rounded-2xl bg-slate-50 flex items-center justify-center text-primary hover:bg-accent hover:text-white transition-all"><i class="fa-brands fa-instagram text-xl"></i></a>
                        <a href="#" class="w-12 h-12 rounded-2xl bg-slate-50 flex items-center justify-center text-primary hover:bg-accent hover:text-white transition-all"><i class="fa-brands fa-linkedin-in text-xl"></i></a>
                        <a href="#" class="w-12 h-12 rounded-2xl bg-slate-50 flex items-center justify-center text-primary hover:bg-accent hover:text-white transition-all"><i class="fa-brands fa-github text-xl"></i></a>
                    </div>
                </div>

                <div>
                    <h4 class="text-primary font-bold text-lg mb-8 uppercase tracking-widest">Navigation</h4>
                    <ul class="space-y-4">
                        <li><a href="#home" class="text-slate-500 font-bold hover:text-accent transition-colors">Home</a></li>
                        <li><a href="#why-website" class="text-slate-500 font-bold hover:text-accent transition-colors">Mengapa Website?</a></li>
                        <li><a href="#solutions" class="text-slate-500 font-bold hover:text-accent transition-colors">Solusi Bisnis</a></li>
                        <li><a href="#pricing" class="text-slate-500 font-bold hover:text-accent transition-colors">Paket Investasi</a></li>
                        <li><a href="#portfolio" class="text-slate-500 font-bold hover:text-accent transition-colors">Portfolio</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-primary font-bold text-lg mb-8 uppercase tracking-widest">Contact Info</h4>
                    <ul class="space-y-6">
                        <li class="flex items-start gap-4">
                            <i class="fa-solid fa-location-dot mt-1 text-accent"></i>
                            <span class="text-slate-500 font-medium">Rajasinga, Terisi, <br/> Indramayu, West Java</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <i class="fa-solid fa-envelope text-accent"></i>
                            <span class="text-slate-500 font-medium">ahzadigitals@gmail.com</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="pt-12 border-t border-slate-100 flex flex-col md:flex-row justify-between items-center gap-6">
                <p class="text-slate-400 font-medium text-sm">
                    &copy; <span id="year"></span> AHZA Digitals. All rights reserved.
                </p>
                <div class="flex gap-8">
                    <a href="#" class="text-slate-400 hover:text-primary text-sm font-bold">Privacy Policy</a>
                    <a href="#" class="text-slate-400 hover:text-primary text-sm font-bold">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- ================= MODAL PROJECT DETAIL ================= -->
    <div id="project-modal" class="fixed inset-0 z-[100] hidden items-center justify-center p-4 md:p-8">
        <div class="absolute inset-0 bg-primary/90 backdrop-blur-md" onclick="closeProjectModal()"></div>
        <div class="relative bg-white w-full max-w-5xl max-h-[90vh] overflow-y-auto rounded-[3rem] shadow-2xl glass border border-white/20">
            <!-- Close Button -->
            <button onclick="closeProjectModal()" class="absolute top-8 right-8 z-10 w-12 h-12 bg-slate-100 hover:bg-slate-200 rounded-2xl flex items-center justify-center text-primary transition-all">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>

            <div class="grid grid-cols-1 lg:grid-cols-2">
                <!-- Image Side -->
                <div class="p-4 lg:p-8">
                    <div class="rounded-[2rem] overflow-hidden h-[300px] lg:h-[500px]">
                        <img id="modal-image" src="" alt="Project Detail" class="w-full h-full object-cover">
                    </div>
                </div>
                <!-- Content Side -->
                <div class="p-8 lg:p-12 flex flex-col justify-center">
                    <span id="modal-category" class="text-accent font-extrabold tracking-widest uppercase text-sm mb-4 block">CATEGORY</span>
                    <h2 id="modal-title" class="text-4xl md:text-5xl font-heading font-extrabold text-primary mb-8 leading-tight">Project Title</h2>
                    <div class="space-y-6">
                        <h4 class="text-slate-400 font-bold uppercase tracking-widest text-xs">Description</h4>
                        <p id="modal-description" class="text-slate-600 text-lg font-medium leading-relaxed">
                            Project description goes here...
                        </p>
                    </div>
                    <div class="mt-12 flex flex-wrap gap-4">
                        <a id="modal-link" href="#" target="_blank" class="bg-accent hover:bg-secondary text-white px-10 py-5 rounded-2xl font-bold text-lg transition-all shadow-xl shadow-accent/25 flex items-center gap-3">
                            Visit Live Site <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>
                        <button onclick="closeProjectModal()" class="bg-slate-100 hover:bg-slate-200 text-primary px-10 py-5 rounded-2xl font-bold text-lg transition-all">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ================= SCRIPTS ================= -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            easing: "ease-out-cubic",
            once: true,
            offset: 50,
        });

        // Navbar Scroll Effect
        const navbar = document.getElementById("navbar");
        window.addEventListener("scroll", () => {
            if (window.scrollY > 50) {
                navbar.classList.add("glass", "shadow-lg", "py-2");
                navbar.classList.remove("py-0");
            } else {
                navbar.classList.remove("glass", "shadow-lg", "py-2");
                navbar.classList.add("py-0");
            }
        });

        // Mobile Menu Toggle
        const btn = document.getElementById("mobile-menu-btn");
        const menu = document.getElementById("mobile-menu");
        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });

        // Set dynamic year
        document.getElementById("year").textContent = new Date().getFullYear();

        // Project Modal Logic
        const modal = document.getElementById('project-modal');
        const modalImage = document.getElementById('modal-image');
        const modalTitle = document.getElementById('modal-title');
        const modalCategory = document.getElementById('modal-category');
        const modalDescription = document.getElementById('modal-description');
        const modalLink = document.getElementById('modal-link');

        // Handle Project Card Clicks
        document.querySelectorAll('.project-card').forEach(card => {
            card.addEventListener('click', () => {
                const title = card.getAttribute('data-title');
                const category = card.getAttribute('data-category');
                const image = card.getAttribute('data-image');
                const description = card.getAttribute('data-description');
                const url = card.getAttribute('data-url');

                modalTitle.innerText = title;
                modalCategory.innerText = category;
                modalImage.src = image;
                modalDescription.innerText = description;
                
                if (url && url !== 'null' && url !== '') {
                    modalLink.href = url;
                    modalLink.classList.remove('hidden');
                } else {
                    modalLink.classList.add('hidden');
                }

                modal.classList.remove('hidden');
                modal.classList.add('flex');
                document.body.classList.add('overflow-hidden');
            });
        });

        function closeProjectModal() {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.classList.remove('overflow-hidden');
        }
    </script>
</body>
</html>
