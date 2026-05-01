<!doctype html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All Projects | AHZA Digitals Portfolio</title>

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
                    },
                    fontFamily: {
                        sans: ["Inter", "sans-serif"],
                        heading: ["Outfit", "sans-serif"],
                    },
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
        .text-gradient {
            background: linear-gradient(to right, #818cf8, #6366f1, #4f46e5);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
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

    <!-- ================= NAVBAR ================= -->
    <header class="fixed w-full top-0 z-50 glass shadow-sm">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-center h-20">
                <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center gap-3 group">
                    <div class="w-10 h-10 bg-accent text-white flex items-center justify-center rounded-xl font-bold text-xl group-hover:scale-110 transition-transform">A</div>
                    <span class="font-heading font-extrabold text-2xl text-primary">AHZA<span class="text-accent">.</span></span>
                </a>
                <a href="{{ route('home') }}" class="flex items-center gap-2 text-slate-600 hover:text-accent font-bold transition-all">
                    <i class="fa-solid fa-arrow-left"></i> Kembali ke Home
                </a>
            </div>
        </div>
    </header>

    <!-- ================= HERO ================= -->
    <section class="pt-40 pb-20 bg-primary relative overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-accent/30 via-transparent to-transparent"></div>
        </div>
        <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
            <h1 class="text-4xl md:text-7xl font-heading font-extrabold text-white mb-6" data-aos="fade-down">
                Semua <span class="text-gradient">Karya</span> Kami.
            </h1>
            <p class="text-slate-400 text-xl max-w-2xl mx-auto font-medium" data-aos="fade-up" data-aos-delay="100">
                Koleksi lengkap proyek digital yang telah kami bangun dengan dedikasi dan inovasi.
            </p>
        </div>
    </section>

    <!-- ================= PROJECTS GRID ================= -->
    <section class="py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($projects as $project)
                <div class="project-card group cursor-pointer" data-aos="fade-up" data-aos-delay="{{ ($loop->index % 3) * 100 }}"
                     data-title="{{ $project->title }}"
                     data-category="{{ $project->category ?? 'Web Development' }}"
                     data-image="{{ $project->image ? asset('storage/' . $project->image) : 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80' }}"
                     data-description="{{ $project->description }}"
                     data-url="{{ $project->url }}">
                    <div class="bg-white rounded-[2.5rem] p-4 shadow-sm group-hover:shadow-xl transition-all duration-500 border border-slate-100">
                        <div class="relative h-[300px] overflow-hidden rounded-[2rem]">
                            <img src="{{ $project->image ? asset('storage/' . $project->image) : 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80' }}" 
                                 class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700" />
                            <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <span class="px-6 py-3 bg-white rounded-xl font-bold text-primary shadow-lg">Detail</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <span class="text-accent font-bold text-xs uppercase tracking-widest mb-2 block">{{ $project->category ?? 'General' }}</span>
                            <h3 class="text-2xl font-heading font-bold text-primary group-hover:text-accent transition-colors">{{ $project->title }}</h3>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-20 bg-white rounded-[3rem] border-2 border-dashed border-slate-200">
                    <p class="text-slate-400 font-bold text-xl">Belum ada proyek.</p>
                </div>
                @endforelse
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
                    <h2 class="text-white/80 font-bold tracking-widest uppercase text-sm mb-6">Let's Work Together</h2>
                    <h3 class="text-4xl md:text-7xl font-heading font-extrabold text-white mb-12 leading-tight">
                        Punya Ide Gila? <br/> Mari <span class="text-indigo-200">Wujudkan</span>.
                    </h3>
                    <div class="flex flex-col sm:flex-row gap-6 justify-center">
                        <a href="https://wa.me/6287822368008?text=Halo%20AHZA%20Digitals%2C%20saya%20tertarik%20untuk%20mendiskusikan%20proyek%20digital%20saya.%20Bisa%20bantu%20saya%3F" class="bg-white text-accent px-12 py-6 rounded-[2rem] font-bold text-xl hover:bg-slate-100 transition-all shadow-xl hover:-translate-y-1">
                            Hubungi Kami Via WhatsApp
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
                        <li><a href="{{ route('home') }}#home" class="text-slate-500 font-bold hover:text-accent transition-colors">Home</a></li>
                        <li><a href="{{ route('home') }}#services" class="text-slate-500 font-bold hover:text-accent transition-colors">Services</a></li>
                        <li><a href="{{ route('projects.index') }}" class="text-slate-500 font-bold hover:text-accent transition-colors">Portfolio</a></li>
                        <li><a href="{{ route('home') }}#contact" class="text-slate-500 font-bold hover:text-accent transition-colors">Contact</a></li>
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

    <!-- ================= MODAL ================= -->
    <div id="project-modal" class="fixed inset-0 z-[100] hidden items-center justify-center p-4 md:p-8">
        <div class="absolute inset-0 bg-primary/90 backdrop-blur-md" onclick="closeProjectModal()"></div>
        <div class="relative bg-white w-full max-w-5xl max-h-[90vh] overflow-y-auto rounded-[3rem] shadow-2xl border border-white/20">
            <button onclick="closeProjectModal()" class="absolute top-8 right-8 z-10 w-12 h-12 bg-slate-100 rounded-2xl flex items-center justify-center text-primary"><i class="fa-solid fa-xmark text-xl"></i></button>
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="p-4 lg:p-8">
                    <div class="rounded-[2rem] overflow-hidden h-[300px] lg:h-[500px]">
                        <img id="modal-image" src="" class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="p-8 lg:p-12 flex flex-col justify-center">
                    <span id="modal-category" class="text-accent font-extrabold uppercase text-sm mb-4 block">CATEGORY</span>
                    <h2 id="modal-title" class="text-4xl font-heading font-extrabold text-primary mb-8">Project Title</h2>
                    <p id="modal-description" class="text-slate-600 text-lg leading-relaxed mb-10"></p>
                    <div class="flex flex-wrap gap-4">
                        <a id="modal-link" href="#" target="_blank" class="bg-accent text-white px-10 py-5 rounded-2xl font-bold text-lg shadow-xl shadow-accent/25">Visit Live Site</a>
                        <button onclick="closeProjectModal()" class="bg-slate-100 text-primary px-10 py-5 rounded-2xl font-bold text-lg">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, once: true });
        document.getElementById("year").textContent = new Date().getFullYear();

        const modal = document.getElementById('project-modal');
        const modalImage = document.getElementById('modal-image');
        const modalTitle = document.getElementById('modal-title');
        const modalCategory = document.getElementById('modal-category');
        const modalDescription = document.getElementById('modal-description');
        const modalLink = document.getElementById('modal-link');

        document.querySelectorAll('.project-card').forEach(card => {
            card.addEventListener('click', () => {
                modalTitle.innerText = card.getAttribute('data-title');
                modalCategory.innerText = card.getAttribute('data-category');
                modalImage.src = card.getAttribute('data-image');
                modalDescription.innerText = card.getAttribute('data-description');
                const url = card.getAttribute('data-url');
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
