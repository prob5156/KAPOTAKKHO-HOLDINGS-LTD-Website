@extends('layouts.app')

@section('title', 'About Us | Kapotakkhho Holdings Ltd.')

@section('content')
    <!-- Hero Banner -->
    <section class="relative min-h-[40vh] flex items-center bg-navy-950 overflow-hidden py-20">
        <!-- Decorative Background Patterns -->
        <div class="absolute inset-0 z-0 opacity-10">
            <div class="absolute inset-0 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:24px_24px]"></div>
        </div>
        <div class="absolute -right-20 -top-20 w-80 h-80 rounded-full bg-gold-600 filter blur-[120px] opacity-20 z-0"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full text-center">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-navy-900 border border-navy-800 text-gold-600 text-xs font-semibold uppercase tracking-wider mb-6">
                <span class="w-1.5 h-1.5 rounded-full bg-gold-600"></span>
                Corporate Profile
            </span>
            <h1 class="text-4xl sm:text-5xl font-serif text-white font-bold leading-tight mb-4">
                About <span class="text-gold-600">Us</span>
            </h1>
            <p class="text-slate-300 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed">
                Discover the legacy, vision, and core values driving Kapotakkhho Holdings Ltd. forward.
            </p>
        </div>
    </section>

    <!-- Company History Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Our History</span>
                    <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-6 leading-tight">A Legacy of Excellence</h2>
                    <p class="text-slate-600 text-base leading-relaxed mb-6">
                        Established in 2001, Kapotakkhho Holdings Ltd. embarked on a journey to redefine the corporate landscape in Bangladesh. What began as a modest enterprise has blossomed into a multi-sector conglomerate, touching millions of lives through premium real estate, robust infrastructure, and sustainable trading practices.
                    </p>
                    <p class="text-slate-600 text-base leading-relaxed">
                        Over the decades, we have continuously adapted to market dynamics while staying true to our core principles. Our history is a testament to our resilience, innovative approach, and unwavering commitment to national development.
                    </p>
                </div>
                <div class="relative rounded-2xl overflow-hidden shadow-2xl h-80 bg-navy-900 flex items-center justify-center border border-navy-800 gold-glow">
                    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:24px_24px]"></div>
                    <span class="absolute font-serif text-8xl font-black text-gold-600 opacity-10 select-none">EST. 2001</span>
                    <div class="relative z-10 text-center">
                        <span class="text-gold-600 text-6xl font-serif font-bold block mb-2">25+</span>
                        <span class="text-white text-sm uppercase tracking-widest">Years of Trust</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="py-24 bg-[#f4f6f9]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Purpose & Direction</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-4">Our Mission & Vision</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Mission Card -->
                <div class="bg-white p-10 rounded-xl shadow-md border border-slate-200 transition-all hover:shadow-xl hover:-translate-y-1 duration-300">
                    <div class="w-14 h-14 rounded-full bg-navy-50 text-navy-900 flex items-center justify-center mb-6 border border-navy-100">
                        <svg class="w-7 h-7 text-navy-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-serif font-bold text-navy-900 mb-4">Our Mission</h3>
                    <p class="text-slate-600 leading-relaxed">
                        To create sustainable value for our stakeholders and clients through cutting-edge design, premium quality, and highly ethical corporate practices. We strive to be the catalyst for economic empowerment and environmental stewardship in every sector we operate.
                    </p>
                </div>
                <!-- Vision Card -->
                <div class="bg-navy-900 p-10 rounded-xl shadow-md border border-navy-800 text-white transition-all hover:shadow-xl hover:-translate-y-1 duration-300">
                    <div class="w-14 h-14 rounded-full bg-navy-800 text-gold-600 flex items-center justify-center mb-6 border border-navy-700">
                        <svg class="w-7 h-7 text-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-serif font-bold text-white mb-4">Our Vision</h3>
                    <p class="text-slate-300 leading-relaxed">
                        To become the most trusted corporate group in South Asia, leading through innovation, premium quality execution, and societal welfare. We envision a future where our infrastructural and commercial endeavors set the global benchmark for excellence.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Chairman's Message Section -->
    <section class="py-24 bg-navy-950 text-white relative overflow-hidden">
        <div class="absolute right-0 top-0 w-1/3 h-full bg-gold-600 opacity-5 hidden lg:block rounded-l-full"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
                <div class="lg:col-span-4 flex justify-center">
                    <div class="w-64 h-80 rounded-2xl bg-navy-900 border border-navy-800 overflow-hidden relative shadow-2xl gold-glow flex items-center justify-center text-navy-700">
                        <svg class="w-24 h-24" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                        <div class="absolute bottom-0 inset-x-0 h-1/3 bg-gradient-to-t from-navy-950 to-transparent"></div>
                    </div>
                </div>
                <div class="lg:col-span-8">
                    <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Chairman's Message</span>
                    <h2 class="text-3xl sm:text-4xl font-serif font-bold mb-6">Building the Future, Together</h2>
                    <blockquote class="text-xl font-serif italic text-slate-300 leading-relaxed mb-6 border-l-4 border-gold-600 pl-6">
                        "At Kapotakkhho Holdings Ltd., we measure our success not just by our financial achievements, but by the positive impact we create in the communities we serve. Our journey has been guided by an unwavering commitment to quality, integrity, and innovation."
                    </blockquote>
                    <p class="text-slate-400 text-base leading-relaxed mb-8">
                        We invite you to join us as we continue to shape the skyline and infrastructure of our nation. With a dedicated team and a vision for sustainable growth, we are confident that our best days are yet to come.
                    </p>
                    <div>
                        <h4 class="text-white font-bold text-lg">Honorable Chairman</h4>
                        <p class="text-gold-600 text-sm uppercase tracking-wider mt-1">Kapotakkhho Holdings Ltd.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values & Why Choose Us Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Why Choose Us</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-4">The Kapotakkhho Advantage</h2>
                <p class="text-slate-600 text-sm sm:text-base">
                    Discover the strategic benefits and foundational values that make us the preferred partner for complex projects and investments.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Quality -->
                <div class="p-8 border border-slate-200 rounded-xl hover:border-gold-600/40 hover:shadow-lg transition-all duration-300 group">
                    <div class="w-12 h-12 rounded-lg bg-navy-50 text-navy-900 flex items-center justify-center mb-6 group-hover:bg-gold-600 group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-3">Uncompromising Quality</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        We adhere to the highest international standards in materials, engineering, and service delivery across all our business units.
                    </p>
                </div>
                <!-- Reliability -->
                <div class="p-8 border border-slate-200 rounded-xl hover:border-gold-600/40 hover:shadow-lg transition-all duration-300 group">
                    <div class="w-12 h-12 rounded-lg bg-navy-50 text-navy-900 flex items-center justify-center mb-6 group-hover:bg-gold-600 group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-3">Proven Reliability</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        With over two decades of consistent performance, our track record of timely project completion and financial stability speaks for itself.
                    </p>
                </div>
                <!-- Sustainability -->
                <div class="p-8 border border-slate-200 rounded-xl hover:border-gold-600/40 hover:shadow-lg transition-all duration-300 group">
                    <div class="w-12 h-12 rounded-lg bg-navy-50 text-navy-900 flex items-center justify-center mb-6 group-hover:bg-gold-600 group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-3">Sustainable Practices</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        We integrate eco-friendly solutions and sustainable practices to minimize environmental impact and foster long-term community benefits.
                    </p>
                </div>
                <!-- Expertise -->
                <div class="p-8 border border-slate-200 rounded-xl hover:border-gold-600/40 hover:shadow-lg transition-all duration-300 group">
                    <div class="w-12 h-12 rounded-lg bg-navy-50 text-navy-900 flex items-center justify-center mb-6 group-hover:bg-gold-600 group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-3">Diverse Expertise</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Our multidisciplinary teams bring deep industry knowledge across real estate, infrastructure, agriculture, and technology sectors.
                    </p>
                </div>
                <!-- Innovation -->
                <div class="p-8 border border-slate-200 rounded-xl hover:border-gold-600/40 hover:shadow-lg transition-all duration-300 group">
                    <div class="w-12 h-12 rounded-lg bg-navy-50 text-navy-900 flex items-center justify-center mb-6 group-hover:bg-gold-600 group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-3">Innovative Solutions</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        We leverage modern technology and innovative methodologies to solve complex challenges and deliver superior value.
                    </p>
                </div>
                <!-- Client Focus -->
                <div class="p-8 border border-slate-200 rounded-xl hover:border-gold-600/40 hover:shadow-lg transition-all duration-300 group">
                    <div class="w-12 h-12 rounded-lg bg-navy-50 text-navy-900 flex items-center justify-center mb-6 group-hover:bg-gold-600 group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-3">Client-Centric Approach</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Our clients are at the heart of everything we do. We prioritize open communication and transparent partnerships to ensure mutual success.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call To Action Section -->
    <section class="py-20 bg-gold-600 text-navy-950">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-serif font-bold mb-6">Ready to Build the Future with Us?</h2>
            <p class="text-navy-900 text-lg mb-8 font-medium">
                Explore partnership opportunities or consult with our experts for your next major project.
            </p>
            <a href="{{ url('/#contact') }}" class="inline-block px-8 py-4 rounded-sm bg-navy-950 text-white font-bold hover:bg-navy-900 transition-all text-sm uppercase tracking-wider shadow-xl hover:shadow-2xl">
                Contact Us Today
            </a>
        </div>
    </section>
@endsection
