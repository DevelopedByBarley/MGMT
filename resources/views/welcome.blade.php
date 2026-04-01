<!DOCTYPE html>
<html lang="hu" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MGMT Film – Esküvői Videográfia</title>
    <meta name="description" content="Mácsai Gábor esküvői és esemény videográfus. Örökítsd meg életed nagy pillanatait professzionális minőségben.">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body class="bg-zinc-900 text-zinc-100 antialiased">

    {{-- NAVBAR --}}
    <nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-500" id="navbar">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <a href="#hero" class="text-white font-light tracking-[0.3em] text-lg uppercase">
                    MGMT <span class="text-amber-400">Film</span>
                </a>
                <div class="hidden md:flex items-center gap-10">
                    <a href="#about" class="text-zinc-300 hover:text-white text-sm tracking-widest uppercase transition-colors duration-300">Rólam</a>
                    <a href="#references" class="text-zinc-300 hover:text-white text-sm tracking-widest uppercase transition-colors duration-300">Referenciák</a>
                    <a href="#packages" class="text-zinc-300 hover:text-white text-sm tracking-widest uppercase transition-colors duration-300">Csomagok</a>
                    <a href="#contact" class="text-zinc-300 hover:text-white text-sm tracking-widest uppercase transition-colors duration-300">Kapcsolat</a>
                    <a href="#contact" class="border border-amber-400 text-amber-400 hover:bg-amber-400 hover:text-zinc-950 px-6 py-2 text-sm tracking-widest uppercase transition-all duration-300">
                        Ajánlatkérés
                    </a>
                </div>
                <button class="md:hidden text-zinc-300 hover:text-white" id="mobile-menu-btn" aria-label="Menü">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
        <div class="md:hidden hidden bg-zinc-900/98 backdrop-blur-md border-t border-zinc-700" id="mobile-menu">
            <div class="px-6 py-6 flex flex-col gap-6">
                <a href="#about" class="text-zinc-300 hover:text-white text-sm tracking-widest uppercase" onclick="closeMobileMenu()">Rólam</a>
                <a href="#references" class="text-zinc-300 hover:text-white text-sm tracking-widest uppercase" onclick="closeMobileMenu()">Referenciák</a>
                <a href="#packages" class="text-zinc-300 hover:text-white text-sm tracking-widest uppercase" onclick="closeMobileMenu()">Csomagok</a>
                <a href="#contact" class="text-zinc-300 hover:text-white text-sm tracking-widest uppercase" onclick="closeMobileMenu()">Kapcsolat</a>
                <a href="#contact" class="border border-amber-400 text-amber-400 text-center py-3 text-sm tracking-widest uppercase" onclick="closeMobileMenu()">Ajánlatkérés</a>
            </div>
        </div>
    </nav>

    {{-- HERO --}}
    <section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <video
            autoplay
            muted
            loop
            playsinline
            class="absolute inset-0 w-full h-full object-cover"
            poster="/images/hero-poster.jpg"
        >
            <source src="/videos/hero.mp4" type="video/mp4">
        </video>

        {{-- Overlay: csak alul-felül fekete fade, középen viszonylag átlátszó --}}
        <div class="absolute inset-0 bg-black/45"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/10 to-black/80"></div>

        <div class="relative z-10 text-center px-6 max-w-5xl mx-auto">
            <p class="text-amber-400 text-xs tracking-[0.4em] uppercase mb-8 font-light">Esküvői · Esemény · Reklám Videográfia</p>
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-light text-white mb-6 leading-none" style="font-family: 'Cormorant Garamond', serif; text-shadow: 0 2px 30px rgba(0,0,0,0.5);">
                Örökítsd meg<br>
                <em class="text-amber-400 not-italic">életed pillanatait</em>
            </h1>
            <p class="text-white/80 text-lg md:text-xl font-light max-w-2xl mx-auto mb-12 leading-relaxed">
                Professzionális videográfia 8 évnyi televíziós tapasztalattal.<br>
                Budapest · Szolnok · Egész ország
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#packages" class="bg-amber-400 text-zinc-950 px-10 py-4 text-sm tracking-widest uppercase font-medium hover:bg-amber-300 transition-colors duration-300 w-full sm:w-auto">
                    Csomagok megtekintése
                </a>
                <a href="#contact" class="border border-white/60 text-white hover:border-white hover:bg-white/15 px-10 py-4 text-sm tracking-widest uppercase transition-all duration-300 w-full sm:w-auto backdrop-blur-sm">
                    Egyedi ajánlat
                </a>
            </div>
        </div>

        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 animate-bounce">
            <span class="text-white/50 text-xs tracking-widest uppercase">Görgetés</span>
            <svg class="w-4 h-4 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 9l-7 7-7-7"/>
            </svg>
        </div>
    </section>

    {{-- TICKER --}}
    <section class="py-3 bg-zinc-800 border-y border-zinc-700 overflow-hidden">
        <div class="flex gap-12 items-center whitespace-nowrap" style="animation: ticker 25s linear infinite;">
            @foreach(range(1, 6) as $i)
                <span class="text-zinc-400 text-xs tracking-[0.4em] uppercase shrink-0">Esküvői Film</span>
                <span class="text-amber-400/60 shrink-0">◆</span>
                <span class="text-zinc-400 text-xs tracking-[0.4em] uppercase shrink-0">Highlight Videó</span>
                <span class="text-amber-400/60 shrink-0">◆</span>
                <span class="text-zinc-400 text-xs tracking-[0.4em] uppercase shrink-0">Imázsfilm</span>
                <span class="text-amber-400/60 shrink-0">◆</span>
                <span class="text-zinc-400 text-xs tracking-[0.4em] uppercase shrink-0">Videoklip</span>
                <span class="text-amber-400/60 shrink-0">◆</span>
            @endforeach
        </div>
    </section>

    {{-- ABOUT --}}
    <section id="about" class="py-28 px-6 bg-zinc-900">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div class="relative">
                    <div class="aspect-[3/4] bg-zinc-800 border border-zinc-700 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-amber-500/15 to-transparent"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <div class="w-24 h-24 border border-amber-400/40 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-10 h-10 text-amber-400/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 10l4.553-2.069A1 1 0 0121 8.82v6.36a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <p class="text-zinc-400 text-xs tracking-widest uppercase">Mácsai Gábor</p>
                                <p class="text-zinc-500 text-xs mt-1">Videográfus</p>
                            </div>
                        </div>
                        <div class="absolute top-4 left-4 w-8 h-8 border-t border-l border-amber-400/50"></div>
                        <div class="absolute top-4 right-4 w-8 h-8 border-t border-r border-amber-400/50"></div>
                        <div class="absolute bottom-4 left-4 w-8 h-8 border-b border-l border-amber-400/50"></div>
                        <div class="absolute bottom-4 right-4 w-8 h-8 border-b border-r border-amber-400/50"></div>
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-amber-400 text-zinc-950 p-6">
                        <p class="text-4xl font-light" style="font-family: 'Cormorant Garamond', serif;">8+</p>
                        <p class="text-xs tracking-widest uppercase font-medium mt-1">Év tapasztalat</p>
                    </div>
                </div>

                <div>
                    <p class="text-amber-400 text-xs tracking-[0.4em] uppercase mb-6">Rólam</p>
                    <h2 class="text-4xl md:text-5xl font-light text-white mb-8 leading-tight" style="font-family: 'Cormorant Garamond', serif;">
                        Kedves<br><em class="text-amber-400 not-italic">Érdeklődő!</em>
                    </h2>
                    <div class="space-y-5 text-zinc-300 font-light leading-relaxed">
                        <p>
                            Mácsai Gábor vagyok, az MGMT Film Kft. megálmodója. Televíziózásból érkeztem az esküvői filmek világába, amely <span class="text-white">8 évnyi intenzív operatőri tapasztalatot</span> jelent számomra.
                        </p>
                        <p>
                            Szakemberként számtalan esemény fontos képsorait örökítettem meg, később kitérve az esküvőkre, családi eseményekre is. <span class="text-white">Szenvedélyem az alkotás.</span>
                        </p>
                        <p>
                            Szívesen vállalok reklám és imázsfilm, valamint videoklip forgatást, utómunkát is.
                        </p>
                        <p>
                            Az ország bármely területén vállalok forgatást, de legfőképpen <span class="text-white">Budapest és Szolnok</span> vonzáskörzetében. Ha még nem találtad meg a megfelelő szakembert életed nagy eseményeinek megörökítéséhez, kérj egyedi ajánlatot!
                        </p>
                    </div>
                    <div class="mt-10 pt-10 border-t border-zinc-700 flex flex-wrap gap-8">
                        <div>
                            <p class="text-2xl font-light text-white" style="font-family: 'Cormorant Garamond', serif;">Budapest</p>
                            <p class="text-zinc-500 text-xs tracking-widest uppercase mt-1">& Szolnok</p>
                        </div>
                        <div class="w-px bg-zinc-700 hidden sm:block"></div>
                        <div>
                            <p class="text-2xl font-light text-white" style="font-family: 'Cormorant Garamond', serif;">Egész ország</p>
                            <p class="text-zinc-500 text-xs tracking-widest uppercase mt-1">Vállalás</p>
                        </div>
                        <div class="w-px bg-zinc-700 hidden sm:block"></div>
                        <div>
                            <p class="text-2xl font-light text-white" style="font-family: 'Cormorant Garamond', serif;">TV</p>
                            <p class="text-zinc-500 text-xs tracking-widest uppercase mt-1">Háttér</p>
                        </div>
                    </div>
                    <div class="mt-10">
                        <p class="text-zinc-300 font-light italic" style="font-family: 'Cormorant Garamond', serif; font-size: 1.1rem;">
                            Üdvözlettel, Gábor
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- REFERENCES – nagy videók egymás alatt --}}
    <section id="references" class="py-28 px-6 bg-zinc-800">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-16">
                <p class="text-amber-400 text-xs tracking-[0.4em] uppercase mb-4">Munkáim</p>
                <h2 class="text-4xl md:text-5xl font-light text-white" style="font-family: 'Cormorant Garamond', serif;">
                    Referencia <em class="text-amber-400 not-italic">videók</em>
                </h2>
            </div>

            {{--
                Cseréld ki a YOUTUBE_ID_x értékeket a saját YouTube videóid ID-jára.
                Pl.: https://www.youtube.com/watch?v=dQw4w9WgXcQ → ID: dQw4w9WgXcQ
            --}}
            @php
                $videos = [
                    ['id' => 'YOUTUBE_ID_1', 'title' => 'Eszter & Péter', 'subtitle' => 'Esküvői Highlight · 2024', 'desc' => 'Budapest'],
                    ['id' => 'YOUTUBE_ID_2', 'title' => 'Anna & Dávid', 'subtitle' => 'Összefoglaló Film · 2024', 'desc' => 'Szolnok'],
                    ['id' => 'YOUTUBE_ID_3', 'title' => 'Júlia & Márton', 'subtitle' => 'Esküvői Highlight · 2023', 'desc' => 'Debrecen'],
                    ['id' => 'YOUTUBE_ID_4', 'title' => 'Vállalati Imázsfilm', 'subtitle' => 'Reklámfilm · 2024', 'desc' => 'Budapest'],
                ];
            @endphp

            <div class="flex flex-col gap-12">
                @foreach($videos as $index => $video)
                    <div class="group">
                        {{-- Sorszám + cím --}}
                        <div class="flex items-baseline gap-4 mb-4">
                            <span class="text-amber-400/50 text-xs font-light tabular-nums">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                            <div>
                                <h3 class="text-white text-xl font-light" style="font-family: 'Cormorant Garamond', serif;">{{ $video['title'] }}</h3>
                                <p class="text-zinc-400 text-xs tracking-wider mt-0.5">{{ $video['subtitle'] }} · {{ $video['desc'] }}</p>
                            </div>
                        </div>
                        {{-- Videó embed --}}
                        <div class="relative aspect-video w-full overflow-hidden border border-zinc-700 group-hover:border-amber-400/40 transition-colors duration-500">
                            <iframe
                                src="https://www.youtube-nocookie.com/embed/{{ $video['id'] }}?rel=0&modestbranding=1"
                                title="{{ $video['title'] }}"
                                class="w-full h-full"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                                loading="lazy"
                            ></iframe>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- FURTHER REFERENCES – thumbnail grid with modal --}}
    <section class="py-28 px-6 bg-zinc-900 border-t border-zinc-700">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <p class="text-amber-400 text-xs tracking-[0.4em] uppercase mb-4">További munkák</p>
                <h2 class="text-4xl md:text-5xl font-light text-white" style="font-family: 'Cormorant Garamond', serif;">
                    Még több <em class="text-amber-400 not-italic">referencia</em>
                </h2>
            </div>

            @php
                $gridVideos = [
                    ['id' => 'YOUTUBE_ID_5',  'title' => 'Réka & Bálint',     'subtitle' => 'Esküvői Highlight · 2023'],
                    ['id' => 'YOUTUBE_ID_6',  'title' => 'Kata & Ádám',       'subtitle' => 'Összefoglaló Film · 2023'],
                    ['id' => 'YOUTUBE_ID_7',  'title' => 'Nóra & Zsolt',      'subtitle' => 'Esküvői Highlight · 2023'],
                    ['id' => 'YOUTUBE_ID_8',  'title' => 'Viki & Gergő',      'subtitle' => 'Ceremónia · 2022'],
                    ['id' => 'YOUTUBE_ID_9',  'title' => 'Klaudia & Tamás',   'subtitle' => 'Esküvői Film · 2022'],
                    ['id' => 'YOUTUBE_ID_10', 'title' => 'Petra & Dániel',    'subtitle' => 'Highlight Videó · 2022'],
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($gridVideos as $video)
                    <div
                        class="group relative cursor-pointer overflow-hidden border border-zinc-700 hover:border-amber-400/40 transition-all duration-500"
                        onclick="openVideo('{{ $video['id'] }}')"
                    >
                        <div class="aspect-video relative overflow-hidden bg-zinc-800">
                            <img
                                src="https://img.youtube.com/vi/{{ $video['id'] }}/maxresdefault.jpg"
                                alt="{{ $video['title'] }}"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                onerror="this.src='https://img.youtube.com/vi/{{ $video['id'] }}/hqdefault.jpg'"
                            >
                            <div class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition-colors duration-500"></div>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="w-16 h-16 rounded-full bg-black/50 border border-white/30 flex items-center justify-center backdrop-blur-sm group-hover:bg-amber-400/90 group-hover:border-amber-400 transition-all duration-300 group-hover:scale-110">
                                    <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="p-5 bg-zinc-800">
                            <p class="text-white text-sm font-light">{{ $video['title'] }}</p>
                            <p class="text-zinc-500 text-xs tracking-wider mt-1">{{ $video['subtitle'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- VIDEO MODAL --}}
    <div
        id="video-modal"
        class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/90 backdrop-blur-sm"
        onclick="closeVideo(event)"
    >
        <div class="relative w-full max-w-5xl mx-4">
            <button
                onclick="closeVideoBtn()"
                class="absolute -top-12 right-0 text-zinc-400 hover:text-white transition-colors text-sm tracking-widest uppercase flex items-center gap-2"
            >
                Bezárás
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
            <div class="aspect-video w-full">
                <iframe
                    id="video-iframe"
                    class="w-full h-full"
                    src=""
                    frameborder="0"
                    allow="autoplay; fullscreen; picture-in-picture"
                    allowfullscreen
                ></iframe>
            </div>
        </div>
    </div>

    {{-- PACKAGES --}}
    <section id="packages" class="py-28 px-6 bg-zinc-900">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-20">
                <p class="text-amber-400 text-xs tracking-[0.4em] uppercase mb-4">Árak & Csomagok</p>
                <h2 class="text-4xl md:text-5xl font-light text-white" style="font-family: 'Cormorant Garamond', serif;">
                    Válaszd ki a neked<br><em class="text-amber-400 not-italic">megfelelő csomagot</em>
                </h2>
                <p class="text-zinc-400 mt-6 max-w-xl mx-auto font-light">
                    Minden csomag egyedi élményt nyújt. Ha egyik sem felel meg teljes mértékben az elképzeléseidnek, kérj egyedi ajánlatot!
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:items-start">

                {{-- Essential --}}
                <div class="border border-zinc-700 bg-zinc-800 p-8 relative group hover:border-zinc-500 transition-all duration-500">
                    <p class="text-zinc-400 text-xs tracking-[0.3em] uppercase mb-6">Essential</p>
                    <div class="mb-8">
                        <span class="text-5xl font-light text-white" style="font-family: 'Cormorant Garamond', serif;">180.000</span>
                        <span class="text-zinc-400 text-sm ml-2">Ft</span>
                    </div>
                    <ul class="space-y-4 mb-10">
                        <li class="flex items-start gap-3">
                            <span class="text-amber-400 mt-0.5 shrink-0">◆</span>
                            <span class="text-zinc-300 font-light text-sm leading-relaxed">
                                <span class="text-white">1 db highlight videó</span><br>
                                (legjobb jelenetek) <span class="text-zinc-500">2–3 perc</span>
                            </span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-amber-400 mt-0.5 shrink-0">◆</span>
                            <span class="text-zinc-300 font-light text-sm leading-relaxed">
                                <span class="text-white">1 db összefoglaló videó</span><br>
                                <span class="text-zinc-500">15–20 perc</span>
                            </span>
                        </li>
                    </ul>
                    <a href="#contact" class="block text-center border border-zinc-600 text-zinc-300 hover:border-amber-400 hover:text-amber-400 py-3 text-xs tracking-widest uppercase transition-all duration-300">
                        Ajánlatkérés
                    </a>
                </div>

                {{-- Standard --}}
                <div class="border border-amber-400/60 bg-zinc-800 p-8 relative group hover:border-amber-400 transition-all duration-500 md:-mt-6">
                    <div class="absolute top-4 right-4 bg-amber-400 text-zinc-950 text-xs tracking-widest uppercase px-3 py-1 font-medium">
                        Népszerű
                    </div>
                    <p class="text-amber-400 text-xs tracking-[0.3em] uppercase mb-6">Standard</p>
                    <div class="mb-8">
                        <span class="text-5xl font-light text-white" style="font-family: 'Cormorant Garamond', serif;">220.000</span>
                        <span class="text-zinc-400 text-sm ml-2">Ft</span>
                    </div>
                    <ul class="space-y-4 mb-10">
                        <li class="flex items-start gap-3">
                            <span class="text-amber-400 mt-0.5 shrink-0">◆</span>
                            <span class="text-zinc-300 font-light text-sm leading-relaxed">
                                <span class="text-white">1 db highlight videó</span><br>
                                (legjobb jelenetek) <span class="text-zinc-500">2–3 perc</span>
                            </span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-amber-400 mt-0.5 shrink-0">◆</span>
                            <span class="text-zinc-300 font-light text-sm leading-relaxed">
                                <span class="text-white">1 db összefoglaló videó</span><br>
                                <span class="text-zinc-500">20–25 perc</span>
                            </span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-amber-400 mt-0.5 shrink-0">◆</span>
                            <span class="text-zinc-300 font-light text-sm leading-relaxed">
                                <span class="text-white">Ceremónia rögzítés</span><br>
                                <span class="text-zinc-500">2 db kamera</span>
                            </span>
                        </li>
                    </ul>
                    <a href="#contact" class="block text-center bg-amber-400 text-zinc-950 hover:bg-amber-300 py-3 text-xs tracking-widest uppercase font-medium transition-colors duration-300">
                        Ajánlatkérés
                    </a>
                </div>

                {{-- Premium --}}
                <div class="border border-zinc-700 bg-zinc-800 p-8 relative group hover:border-zinc-500 transition-all duration-500">
                    <p class="text-zinc-400 text-xs tracking-[0.3em] uppercase mb-6">Premium</p>
                    <div class="mb-8">
                        <span class="text-5xl font-light text-white" style="font-family: 'Cormorant Garamond', serif;">240.000</span>
                        <span class="text-zinc-400 text-sm ml-2">Ft</span>
                    </div>
                    <ul class="space-y-4 mb-10">
                        <li class="flex items-start gap-3">
                            <span class="text-amber-400 mt-0.5 shrink-0">◆</span>
                            <span class="text-zinc-300 font-light text-sm leading-relaxed">
                                <span class="text-white">1 db highlight videó</span><br>
                                (legjobb jelenetek) <span class="text-zinc-500">2–3 perc</span>
                            </span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-amber-400 mt-0.5 shrink-0">◆</span>
                            <span class="text-zinc-300 font-light text-sm leading-relaxed">
                                <span class="text-white">1 db összefoglaló videó</span><br>
                                <span class="text-zinc-500">20–25 perc</span>
                            </span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-amber-400 mt-0.5 shrink-0">◆</span>
                            <span class="text-zinc-300 font-light text-sm leading-relaxed">
                                <span class="text-white">Ceremónia rögzítés</span><br>
                                <span class="text-zinc-500">2 db kamera</span>
                            </span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-amber-400 mt-0.5 shrink-0">◆</span>
                            <span class="text-zinc-300 font-light text-sm leading-relaxed">
                                <span class="text-white">Teljes nyersanyag átadása</span>
                            </span>
                        </li>
                    </ul>
                    <a href="#contact" class="block text-center border border-zinc-600 text-zinc-300 hover:border-amber-400 hover:text-amber-400 py-3 text-xs tracking-widest uppercase transition-all duration-300">
                        Ajánlatkérés
                    </a>
                </div>

            </div>
            <p class="text-center text-zinc-500 text-sm mt-10 font-light">
                Minden ár egyedi ajánlathoz képest változhat. Kérj személyre szabott ajánlatot!
            </p>
        </div>
    </section>

    {{-- SERVICES STRIP --}}
    <section class="py-16 px-6 bg-zinc-800 border-t border-zinc-700">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="group">
                    <div class="w-14 h-14 border border-zinc-600 group-hover:border-amber-400/60 flex items-center justify-center mx-auto mb-4 transition-colors duration-300">
                        <svg class="w-6 h-6 text-zinc-500 group-hover:text-amber-400 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 10l4.553-2.069A1 1 0 0121 8.82v6.36a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <p class="text-zinc-200 text-sm font-light">Esküvői Film</p>
                    <p class="text-zinc-500 text-xs mt-1">Teljes nap rögzítése</p>
                </div>
                <div class="group">
                    <div class="w-14 h-14 border border-zinc-600 group-hover:border-amber-400/60 flex items-center justify-center mx-auto mb-4 transition-colors duration-300">
                        <svg class="w-6 h-6 text-zinc-500 group-hover:text-amber-400 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"/>
                        </svg>
                    </div>
                    <p class="text-zinc-200 text-sm font-light">Reklámfilm</p>
                    <p class="text-zinc-500 text-xs mt-1">Imázsfilm & reklám</p>
                </div>
                <div class="group">
                    <div class="w-14 h-14 border border-zinc-600 group-hover:border-amber-400/60 flex items-center justify-center mx-auto mb-4 transition-colors duration-300">
                        <svg class="w-6 h-6 text-zinc-500 group-hover:text-amber-400 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/>
                        </svg>
                    </div>
                    <p class="text-zinc-200 text-sm font-light">Videoklip</p>
                    <p class="text-zinc-500 text-xs mt-1">Zenei és kreatív filmek</p>
                </div>
                <div class="group">
                    <div class="w-14 h-14 border border-zinc-600 group-hover:border-amber-400/60 flex items-center justify-center mx-auto mb-4 transition-colors duration-300">
                        <svg class="w-6 h-6 text-zinc-500 group-hover:text-amber-400 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <p class="text-zinc-200 text-sm font-light">Családi Esemény</p>
                    <p class="text-zinc-500 text-xs mt-1">Születésnapok & ünnepek</p>
                </div>
            </div>
        </div>
    </section>

    {{-- CONTACT --}}
    <section id="contact" class="py-28 px-6 bg-zinc-900">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-16">

                <div class="lg:col-span-2">
                    <p class="text-amber-400 text-xs tracking-[0.4em] uppercase mb-6">Kapcsolat</p>
                    <h2 class="text-4xl md:text-5xl font-light text-white mb-8 leading-tight" style="font-family: 'Cormorant Garamond', serif;">
                        Kérj egyedi<br><em class="text-amber-400 not-italic">ajánlatot!</em>
                    </h2>
                    <p class="text-zinc-400 font-light leading-relaxed mb-10">
                        Ha nem találtad meg a megfelelő csomagot, vagy szeretnél személyre szabott ajánlatot kapni, írj nekem bátran!
                    </p>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 border border-zinc-700 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-white text-sm font-light">Budapest & Szolnok</p>
                                <p class="text-zinc-500 text-xs mt-1">Egész ország területén vállalok</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 border border-zinc-700 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-white text-sm font-light">info@mgmtfilm.hu</p>
                                <p class="text-zinc-500 text-xs mt-1">24 órán belül válaszolok</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-3">
                    @if(session('success'))
                        <div class="bg-amber-400/15 border border-amber-400/40 text-amber-300 px-6 py-4 mb-8 text-sm font-light">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-zinc-400 text-xs tracking-widest uppercase mb-2" for="name">Neved *</label>
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    value="{{ old('name') }}"
                                    class="w-full bg-zinc-800 border {{ $errors->has('name') ? 'border-red-500/60' : 'border-zinc-600' }} text-white px-4 py-3 text-sm font-light focus:outline-none focus:border-amber-400/60 transition-colors duration-300 placeholder-zinc-600"
                                    placeholder="Teljes neved"
                                >
                                @error('name')
                                    <p class="text-red-400 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-zinc-400 text-xs tracking-widest uppercase mb-2" for="email">E-mail cím *</label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    class="w-full bg-zinc-800 border {{ $errors->has('email') ? 'border-red-500/60' : 'border-zinc-600' }} text-white px-4 py-3 text-sm font-light focus:outline-none focus:border-amber-400/60 transition-colors duration-300 placeholder-zinc-600"
                                    placeholder="email@example.hu"
                                >
                                @error('email')
                                    <p class="text-red-400 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-zinc-400 text-xs tracking-widest uppercase mb-2" for="phone">Telefonszám</label>
                                <input
                                    type="tel"
                                    id="phone"
                                    name="phone"
                                    value="{{ old('phone') }}"
                                    class="w-full bg-zinc-800 border border-zinc-600 text-white px-4 py-3 text-sm font-light focus:outline-none focus:border-amber-400/60 transition-colors duration-300 placeholder-zinc-600"
                                    placeholder="+36 30 000 0000"
                                >
                            </div>
                            <div>
                                <label class="block text-zinc-400 text-xs tracking-widest uppercase mb-2" for="event_date">Esemény dátuma</label>
                                <input
                                    type="text"
                                    id="event_date"
                                    name="event_date"
                                    value="{{ old('event_date') }}"
                                    class="w-full bg-zinc-800 border border-zinc-600 text-white px-4 py-3 text-sm font-light focus:outline-none focus:border-amber-400/60 transition-colors duration-300 placeholder-zinc-600"
                                    placeholder="pl. 2025. június 14."
                                >
                            </div>
                        </div>
                        <div>
                            <label class="block text-zinc-400 text-xs tracking-widest uppercase mb-2" for="package">Érdeklődés tárgya</label>
                            <select
                                id="package"
                                name="package"
                                class="w-full bg-zinc-800 border border-zinc-600 text-white px-4 py-3 text-sm font-light focus:outline-none focus:border-amber-400/60 transition-colors duration-300 appearance-none cursor-pointer"
                            >
                                <option value="" class="bg-zinc-800">Válassz csomagot...</option>
                                <option value="Essential" {{ old('package') === 'Essential' ? 'selected' : '' }} class="bg-zinc-800">Essential – 180.000 Ft</option>
                                <option value="Standard" {{ old('package') === 'Standard' ? 'selected' : '' }} class="bg-zinc-800">Standard – 220.000 Ft</option>
                                <option value="Premium" {{ old('package') === 'Premium' ? 'selected' : '' }} class="bg-zinc-800">Premium – 240.000 Ft</option>
                                <option value="Egyedi" {{ old('package') === 'Egyedi' ? 'selected' : '' }} class="bg-zinc-800">Egyedi ajánlat</option>
                                <option value="Reklámfilm" {{ old('package') === 'Reklámfilm' ? 'selected' : '' }} class="bg-zinc-800">Reklám / Imázsfilm</option>
                                <option value="Videoklip" {{ old('package') === 'Videoklip' ? 'selected' : '' }} class="bg-zinc-800">Videoklip</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-zinc-400 text-xs tracking-widest uppercase mb-2" for="message">Üzeneted *</label>
                            <textarea
                                id="message"
                                name="message"
                                rows="5"
                                class="w-full bg-zinc-800 border {{ $errors->has('message') ? 'border-red-500/60' : 'border-zinc-600' }} text-white px-4 py-3 text-sm font-light focus:outline-none focus:border-amber-400/60 transition-colors duration-300 placeholder-zinc-600 resize-none"
                                placeholder="Mesélj az eseményedről, elképzeléseidről..."
                            >{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-red-400 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <button
                            type="submit"
                            class="w-full bg-amber-400 text-zinc-950 py-4 text-sm tracking-widest uppercase font-medium hover:bg-amber-300 transition-colors duration-300"
                        >
                            Üzenet küldése
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    {{-- FOOTER --}}
    <footer class="border-t border-zinc-700 py-12 px-6 bg-zinc-900">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <div>
                    <p class="text-white font-light tracking-[0.3em] text-lg uppercase">
                        MGMT <span class="text-amber-400">Film</span>
                    </p>
                    <p class="text-zinc-500 text-xs mt-1">MGMT Film Kft. · Mácsai Gábor</p>
                </div>
                <div class="flex gap-8">
                    <a href="#about" class="text-zinc-500 hover:text-zinc-300 text-xs tracking-widest uppercase transition-colors">Rólam</a>
                    <a href="#references" class="text-zinc-500 hover:text-zinc-300 text-xs tracking-widest uppercase transition-colors">Referenciák</a>
                    <a href="#packages" class="text-zinc-500 hover:text-zinc-300 text-xs tracking-widest uppercase transition-colors">Csomagok</a>
                    <a href="#contact" class="text-zinc-500 hover:text-zinc-300 text-xs tracking-widest uppercase transition-colors">Kapcsolat</a>
                </div>
                <p class="text-zinc-600 text-xs">© {{ date('Y') }} MGMT Film Kft. Minden jog fenntartva.</p>
            </div>
        </div>
    </footer>

    <script>
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('bg-zinc-900/95', 'backdrop-blur-md', 'border-b', 'border-zinc-700/80');
            } else {
                navbar.classList.remove('bg-zinc-900/95', 'backdrop-blur-md', 'border-b', 'border-zinc-700/80');
            }
        });

        document.getElementById('mobile-menu-btn').addEventListener('click', () => {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        function closeMobileMenu() {
            document.getElementById('mobile-menu').classList.add('hidden');
        }

        // Video modal
        const modal = document.getElementById('video-modal');
        const iframe = document.getElementById('video-iframe');

        function openVideo(videoId) {
            iframe.src = 'https://www.youtube-nocookie.com/embed/' + videoId + '?autoplay=1&rel=0';
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        function closeVideo(e) {
            if (e.target === modal) { closeVideoBtn(); }
        }

        function closeVideoBtn() {
            iframe.src = '';
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = '';
        }

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') { closeVideoBtn(); }
        });

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    </script>

    <style>
        @keyframes ticker {
            from { transform: translateX(0); }
            to { transform: translateX(-50%); }
        }
    </style>
</body>
</html>
