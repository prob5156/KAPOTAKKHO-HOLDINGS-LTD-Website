<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Kapotakkhho Holdings Ltd. | Building Growth, Creating Value')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=playfair-display:400,600,700|plus-jakarta-sans:300,400,500,600,700" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif

        <!-- Tailwind CSS Fallback & Config -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                darkMode: 'class',
                theme: {
                    extend: {
                        colors: {
                            navy: {
                                50: '#f4f6f9',
                                100: '#e5e9f0',
                                200: '#c5d0e0',
                                300: '#95abcd',
                                400: '#5e80b2',
                                500: '#3c5d94',
                                600: '#2e4978',
                                700: '#263c63',
                                800: '#1d2e4e',
                                900: '#0b1f3a', /* Primary Navy */
                                950: '#060B18', /* Deep Navy */
                            },
                            gold: {
                                50: '#fbf8eb',
                                100: '#f4edcc',
                                200: '#e9da9b',
                                300: '#dac163',
                                400: '#cca73b',
                                500: '#b28b2e',
                                600: '#c9a84c', /* Primary Gold */
                                700: '#8c6621',
                                800: '#72511e',
                                900: '#62441c',
                                950: '#39240d',
                            }
                        },
                        fontFamily: {
                            serif: ['Playfair Display', 'serif'],
                            sans: ['Plus Jakarta Sans', 'sans-serif'],
                        }
                    }
                }
            }
        </script>

        <style>
            .gold-gradient {
                background: linear-gradient(135deg, #c9a84c 0%, #f4edcc 50%, #b28b2e 100%);
            }
            .navy-gradient {
                background: linear-gradient(135deg, #0b1f3a 0%, #060B18 100%);
            }
            .gold-glow {
                box-shadow: 0 0 15px rgba(201, 168, 76, 0.15);
            }
            .gold-glow-hover:hover {
                box-shadow: 0 10px 25px -5px rgba(201, 168, 76, 0.3);
            }
            .text-gold-gradient {
                background: linear-gradient(135deg, #c9a84c 0%, #f4edcc 60%, #b28b2e 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            /* ── Scroll Reveal Animations ── */
            .reveal {
                opacity: 0;
                transform: translateY(40px);
                transition: opacity 0.7s cubic-bezier(.4,0,.2,1), transform 0.7s cubic-bezier(.4,0,.2,1);
            }
            .reveal.reveal-left  { transform: translateX(-50px); }
            .reveal.reveal-right { transform: translateX(50px); }
            .reveal.reveal-scale { transform: scale(0.92); }
            .reveal.visible {
                opacity: 1;
                transform: none;
            }

            /* ── Page-load fade-in ── */
            @keyframes fadeInDown {
                from { opacity:0; transform:translateY(-18px); }
                to   { opacity:1; transform:translateY(0); }
            }
            @keyframes fadeInUp {
                from { opacity:0; transform:translateY(22px); }
                to   { opacity:1; transform:translateY(0); }
            }
            @keyframes fadeIn {
                from { opacity:0; } to { opacity:1; }
            }
            @keyframes shimmer {
                0%   { background-position: -200% center; }
                100% { background-position: 200% center; }
            }
            @keyframes pulseGold {
                0%,100% { box-shadow: 0 0 0 0 rgba(201,168,76,0); }
                50%      { box-shadow: 0 0 0 8px rgba(201,168,76,0.18); }
            }
            .animate-fade-down  { animation: fadeInDown 0.7s ease both; }
            .animate-fade-up    { animation: fadeInUp  0.7s ease both; }
            .animate-fade-in    { animation: fadeIn    0.9s ease both; }
            .animate-pulse-gold { animation: pulseGold 2.4s ease-in-out infinite; }

            /* ── Admin Login button shimmer ── */
            .btn-admin-login {
                position: relative;
                overflow: hidden;
                background: linear-gradient(270deg, #c9a84c, #f4edcc, #b28b2e, #c9a84c);
                background-size: 300% 300%;
                animation: shimmer 3s linear infinite;
                color: #060B18;
                font-weight: 700;
                font-size: 0.7rem;
                letter-spacing: 0.08em;
                text-transform: uppercase;
                padding: 0.5rem 1.1rem;
                border-radius: 4px;
                transition: transform 0.2s, box-shadow 0.2s;
            }
            .btn-admin-login:hover {
                transform: translateY(-2px);
                box-shadow: 0 6px 20px rgba(201,168,76,0.45);
            }

            /* ── Nav link underline slide ── */
            nav a.nav-link {
                position: relative;
            }
            nav a.nav-link::after {
                content: '';
                position: absolute;
                bottom: -4px;
                left: 0;
                width: 0;
                height: 2px;
                background: #c9a84c;
                transition: width 0.3s ease;
            }
            nav a.nav-link:hover::after { width: 100%; }

            /* ── Card hover lift ── */
            .card-hover {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }
            .card-hover:hover {
                transform: translateY(-6px);
                box-shadow: 0 20px 40px rgba(0,0,0,0.12);
            }

            /* staggered reveal delays */
            .delay-100 { transition-delay: 0.1s; }
            .delay-200 { transition-delay: 0.2s; }
            .delay-300 { transition-delay: 0.3s; }
            .delay-400 { transition-delay: 0.4s; }
            .delay-500 { transition-delay: 0.5s; }
            .delay-600 { transition-delay: 0.6s; }
        </style>
    </head>
    <body class="bg-[#fcfdfd] text-[#1e293b] font-sans antialiased selection:bg-gold-600 selection:text-white">

        <!-- Announcement Top Bar -->
        <div class="bg-navy-950 text-slate-300 text-xs py-2.5 px-4 sm:px-6 lg:px-8 border-b border-navy-800">
            <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-2">
                <div class="flex items-center gap-6">
                    <span class="flex items-center gap-1.5">
                        <svg class="w-3.5 h-3.5 text-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        +880 2 9884571
                    </span>
                    <span class="flex items-center gap-1.5">
                        <svg class="w-3.5 h-3.5 text-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        info@kapotakkhho.com
                    </span>
                </div>
                <div class="flex items-center gap-4">
                    <a href="{{ route('careers') }}" class="hover:text-gold-600 transition-colors">Career</a>
                    <span class="text-navy-800">|</span>
                    <a href="{{ route('news') }}" class="hover:text-gold-600 transition-colors">Media Center</a>
                    <span class="text-navy-800">|</span>
                    <a href="{{ url('/#contact') }}" class="text-gold-600 font-semibold hover:text-white transition-colors">Corporate Enquiry</a>
                </div>
            </div>
        </div>

        <!-- Sticky Header / Navbar -->
        <header id="main-nav" class="sticky top-0 z-50 bg-navy-900/95 backdrop-blur-md border-b border-navy-800 transition-all duration-300">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-20 sm:h-24 transition-all duration-300" id="nav-container">
                    
                    <!-- Logo / Brand -->
                    <a href="{{ url('/') }}" class="flex items-center gap-3 group">
                        <div class="w-12 h-12 rounded-lg bg-gradient-to-br from-gold-600 to-gold-400 flex items-center justify-center shadow-lg transform transition-transform group-hover:rotate-6">
                            <span class="text-navy-950 font-serif font-bold text-2xl">K</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-white font-serif font-semibold text-lg sm:text-xl tracking-wide group-hover:text-gold-600 transition-colors leading-tight">KAPOTAKKHO</span>
                            <span class="text-gold-600 text-xxs sm:text-xs font-semibold tracking-widest uppercase">HOLDINGS LTD.</span>
                        </div>
                    </a>

                    <nav class="hidden md:flex items-center gap-8">
                        <a href="{{ url('/') }}" class="nav-link text-white hover:text-gold-600 transition-colors font-medium text-sm">Home</a>
                        <a href="{{ route('about') }}" class="nav-link text-slate-300 hover:text-gold-600 transition-colors font-medium text-sm">About</a>
                        <a href="{{ route('projects') }}" class="nav-link text-slate-300 hover:text-gold-600 transition-colors font-medium text-sm">Projects</a>
                        <a href="{{ route('divisions') }}" class="nav-link text-slate-300 hover:text-gold-600 transition-colors font-medium text-sm">Divisions</a>
                        <a href="{{ url('/#why-choose-us') }}" class="nav-link text-slate-300 hover:text-gold-600 transition-colors font-medium text-sm">Why Us</a>
                        <a href="{{ route('news') }}" class="nav-link text-slate-300 hover:text-gold-600 transition-colors font-medium text-sm">News</a>
                        <a href="{{ route('contact') }}" class="nav-link text-slate-300 hover:text-gold-600 transition-colors font-medium text-sm">Contact</a>
                    </nav>

                    <!-- Nav CTA Buttons -->
                    <div class="hidden md:flex items-center gap-3">
                        <a href="{{ route('login') }}" class="btn-admin-login animate-pulse-gold">
                            🔐 Admin Login
                        </a>
                        <a href="{{ route('contact') }}" class="px-5 py-2.5 rounded-sm bg-transparent border border-gold-600 text-gold-600 hover:bg-gold-600 hover:text-navy-950 transition-all font-semibold text-xs uppercase tracking-wider">
                            Get Proposal
                        </a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button type="button" id="mobile-menu-btn" class="md:hidden p-2 rounded-md text-slate-400 hover:text-white hover:bg-navy-800 transition-colors" aria-label="Toggle menu">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" id="menu-icon"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Navigation Menu -->
            <div id="mobile-menu" class="hidden md:hidden bg-navy-950 border-t border-navy-800 py-4 px-6">
                <nav class="flex flex-col gap-4">
                    <a href="{{ url('/') }}" class="text-white hover:text-gold-600 transition-colors font-medium text-sm py-2">Home</a>
                    <a href="{{ route('about') }}" class="text-slate-300 hover:text-gold-600 transition-colors font-medium text-sm py-2">About</a>
                    <a href="{{ route('projects') }}" class="text-slate-300 hover:text-gold-600 transition-colors font-medium text-sm py-2">Projects</a>
                    <a href="{{ route('divisions') }}" class="text-slate-300 hover:text-gold-600 transition-colors font-medium text-sm py-2">Divisions</a>
                    <a href="{{ url('/#why-choose-us') }}" class="text-slate-300 hover:text-gold-600 transition-colors font-medium text-sm py-2">Why Us</a>
                    <a href="{{ route('news') }}" class="text-slate-300 hover:text-gold-600 transition-colors font-medium text-sm py-2">News</a>
                    <a href="{{ route('contact') }}" class="text-slate-300 hover:text-gold-600 transition-colors font-medium text-sm py-2">Contact</a>
                    <a href="{{ route('login') }}" class="mt-1 w-full text-center px-4 py-3 rounded-sm bg-gold-600 text-navy-950 font-bold text-sm uppercase tracking-wider">🔐 Admin Login</a>
                    <a href="{{ route('contact') }}" class="w-full text-center px-4 py-3 rounded-sm border border-gold-600 text-gold-600 font-bold text-sm uppercase tracking-wider">Get Proposal</a>
                </nav>
            </div>
        </header>

        <main>
            @yield('content')
        </main>

        <!-- Professional Footer -->
        <footer class="bg-navy-950 text-slate-400 border-t border-navy-800 pt-16 pb-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                    
                    <!-- Col 1: About Group -->
                    <div class="flex flex-col items-start">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 rounded-lg bg-gold-600 flex items-center justify-center shrink-0">
                                <span class="text-navy-950 font-serif font-bold text-xl">K</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-white font-serif font-semibold text-base leading-tight tracking-wide">KAPOTAKKHO</span>
                                <span class="text-gold-600 text-xxs font-semibold tracking-wider">HOLDINGS LTD.</span>
                            </div>
                        </div>
                        <p class="text-xs leading-relaxed mb-6">
                            A diversified conglomerate driving economic scale, industrial excellence, and public welfare standards across Bangladesh.
                        </p>
                        <!-- Social links -->
                        <div class="flex gap-4">
                            <a href="#" class="w-8 h-8 rounded-full bg-navy-900 hover:bg-gold-600 hover:text-navy-950 flex items-center justify-center transition-all">
                                <span class="text-xs">In</span>
                            </a>
                            <a href="#" class="w-8 h-8 rounded-full bg-navy-900 hover:bg-gold-600 hover:text-navy-950 flex items-center justify-center transition-all">
                                <span class="text-xs">Fb</span>
                            </a>
                            <a href="#" class="w-8 h-8 rounded-full bg-navy-900 hover:bg-gold-600 hover:text-navy-950 flex items-center justify-center transition-all">
                                <span class="text-xs">Yt</span>
                            </a>
                        </div>
                    </div>

                    <!-- Col 2: Quick Links -->
                    <div>
                        <h4 class="text-white font-bold text-sm mb-6 uppercase tracking-wider">Quick Links</h4>
                        <ul class="space-y-3.5 text-xs">
                            <li><a href="{{ url('/') }}" class="hover:text-gold-600 transition-colors">Home</a></li>
                            <li><a href="{{ route('about') }}" class="hover:text-gold-600 transition-colors">About Us</a></li>
                            <li><a href="{{ route('projects') }}" class="hover:text-gold-600 transition-colors">Projects</a></li>
                            <li><a href="{{ url('/#divisions') }}" class="hover:text-gold-600 transition-colors">Core Divisions</a></li>
                            <li><a href="{{ url('/#why-choose-us') }}" class="hover:text-gold-600 transition-colors">Why Choose Us</a></li>
                        </ul>
                    </div>

                    <!-- Col 3: Business Units -->
                    <div>
                        <h4 class="text-white font-bold text-sm mb-6 uppercase tracking-wider">Business Units</h4>
                        <ul class="space-y-3.5 text-xs">
                            <li><a href="{{ url('/#divisions') }}" class="hover:text-gold-600 transition-colors">Kapotakkhho Properties</a></li>
                            <li><a href="{{ url('/#divisions') }}" class="hover:text-gold-600 transition-colors">Kapotakkhho Engineering</a></li>
                            <li><a href="{{ url('/#divisions') }}" class="hover:text-gold-600 transition-colors">Kapotakkhho Global Trade</a></li>
                            <li><a href="{{ url('/#divisions') }}" class="hover:text-gold-600 transition-colors">Kapotakkhho Infra Ltd</a></li>
                            <li><a href="{{ url('/#divisions') }}" class="hover:text-gold-600 transition-colors">Kapotakkhho Digital</a></li>
                        </ul>
                    </div>

                    <!-- Col 4: Newsletter -->
                    <div>
                        <h4 class="text-white font-bold text-sm mb-6 uppercase tracking-wider">Stay Informed</h4>
                        <p class="text-xs mb-4">Subscribe to receive institutional announcements and report publications.</p>
                        <form action="#" class="space-y-2.5" onsubmit="event.preventDefault(); alert('Subscribed to corporate newsletter.');">
                            <input type="email" placeholder="Corporate Email" required class="w-full bg-navy-900 border border-navy-800 rounded-lg px-4 py-3 text-xs text-white focus:outline-none focus:border-gold-600 transition-colors">
                            <button type="submit" class="w-full py-3 bg-gold-600 text-navy-950 font-bold hover:bg-gold-700 transition-all rounded-lg text-xs uppercase tracking-wider">
                                Subscribe
                            </button>
                        </form>
                    </div>

                </div>

                <!-- Bottom Footer Strip -->
                <div class="border-t border-navy-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xxs">
                    <p>&copy; {{ date('Y') }} Kapotakkhho Holdings Ltd. All Rights Reserved. Designed for premium operations.</p>
                    <div class="flex gap-6">
                        <a href="#" class="hover:text-gold-600 transition-colors">Privacy Policy</a>
                        <a href="#" class="hover:text-gold-600 transition-colors">Terms of Service</a>
                        <a href="#" class="hover:text-gold-600 transition-colors">Site Map</a>
                    </div>
                </div>

            </div>
        </footer>

        <!-- Pure JS logic for navigation, mobile menu, animations -->
        <script>
            // ── Mobile Menu Toggle ──
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu   = document.getElementById('mobile-menu');
            const menuIcon     = document.getElementById('menu-icon');

            mobileMenuBtn.addEventListener('click', () => {
                const isHidden = mobileMenu.classList.contains('hidden');
                if (isHidden) {
                    mobileMenu.classList.remove('hidden');
                    menuIcon.setAttribute('d', 'M6 18L18 6M6 6l12 12');
                } else {
                    mobileMenu.classList.add('hidden');
                    menuIcon.setAttribute('d', 'M4 6h16M4 12h16m-7 6h7');
                }
            });

            // Close Mobile Menu on nav-link click
            mobileMenu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    menuIcon.setAttribute('d', 'M4 6h16M4 12h16m-7 6h7');
                });
            });

            // ── Sticky Header Shrink on Scroll ──
            const navContainer = document.getElementById('nav-container');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    navContainer.classList.remove('h-20', 'sm:h-24');
                    navContainer.classList.add('h-16');
                } else {
                    navContainer.classList.remove('h-16');
                    navContainer.classList.add('h-20', 'sm:h-24');
                }
            });

            // ── Scroll Reveal (IntersectionObserver) ──
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry, i) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        revealObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

            document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

            // ── Animated Number Counter ──
            function animateCount(el) {
                const target = parseInt(el.dataset.target || el.innerText.replace(/\D/g,''), 10);
                const suffix = el.dataset.suffix || '';
                const duration = 1800;
                const step = target / (duration / 16);
                let current = 0;
                el.innerText = '0' + suffix;
                const timer = setInterval(() => {
                    current += step;
                    if (current >= target) { current = target; clearInterval(timer); }
                    el.innerText = Math.floor(current) + suffix;
                }, 16);
            }

            const counterObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCount(entry.target);
                        counterObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });

            document.querySelectorAll('[data-counter]').forEach(el => counterObserver.observe(el));
        </script>

        {{-- Page-specific scripts pushed by child views --}}
        @stack('scripts')
    </body>
</html>
