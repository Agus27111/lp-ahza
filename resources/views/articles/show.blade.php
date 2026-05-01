<!doctype html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $article->title }} | {{ $profile->name ?? 'Agus Setiawan' }}</title>
    <meta name="description" content="{{ $article->excerpt ?? Str::limit(strip_tags($article->content), 160) }}">
    <meta name="author" content="{{ $profile->name ?? 'Agus Setiawan' }}">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $article->title }}">
    <meta property="og:description" content="{{ $article->excerpt ?? Str::limit(strip_tags($article->content), 160) }}">
    <meta property="og:image" content="{{ $article->thumbnail ? asset('storage/' . $article->thumbnail) : ($profile && $profile->avatar ? asset('storage/' . $profile->avatar) : asset('assets/images/agus_avatar.png')) }}">
    <meta itemprop="image" content="{{ $article->thumbnail ? asset('storage/' . $article->thumbnail) : ($profile && $profile->avatar ? asset('storage/' . $profile->avatar) : asset('assets/images/agus_avatar.png')) }}">
    <link rel="image_src" href="{{ $article->thumbnail ? asset('storage/' . $article->thumbnail) : ($profile && $profile->avatar ? asset('storage/' . $profile->avatar) : asset('assets/images/agus_avatar.png')) }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ $article->title }}">
    <meta property="twitter:description" content="{{ $article->excerpt ?? Str::limit(strip_tags($article->content), 160) }}">
    <meta property="twitter:image" content="{{ $article->thumbnail ? asset('storage/' . $article->thumbnail) : ($profile && $profile->avatar ? asset('storage/' . $profile->avatar) : asset('assets/images/agus_avatar.png')) }}">

    <!-- Article Structured Data -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "BlogPosting",
      "headline": "{{ $article->title }}",
      "image": "{{ $article->thumbnail ? asset('storage/' . $article->thumbnail) : asset('assets/images/agus_avatar.png') }}",
      "author": {
        "@@type": "Person",
        "name": "{{ $profile->name ?? 'Agus Setiawan' }}"
      },
      "publisher": {
        "@@type": "Organization",
        "name": "AHZA Digitals",
        "logo": {
          "@@type": "ImageObject",
          "url": "{{ asset('assets/images/logo.png') }}"
        }
      },
      "datePublished": "{{ $article->published_at ? $article->published_at->toIso8601String() : $article->created_at->toIso8601String() }}",
      "description": "{{ $article->excerpt ?? Str::limit(strip_tags($article->content), 160) }}"
    }
    </script>

    <!-- Google Fonts: Outfit & Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

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
        .prose h1, .prose h2, .prose h3 { font-family: 'Outfit', sans-serif; font-weight: 800; color: #0f172a; margin-top: 2rem; margin-bottom: 1rem; }
        .prose h1 { font-size: 2.25rem; }
        .prose h2 { font-size: 1.875rem; }
        .prose h3 { font-size: 1.5rem; }
        .prose p { margin-bottom: 1.5rem; line-height: 1.8; color: #475569; font-size: 1.125rem; }
        .prose ul { list-style-type: disc; margin-left: 1.5rem; margin-bottom: 1.5rem; }
        .prose li { margin-bottom: 0.5rem; color: #475569; }
        .prose img { border-radius: 1.5rem; margin: 2rem 0; }
        .prose a { color: #6366f1; text-decoration: underline; font-weight: 600; }
        .prose blockquote { border-left: 4px solid #6366f1; padding-left: 1.5rem; font-style: italic; color: #1e293b; margin: 2rem 0; }
        
        /* Code Block Styling */
        .prose pre { padding: 0; background: transparent; margin: 2rem 0; }
        .prose pre code { border-radius: 1rem; padding: 1.5rem; font-size: 0.9em; box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1); font-family: 'Courier New', Courier, monospace; }
        .prose p code { background: #f1f5f9; color: #6366f1; padding: 0.2rem 0.4rem; border-radius: 0.3rem; font-size: 0.875em; font-weight: 600; }
    </style>

    <!-- Highlight.js Theme -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/github-dark.min.css">
</head>
<body class="font-sans text-slate-800 antialiased bg-slate-50 min-h-screen">

    <nav class="fixed top-0 w-full z-50 bg-white/70 backdrop-blur-md border-b border-slate-100">
        <div class="max-w-4xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="{{ route('mybio') }}" class="flex items-center gap-2 font-bold text-primary group">
                <i class="fa-solid fa-arrow-left group-hover:-translate-x-1 transition-transform"></i>
                Back to Bio
            </a>
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 bg-accent text-white flex items-center justify-center rounded-lg font-bold text-sm">A</div>
                <span class="font-heading font-extrabold text-lg text-primary tracking-tight">AHZA<span class="text-accent">.</span></span>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-6 pt-32 pb-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
            <!-- Main Content -->
            <div class="lg:col-span-8">
                <!-- Article Header -->
                <header class="mb-12">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="px-4 py-1.5 bg-indigo-50 text-indigo-600 rounded-full text-xs font-bold uppercase tracking-widest">
                            {{ $article->published_at ? $article->published_at->format('M d, Y') : $article->created_at->format('M d, Y') }}
                        </span>
                        <span class="w-1 h-1 bg-slate-300 rounded-full"></span>
                        <span class="text-sm font-medium text-slate-400">5 min read</span>
                    </div>
                    
                    <h1 class="text-4xl md:text-6xl font-heading font-extrabold text-primary mb-8 leading-tight">
                        {{ $article->title }}
                    </h1>

                    @if($article->tags)
                    <div class="flex flex-wrap gap-3 mb-10">
                        @foreach($article->tags as $tag)
                        <span class="px-4 py-2 bg-white border border-slate-200 text-slate-600 rounded-2xl text-xs font-bold shadow-sm">
                            #{{ $tag }}
                        </span>
                        @endforeach
                    </div>
                    @endif

                    @if($article->thumbnail)
                    <div class="rounded-[2.5rem] overflow-hidden shadow-2xl mb-12">
                        <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }}" class="w-full object-cover" loading="lazy">
                    </div>
                    @endif
                </header>

                <!-- Article Content -->
                <div class="prose max-w-none mb-20">
                    {!! $article->content !!}
                </div>

                <!-- Author Bio Section -->
                <div class="bg-white p-8 md:p-12 rounded-[2.5rem] shadow-sm border border-slate-100 flex flex-col md:flex-row gap-8 items-center text-center md:text-left mb-20">
                    <div class="w-24 h-24 rounded-3xl overflow-hidden flex-shrink-0 shadow-lg">
                        <img src="{{ $profile && $profile->avatar ? asset('storage/' . $profile->avatar) : asset('assets/images/agus_avatar.png') }}" alt="{{ $profile->name ?? 'Agus Setiawan' }}" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="text-2xl font-heading font-bold text-primary mb-2">Ditulis oleh {{ $profile->name ?? 'Agus Setiawan' }}</h4>
                        <p class="text-slate-500 font-medium mb-6">
                            {{ $profile->bio ?? 'Full-stack Developer yang hobi membagikan apa yang telah dipelajari. Mari terhubung untuk diskusi lebih lanjut!' }}
                        </p>
                        <div class="flex gap-4 justify-center md:justify-start">
                            @if($profile && $profile->linkedin_url)
                            <a href="{{ $profile->linkedin_url }}" target="_blank" class="w-10 h-10 bg-slate-50 rounded-xl flex items-center justify-center text-slate-400 hover:text-accent hover:bg-white hover:shadow-md transition-all">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                            @endif
                            @if($profile && $profile->whatsapp_number)
                            <a href="https://wa.me/{{ $profile->whatsapp_number }}" target="_blank" class="w-10 h-10 bg-slate-50 rounded-xl flex items-center justify-center text-slate-400 hover:text-[#25D366] hover:bg-white hover:shadow-md transition-all">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Comment Section -->
                <section class="mt-20 pt-20 border-t border-slate-100" id="comments">
                    <h3 class="text-3xl font-heading font-extrabold text-primary mb-10 flex items-center gap-4">
                        Comments <span class="text-slate-300 text-xl font-medium">{{ $article->comments->count() }}</span>
                    </h3>

                    @auth
                        <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-slate-100 mb-12">
                            <form action="{{ route('comments.store', $article->id) }}" method="POST">
                                @csrf
                                <div class="flex gap-4 mb-6">
                                    <div class="w-10 h-10 rounded-xl overflow-hidden flex-shrink-0">
                                        <img src="{{ Auth::user()->avatar ?? 'https://ui-avatars.com/api/?name='.Auth::user()->name }}" alt="{{ Auth::user()->name }}" class="w-full h-full object-cover" loading="lazy">
                                    </div>
                                    <div class="flex-grow">
                                        <p class="font-bold text-primary">{{ Auth::user()->name }}</p>
                                        <p class="text-xs text-slate-400">Logged in via Google</p>
                                    </div>
                                    <button type="button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-xs font-bold text-red-400 hover:text-red-500 transition-colors">Logout</button>
                                </div>
                                <textarea name="content" rows="4" class="w-full p-6 rounded-2xl bg-slate-50 border border-slate-100 focus:outline-none focus:ring-2 focus:ring-accent/20 focus:border-accent transition-all resize-none mb-4" placeholder="Write your thoughts here..." required></textarea>
                                <button type="submit" class="bg-accent hover:bg-secondary text-white px-10 py-4 rounded-2xl font-bold transition-all shadow-lg shadow-accent/25">Post Comment</button>
                            </form>
                            <form action="{{ route('logout') }}" method="POST" id="logout-form" class="hidden">@csrf</form>
                        </div>
                    @else
                        <div class="bg-slate-50 p-12 rounded-[2.5rem] text-center border-2 border-dashed border-slate-200 mb-12">
                            <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center text-slate-400 text-3xl mx-auto mb-6 shadow-sm">
                                <i class="fa-solid fa-lock"></i>
                            </div>
                            <h4 class="text-xl font-bold text-primary mb-2">Want to join the discussion?</h4>
                            <p class="text-slate-500 mb-8 max-w-sm mx-auto">Login with Google to post your comments and share your thoughts about this article.</p>
                            <a href="{{ route('google.login') }}" class="inline-flex items-center gap-3 bg-white hover:bg-slate-50 text-slate-700 px-8 py-4 rounded-2xl font-bold transition-all shadow-md border border-slate-100">
                                <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" class="w-5 h-5">
                                Login with Google
                            </a>
                        </div>
                    @endauth

                    <!-- Comments List -->
                    <div class="space-y-8">
                        @forelse($article->comments()->latest()->get() as $comment)
                            <div class="flex gap-6 p-2">
                                <div class="w-12 h-12 rounded-2xl overflow-hidden flex-shrink-0 shadow-sm">
                                    <img src="{{ $comment->user->avatar ?? 'https://ui-avatars.com/api/?name='.$comment->user->name }}" alt="{{ $comment->user->name }}" class="w-full h-full object-cover" loading="lazy">
                                </div>
                                <div class="flex-grow">
                                    <div class="flex items-center gap-3 mb-2">
                                        <h4 class="font-bold text-primary">{{ $comment->user->name }}</h4>
                                        <span class="w-1 h-1 bg-slate-300 rounded-full"></span>
                                        <span class="text-xs text-slate-400 font-medium">{{ $comment->created_at->diffForHumans() }}</span>
                                    </div>
                                    <p class="text-slate-600 leading-relaxed font-medium bg-white p-6 rounded-2xl rounded-tl-none border border-slate-100 shadow-sm">
                                        {{ $comment->content }}
                                    </p>
                                </div>
                            </div>
                        @empty
                            <p class="text-slate-400 text-center py-10 font-medium italic">No comments yet. Be the first to share your thoughts!</p>
                        @endforelse
                    </div>
                </section>
            </div>

            <!-- Sidebar -->
            <aside class="lg:col-span-4">
                <div class="sticky top-32 space-y-12">
                    <!-- Author Card (Mini) -->
                    <div class="bg-primary text-white p-8 rounded-[2.5rem] relative overflow-hidden shadow-2xl">
                        <div class="absolute -top-12 -right-12 w-40 h-40 bg-accent/20 rounded-full blur-3xl"></div>
                        <div class="relative z-10">
                            <h4 class="text-accent font-bold tracking-widest uppercase text-[10px] mb-4">The Author</h4>
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 rounded-xl overflow-hidden border border-white/20">
                                    <img src="{{ $profile && $profile->avatar ? asset('storage/' . $profile->avatar) : asset('assets/images/agus_avatar.png') }}" class="w-full h-full object-cover" loading="lazy">
                                </div>
                                <div>
                                    <p class="font-bold text-lg leading-tight">{{ $profile->name ?? 'Agus Setiawan' }}</p>
                                    <p class="text-white/50 text-xs">Developer & Educator</p>
                                </div>
                            </div>
                            <p class="text-white/70 text-sm leading-relaxed mb-6 font-medium">
                                {{ $profile->title ?? 'Passionate about web tech and sharing knowledge with the community.' }}
                            </p>
                            <a href="{{ route('mybio') }}" class="text-xs font-bold text-accent hover:text-white transition-colors flex items-center gap-2 group">
                                View Profile <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Other Articles -->
                    <div>
                        <h4 class="text-xl font-heading font-bold text-primary mb-8">Related Reads</h4>
                        <div class="space-y-8">
                            @foreach($relatedArticles as $related)
                                <a href="{{ route('articles.show', $related->slug) }}" class="flex gap-4 group">
                                    @if($related->thumbnail)
                                        <div class="w-20 h-20 rounded-2xl overflow-hidden flex-shrink-0">
                                            <img src="{{ asset('storage/' . $related->thumbnail) }}" alt="{{ $related->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" loading="lazy">
                                        </div>
                                    @endif
                                    <div class="flex-grow">
                                        <h5 class="font-bold text-primary group-hover:text-accent transition-colors line-clamp-2 leading-tight mb-2">{{ $related->title }}</h5>
                                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">{{ $related->published_at ? $related->published_at->format('M d, Y') : $related->created_at->format('M d, Y') }}</p>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <!-- Newsletter / CTA -->
                    <div class="bg-indigo-50 p-8 rounded-[2.5rem] border border-indigo-100">
                        <h4 class="font-heading font-bold text-primary mb-4 text-lg">Never miss an update</h4>
                        <p class="text-slate-500 text-sm mb-6 font-medium">Get the latest tech articles and tutorials delivered straight to your inbox.</p>
                        <div class="space-y-3">
                            <input type="email" placeholder="Email address" class="w-full px-6 py-4 rounded-2xl bg-white border border-indigo-100 focus:outline-none focus:ring-2 focus:ring-indigo-500/20">
                            <button class="w-full bg-primary text-white py-4 rounded-2xl font-bold shadow-lg shadow-primary/20">Subscribe</button>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </main>

    <footer class="bg-white border-t border-slate-100 py-12 text-center">
        <p class="text-slate-400 font-medium text-sm">
            &copy; {{ date('Y') }} Agus Setiawan. Built with <i class="fa-solid fa-heart text-red-400 mx-1"></i>
        </p>
    </footer>

    <!-- Highlight.js Core -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>

</body>
</html>
