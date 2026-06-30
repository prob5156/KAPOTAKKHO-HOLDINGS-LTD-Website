@extends('layouts.app')
{{-- scheduled: small spacing adjustment --}}

@section('title', 'Kapotakkhho Holdings Ltd. | Building Growth, Creating Value')

@section('content')
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
                    <div class="lg:col-span-7 flex flex-col items-start text-left animate-fade-down">
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
                    <div class="lg:col-span-5 relative mt-8 lg:mt-0 flex justify-center animate-fade-up">
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
                    <div class="lg:col-span-5 grid grid-cols-2 gap-4 reveal reveal-left">
                        <div class="bg-navy-900 h-64 rounded-xl shadow-lg flex flex-col justify-end p-6 border border-navy-800 card-hover">
                            <span class="text-gold-600 text-3xl font-serif font-bold">2001</span>
                            <span class="text-slate-300 text-xs uppercase tracking-widest mt-1">Year of Incorporation</span>
                        </div>
                        <div class="bg-slate-100 h-64 rounded-xl shadow-lg flex flex-col justify-end p-6 border border-slate-200 mt-8 card-hover">
                            <span class="text-navy-900 text-3xl font-serif font-bold">6+</span>
                            <span class="text-slate-600 text-xs uppercase tracking-widest mt-1">Major Sectors</span>
                        </div>
                    </div>

                    <!-- Right Content -->
                    <div class="lg:col-span-7 reveal reveal-right">
                        <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Corporate Profile</span>
                        <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-6 leading-tight">Pioneering Progress Across Bangladesh</h2>
                        <p class="text-slate-600 text-base leading-relaxed mb-8">
                            Kapotakkhho Holdings Ltd. has grown from a local builder into one of the country's most respected conglomerates. We deliver landmark real estate ventures, major infrastructure assets, sustainable agricultural networks, and next-generation tech ecosystems that contribute directly to Bangladesh's national GDP and economic growth.
                        </p>

                        <!-- Mission & Vision Cards -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div class="p-6 rounded-lg bg-navy-50 border border-navy-100 hover:border-gold-600/30 transition-all duration-300 card-hover reveal delay-200">
                                <div class="w-10 h-10 rounded-full bg-navy-100 flex items-center justify-center mb-4">
                                    <svg class="w-5 h-5 text-navy-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                </div>
                                <h4 class="text-navy-900 font-bold text-base mb-2">Our Mission</h4>
                                <p class="text-slate-600 text-xs leading-relaxed">
                                    To create sustainable value for our stakeholders and clients through cutting-edge design, premium quality, and highly ethical corporate practices.
                                </p>
                            </div>
                            <div class="p-6 rounded-lg bg-navy-50 border border-navy-100 hover:border-gold-600/30 transition-all duration-300 card-hover reveal delay-400">
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
                <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                    <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Corporate Divisions</span>
                    <h2 class="text-3xl sm:text-4xl font-serif font-bold mb-4">Excellence in Diverse Sectors</h2>
                    <p class="text-slate-300 text-sm sm:text-base">
                        Our dynamic operations cross industries to deliver comprehensive infrastructure solutions, prime real estate developments, sustainable farms, and smart tech applications.
                    </p>
                </div>

                <!-- Divisions Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    
                    <!-- Real Estate -->
                    <div class="bg-navy-900 border border-navy-800 rounded-lg p-8 transition-all hover:-translate-y-2 hover:border-gold-600/40 duration-300 flex flex-col justify-between group reveal delay-100">
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
                    <div class="bg-navy-900 border border-navy-800 rounded-lg p-8 transition-all hover:-translate-y-2 hover:border-gold-600/40 duration-300 flex flex-col justify-between group reveal delay-200">
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
                    <div class="bg-navy-900 border border-navy-800 rounded-lg p-8 transition-all hover:-translate-y-2 hover:border-gold-600/40 duration-300 flex flex-col justify-between group reveal delay-300">
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
@endsection
