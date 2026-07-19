@extends('layouts.app')

@section('title', 'Contact Us | Kapotakkhho Holdings Ltd.')

@section('content')

// E:\Laravel\php82\php.exe artisan serve

    <!-- Leaflet CSS for OpenStreetMap -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>

    {{-- =============================================
         HERO BANNER
    ============================================== --}}
    <section class="relative min-h-[40vh] flex items-center bg-navy-950 overflow-hidden py-20">
        <div class="absolute inset-0 z-0 opacity-10">
            <div class="absolute inset-0 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:24px_24px]"></div>
        </div>
        <div class="absolute -right-20 -top-20 w-96 h-96 rounded-full bg-gold-600 filter blur-[140px] opacity-15 z-0"></div>
        <div class="absolute left-0 bottom-0 w-72 h-72 rounded-full bg-navy-500 filter blur-[100px] opacity-20 z-0"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <div>
                    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-navy-900 border border-navy-800 text-gold-600 text-xs font-semibold uppercase tracking-wider mb-6">
                        <span class="w-1.5 h-1.5 rounded-full bg-gold-600 animate-ping"></span>
                        We're Ready to Help
                    </span>
                    <h1 class="text-4xl sm:text-5xl font-serif text-white font-bold leading-tight mb-5">
                        Get In <span class="text-gold-600">Touch</span>
                    </h1>
                    <p class="text-slate-300 text-base sm:text-lg max-w-xl leading-relaxed">
                        Whether you're exploring a joint venture, seeking institutional partnership, or require a custom corporate solution — our team responds within one business day.
                    </p>
                </div>

                {{-- Quick contact pills --}}
                <div class="flex flex-col gap-4">
                    <a href="tel:+88029884571" class="flex items-center gap-4 bg-navy-900 border border-navy-800 rounded-xl p-5 hover:border-gold-600/50 transition-all group">
                        <div class="w-11 h-11 rounded-lg bg-navy-800 flex items-center justify-center shrink-0 group-hover:bg-gold-600 transition-colors">
                            <svg class="w-5 h-5 text-gold-600 group-hover:text-navy-950 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        </div>
                        <div>
                            <span class="text-slate-400 text-xs uppercase tracking-wider block">Call Headquarters</span>
                            <span class="text-white font-semibold text-sm">+880 2 9884571</span>
                        </div>
                    </a>
                    <a href="mailto:info@kapotakkhho.com" class="flex items-center gap-4 bg-navy-900 border border-navy-800 rounded-xl p-5 hover:border-gold-600/50 transition-all group">
                        <div class="w-11 h-11 rounded-lg bg-navy-800 flex items-center justify-center shrink-0 group-hover:bg-gold-600 transition-colors">
                            <svg class="w-5 h-5 text-gold-600 group-hover:text-navy-950 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <div>
                            <span class="text-slate-400 text-xs uppercase tracking-wider block">Email Us</span>
                            <span class="text-white font-semibold text-sm">info@kapotakkhho.com</span>
                        </div>
                    </a>
                    <div class="flex items-center gap-4 bg-navy-900 border border-navy-800 rounded-xl p-5">
                        <div class="w-11 h-11 rounded-lg bg-navy-800 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div>
                            <span class="text-slate-400 text-xs uppercase tracking-wider block">Office Hours</span>
                            <span class="text-white font-semibold text-sm">Sun – Thu, 09:00 AM – 06:00 PM</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- =============================================
         OFFICE INFO + ENQUIRY FORM
    ============================================== --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-12">

                {{-- ── LEFT: Office Information ──────────────────── --}}
                <div class="lg:col-span-2 flex flex-col gap-8">

                    {{-- Headquarters Card --}}
                    <div>
                        <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-4 block">Corporate Headquarters</span>
                        <div class="space-y-5">

                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-lg bg-navy-50 flex items-center justify-center shrink-0 border border-navy-100">
                                    <svg class="w-5 h-5 text-navy-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-navy-900 font-bold text-sm mb-1">Office Address</h4>
                                    <p class="text-slate-600 text-xs leading-relaxed">Kapotakkhho Tower<br>Plot 45, Road 11, Banani C/A<br>Dhaka-1213, Bangladesh</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-lg bg-navy-50 flex items-center justify-center shrink-0 border border-navy-100">
                                    <svg class="w-5 h-5 text-navy-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-navy-900 font-bold text-sm mb-1">Phone Numbers</h4>
                                    <p class="text-slate-600 text-xs leading-relaxed">
                                        Switchboard: <a href="tel:+88029884571" class="text-gold-600 hover:underline">+880 2 9884571</a><br>
                                        Direct Line: <a href="tel:+8801700000000" class="text-gold-600 hover:underline">+880 1700 000 000</a><br>
                                        Fax: +880 2 9884572
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-lg bg-navy-50 flex items-center justify-center shrink-0 border border-navy-100">
                                    <svg class="w-5 h-5 text-navy-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-navy-900 font-bold text-sm mb-1">Email Addresses</h4>
                                    <p class="text-slate-600 text-xs leading-relaxed">
                                        General: <a href="mailto:info@kapotakkhho.com" class="text-gold-600 hover:underline">info@kapotakkhho.com</a><br>
                                        Corporate: <a href="mailto:corporate@kapotakkhho.com" class="text-gold-600 hover:underline">corporate@kapotakkhho.com</a><br>
                                        Careers: <a href="mailto:hr@kapotakkhho.com" class="text-gold-600 hover:underline">hr@kapotakkhho.com</a>
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-lg bg-navy-50 flex items-center justify-center shrink-0 border border-navy-100">
                                    <svg class="w-5 h-5 text-navy-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-navy-900 font-bold text-sm mb-1">Office Hours</h4>
                                    <div class="text-xs text-slate-600 space-y-1">
                                        <div class="flex justify-between gap-6">
                                            <span>Sunday – Thursday</span>
                                            <span class="font-semibold text-navy-900">09:00 – 18:00</span>
                                        </div>
                                        <div class="flex justify-between gap-6">
                                            <span>Friday – Saturday</span>
                                            <span class="font-semibold text-slate-400">Closed</span>
                                        </div>
                                        <div class="flex justify-between gap-6">
                                            <span>Public Holidays</span>
                                            <span class="font-semibold text-slate-400">Closed</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- Emergency Contact Box --}}
                    <div class="bg-red-50 border border-red-200 rounded-xl p-6">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-8 h-8 rounded-full bg-red-500 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                            </div>
                            <h4 class="text-red-700 font-bold text-sm uppercase tracking-wider">Emergency Contact</h4>
                        </div>
                        <p class="text-red-600 text-xs leading-relaxed mb-4">
                            For urgent site emergencies, project-critical issues, or after-hours corporate crises, contact our 24-hour operations hotline.
                        </p>
                        <a href="tel:+8801900000000" class="flex items-center gap-2 text-red-700 font-bold text-sm hover:text-red-900 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            +880 1900 000 000 (24/7)
                        </a>
                    </div>

                    {{-- Social Media Links --}}
                    <div>
                        <h4 class="text-navy-900 font-bold text-xs uppercase tracking-widest mb-4">Follow Us</h4>
                        <div class="flex gap-3 flex-wrap">
                            @php
                            $socials = [
                                ['label' => 'LinkedIn', 'href' => '#', 'icon' => 'M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z M4 6a2 2 0 100-4 2 2 0 000 4z'],
                                ['label' => 'Facebook', 'href' => '#', 'icon' => 'M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z'],
                                ['label' => 'Twitter/X', 'href' => '#', 'icon' => 'M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z'],
                                ['label' => 'YouTube', 'href' => '#', 'icon' => 'M22.54 6.42a2.78 2.78 0 00-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 00-1.95 1.96A29 29 0 001 12a29 29 0 00.46 5.58A2.78 2.78 0 003.41 19.6C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 001.95-1.95A29 29 0 0023 12a29 29 0 00-.46-5.58zM9.75 15.02V8.98L15.5 12l-5.75 3.02z'],
                            ];
                            @endphp
                            @foreach($socials as $social)
                            <a href="{{ $social['href'] }}" title="{{ $social['label'] }}" class="flex items-center gap-2 px-4 py-2.5 bg-navy-50 border border-navy-100 rounded-lg text-navy-900 hover:bg-navy-900 hover:text-white hover:border-navy-900 transition-all text-xs font-semibold">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $social['icon'] }}"></path></svg>
                                {{ $social['label'] }}
                            </a>
                            @endforeach
                        </div>
                    </div>

                </div>

                {{-- ── RIGHT: Enquiry Form ──────────────────────── --}}
                <div class="lg:col-span-3">
                    <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-4 block">Corporate Enquiry Form</span>

                    <div class="bg-navy-950 rounded-2xl border border-navy-800 p-8 sm:p-10 shadow-xl">
                        <h2 class="text-2xl font-serif font-bold text-white mb-2">Send Us a Message</h2>
                        <p class="text-slate-400 text-sm mb-8">All fields marked <span class="text-red-400">*</span> are required. We respond within 1 business day.</p>

                        {{-- Success Notice (hidden by default, shown via JS) --}}
                        <div id="form-success" class="hidden mb-6 p-4 bg-green-900/50 border border-green-700 rounded-lg flex items-start gap-3">
                            <svg class="w-5 h-5 text-green-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <p class="text-green-300 text-sm">Thank you for your enquiry. A Kapotakkhho representative will contact you shortly.</p>
                        </div>

                        <form id="contact-form" action="#" method="POST" novalidate class="space-y-5">
                            @csrf

                            {{-- Row 1: Name + Email --}}
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div>
                                    <label for="full_name" class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">
                                        Full Name <span class="text-red-400">*</span>
                                    </label>
                                    <input
                                        type="text"
                                        id="full_name"
                                        name="full_name"
                                        required
                                        autocomplete="name"
                                        placeholder="e.g. Md. Rahim Uddin"
                                        class="w-full bg-navy-900 border border-navy-800 rounded-lg px-4 py-3 text-sm text-white placeholder-slate-600 focus:outline-none focus:border-gold-600 focus:ring-1 focus:ring-gold-600/30 transition-colors"
                                    >
                                </div>
                                <div>
                                    <label for="email" class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">
                                        Email Address <span class="text-red-400">*</span>
                                    </label>
                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        required
                                        autocomplete="email"
                                        placeholder="you@company.com"
                                        class="w-full bg-navy-900 border border-navy-800 rounded-lg px-4 py-3 text-sm text-white placeholder-slate-600 focus:outline-none focus:border-gold-600 focus:ring-1 focus:ring-gold-600/30 transition-colors"
                                    >
                                </div>
                            </div>

                            {{-- Row 2: Phone + Department --}}
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div>
                                    <label for="phone" class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">
                                        Phone Number
                                    </label>
                                    <input
                                        type="tel"
                                        id="phone"
                                        name="phone"
                                        autocomplete="tel"
                                        placeholder="+880 1XXX XXX XXX"
                                        class="w-full bg-navy-900 border border-navy-800 rounded-lg px-4 py-3 text-sm text-white placeholder-slate-600 focus:outline-none focus:border-gold-600 focus:ring-1 focus:ring-gold-600/30 transition-colors"
                                    >
                                </div>
                                <div>
                                    <label for="department" class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">
                                        Department <span class="text-red-400">*</span>
                                    </label>
                                    <select
                                        id="department"
                                        name="department"
                                        required
                                        class="w-full bg-navy-900 border border-navy-800 rounded-lg px-4 py-3 text-sm text-slate-300 focus:outline-none focus:border-gold-600 focus:ring-1 focus:ring-gold-600/30 transition-colors appearance-none"
                                    >
                                        <option value="" disabled selected>Select a department…</option>
                                        <option value="real-estate">Real Estate & Properties</option>
                                        <option value="construction">Civil Engineering & Construction</option>
                                        <option value="infrastructure">Infrastructure & Utilities</option>
                                        <option value="trading">Trading & Logistics</option>
                                        <option value="agriculture">Agribusiness & Food Systems</option>
                                        <option value="technology">Technology & Digital Services</option>
                                        <option value="corporate">Corporate Affairs</option>
                                        <option value="hr">Human Resources</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Row 3: Subject --}}
                            <div>
                                <label for="subject" class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">
                                    Subject <span class="text-red-400">*</span>
                                </label>
                                <input
                                    type="text"
                                    id="subject"
                                    name="subject"
                                    required
                                    placeholder="e.g. Joint Venture Proposal — Real Estate"
                                    class="w-full bg-navy-900 border border-navy-800 rounded-lg px-4 py-3 text-sm text-white placeholder-slate-600 focus:outline-none focus:border-gold-600 focus:ring-1 focus:ring-gold-600/30 transition-colors"
                                >
                            </div>

                            {{-- Row 4: Message --}}
                            <div>
                                <label for="message" class="block text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">
                                    Message <span class="text-red-400">*</span>
                                </label>
                                <textarea
                                    id="message"
                                    name="message"
                                    rows="5"
                                    required
                                    placeholder="Describe your enquiry, project scope, or partnership interest in detail…"
                                    class="w-full bg-navy-900 border border-navy-800 rounded-lg px-4 py-3 text-sm text-white placeholder-slate-600 focus:outline-none focus:border-gold-600 focus:ring-1 focus:ring-gold-600/30 transition-colors resize-none"
                                ></textarea>
                                <p class="text-slate-600 text-xs mt-1.5">Minimum 20 characters. Be as specific as possible for a faster response.</p>
                            </div>

                            {{-- Privacy agreement --}}
                            <div class="flex items-start gap-3">
                                <input
                                    type="checkbox"
                                    id="privacy"
                                    name="privacy"
                                    required
                                    class="mt-1 w-4 h-4 rounded border-navy-700 bg-navy-900 text-gold-600 focus:ring-gold-600 focus:ring-offset-navy-950 shrink-0"
                                >
                                <label for="privacy" class="text-slate-400 text-xs leading-relaxed">
                                    I agree that Kapotakkhho Holdings Ltd. may store and process my submitted information for the purpose of responding to this enquiry. I have read and accept the <a href="#" class="text-gold-600 hover:underline">Privacy Policy</a>.
                                </label>
                            </div>

                            {{-- Submit --}}
                            <button
                                type="submit"
                                id="submit-btn"
                                class="w-full py-4 bg-gold-600 text-navy-950 font-bold hover:bg-gold-700 active:scale-[0.99] transition-all rounded-lg text-sm uppercase tracking-wider shadow-lg flex items-center justify-center gap-2"
                            >
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                                Submit Enquiry
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- =============================================
         INTERACTIVE OPENSTREETMAP
    ============================================== --}}
    <section class="bg-[#f4f6f9] py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-8 text-center">
                <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-2 block">Find Us</span>
                <h2 class="text-2xl sm:text-3xl font-serif font-bold text-navy-900">Corporate Location</h2>
            </div>

            {{-- Map Container --}}
            <div class="relative w-full h-80 sm:h-[420px] rounded-2xl overflow-hidden border border-slate-200 shadow-lg bg-slate-200 z-10">
                <div id="osm-map" class="absolute inset-0"></div>
            </div>
            
            <div class="mt-6 flex justify-center">
                <a
                    href="https://www.openstreetmap.org/?mlat=23.7940&mlon=90.4043#map=16/23.7940/90.4043"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 px-5 py-2.5 bg-navy-900 text-white text-xs font-bold uppercase tracking-wider rounded-lg hover:bg-gold-600 hover:text-navy-950 transition-all shadow-md"
                >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    View Larger Map
                </a>
            </div>
        </div>
    </section>

    {{-- =============================================
         FREQUENTLY ASKED QUESTIONS
    ============================================== --}}
    <section class="py-24 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-14">
                <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">FAQ</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-4">Frequently Asked Questions</h2>
                <p class="text-slate-600 text-sm sm:text-base">Common questions about working with and contacting Kapotakkhho Holdings Ltd.</p>
            </div>

            @php
            $faqs = [
                [
                    'q' => 'What is the typical response time for corporate enquiries?',
                    'a' => 'Our corporate affairs team acknowledges all enquiries within 4 business hours. A detailed response is typically provided within 1–2 business days, depending on the complexity of the request.',
                ],
                [
                    'q' => 'How can I submit a proposal for a joint venture or partnership?',
                    'a' => 'Submit your proposal via the Corporate Enquiry Form on this page, selecting "Corporate Affairs" as the department. Please include your organization profile, proposed collaboration scope, and a brief project overview. Our business development team will review it and revert with next steps.',
                ],
                [
                    'q' => 'How do I apply for a career opportunity at Kapotakkhho Holdings?',
                    'a' => 'Send your CV and cover letter to hr@kapotakkhho.com or use the enquiry form selecting "Human Resources" as the department. We recruit across all six divisions on a rolling basis.',
                ],
                [
                    'q' => 'Can individual investors contact Kapotakkhho Holdings directly?',
                    'a' => 'Yes. Individual and institutional investors may reach our Corporate Finance team via corporate@kapotakkhho.com or through the enquiry form. We welcome transparent dialogue on investment structures and returns.',
                ],
                [
                    'q' => 'Does Kapotakkhho Holdings work with government agencies?',
                    'a' => 'Absolutely. We have an extensive track record of executing government contracts across infrastructure, construction, and technology sectors. All public sector enquiries should be directed to our Infrastructure or Technology division via the form.',
                ],
                [
                    'q' => 'Where are your regional offices located?',
                    'a' => 'Our primary headquarters is in Dhaka (Banani). We also have regional offices in Chattogram, Sylhet, and Rajshahi. For region-specific project enquiries, mention the district in your message and we will route it to the appropriate team.',
                ],
            ];
            @endphp

            <div class="space-y-4" id="faq-list">
                @foreach($faqs as $i => $faq)
                <div class="faq-item border border-slate-200 rounded-xl overflow-hidden transition-all duration-300 hover:border-gold-600/40 hover:shadow-sm">
                    <button
                        type="button"
                        onclick="toggleFaq({{ $i }})"
                        class="w-full flex items-center justify-between gap-4 px-6 py-5 text-left bg-white hover:bg-[#f4f6f9] transition-colors"
                        aria-expanded="false"
                        id="faq-btn-{{ $i }}"
                    >
                        <span class="text-navy-900 font-semibold text-sm sm:text-base pr-4 leading-snug">{{ $faq['q'] }}</span>
                        <div class="w-7 h-7 rounded-full bg-navy-50 border border-navy-100 flex items-center justify-center shrink-0 transition-transform duration-300" id="faq-icon-{{ $i }}">
                            <svg class="w-3.5 h-3.5 text-navy-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                    </button>
                    <div class="faq-answer hidden px-6 pb-5" id="faq-answer-{{ $i }}">
                        <div class="pt-2 border-t border-slate-100">
                            <p class="text-slate-600 text-sm leading-relaxed mt-3">{{ $faq['a'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <p class="text-center text-slate-500 text-sm mt-10">
                Still have questions? <a href="#contact-form" class="text-gold-600 font-semibold hover:underline" onclick="document.getElementById('full_name').focus()">Send us a message</a> and we'll get back to you.
            </p>
        </div>
    </section>

    {{-- =============================================
         CALL TO ACTION BANNER
    ============================================== --}}
    <section class="py-20 bg-gold-600 text-navy-950">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-serif font-bold mb-4">Ready to Start a Conversation?</h2>
            <p class="text-navy-800 text-lg mb-8 max-w-2xl mx-auto font-medium">
                Our corporate affairs team is standing by. Reach out through any channel — we respond fast.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:+88029884571" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-sm bg-navy-950 text-white font-bold hover:bg-navy-900 transition-all text-sm uppercase tracking-wider shadow-xl">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    Call Us Now
                </a>
                <a href="mailto:corporate@kapotakkhho.com" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-sm bg-transparent border-2 border-navy-900 text-navy-900 font-bold hover:bg-navy-900 hover:text-white transition-all text-sm uppercase tracking-wider">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    Email Corporate Team
                </a>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script>
    // ─── FAQ Accordion ─────────────────────────────────────────────
    function toggleFaq(index) {
        const answer  = document.getElementById('faq-answer-' + index);
        const icon    = document.getElementById('faq-icon-'   + index);
        const btn     = document.getElementById('faq-btn-'    + index);
        const isOpen  = !answer.classList.contains('hidden');

        // Close all others first
        document.querySelectorAll('.faq-answer').forEach((el, i) => {
            el.classList.add('hidden');
            document.getElementById('faq-icon-' + i)?.classList.remove('rotate-180');
            document.getElementById('faq-btn-'  + i)?.setAttribute('aria-expanded', 'false');
        });

        // Toggle clicked item
        if (!isOpen) {
            answer.classList.remove('hidden');
            icon.classList.add('rotate-180');
            btn.setAttribute('aria-expanded', 'true');
        }
    }

    // ─── Contact Form Submission ──────────────────────────────
    document.getElementById('contact-form').addEventListener('submit', function (e) {
        e.preventDefault();

        const form    = this;
        const btn     = document.getElementById('submit-btn');
        const success = document.getElementById('form-success');
        const formData = new FormData(form);

        // Loading state
        btn.disabled   = true;
        btn.innerHTML  = '<svg class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path></svg> Sending…';

        fetch("/contact", {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                'Accept': 'application/json'
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if(data.success) {
                success.classList.remove('hidden');
                success.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                form.reset();
            } else {
                alert('An error occurred. Please check your inputs and try again.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('A network error occurred. Please try again.');
        })
        .finally(() => {
            btn.disabled  = false;
            btn.innerHTML = '<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg> Submit Enquiry';
        });
    });

    // ─── Leaflet OpenStreetMap Initialization ──────────────────────────────
    document.addEventListener("DOMContentLoaded", function() {
        // Dhaka, Banani Coordinates (approximate)
        var lat = 23.7940;
        var lng = 90.4043;
        
        // Initialize map
        var map = L.map('osm-map').setView([lat, lng], 15);
        
        // Add OpenStreetMap tiles
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Custom Marker Pin matching site theme
        var customIcon = L.divIcon({
            className: 'custom-pin',
            html: `<div class="w-10 h-10 rounded-full bg-navy-900 flex items-center justify-center border-2 border-gold-600 shadow-lg relative -mt-5 -ml-5"><svg class="w-5 h-5 text-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg><div class="absolute -bottom-1.5 left-1/2 -translate-x-1/2 w-3 h-3 bg-navy-900 rotate-45 border-r-2 border-b-2 border-gold-600"></div></div>`,
            iconSize: [40, 40],
            iconAnchor: [20, 40],
            popupAnchor: [0, -45]
        });
        
        // Add Marker
        L.marker([lat, lng], {icon: customIcon}).addTo(map)
            .bindPopup('<div class="text-center p-1"><b class="text-navy-900 text-sm block mb-1">Kapotakkhho Tower</b><span class="text-slate-600 text-xs">Plot 45, Road 11, Banani C/A<br>Dhaka-1213, Bangladesh</span></div>')
            .openPopup();
            
        // Fix Leaflet tile loading issue in some tabs/modals by invalidating size after a tiny delay
        setTimeout(() => { map.invalidateSize(); }, 200);
    });
</script>
@endpush
