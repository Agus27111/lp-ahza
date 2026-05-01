<!doctype html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $profile->name ?? 'Agus Setiawan' }} | Full-stack Developer & Tech Educator</title>
    <meta name="description" content="{{ Str::limit(strip_tags($profile->bio), 160) ?? 'Personal biography and portfolio of Agus Setiawan, a passionate Full-stack Developer and Tech Educator.' }}">
    <meta name="keywords" content="Agus Setiawan, Laravel Developer, Vue.js, Filament, Tech Educator, Indramayu, Full-stack Developer">
    <meta name="author" content="{{ $profile->name ?? 'Agus Setiawan' }}">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $profile->name ?? 'Agus Setiawan' }} | Portfolio">
    <meta property="og:description" content="{{ Str::limit(strip_tags($profile->bio), 160) }}">
    <meta property="og:image" content="{{ $profile && $profile->avatar ? asset('storage/' . $profile->avatar) : asset('assets/images/agus_avatar.png') }}">
    <meta itemprop="image" content="{{ $profile && $profile->avatar ? asset('storage/' . $profile->avatar) : asset('assets/images/agus_avatar.png') }}">
    <link rel="image_src" href="{{ $profile && $profile->avatar ? asset('storage/' . $profile->avatar) : asset('assets/images/agus_avatar.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ $profile->name ?? 'Agus Setiawan' }} | Portfolio">
    <meta property="twitter:description" content="{{ Str::limit(strip_tags($profile->bio), 160) }}">
    <meta property="twitter:image" content="{{ $profile && $profile->avatar ? asset('storage/' . $profile->avatar) : asset('assets/images/agus_avatar.png') }}">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "Person",
      "name": "{{ $profile->name ?? 'Agus Setiawan' }}",
      "jobTitle": "{{ $profile->title ?? 'Full-stack Developer' }}",
      "url": "{{ url()->current() }}",
      "sameAs": [
        "{{ $profile->linkedin_url ?? '' }}",
        "{{ $profile->github_url ?? '' }}"
      ],
      "description": "{{ Str::limit(strip_tags($profile->bio), 160) }}"
    }
    </script>

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
        .blob {
            position: absolute;
            width: 600px;
            height: 600px;
            background: linear-gradient(180deg, rgba(99, 102, 241, 0.15) 0%, rgba(79, 70, 229, 0.15) 100%);
            filter: blur(100px);
            border-radius: 50%;
            z-index: -1;
            animation: blob-float 25s infinite alternate;
        }
        @keyframes blob-float {
            0% { transform: translate(0, 0) scale(1); }
            100% { transform: translate(100px, 150px) scale(1.2); }
        }
        .sidebar-card {
            position: sticky;
            top: 2rem;
        }
        .content-card {
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .content-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>
<body class="font-sans text-slate-800 antialiased bg-slate-50 min-h-screen relative overflow-x-hidden">
    
    <!-- Decorative Blobs -->
    <div class="blob top-[-200px] left-[-200px]"></div>
    <div class="blob bottom-[-200px] right-[-200px]" style="animation-delay: -7s; background: linear-gradient(180deg, rgba(129, 140, 248, 0.1) 0%, rgba(165, 180, 252, 0.1) 100%);"></div>

    <div class="max-w-7xl mx-auto px-6 py-12 lg:py-20 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            <!-- Left Sidebar (Profile) -->
            <aside class="lg:col-span-4 sidebar-card" data-aos="fade-right">
                <div class="bg-white/80 backdrop-blur-xl border border-white rounded-[3rem] p-10 shadow-xl shadow-slate-200/50">
                    <div class="text-center mb-8">
                        <div class="relative inline-block mb-8 group">
                            <div class="w-48 h-48 rounded-[3.5rem] overflow-hidden border-8 border-white shadow-2xl mx-auto transform transition-all duration-700 group-hover:rotate-0 rotate-3 scale-105 group-hover:scale-110">
                                <img src="{{ $profile && $profile->avatar ? asset('storage/' . $profile->avatar) : asset('assets/images/agus_avatar.png') }}" alt="{{ $profile->name ?? 'Agus Setiawan' }}" class="w-full h-full object-cover" loading="lazy">
                            </div>
                            <div class="absolute -bottom-2 -right-2 bg-accent text-white w-12 h-12 rounded-[1.5rem] flex items-center justify-center shadow-lg border-4 border-white animate-bounce">
                                <i class="fa-solid fa-bolt text-lg"></i>
                            </div>
                        </div>
                        
                        <h1 class="text-3xl font-heading font-black text-primary mb-3 tracking-tight">
                            {{ $profile->name ?? 'Agus Setiawan' }}
                        </h1>
                        <p class="text-accent font-bold tracking-widest text-xs uppercase mb-6">
                            {{ $profile->title ?? 'Full-stack Developer • Educator' }}
                        </p>
                        
                        <div class="flex justify-center gap-4 mb-8">
                            @if($profile && $profile->linkedin_url)
                            <a href="{{ $profile->linkedin_url }}" target="_blank" class="w-12 h-12 bg-slate-50 text-slate-400 rounded-2xl flex items-center justify-center hover:bg-accent hover:text-white hover:shadow-lg hover:shadow-accent/30 transition-all duration-300">
                                <i class="fa-brands fa-linkedin-in text-xl"></i>
                            </a>
                            @endif
                            @if($profile && $profile->github_url)
                            <a href="{{ $profile->github_url }}" target="_blank" class="w-12 h-12 bg-slate-50 text-slate-400 rounded-2xl flex items-center justify-center hover:bg-primary hover:text-white hover:shadow-lg hover:shadow-primary/30 transition-all duration-300">
                                <i class="fa-brands fa-github text-xl"></i>
                            </a>
                            @endif
                            @if($profile && $profile->whatsapp_number)
                            <a href="https://wa.me/{{ $profile->whatsapp_number }}" target="_blank" class="w-12 h-12 bg-slate-50 text-slate-400 rounded-2xl flex items-center justify-center hover:bg-[#25D366] hover:text-white hover:shadow-lg hover:shadow-green-500/30 transition-all duration-300">
                                <i class="fa-brands fa-whatsapp text-xl"></i>
                            </a>
                            @endif
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="p-6 rounded-[2rem] bg-slate-50 border border-slate-100">
                            <h3 class="text-sm font-bold text-primary mb-3 flex items-center gap-2">
                                <i class="fa-solid fa-user-tag text-accent"></i> About Me
                            </h3>
                            <p class="text-slate-500 text-sm leading-relaxed font-medium">
                                {{ $profile->bio ?? 'Full-stack Developer yang hobi membagikan apa yang telah dipelajari. Mari terhubung untuk diskusi lebih lanjut!' }}
                            </p>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div class="p-5 rounded-[2rem] bg-indigo-50 border border-indigo-100 text-center">
                                <p class="text-xs font-bold text-indigo-400 uppercase tracking-widest mb-1">Projects</p>
                                <p class="text-2xl font-black text-indigo-600">{{ $projects->count() }}+</p>
                            </div>
                            <div class="p-5 rounded-[2rem] bg-orange-50 border border-orange-100 text-center">
                                <p class="text-xs font-bold text-orange-400 uppercase tracking-widest mb-1">Articles</p>
                                <p class="text-2xl font-black text-orange-600">{{ $articles->count() }}</p>
                            </div>
                        </div>

                        <a href="https://wa.me/{{ $profile->whatsapp_number ?? '6287822368008' }}" class="w-full py-5 bg-primary text-white rounded-[2rem] font-bold text-center block hover:bg-accent hover:shadow-xl hover:shadow-accent/20 transition-all duration-500">
                            Hire Me Now
                        </a>
                    </div>
                </div>
            </aside>

            <!-- Right Content Area -->
            <main class="lg:col-span-8 space-y-16">
                
                <!-- Tech Stack Section -->
                <section data-aos="fade-up">
                    <div class="flex items-center justify-between mb-8 px-4">
                        <h2 class="text-2xl font-heading font-black text-primary flex items-center gap-4">
                            <span class="w-12 h-12 bg-accent/10 text-accent rounded-2xl flex items-center justify-center"><i class="fa-solid fa-layer-group"></i></span>
                            Core Expertise
                        </h2>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        @php
                            $stack = $profile->tech_stack ?? ['Laravel', 'Filament', 'Vue.js', 'CapacitorJS'];
                            $iconMapping = [
                                'laravel' => 'fa-brands fa-laravel',
                                'vue.js' => 'fa-brands fa-vuejs',
                                'js' => 'fa-brands fa-js',
                                'javascript' => 'fa-brands fa-js',
                                'php' => 'fa-brands fa-php',
                                'node.js' => 'fa-brands fa-node-js',
                                'github' => 'fa-brands fa-github',
                                'git' => 'fa-brands fa-git-alt',
                                'database' => 'fa-solid fa-database',
                                'mysql' => 'fa-solid fa-database',
                                'mobile' => 'fa-solid fa-mobile-screen',
                                'capacitorjs' => 'fa-solid fa-mobile-screen-button',
                                'filament' => 'fa-solid fa-terminal',
                                'tailwind' => 'fa-solid fa-wind',
                                'api' => 'fa-solid fa-cloud-arrow-down',
                                'rest api' => 'fa-solid fa-cloud-arrow-down',
                                'alpine.js' => 'fa-solid fa-mountain',
                            ];
                        @endphp
                        @foreach($stack as $tech)
                        @php
                            $lowerTech = strtolower(trim($tech));
                            $icon = 'fa-solid fa-code';
                            foreach ($iconMapping as $key => $val) {
                                if (str_contains($lowerTech, $key)) {
                                    $icon = $val;
                                    break;
                                }
                            }
                        @endphp
                        <div class="p-6 rounded-[2.5rem] bg-white border border-slate-100 shadow-sm hover:shadow-md hover:border-accent/30 transition-all duration-500 group text-center">
                            <div class="w-12 h-12 bg-slate-50 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-accent/10 transition-colors">
                                <i class="{{ $icon }} text-slate-400 group-hover:text-accent transition-colors"></i>
                            </div>
                            <span class="font-bold text-slate-700 text-sm tracking-tight">{{ $tech }}</span>
                        </div>
                        @endforeach
                    </div>
                </section>

                <!-- Latest Articles -->
                @if($articles->count() > 0)
                <section data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center justify-between mb-8 px-4">
                        <h2 class="text-2xl font-heading font-black text-primary flex items-center gap-4">
                            <span class="w-12 h-12 bg-orange-100 text-orange-600 rounded-2xl flex items-center justify-center"><i class="fa-solid fa-feather"></i></span>
                            Recent Writing
                        </h2>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        @foreach($articles as $article)
                        <article class="content-card bg-white border border-slate-100 rounded-[3rem] overflow-hidden group">
                            @if($article->thumbnail)
                            <div class="h-48 overflow-hidden relative">
                                <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
                                <div class="absolute top-6 left-6 px-4 py-2 bg-white/90 backdrop-blur-md rounded-xl text-[10px] font-black uppercase tracking-widest text-accent">Article</div>
                            </div>
                            @endif
                            <div class="p-8">
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-3">{{ $article->published_at ? $article->published_at->format('M d, Y') : $article->created_at->format('M d, Y') }}</p>
                                <h3 class="text-xl font-heading font-bold text-primary mb-4 group-hover:text-accent transition-colors leading-snug">
                                    {{ $article->title }}
                                </h3>
                                <p class="text-slate-500 text-sm font-medium line-clamp-2 mb-6">
                                    {{ $article->excerpt ?? Str::limit(strip_tags($article->content), 100) }}
                                </p>
                                <a href="{{ route('articles.show', $article->slug) }}" class="inline-flex items-center gap-2 font-bold text-sm text-accent group/link">
                                    Read Article <i class="fa-solid fa-arrow-right text-[10px] group-hover/link:translate-x-1 transition-transform"></i>
                                </a>
                            </div>
                        </article>
                        @endforeach
                    </div>
                </section>
                @endif

                <!-- Featured Projects -->
                @if($projects->count() > 0)
                <section data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center justify-between mb-8 px-4">
                        <h2 class="text-2xl font-heading font-black text-primary flex items-center gap-4">
                            <span class="w-12 h-12 bg-indigo-100 text-indigo-600 rounded-2xl flex items-center justify-center"><i class="fa-solid fa-rocket"></i></span>
                            Featured Work
                        </h2>
                    </div>
                    <div class="space-y-6">
                        @foreach($projects as $project)
                        <div class="content-card flex flex-col md:flex-row gap-8 bg-white border border-slate-100 rounded-[3rem] p-8 group">
                            <div class="w-full md:w-48 h-48 rounded-[2rem] overflow-hidden flex-shrink-0 shadow-inner">
                                <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy">
                            </div>
                            <div class="flex-grow flex flex-col justify-center">
                                <div class="flex flex-wrap gap-2 mb-4">
                                    @php
                                        $tags = is_array($project->tech_stack) ? $project->tech_stack : explode(',', $project->tech_stack);
                                    @endphp
                                    @foreach(array_slice($tags, 0, 3) as $tag)
                                    <span class="px-3 py-1 bg-slate-50 text-slate-400 rounded-lg text-[10px] font-bold uppercase tracking-widest border border-slate-100">#{{ trim($tag) }}</span>
                                    @endforeach
                                </div>
                                <h3 class="text-2xl font-heading font-bold text-primary mb-3">{{ $project->title }}</h3>
                                <p class="text-slate-500 text-sm font-medium line-clamp-2 mb-6">{{ $project->description }}</p>
                                <div class="flex gap-4">
                                    @if(isset($project->url))
                                    <a href="{{ $project->url }}" target="_blank" class="px-6 py-3 bg-accent text-white rounded-xl text-xs font-bold hover:shadow-lg hover:shadow-accent/25 transition-all">Live Demo</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
                @endif

                <!-- Footer -->
                <footer class="pt-12 border-t border-slate-200 text-center lg:text-left flex flex-col lg:flex-row justify-between items-center gap-6">
                    <p class="text-slate-400 text-sm font-medium">
                        &copy; {{ date('Y') }} {{ $profile->name ?? 'Agus Setiawan' }}. All rights reserved.
                    </p>
                    <div class="flex items-center gap-2 text-slate-400 text-sm font-bold">
                        Built with <i class="fa-solid fa-heart text-red-400"></i> by AHZA Digitals
                    </div>
                </footer>

            </main>

        </div>
    </div>

    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 50,
        });
    </script>
</body>
</html>
