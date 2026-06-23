<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kapotakkhho Holdings Ltd. | Building Growth, Creating Value</title>

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
                    <a href="#" class="hover:text-gold-600 transition-colors">Career</a>
                    <span class="text-navy-800">|</span>
                    <a href="#" class="hover:text-gold-600 transition-colors">Media Center</a>
                    <span class="text-navy-800">|</span>
                    <a href="#contact" class="text-gold-600 font-semibold hover:text-white transition-colors">Corporate Enquiry</a>
                </div>
            </div>
        </div>

        <!-- Sticky Header / Navbar -->
        <header id="main-nav" class="sticky top-0 z-50 bg-navy-900/95 backdrop-blur-md border-b border-navy-800 transition-all duration-300">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-20 sm:h-24 transition-all duration-300" id="nav-container">
                    
                    <!-- Logo / Brand -->
                    <a href="#" class="flex items-center gap-3 group">
                        <div class="w-12 h-12 rounded-lg bg-gradient-to-br from-gold-600 to-gold-400 flex items-center justify-center shadow-lg transform transition-transform group-hover:rotate-6">
                            <span class="text-navy-950 font-serif font-bold text-2xl">K</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-white font-serif font-semibold text-lg sm:text-xl tracking-wide group-hover:text-gold-600 transition-colors leading-tight">KAPOTAKKHO</span>
                            <span class="text-gold-600 text-xxs sm:text-xs font-semibold tracking-widest uppercase">HOLDINGS LTD.</span>
                        </div>
                    </a>

                    <!-- Desktop Nav Menu -->
                    <nav class="hidden md:flex items-center gap-8">
                        <a href="#" class="text-white hover:text-gold-600 transition-colors font-medium text-sm">Home</a>
                        <a href="#about" class="text-slate-300 hover:text-gold-600 transition-colors font-medium text-sm">About</a>
                        <a href="#divisions" class="text-slate-300 hover:text-gold-600 transition-colors font-medium text-sm">Divisions</a>
                        <a href="#why-choose-us" class="text-slate-300 hover:text-gold-600 transition-colors font-medium text-sm">Why Us</a>
                        <a href="#projects" class="text-slate-300 hover:text-gold-600 transition-colors font-medium text-sm">Projects</a>
                        <a href="#contact" class="text-slate-300 hover:text-gold-600 transition-colors font-medium text-sm">Contact</a>
                    </nav>

                    <!-- Nav Call to Action Button -->
                    <div class="hidden md:flex items-center">
                        <a href="#contact" class="px-5 py-2.5 rounded-sm bg-transparent border border-gold-600 text-gold-600 hover:bg-gold-600 hover:text-navy-950 transition-all font-semibold text-xs uppercase tracking-wider">
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
            <div id="mobile-menu" class="hidden md:hidden bg-navy-950 border-t border-navy-800 py-4 px-6 animate-fade-in-down">
                <nav class="flex flex-col gap-4">
                    <a href="#" class="text-white hover:text-gold-600 transition-colors font-medium text-sm py-2">Home</a>
                    <a href="#about" class="text-slate-300 hover:text-gold-600 transition-colors font-medium text-sm py-2">About</a>
                    <a href="#divisions" class="text-slate-300 hover:text-gold-600 transition-colors font-medium text-sm py-2">Divisions</a>
                    <a href="#why-choose-us" class="text-slate-300 hover:text-gold-600 transition-colors font-medium text-sm py-2">Why Us</a>
                    <a href="#projects" class="text-slate-300 hover:text-gold-600 transition-colors font-medium text-sm py-2">Projects</a>
                    <a href="#contact" class="text-slate-300 hover:text-gold-600 transition-colors font-medium text-sm py-2">Contact</a>
                    <a href="#contact" class="mt-2 w-full text-center px-4 py-3 rounded-sm bg-gold-600 text-navy-950 font-bold text-sm uppercase tracking-wider">Get Proposal</a>
                </nav>
            </div>
        </header>

        <!-- Hero Section -->
        <section class="relative min-h-[calc(100vh-120px)] flex items-center bg-navy-950 overflow-hidden py-20 lg:py-32">
            <!-- Decorative Background Patterns -->
            <div class="absolute inset-0 z-0 opacity-10">
                <div class="absolute inset-0 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:24px_24px]"></div>
            </div>
            <div class="absolute -right-40 -top-40 w-96 h-96 rounded-full bg-gold-600 filter blur-[150px] opacity-10 z-0"></div>
            <div class="absolute -left-40 -bottom-40 w-96 h-96 rounded-full bg-navy-500 filter blur-[150px] opacity-20 z-0"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
                    
                    <!-- Hero Content -->
                    <div class="lg:col-span-7 flex flex-col items-start text-left">
                        <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-navy-900 border border-navy-800 text-gold-600 text-xs font-semibold uppercase tracking-wider mb-6">
                            <span class="w-1.5 h-1.5 rounded-full bg-gold-600 animate-ping"></span>
                            A Leading Bangladeshi Conglomerate
                        </span>
                        
                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-serif text-white font-bold leading-tight mb-6">
                            Building Growth,<br>
                            <span class="text-gold-600">Creating Value</span>
                        </h1>
                        
                        <p class="text-slate-300 text-base sm:text-lg max-w-xl leading-relaxed mb-8">
                            For over two decades, Kapotakkhho Holdings Ltd. has been pioneering sustainable progress across Bangladesh. We transform communities, innovate infrastructure, and build high-yielding futures through diverse business ecosystems.
                        </p>
                        
                        <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto">
                            <a href="#divisions" class="px-8 py-4 rounded-sm bg-gold-600 text-navy-950 font-bold hover:bg-gold-700 transition-all text-sm uppercase tracking-wider text-center shadow-lg hover:shadow-gold-600/10">
                                Our Business Units
                            </a>
                            <a href="#about" class="px-8 py-4 rounded-sm bg-transparent border-2 border-slate-600 text-white font-bold hover:border-gold-600 hover:text-gold-600 transition-all text-sm uppercase tracking-wider text-center">
                                Corporate Profile
                            </a>
                        </div>
                    </div>

                    <!-- Hero Visual -->
                    <div class="lg:col-span-5 relative mt-8 lg:mt-0 flex justify-center">
                        <div class="relative w-full max-w-[420px] aspect-[4/5] rounded-2xl overflow-hidden border border-navy-800 bg-navy-900 p-8 flex flex-col justify-between shadow-2xl gold-glow">
                            <!-- Geometric details -->
                            <div class="absolute right-0 top-0 w-24 h-24 border-r-2 border-t-2 border-gold-600/30 rounded-tr-2xl"></div>
                            <div class="absolute left-0 bottom-0 w-24 h-24 border-l-2 border-b-2 border-gold-600/30 rounded-bl-2xl"></div>
                            
                            <div>
                                <span class="font-serif text-5xl font-extrabold text-gold-600">K</span>
                                <p class="text-slate-400 text-xs tracking-widest uppercase mt-2">Core Philosophy</p>
                                <h3 class="text-white text-xl font-serif font-semibold mt-4 leading-snug">Empowering industry standards with legacy and trust.</h3>
                            </div>
                            
                            <div class="mt-8 border-t border-navy-800 pt-6">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-slate-400 text-xs uppercase">National Footprint</span>
                                    <span class="text-gold-600 font-bold">100% committed</span>
                                </div>
                                <div class="w-full bg-navy-800 h-1.5 rounded-full overflow-hidden">
                                    <div class="bg-gold-600 h-full rounded-full w-4/5"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- About Us Section -->
        <section id="about" class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
                    
                    <!-- Left Image Grid -->
                    <div class="lg:col-span-5 grid grid-cols-2 gap-4">
                        <div class="bg-navy-900 h-64 rounded-xl shadow-lg flex flex-col justify-end p-6 border border-navy-800">
                            <span class="text-gold-600 text-3xl font-serif font-bold">2001</span>
                            <span class="text-slate-300 text-xs uppercase tracking-widest mt-1">Year of Incorporation</span>
                        </div>
                        <div class="bg-slate-100 h-64 rounded-xl shadow-lg flex flex-col justify-end p-6 border border-slate-200 mt-8">
                            <span class="text-navy-900 text-3xl font-serif font-bold">6+</span>
                            <span class="text-slate-600 text-xs uppercase tracking-widest mt-1">Major Sectors</span>
                        </div>
                    </div>

                    <!-- Right Content -->
                    <div class="lg:col-span-7">
                        <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Corporate Profile</span>
                        <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-6 leading-tight">Pioneering Progress Across Bangladesh</h2>
                        <p class="text-slate-600 text-base leading-relaxed mb-8">
                            Kapotakkhho Holdings Ltd. has grown from a local builder into one of the country's most respected conglomerates. We deliver landmark real estate ventures, major infrastructure assets, sustainable agricultural networks, and next-generation tech ecosystems that contribute directly to Bangladesh's national GDP and economic growth.
                        </p>

                        <!-- Mission & Vision Cards -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div class="p-6 rounded-lg bg-navy-50 border border-navy-100 hover:border-gold-600/30 transition-all duration-300">
                                <div class="w-10 h-10 rounded-full bg-navy-100 flex items-center justify-center mb-4">
                                    <svg class="w-5 h-5 text-navy-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                </div>
                                <h4 class="text-navy-900 font-bold text-base mb-2">Our Mission</h4>
                                <p class="text-slate-600 text-xs leading-relaxed">
                                    To create sustainable value for our stakeholders and clients through cutting-edge design, premium quality, and highly ethical corporate practices.
                                </p>
                            </div>
                            <div class="p-6 rounded-lg bg-navy-50 border border-navy-100 hover:border-gold-600/30 transition-all duration-300">
                                <div class="w-10 h-10 rounded-full bg-navy-100 flex items-center justify-center mb-4">
                                    <svg class="w-5 h-5 text-navy-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                </div>
                                <h4 class="text-navy-900 font-bold text-base mb-2">Our Vision</h4>
                                <p class="text-slate-600 text-xs leading-relaxed">
                                    To become the most trusted corporate group in South Asia, leading through innovation, premium quality execution, and societal welfare.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Business Divisions Section -->
        <section id="divisions" class="py-24 bg-navy-950 text-white relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                
                <!-- Section Header -->
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Corporate Divisions</span>
                    <h2 class="text-3xl sm:text-4xl font-serif font-bold mb-4">Excellence in Diverse Sectors</h2>
                    <p class="text-slate-300 text-sm sm:text-base">
                        Our dynamic operations cross industries to deliver comprehensive infrastructure solutions, prime real estate developments, sustainable farms, and smart tech applications.
                    </p>
                </div>

                <!-- Divisions Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    
                    <!-- Real Estate -->
                    <div class="bg-navy-900 border border-navy-800 rounded-lg p-8 transition-all hover:-translate-y-2 hover:border-gold-600/40 duration-300 flex flex-col justify-between group">
                        <div>
                            <div class="w-12 h-12 rounded-lg bg-navy-800 border border-navy-700 flex items-center justify-center mb-6 group-hover:bg-gold-600 group-hover:text-navy-950 transition-all">
                                <svg class="w-6 h-6 text-gold-600 group-hover:text-navy-950 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Real Estate</h3>
                            <p class="text-slate-400 text-sm leading-relaxed mb-6">
                                Crafting luxury architectural footprints, prime commercial facilities, and residential environments featuring world-class amenities and structural design.
                            </p>
                        </div>
                        <a href="#contact" class="inline-flex items-center gap-1.5 text-xs font-semibold text-gold-600 group-hover:text-white transition-colors uppercase tracking-wider">
                            Explore Services
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>

                    <!-- Construction -->
                    <div class="bg-navy-900 border border-navy-800 rounded-lg p-8 transition-all hover:-translate-y-2 hover:border-gold-600/40 duration-300 flex flex-col justify-between group">
                        <div>
                            <div class="w-12 h-12 rounded-lg bg-navy-800 border border-navy-700 flex items-center justify-center mb-6 group-hover:bg-gold-600 group-hover:text-navy-950 transition-all">
                                <svg class="w-6 h-6 text-gold-600 group-hover:text-navy-950 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Construction</h3>
                            <p class="text-slate-400 text-sm leading-relaxed mb-6">
                                Providing major civil contracting, construction management, structural designs, and raw material logistics for private and public sector developments.
                            </p>
                        </div>
                        <a href="#contact" class="inline-flex items-center gap-1.5 text-xs font-semibold text-gold-600 group-hover:text-white transition-colors uppercase tracking-wider">
                            Explore Services
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>

                    <!-- Trading -->
                    <div class="bg-navy-900 border border-navy-800 rounded-lg p-8 transition-all hover:-translate-y-2 hover:border-gold-600/40 duration-300 flex flex-col justify-between group">
                        <div>
                            <div class="w-12 h-12 rounded-lg bg-navy-800 border border-navy-700 flex items-center justify-center mb-6 group-hover:bg-gold-600 group-hover:text-navy-950 transition-all">
                                <svg class="w-6 h-6 text-gold-600 group-hover:text-navy-950 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Trading</h3>
                            <p class="text-slate-400 text-sm leading-relaxed mb-6">
                                Managing import, export, commodity trading, supply chain management, and distribution of industrial equipment and manufacturing items.
                            </p>
                        </div>
                        <a href="#contact" class="inline-flex items-center gap-1.5 text-xs font-semibold text-gold-600 group-hover:text-white transition-colors uppercase tracking-wider">
                            Explore Services
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>

                    <!-- Infrastructure -->
                    <div class="bg-navy-900 border border-navy-800 rounded-lg p-8 transition-all hover:-translate-y-2 hover:border-gold-600/40 duration-300 flex flex-col justify-between group">
                        <div>
                            <div class="w-12 h-12 rounded-lg bg-navy-800 border border-navy-700 flex items-center justify-center mb-6 group-hover:bg-gold-600 group-hover:text-navy-950 transition-all">
                                <svg class="w-6 h-6 text-gold-600 group-hover:text-navy-950 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Infrastructure</h3>
                            <p class="text-slate-400 text-sm leading-relaxed mb-6">
                                Connecting communities via advanced public utilities, arterial expressways, modern bridges, and reliable power distribution systems.
                            </p>
                        </div>
                        <a href="#contact" class="inline-flex items-center gap-1.5 text-xs font-semibold text-gold-600 group-hover:text-white transition-colors uppercase tracking-wider">
                            Explore Services
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>

                    <!-- Agriculture -->
                    <div class="bg-navy-900 border border-navy-800 rounded-lg p-8 transition-all hover:-translate-y-2 hover:border-gold-600/40 duration-300 flex flex-col justify-between group">
                        <div>
                            <div class="w-12 h-12 rounded-lg bg-navy-800 border border-navy-700 flex items-center justify-center mb-6 group-hover:bg-gold-600 group-hover:text-navy-950 transition-all">
                                <svg class="w-6 h-6 text-gold-600 group-hover:text-navy-950 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m0-12.728l.707.707m12.728 12.728l.707-.707M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Agriculture</h3>
                            <p class="text-slate-400 text-sm leading-relaxed mb-6">
                                Investing in modern farming tech, organic processing units, cold storage networks, and localized distribution of nutritional produce.
                            </p>
                        </div>
                        <a href="#contact" class="inline-flex items-center gap-1.5 text-xs font-semibold text-gold-600 group-hover:text-white transition-colors uppercase tracking-wider">
                            Explore Services
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>

                    <!-- Technology -->
                    <div class="bg-navy-900 border border-navy-800 rounded-lg p-8 transition-all hover:-translate-y-2 hover:border-gold-600/40 duration-300 flex flex-col justify-between group">
                        <div>
                            <div class="w-12 h-12 rounded-lg bg-navy-800 border border-navy-700 flex items-center justify-center mb-6 group-hover:bg-gold-600 group-hover:text-navy-950 transition-all">
                                <svg class="w-6 h-6 text-gold-600 group-hover:text-navy-950 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Technology</h3>
                            <p class="text-slate-400 text-sm leading-relaxed mb-6">
                                Facilitating national digitalization with custom enterprise solutions, smart billing portals, IoT networks, and private cloud centers.
                            </p>
                        </div>
                        <a href="#contact" class="inline-flex items-center gap-1.5 text-xs font-semibold text-gold-600 group-hover:text-white transition-colors uppercase tracking-wider">
                            Explore Services
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <!-- Why Choose Us Section -->
        <section id="why-choose-us" class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <!-- Header -->
                <div class="text-center max-w-3xl mx-auto mb-20">
                    <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Our Core Pillars</span>
                    <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-4">Values that Form Our Foundation</h2>
                    <p class="text-slate-600 text-sm sm:text-base">
                        Through dynamic planning and operational standards, we serve our community with unparalleled distinction.
                    </p>
                </div>

                <!-- 4 Pillars Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    
                    <!-- Integrity -->
                    <div class="text-center p-6 flex flex-col items-center">
                        <div class="w-16 h-16 rounded-full bg-navy-50 text-navy-900 flex items-center justify-center mb-6 shadow-sm border border-navy-100">
                            <svg class="w-7 h-7 text-navy-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <h3 class="text-lg font-bold text-navy-900 mb-3">Integrity</h3>
                        <p class="text-slate-600 text-xs leading-relaxed">
                            Absolute transparency in corporate governance, legal frameworks, and ethical interactions with all our stakeholders.
                        </p>
                    </div>

                    <!-- Innovation -->
                    <div class="text-center p-6 flex flex-col items-center">
                        <div class="w-16 h-16 rounded-full bg-navy-50 text-navy-900 flex items-center justify-center mb-6 shadow-sm border border-navy-100">
                            <svg class="w-7 h-7 text-navy-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                        </div>
                        <h3 class="text-lg font-bold text-navy-900 mb-3">Innovation</h3>
                        <p class="text-slate-600 text-xs leading-relaxed">
                            Integrating IoT, environment-friendly materials, and smart production lines across our key operational units.
                        </p>
                    </div>

                    <!-- Sustainability -->
                    <div class="text-center p-6 flex flex-col items-center">
                        <div class="w-16 h-16 rounded-full bg-navy-50 text-navy-900 flex items-center justify-center mb-6 shadow-sm border border-navy-100">
                            <svg class="w-7 h-7 text-navy-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                        </div>
                        <h3 class="text-lg font-bold text-navy-900 mb-3">Sustainability</h3>
                        <p class="text-slate-600 text-xs leading-relaxed">
                            Minimizing the footprint of civil designs and optimizing agro-cycles to construct clean legacy features.
                        </p>
                    </div>

                    <!-- Excellence -->
                    <div class="text-center p-6 flex flex-col items-center">
                        <div class="w-16 h-16 rounded-full bg-navy-50 text-navy-900 flex items-center justify-center mb-6 shadow-sm border border-navy-100">
                            <svg class="w-7 h-7 text-navy-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                        </div>
                        <h3 class="text-lg font-bold text-navy-900 mb-3">Excellence</h3>
                        <p class="text-slate-600 text-xs leading-relaxed">
                            Pledging premium standards for concrete works, raw materials, customer service, and timely project delivery.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <!-- Company Statistics Section -->
        <section class="py-20 bg-navy-900 text-white relative overflow-hidden">
            <div class="absolute inset-0 opacity-5">
                <div class="absolute inset-0 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:16px_16px]"></div>
            </div>
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-12 text-center">
                    
                    <!-- Stats 1 -->
                    <div class="flex flex-col items-center">
                        <span class="text-4xl sm:text-5xl font-serif font-bold text-gold-600 mb-2 tracking-tight" id="stat-years">25</span>
                        <span class="text-slate-400 text-xs uppercase tracking-widest">Years of Excellence</span>
                    </div>

                    <!-- Stats 2 -->
                    <div class="flex flex-col items-center">
                        <span class="text-4xl sm:text-5xl font-serif font-bold text-gold-600 mb-2 tracking-tight" id="stat-projects">150</span>
                        <span class="text-slate-400 text-xs uppercase tracking-widest">Projects Completed</span>
                    </div>

                    <!-- Stats 3 -->
                    <div class="flex flex-col items-center">
                        <span class="text-4xl sm:text-5xl font-serif font-bold text-gold-600 mb-2 tracking-tight" id="stat-employees">1200</span>
                        <span class="text-slate-400 text-xs uppercase tracking-widest">Skilled Employees</span>
                    </div>

                    <!-- Stats 4 -->
                    <div class="flex flex-col items-center">
                        <span class="text-4xl sm:text-5xl font-serif font-bold text-gold-600 mb-2 tracking-tight" id="stat-satisfaction">98</span>
                        <span class="text-slate-400 text-xs uppercase tracking-widest">Client Satisfaction</span>
                    </div>

                </div>
            </div>
        </section>

        <!-- Featured Projects Section -->
        <section id="projects" class="py-24 bg-[#f4f6f9]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <!-- Section Header -->
                <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-4 mb-16">
                    <div>
                        <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Corporate Portfolio</span>
                        <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900">Featured Landmarks</h2>
                    </div>
                    <a href="#contact" class="inline-flex items-center gap-2 text-sm font-bold text-navy-900 hover:text-gold-600 transition-colors uppercase tracking-wider">
                        View All Assets
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>

                <!-- Projects Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    
                    <!-- Project 1 -->
                    <div class="bg-white rounded-xl overflow-hidden shadow-md border border-slate-200 group hover:shadow-xl transition-all duration-300">
                        <div class="relative h-64 bg-navy-950 overflow-hidden flex items-center justify-center text-white">
                            <span class="font-serif text-8xl font-black text-navy-900 select-none">K</span>
                            <div class="absolute inset-0 bg-gradient-to-t from-navy-950 via-transparent to-transparent opacity-80"></div>
                            <span class="absolute top-4 left-4 px-3 py-1 bg-gold-600 text-navy-950 text-xxs font-bold uppercase tracking-wider rounded-sm">Real Estate</span>
                        </div>
                        <div class="p-6">
                            <span class="text-slate-400 text-xs uppercase tracking-wider">Dhaka, Bangladesh</span>
                            <h3 class="text-lg font-bold text-navy-900 mt-1 mb-2 group-hover:text-gold-600 transition-colors">Kapotakkhho Imperial Tower</h3>
                            <p class="text-slate-600 text-xs leading-relaxed">
                                A 24-storied luxury commercial high-rise integrating structural safety parameters, automated fire systems, and double-glazed low-E facades.
                            </p>
                        </div>
                    </div>

                    <!-- Project 2 -->
                    <div class="bg-white rounded-xl overflow-hidden shadow-md border border-slate-200 group hover:shadow-xl transition-all duration-300">
                        <div class="relative h-64 bg-navy-950 overflow-hidden flex items-center justify-center text-white">
                            <span class="font-serif text-8xl font-black text-navy-900 select-none">H</span>
                            <div class="absolute inset-0 bg-gradient-to-t from-navy-950 via-transparent to-transparent opacity-80"></div>
                            <span class="absolute top-4 left-4 px-3 py-1 bg-gold-600 text-navy-950 text-xxs font-bold uppercase tracking-wider rounded-sm">Infrastructure</span>
                        </div>
                        <div class="p-6">
                            <span class="text-slate-400 text-xs uppercase tracking-wider">Narayanganj, Bangladesh</span>
                            <h3 class="text-lg font-bold text-navy-900 mt-1 mb-2 group-hover:text-gold-600 transition-colors">Meghna Bridge Expansion</h3>
                            <p class="text-slate-600 text-xs leading-relaxed">
                                Executing critical structural girders and dynamic load tests for the national bridge expansion initiative to handle high cargo vehicles.
                            </p>
                        </div>
                    </div>

                    <!-- Project 3 -->
                    <div class="bg-white rounded-xl overflow-hidden shadow-md border border-slate-200 group hover:shadow-xl transition-all duration-300">
                        <div class="relative h-64 bg-navy-950 overflow-hidden flex items-center justify-center text-white">
                            <span class="font-serif text-8xl font-black text-navy-900 select-none">L</span>
                            <div class="absolute inset-0 bg-gradient-to-t from-navy-950 via-transparent to-transparent opacity-80"></div>
                            <span class="absolute top-4 left-4 px-3 py-1 bg-gold-600 text-navy-950 text-xxs font-bold uppercase tracking-wider rounded-sm">Agriculture</span>
                        </div>
                        <div class="p-6">
                            <span class="text-slate-400 text-xs uppercase tracking-wider">Jessore, Bangladesh</span>
                            <h3 class="text-lg font-bold text-navy-900 mt-1 mb-2 group-hover:text-gold-600 transition-colors">Green Horizon Agro Park</h3>
                            <p class="text-slate-600 text-xs leading-relaxed">
                                Expanding local agribusiness capabilities with organic processing facilities, high capacity cold storage units, and logistics centers.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-24 bg-white relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
                    
                    <!-- Contact Content/Details -->
                    <div class="lg:col-span-5">
                        <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Corporate Enquiry</span>
                        <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-6 leading-tight">Partner with Us on Your Next Venture</h2>
                        <p class="text-slate-600 text-base leading-relaxed mb-8">
                            Reach out to our corporate headquarters directly. Whether seeking a development joint venture, high capacity supply solutions, or institutional investment, our team will review the details.
                        </p>

                        <div class="space-y-6">
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-lg bg-navy-50 flex items-center justify-center shrink-0 border border-navy-100">
                                    <svg class="w-5 h-5 text-navy-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-navy-900 font-bold text-sm">Corporate Headquarters</h4>
                                    <p class="text-slate-600 text-xs mt-1">Kapotakkhho Tower, Plot 45, Road 11, Banani C/A, Dhaka-1213, Bangladesh</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-lg bg-navy-50 flex items-center justify-center shrink-0 border border-navy-100">
                                    <svg class="w-5 h-5 text-navy-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-navy-900 font-bold text-sm">Working Hours</h4>
                                    <p class="text-slate-600 text-xs mt-1">Sunday - Thursday: 09:00 AM - 06:00 PM (GMT+6)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form Card -->
                    <div class="lg:col-span-7">
                        <div class="bg-navy-950 p-8 sm:p-10 rounded-2xl shadow-xl border border-navy-800 text-white">
                            <h3 class="text-2xl font-serif font-bold mb-6 text-gold-600">Send an Enquiry</h3>
                            
                            <form action="#" method="POST" class="space-y-6" onsubmit="event.preventDefault(); alert('Thank you for your interest. A Kapotakkhho corporate representative will contact you shortly.');">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                    <div>
                                        <label for="name" class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Full Name</label>
                                        <input type="text" id="name" required class="w-full bg-navy-900 border border-navy-800 rounded-lg px-4 py-3 text-sm focus:outline-none focus:border-gold-600 transition-colors">
                                    </div>
                                    <div>
                                        <label for="email" class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Email Address</label>
                                        <input type="email" id="email" required class="w-full bg-navy-900 border border-navy-800 rounded-lg px-4 py-3 text-sm focus:outline-none focus:border-gold-600 transition-colors">
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                    <div>
                                        <label for="phone" class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Phone Number</label>
                                        <input type="tel" id="phone" class="w-full bg-navy-900 border border-navy-800 rounded-lg px-4 py-3 text-sm focus:outline-none focus:border-gold-600 transition-colors">
                                    </div>
                                    <div>
                                        <label for="division" class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Target Division</label>
                                        <select id="division" class="w-full bg-navy-900 border border-navy-800 rounded-lg px-4 py-3 text-sm focus:outline-none focus:border-gold-600 transition-colors text-slate-400">
                                            <option value="realestate">Real Estate & Properties</option>
                                            <option value="construction">Civil Engineering & Construction</option>
                                            <option value="trading">Trading & Logistics</option>
                                            <option value="infra">Infrastructure & Utilities</option>
                                            <option value="agro">Agribusiness & Farms</option>
                                            <option value="tech">Technology & Systems</option>
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <label for="message" class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Message Description</label>
                                    <textarea id="message" rows="4" required class="w-full bg-navy-900 border border-navy-800 rounded-lg px-4 py-3 text-sm focus:outline-none focus:border-gold-600 transition-colors resize-none"></textarea>
                                </div>
                                <button type="submit" class="w-full py-4 bg-gold-600 text-navy-950 font-bold hover:bg-gold-700 transition-all rounded-lg text-sm uppercase tracking-wider shadow-lg">
                                    Submit Corporate Message
                                </button>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>

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
                            <li><a href="#" class="hover:text-gold-600 transition-colors">Home</a></li>
                            <li><a href="#about" class="hover:text-gold-600 transition-colors">About Us</a></li>
                            <li><a href="#divisions" class="hover:text-gold-600 transition-colors">Core Divisions</a></li>
                            <li><a href="#why-choose-us" class="hover:text-gold-600 transition-colors">Why Choose Us</a></li>
                            <li><a href="#projects" class="hover:text-gold-600 transition-colors">Landmark Projects</a></li>
                        </ul>
                    </div>

                    <!-- Col 3: Business Units -->
                    <div>
                        <h4 class="text-white font-bold text-sm mb-6 uppercase tracking-wider">Business Units</h4>
                        <ul class="space-y-3.5 text-xs">
                            <li><a href="#divisions" class="hover:text-gold-600 transition-colors">Kapotakkhho Properties</a></li>
                            <li><a href="#divisions" class="hover:text-gold-600 transition-colors">Kapotakkhho Engineering</a></li>
                            <li><a href="#divisions" class="hover:text-gold-600 transition-colors">Kapotakkhho Global Trade</a></li>
                            <li><a href="#divisions" class="hover:text-gold-600 transition-colors">Kapotakkhho Infra Ltd</a></li>
                            <li><a href="#divisions" class="hover:text-gold-600 transition-colors">Kapotakkhho Digital</a></li>
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

        <!-- Pure JS logic for navigation, mobile menu, and statistic counting -->
        <script>
            // Mobile Menu Toggle
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const menuIcon = document.getElementById('menu-icon');

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

            // Close Mobile Menu on Click Navigation Link
            const mobileLinks = mobileMenu.querySelectorAll('a');
            mobileLinks.forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    menuIcon.setAttribute('d', 'M4 6h16M4 12h16m-7 6h7');
                });
            });

            // Sticky Header Resize on Scroll
            const mainNav = document.getElementById('main-nav');
            const navContainer = document.getElementById('nav-container');

            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    navContainer.classList.remove('h-20', 'sm:h-24');
                    navContainer.classList.add('h-16', 'sm:h-18');
                } else {
                    navContainer.classList.remove('h-16', 'sm:h-18');
                    navContainer.classList.add('h-20', 'sm:h-24');
                }
            });
        </script>
    </body>
</html>
5.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" stroke="#1B1B18" stroke-width="1" />
                        </g>
                        <g style="mix-blend-mode: plus-darker" class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M230.951 281.792L231.282 281.793C238.128 274.907 248.453 265.823 262.256 254.539C275.617 243.256 285.666 234.267 292.402 227.573C299.027 220.688 303.554 213.421 305.983 205.771C308.412 198.12 307.253 190.183 302.504 181.959C297.203 172.778 289.749 165.415 280.142 159.868C270.645 154.13 260.596 151.26 249.995 151.26C239.615 151.26 232.823 154.033 229.621 159.579C226.309 164.934 227.413 172.393 232.935 181.956L168.335 181.954C159.058 165.888 155.082 151.543 156.407 138.92C157.953 126.298 164.247 116.544 175.289 109.659C186.442 102.583 201.294 99.045 219.846 99.0457C239.281 99.0464 258.551 102.585 277.655 109.663C296.649 116.549 313.986 126.303 329.667 138.927C345.349 151.551 357.827 165.895 367.104 181.961C375.718 196.88 379.528 209.981 378.535 221.265C377.762 232.549 374.063 242.399 367.438 250.814C361.033 259.229 351.095 269.557 337.624 281.796L419.782 281.8L448.605 331.719L259.774 331.712L230.951 281.792Z" fill="#F3BEC7" />
                            <path d="M51.8063 152.402L28.9479 152.401L-0.0411453 102.195L85.7608 102.198L218.282 331.711L155.339 331.709L51.8063 152.402Z" fill="#F3BEC7" />
                            <path d="M230.951 281.792L231.282 281.793C238.128 274.907 248.453 265.823 262.256 254.539C275.617 243.256 285.666 234.267 292.402 227.573C299.027 220.688 303.554 213.421 305.983 205.771C308.412 198.12 307.253 190.183 302.504 181.959C297.203 172.778 289.749 165.415 280.142 159.868C270.645 154.13 260.596 151.26 249.995 151.26C239.615 151.26 232.823 154.033 229.621 159.579C226.309 164.934 227.413 172.393 232.935 181.956L168.335 181.954C159.058 165.888 155.082 151.543 156.407 138.92C157.953 126.298 164.247 116.544 175.289 109.659C186.442 102.583 201.294 99.045 219.846 99.0457C239.281 99.0464 258.551 102.585 277.655 109.663C296.649 116.549 313.986 126.303 329.667 138.927C345.349 151.551 357.827 165.895 367.104 181.961C375.718 196.88 379.528 209.981 378.535 221.265C377.762 232.549 374.063 242.399 367.438 250.814C361.033 259.229 351.095 269.557 337.624 281.796L419.782 281.8L448.605 331.719L259.774 331.712L230.951 281.792Z" stroke="#1B1B18" stroke-width="1" />
                            <path d="M51.8063 152.402L28.9479 152.401L-0.0411453 102.195L85.7608 102.198L218.282 331.711L155.339 331.709L51.8063 152.402Z" stroke="#1B1B18" stroke-width="1" />
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M188.467 355.363L188.798 355.363C195.644 348.478 205.969 339.393 219.772 328.11C233.133 316.826 243.181 307.837 249.917 301.144C253.696 297.217 256.792 293.166 259.205 288.991C261.024 285.845 262.455 282.628 263.499 279.341C265.928 271.691 264.768 263.753 260.02 255.529C254.719 246.349 247.265 238.985 237.657 233.438C228.16 227.7 218.111 224.831 207.51 224.83C197.13 224.83 190.339 227.603 187.137 233.149C183.824 238.504 184.929 245.963 190.45 255.527L125.851 255.524C116.574 239.458 112.598 225.114 113.923 212.491C114.615 206.836 116.261 201.756 118.859 197.253C122.061 191.704 126.709 187.03 132.805 183.229C143.958 176.153 158.81 172.615 177.362 172.616C196.797 172.617 216.067 176.156 235.171 183.233C254.164 190.119 271.502 199.874 287.183 212.497C302.864 225.121 315.343 239.466 324.62 255.532C333.233 270.45 337.044 283.551 336.05 294.835C335.46 303.459 333.16 311.245 329.151 318.194C327.915 320.337 326.515 322.4 324.953 324.384C318.549 332.799 308.611 343.127 295.139 355.367L377.297 355.37L406.121 405.289L217.29 405.282L188.467 355.363Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M9.32197 225.972L-13.5365 225.971L-42.5255 175.765L43.2765 175.768L175.798 405.282L112.854 405.279L9.32197 225.972Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M345.247 111.915C329.566 99.2919 312.229 89.5371 293.235 82.6512L235.167 183.228C254.161 190.114 271.498 199.869 287.179 212.492L345.247 111.915Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M382.686 154.964C373.41 138.898 360.931 124.553 345.25 111.93L287.182 212.506C302.863 225.13 315.342 239.475 324.618 255.541L382.686 154.964Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M293.243 82.6472C274.139 75.57 254.869 72.031 235.434 72.0303L177.366 172.607C196.801 172.608 216.071 176.147 235.175 183.224L293.243 82.6472Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M394.118 194.257C395.112 182.973 391.301 169.872 382.688 154.953L324.619 255.53C333.233 270.448 337.044 283.55 336.05 294.834L394.118 194.257Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M235.432 72.0311C216.88 72.0304 202.027 75.5681 190.875 82.6442L132.806 183.221C143.959 176.145 158.812 172.607 177.363 172.608L235.432 72.0311Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M265.59 124.25C276.191 124.251 286.24 127.12 295.737 132.858L237.669 233.435C228.172 227.697 218.123 224.828 207.522 224.827L265.59 124.25Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M295.719 132.859C305.326 138.406 312.78 145.77 318.081 154.95L260.013 255.527C254.712 246.347 247.258 238.983 237.651 233.436L295.719 132.859Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M387.218 217.608C391.227 210.66 393.527 202.874 394.117 194.25L336.049 294.827C335.459 303.451 333.159 311.237 329.15 318.185L387.218 217.608Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M245.211 132.577C248.413 127.03 255.204 124.257 265.584 124.258L207.516 224.835C197.136 224.834 190.345 227.607 187.143 233.154L245.211 132.577Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M318.094 154.945C322.842 163.17 324.002 171.107 321.573 178.757L263.505 279.334C265.934 271.684 264.774 263.746 260.026 255.522L318.094 154.945Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M176.925 96.6737C180.127 91.1249 184.776 86.4503 190.871 82.6499L132.803 183.227C126.708 187.027 122.059 191.702 118.857 197.25L176.925 96.6737Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M387.226 217.606C385.989 219.749 384.59 221.813 383.028 223.797L324.96 324.373C326.522 322.39 327.921 320.326 329.157 318.183L387.226 217.606Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M317.269 188.408C319.087 185.262 320.519 182.045 321.562 178.758L263.494 279.335C262.451 282.622 261.019 285.839 259.201 288.985L317.269 188.408Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M245.208 132.573C241.895 137.928 243 145.387 248.522 154.95L190.454 255.527C184.932 245.964 183.827 238.505 187.14 233.15L245.208 132.573Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M176.93 96.6719C174.331 101.175 172.686 106.255 171.993 111.91L113.925 212.487C114.618 206.831 116.263 201.752 118.862 197.249L176.93 96.6719Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M317.266 188.413C314.853 192.589 311.757 196.64 307.978 200.566L249.91 301.143C253.689 297.216 256.785 293.166 259.198 288.99L317.266 188.413Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M464.198 304.708L435.375 254.789L377.307 355.366L406.13 405.285L464.198 304.708Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M353.209 254.787C366.68 242.548 376.618 232.22 383.023 223.805L324.955 324.382C318.55 332.797 308.612 343.124 295.141 355.364L353.209 254.787Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M435.37 254.787L353.212 254.784L295.144 355.361L377.302 355.364L435.37 254.787Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M183.921 154.947L248.521 154.95L190.453 255.527L125.853 255.524L183.921 154.947Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M171.992 111.914C170.668 124.537 174.643 138.881 183.92 154.947L125.852 255.524C116.575 239.458 112.599 225.114 113.924 212.491L171.992 111.914Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M307.987 200.562C301.251 207.256 291.203 216.244 277.842 227.528L219.774 328.105C233.135 316.821 243.183 307.832 249.919 301.139L307.987 200.562Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M15.5469 75.1797L44.5359 125.386L-13.5321 225.963L-42.5212 175.756L15.5469 75.1797Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M277.836 227.536C264.033 238.82 253.708 247.904 246.862 254.789L188.794 355.366C195.64 348.481 205.965 339.397 219.768 328.113L277.836 227.536Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M275.358 304.706L464.189 304.713L406.12 405.29L217.29 405.283L275.358 304.706Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M44.5279 125.39L67.3864 125.39L9.31834 225.967L-13.5401 225.966L44.5279 125.39Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M101.341 75.1911L233.863 304.705L175.795 405.282L43.2733 175.768L101.341 75.1911ZM15.5431 75.19L-42.525 175.767L43.277 175.77L101.345 75.1932L15.5431 75.19Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M246.866 254.784L246.534 254.784L188.466 355.361L188.798 355.361L246.866 254.784Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M246.539 254.781L275.362 304.701L217.294 405.277L188.471 355.358L246.539 254.781Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M67.3906 125.391L170.923 304.698L112.855 405.275L9.32257 225.967L67.3906 125.391Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M170.921 304.699L233.865 304.701L175.797 405.278L112.853 405.276L170.921 304.699Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        </g>
                        <g style="mix-blend-mode: hard-light" class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z" fill="#F0ACB8" />
                            <path d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="round" />
                        </g>
                        <g style="mix-blend-mode: hard-light" class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z" fill="#F0ACB8" />
                            <path d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z" stroke="#1B1B18" stroke-width="1" />
                        </g>
                    </svg>

                    {{-- Dark Mode 12 SVG --}}
                    <svg class="w-[448px] max-w-none relative -mt-[4.9rem] -ml-8 lg:ml-0 lg:-mt-[6.6rem] hidden dark:block" viewBox="0 0 440 376" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z" fill="black"/>
                            <path d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z" fill="black"/>
                            <path d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z" fill="#391800"/>
                            <path d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z" fill="#391800"/>
                            <path d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z" stroke="#FF750F" stroke-width="1"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4" style="mix-blend-mode:hard-light">
                            <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.725 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" fill="#733000"/>
                            <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" fill="#733000"/>
                            <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.725 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" stroke="#FF750F" stroke-width="1"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.726 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" stroke="#FF750F" stroke-width="1"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M188.467 355.363L188.798 355.363C195.644 348.478 205.969 339.393 219.772 328.11C233.133 316.826 243.181 307.837 249.917 301.144C253.696 297.217 256.792 293.166 259.205 288.991C261.024 285.845 262.455 282.628 263.499 279.341C265.928 271.691 264.768 263.753 260.02 255.529C254.719 246.349 247.265 238.985 237.657 233.438C228.16 227.7 218.111 224.831 207.51 224.83C197.13 224.83 190.339 227.603 187.137 233.149C183.824 238.504 184.929 245.963 190.45 255.527L125.851 255.524C116.574 239.458 112.598 225.114 113.923 212.491C114.615 206.836 116.261 201.756 118.859 197.253C122.061 191.704 126.709 187.03 132.805 183.229C143.958 176.153 158.81 172.615 177.362 172.616C196.797 172.617 216.067 176.156 235.171 183.233C254.164 190.119 271.502 199.874 287.183 212.497C302.864 225.121 315.343 239.466 324.62 255.532C333.233 270.45 337.044 283.551 336.05 294.835C335.46 303.459 333.16 311.245 329.151 318.194C327.915 320.337 326.515 322.4 324.953 324.384C318.549 332.799 308.611 343.127 295.139 355.367L377.297 355.37L406.121 405.289L217.29 405.282L188.467 355.363Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M9.32197 225.972L-13.5365 225.971L-42.5255 175.765L43.2765 175.768L175.798 405.282L112.854 405.279L9.32197 225.972Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M345.247 111.915C329.566 99.2919 312.229 89.5371 293.235 82.6512L235.167 183.228C254.161 190.114 271.498 199.869 287.179 212.492L345.247 111.915Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M382.686 154.964C373.41 138.898 360.931 124.553 345.25 111.93L287.182 212.506C302.863 225.13 315.342 239.475 324.618 255.541L382.686 154.964Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M293.243 82.6472C274.139 75.57 254.869 72.031 235.434 72.0303L177.366 172.607C196.801 172.608 216.071 176.147 235.175 183.224L293.243 82.6472Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M394.118 194.257C395.112 182.973 391.301 169.872 382.688 154.953L324.619 255.53C333.233 270.448 337.044 283.55 336.05 294.834L394.118 194.257Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M235.432 72.0311C216.88 72.0304 202.027 75.5681 190.875 82.6442L132.806 183.221C143.959 176.145 158.812 172.607 177.363 172.608L235.432 72.0311Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M265.59 124.25C276.191 124.251 286.24 127.12 295.737 132.858L237.669 233.435C228.172 227.697 218.123 224.828 207.522 224.827L265.59 124.25Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M295.719 132.859C305.326 138.406 312.78 145.77 318.081 154.95L260.013 255.527C254.712 246.347 247.258 238.983 237.651 233.436L295.719 132.859Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M387.218 217.608C391.227 210.66 393.527 202.874 394.117 194.25L336.049 294.827C335.459 303.451 333.159 311.237 329.15 318.185L387.218 217.608Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M245.211 132.577C248.413 127.03 255.204 124.257 265.584 124.258L207.516 224.835C197.136 224.834 190.345 227.607 187.143 233.154L245.211 132.577Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M318.094 154.945C322.842 163.17 324.002 171.107 321.573 178.757L263.505 279.334C265.934 271.684 264.774 263.746 260.026 255.522L318.094 154.945Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M176.925 96.6737C180.127 91.1249 184.776 86.4503 190.871 82.6499L132.803 183.227C126.708 187.027 122.059 191.702 118.857 197.25L176.925 96.6737Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M387.226 217.606C385.989 219.749 384.59 221.813 383.028 223.797L324.96 324.373C326.522 322.39 327.921 320.326 329.157 318.183L387.226 217.606Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M317.269 188.408C319.087 185.262 320.519 182.045 321.562 178.758L263.494 279.335C262.451 282.622 261.019 285.839 259.201 288.985L317.269 188.408Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M245.208 132.573C241.895 137.928 243 145.387 248.522 154.95L190.454 255.527C184.932 245.964 183.827 238.505 187.14 233.15L245.208 132.573Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M176.93 96.6719C174.331 101.175 172.686 106.255 171.993 111.91L113.925 212.487C114.618 206.831 116.263 201.752 118.862 197.249L176.93 96.6719Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M317.266 188.413C314.853 192.589 311.757 196.64 307.978 200.566L249.91 301.143C253.689 297.216 256.785 293.166 259.198 288.99L317.266 188.413Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M464.198 304.708L435.375 254.789L377.307 355.366L406.13 405.285L464.198 304.708Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M353.209 254.787C366.68 242.548 376.618 232.22 383.023 223.805L324.955 324.382C318.55 332.797 308.612 343.124 295.141 355.364L353.209 254.787Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M435.37 254.787L353.212 254.784L295.144 355.361L377.302 355.364L435.37 254.787Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M183.921 154.947L248.521 154.95L190.453 255.527L125.853 255.524L183.921 154.947Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M171.992 111.914C170.668 124.537 174.643 138.881 183.92 154.947L125.852 255.524C116.575 239.458 112.599 225.114 113.924 212.491L171.992 111.914Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M307.987 200.562C301.251 207.256 291.203 216.244 277.842 227.528L219.774 328.105C233.135 316.821 243.183 307.832 249.919 301.139L307.987 200.562Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M15.5469 75.1797L44.5359 125.386L-13.5321 225.963L-42.5212 175.756L15.5469 75.1797Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M277.836 227.536C264.033 238.82 253.708 247.904 246.862 254.789L188.794 355.366C195.64 348.481 205.965 339.397 219.768 328.113L277.836 227.536Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M275.358 304.706L464.189 304.713L406.12 405.29L217.29 405.283L275.358 304.706Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M44.5279 125.39L67.3864 125.39L9.31834 225.967L-13.5401 225.966L44.5279 125.39Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M101.341 75.1911L233.863 304.705L175.795 405.282L43.2733 175.768L101.341 75.1911ZM15.5431 75.19L-42.525 175.767L43.277 175.77L101.345 75.1932L15.5431 75.19Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M246.866 254.784L246.534 254.784L188.466 355.361L188.798 355.361L246.866 254.784Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M246.539 254.781L275.362 304.701L217.294 405.277L188.471 355.358L246.539 254.781Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M67.3906 125.391L170.923 304.698L112.855 405.275L9.32257 225.967L67.3906 125.391Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M170.921 304.699L233.865 304.701L175.797 405.278L112.853 405.276L170.921 304.699Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4" style="mix-blend-mode:hard-light">
                            <path d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z" fill="#4B0600"/>
                            <path d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="round"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4" style="mix-blend-mode:hard-light">
                            <path d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z" fill="#4B0600"/>
                            <path d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z" stroke="#FF750F" stroke-width="1"/>
                        </g>
                    </svg>
                    <div class="absolute inset-0 rounded-t-lg lg:rounded-t-none lg:rounded-r-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]"></div>
                </div>
            </main>
        </div>

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>
