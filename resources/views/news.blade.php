@extends('layouts.app')

@section('title', 'News & Media | Kapotakkhho Holdings Ltd.')

@section('content')

    {{-- ====================================================== --}}
    {{-- HERO BANNER                                             --}}
    {{-- ====================================================== --}}
    <section class="relative min-h-[48vh] flex items-center bg-navy-950 overflow-hidden py-24">
        {{-- Dot Pattern Background --}}
        <div class="absolute inset-0 z-0 opacity-10">
            <div class="absolute inset-0 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:24px_24px]"></div>
        </div>
        {{-- Glowing Orbs --}}
        <div class="absolute -right-20 -top-20 w-96 h-96 rounded-full bg-gold-600 filter blur-[140px] opacity-15 z-0"></div>
        <div class="absolute -left-20 bottom-0 w-72 h-72 rounded-full bg-navy-600 filter blur-[100px] opacity-20 z-0"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full text-center">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-navy-900 border border-navy-800 text-gold-600 text-xs font-semibold uppercase tracking-wider mb-6">
                <span class="w-1.5 h-1.5 rounded-full bg-gold-600 animate-pulse"></span>
                Corporate Communications
            </span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-serif text-white font-bold leading-tight mb-5">
                News &amp; <span class="text-gold-600">Media</span>
            </h1>
            <p class="text-slate-300 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed mb-8">
                Stay informed with the latest milestones, press releases, corporate announcements, and strategic developments from Kapotakkhho Holdings Ltd.
            </p>
            {{-- Quick Category Pills --}}
            <div class="flex flex-wrap justify-center gap-3 mt-4">
                <a href="#featured-news" class="px-4 py-2 rounded-full bg-navy-800/70 border border-navy-700 text-slate-300 hover:border-gold-600 hover:text-gold-600 text-xs font-semibold transition-all">Featured News</a>
                <a href="#press-releases" class="px-4 py-2 rounded-full bg-navy-800/70 border border-navy-700 text-slate-300 hover:border-gold-600 hover:text-gold-600 text-xs font-semibold transition-all">Press Releases</a>
                <a href="#announcements" class="px-4 py-2 rounded-full bg-navy-800/70 border border-navy-700 text-slate-300 hover:border-gold-600 hover:text-gold-600 text-xs font-semibold transition-all">Announcements</a>
                <a href="#awards" class="px-4 py-2 rounded-full bg-navy-800/70 border border-navy-700 text-slate-300 hover:border-gold-600 hover:text-gold-600 text-xs font-semibold transition-all">Awards</a>
                <a href="#events" class="px-4 py-2 rounded-full bg-navy-800/70 border border-navy-700 text-slate-300 hover:border-gold-600 hover:text-gold-600 text-xs font-semibold transition-all">Events</a>
            </div>
        </div>
    </section>

    {{-- ====================================================== --}}
    {{-- FEATURED NEWS                                           --}}
    {{-- ====================================================== --}}
    <section id="featured-news" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-end justify-between mb-12">
                <div>
                    <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-2 block">Editor's Pick</span>
                    <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900">Featured Stories</h2>
                </div>
                <a href="#latest-news" class="hidden sm:inline-flex items-center gap-2 text-sm font-semibold text-navy-600 hover:text-gold-600 transition-colors">
                    All News
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                {{-- Primary Featured Card --}}
                <div class="lg:col-span-7 group relative bg-navy-950 rounded-2xl overflow-hidden shadow-2xl flex flex-col min-h-[420px] gold-glow-hover transition-all duration-300 cursor-pointer">
                    <div class="absolute inset-0 opacity-20 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:28px_28px]"></div>
                    <div class="absolute inset-0 bg-gradient-to-br from-navy-900 via-navy-950 to-[#030609]"></div>
                    <div class="absolute top-8 right-8 w-32 h-32 rounded-full bg-gold-600/10 flex items-center justify-center border border-gold-600/20">
                        <svg class="w-16 h-16 text-gold-600/40" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    </div>
                    <div class="relative z-10 p-8 sm:p-10 mt-auto flex flex-col flex-1 justify-end">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="px-3 py-1 rounded-full bg-gold-600 text-navy-950 text-xs font-bold uppercase tracking-wider">Corporate Development</span>
                            <span class="text-slate-400 text-xs flex items-center gap-1">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                June 20, 2026
                            </span>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-serif font-bold text-white mb-4 leading-tight group-hover:text-gold-400 transition-colors">
                            Kapotakkhho Holdings Breaks Ground on BDT 2,400 Crore Integrated Commercial Township in Purbachal
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6 max-w-xl">
                            In a landmark moment for Bangladesh's real estate sector, Kapotakkhho Holdings Ltd. officially commenced construction of its most ambitious mixed-use development — a 45-acre integrated township encompassing premium residences, Grade-A office towers, and retail destinations.
                        </p>
                        <button onclick="openDrawer({
                            badge: 'Corporate Development',
                            title: 'Kapotakkhho Holdings Breaks Ground on BDT 2,400 Crore Integrated Commercial Township in Purbachal',
                            linkText: 'Contact Press Office',
                            linkUrl: '{{ route('contact') }}',
                            content: `
                                <p class='text-slate-300 mb-4'>In a landmark moment for Bangladesh\\'s real estate sector, Kapotakkhho Holdings Ltd. officially commenced construction of its most ambitious mixed-use development — a 45-acre integrated township encompassing premium residences, Grade-A office towers, and retail destinations.</p>
                                <div class='p-4 bg-navy-900 border border-navy-800 rounded-lg space-y-2 text-xs mb-4'>
                                    <div class='flex justify-between'><span class='text-slate-400'>Investment Value:</span><span class='text-gold-600 font-bold'>BDT 2,400 Crore</span></div>
                                    <div class='flex justify-between'><span class='text-slate-400'>Project Area:</span><span class='text-white font-bold'>45 Acres (Purbachal)</span></div>
                                    <div class='flex justify-between'><span class='text-slate-400'>Target Completion:</span><span class='text-white font-bold'>Q4 2029</span></div>
                                </div>
                                <p class='text-xs text-slate-400 leading-relaxed'>The project will incorporate LEED-Gold sustainability benchmarks, smart traffic management systems, and a dedicated 5-acre central public park.</p>
                            `
                        })" class="inline-flex items-center gap-2 text-gold-600 font-semibold text-sm hover:text-gold-400 transition-colors group-hover:gap-3 cursor-pointer text-left">
                            Read Full Story
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </button>
                    </div>
                </div>

                {{-- Secondary Featured Cards --}}
                <div class="lg:col-span-5 flex flex-col gap-6">
                    <div onclick="openDrawer({
                        badge: 'Infrastructure',
                        title: 'KHL Engineering Wins Dhaka Elevated Expressway Phase III Contract Worth BDT 950 Crore',
                        location: 'Dhaka, Bangladesh',
                        linkText: 'Contact Infrastructure Team',
                        linkUrl: '{{ route('contact') }}',
                        content: `
                            <p class='text-slate-600 mb-4'>Securing the contract marks a significant expansion of our infrastructure portfolio and engineering capacity. Kapotakkhho Engineering Ltd. will oversee civil piling, structural steel erection, and toll plaza automation.</p>
                            <div class='p-4 bg-slate-50 border border-slate-200 rounded-lg space-y-2 text-xs mb-4'>
                                <div class='flex justify-between'><span class='text-slate-500'>Contract Value:</span><span class='text-slate-900 font-bold'>BDT 950 Crore</span></div>
                                <div class='flex justify-between'><span class='text-slate-500'>Client:</span><span class='text-slate-900 font-bold'>BBA / Gov of Bangladesh</span></div>
                                <div class='flex justify-between'><span class='text-slate-500'>Timeline:</span><span class='text-amber-700 font-bold'>24 Months</span></div>
                            </div>
                        `
                    })" class="group flex gap-5 bg-white border border-slate-200 rounded-xl p-5 hover:border-gold-600/40 hover:shadow-lg transition-all duration-300 cursor-pointer">
                        <div class="w-24 h-24 shrink-0 rounded-lg bg-navy-50 border border-navy-100 flex items-center justify-center">
                            <svg class="w-10 h-10 text-navy-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="px-2.5 py-0.5 rounded-full bg-navy-50 border border-navy-200 text-navy-700 text-xs font-semibold">Infrastructure</span>
                                <span class="text-slate-400 text-xs">May 15, 2026</span>
                            </div>
                            <h4 class="font-serif font-bold text-navy-900 text-sm leading-snug mb-2 group-hover:text-gold-600 transition-colors">
                                KHL Engineering Wins Dhaka Elevated Expressway Phase III Contract Worth BDT 950 Crore
                            </h4>
                            <p class="text-slate-500 text-xs leading-relaxed line-clamp-2">Securing the contract marks a significant expansion of our infrastructure portfolio and engineering capacity.</p>
                            <span class="mt-2 inline-flex items-center gap-1 text-xs font-semibold text-gold-600 hover:text-gold-500 transition-colors">
                                Read More <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                            </span>
                        </div>
                    </div>

                    <div onclick="openDrawer({
                        badge: 'Sustainability',
                        title: 'KHL Achieves LEED Platinum Certification for Riverside Business Park',
                        location: 'Khulna, Bangladesh',
                        linkText: 'Learn About ESG',
                        linkUrl: '{{ route('sustainability') }}',
                        content: `
                            <p class='text-slate-600 mb-4'>Our flagship office development earns the highest green building rating from USGBC, a first for the Khulna Division. Features zero-discharge water recycling, solar roofing, and 40% energy savings.</p>
                            <div class='p-4 bg-slate-50 border border-slate-200 rounded-lg space-y-2 text-xs mb-4'>
                                <div class='flex justify-between'><span class='text-slate-500'>Rating:</span><span class='text-emerald-700 font-bold'>LEED Platinum (USGBC)</span></div>
                                <div class='flex justify-between'><span class='text-slate-500'>Carbon Offset:</span><span class='text-slate-900 font-bold'>1,800 MT / Year</span></div>
                            </div>
                        `
                    })" class="group flex gap-5 bg-white border border-slate-200 rounded-xl p-5 hover:border-gold-600/40 hover:shadow-lg transition-all duration-300 cursor-pointer">
                        <div class="w-24 h-24 shrink-0 rounded-lg bg-gold-50 border border-gold-100 flex items-center justify-center">
                            <svg class="w-10 h-10 text-gold-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="px-2.5 py-0.5 rounded-full bg-gold-50 border border-gold-200 text-gold-700 text-xs font-semibold">Sustainability</span>
                                <span class="text-slate-400 text-xs">Apr 28, 2026</span>
                            </div>
                            <h4 class="font-serif font-bold text-navy-900 text-sm leading-snug mb-2 group-hover:text-gold-600 transition-colors">
                                KHL Achieves LEED Platinum Certification for Riverside Business Park — First in Khulna Division
                            </h4>
                            <p class="text-slate-500 text-xs leading-relaxed line-clamp-2">Our flagship office development earns the highest green building rating from USGBC, a first for the region.</p>
                            <span class="mt-2 inline-flex items-center gap-1 text-xs font-semibold text-gold-600 hover:text-gold-500 transition-colors">
                                Read More <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                            </span>
                        </div>
                    </div>

                    <div onclick="openDrawer({
                        badge: 'Corporate Executive',
                        title: 'Board Appoints Eng. Reza Hossain as New Group Managing Director',
                        location: 'Dhaka, Bangladesh',
                        linkText: 'Corporate Governance',
                        linkUrl: '{{ route('governance') }}',
                        content: `
                            <p class='text-slate-600 mb-4'>With 22 years in diversified conglomerates across South Asia, Mr. Hossain brings transformational leadership to Kapotakkhho's next expansion chapter across infrastructure and agribusiness.</p>
                        `
                    })" class="group flex gap-5 bg-white border border-slate-200 rounded-xl p-5 hover:border-gold-600/40 hover:shadow-lg transition-all duration-300 cursor-pointer">
                        <div class="w-24 h-24 shrink-0 rounded-lg bg-slate-50 border border-slate-200 flex items-center justify-center">
                            <svg class="w-10 h-10 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="px-2.5 py-0.5 rounded-full bg-slate-100 border border-slate-200 text-slate-600 text-xs font-semibold">Corporate</span>
                                <span class="text-slate-400 text-xs">Apr 05, 2026</span>
                            </div>
                            <h4 class="font-serif font-bold text-navy-900 text-sm leading-snug mb-2 group-hover:text-gold-600 transition-colors">
                                Board Appoints Eng. Reza Hossain as New Group Managing Director
                            </h4>
                            <p class="text-slate-500 text-xs leading-relaxed line-clamp-2">With 22 years in diversified conglomerates across Asia, Mr. Hossain brings transformational leadership to KHL's next growth chapter.</p>
                            <span class="mt-2 inline-flex items-center gap-1 text-xs font-semibold text-gold-600 hover:text-gold-500 transition-colors">
                                Read More <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ====================================================== --}}
    {{-- LATEST NEWS GRID                                        --}}
    {{-- ====================================================== --}}
    <section id="latest-news" class="py-20 bg-[#f4f6f9]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Stay Updated</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-4">Latest News</h2>
                <p class="text-slate-600 text-sm">A complete overview of recent developments, partnerships, and milestones across all Kapotakkhho business divisions.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                {{-- Card 1 --}}
                <article onclick="openDrawer({
                    badge: 'Real Estate',
                    title: 'KHL Properties Launches Skyline Residences: 480-Unit Luxury Tower in Bashundhara',
                    location: 'Bashundhara, Dhaka, Bangladesh',
                    linkText: 'Contact Real Estate Team',
                    linkUrl: '{{ route('contact') }}',
                    content: `
                        <p class='text-slate-600 mb-4'>The project introduces panoramic city-view apartments with concierge services and smart home integrations, redefining premium living in Dhaka's fastest-growing residential corridor.</p>
                        <div class='p-4 bg-slate-50 border border-slate-200 rounded-lg space-y-2 text-xs mb-4'>
                            <div class='flex justify-between'><span class='text-slate-500'>Units:</span><span class='text-slate-900 font-bold'>480 Luxury Apartments</span></div>
                            <div class='flex justify-between'><span class='text-slate-500'>Location:</span><span class='text-slate-900 font-bold'>Block I, Bashundhara R/A, Dhaka</span></div>
                        </div>
                    `
                })" class="group bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-200 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col cursor-pointer">
                    <div class="relative h-48 bg-navy-900 flex items-center justify-center overflow-hidden">
                        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:20px_20px]"></div>
                        <svg class="w-16 h-16 text-gold-600/50 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                        <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-gold-600 text-navy-950 text-xs font-bold">Real Estate</span>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <p class="text-xs text-slate-400 mb-3 flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            July 01, 2026
                        </p>
                        <h3 class="font-serif font-bold text-navy-900 text-lg leading-snug mb-3 group-hover:text-gold-600 transition-colors">
                            KHL Properties Launches Skyline Residences: 480-Unit Luxury Tower in Bashundhara
                        </h3>
                        <p class="text-slate-500 text-sm leading-relaxed flex-1 mb-5">
                            The project introduces panoramic city-view apartments with concierge services and smart home integrations, redefining premium living in Dhaka's fastest-growing residential corridor.
                        </p>
                        <span class="inline-flex items-center gap-2 text-sm font-bold text-navy-900 border-b border-transparent hover:border-gold-600 hover:text-gold-600 transition-all pb-0.5">
                            Read More <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </span>
                    </div>
                </article>

                {{-- Card 2 --}}
                <article onclick="openDrawer({
                    badge: 'Infrastructure',
                    title: 'Kapotakkhho Engineering Completes Sylhet Ring Road Bridge 8 Months Ahead of Schedule',
                    location: 'Sylhet, Bangladesh',
                    linkText: 'Explore Projects',
                    linkUrl: '{{ route('projects') }}',
                    content: `
                        <p class='text-slate-600 mb-4'>The 340-metre prestressed concrete bridge now serves over 50,000 daily commuters and has earned recognition from the Roads & Highways Department for exemplary project delivery.</p>
                        <div class='p-4 bg-slate-50 border border-slate-200 rounded-lg space-y-2 text-xs mb-4'>
                            <div class='flex justify-between'><span class='text-slate-500'>Location:</span><span class='text-slate-900 font-bold'>Sylhet Bypass, BD</span></div>
                            <div class='flex justify-between'><span class='text-slate-500'>Status:</span><span class='text-emerald-700 font-bold'>Completed Ahead of Schedule</span></div>
                        </div>
                    `
                })" class="group bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-200 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col cursor-pointer">
                    <div class="relative h-48 bg-[#112d4a] flex items-center justify-center overflow-hidden">
                        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:20px_20px]"></div>
                        <svg class="w-16 h-16 text-gold-600/50 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18"/></svg>
                        <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-navy-800 border border-navy-700 text-gold-500 text-xs font-bold">Infrastructure</span>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <p class="text-xs text-slate-400 mb-3 flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            June 18, 2026
                        </p>
                        <h3 class="font-serif font-bold text-navy-900 text-lg leading-snug mb-3 group-hover:text-gold-600 transition-colors">
                            Kapotakkhho Engineering Completes Sylhet Ring Road Bridge 8 Months Ahead of Schedule
                        </h3>
                        <p class="text-slate-500 text-sm leading-relaxed flex-1 mb-5">
                            The 340-metre prestressed concrete bridge now serves over 50,000 daily commuters and has earned recognition from the Roads &amp; Highways Department for exemplary project delivery.
                        </p>
                        <span class="inline-flex items-center gap-2 text-sm font-bold text-navy-900 border-b border-transparent hover:border-gold-600 hover:text-gold-600 transition-all pb-0.5">
                            Read More <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </span>
                    </div>
                </article>

                {{-- Card 3 --}}
                <article onclick="openDrawer({
                    badge: 'Sustainability',
                    title: 'KHL Launches 5 MW Rooftop Solar Programme Across 14 Industrial Facilities',
                    location: 'Narayanganj, Bangladesh',
                    linkText: 'View ESG Portfolio',
                    linkUrl: '{{ route('sustainability') }}',
                    content: `
                        <p class='text-slate-600 mb-4'>The initiative is projected to reduce combined annual carbon emissions by 4,200 metric tonnes and save BDT 22 crore in energy costs across all participating facilities.</p>
                        <div class='p-4 bg-slate-50 border border-slate-200 rounded-lg space-y-2 text-xs mb-4'>
                            <div class='flex justify-between'><span class='text-slate-500'>Capacity:</span><span class='text-emerald-700 font-bold'>5.0 Megawatts Solar</span></div>
                            <div class='flex justify-between'><span class='text-slate-500'>CO2 Saved:</span><span class='text-slate-900 font-bold'>4,200 Tonnes / Year</span></div>
                        </div>
                    `
                })" class="group bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-200 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col cursor-pointer">
                    <div class="relative h-48 bg-[#1a3a1a] flex items-center justify-center overflow-hidden">
                        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:20px_20px]"></div>
                        <svg class="w-16 h-16 text-green-400/40 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-green-800/70 border border-green-700/50 text-green-300 text-xs font-bold">Sustainability</span>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <p class="text-xs text-slate-400 mb-3 flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            June 05, 2026
                        </p>
                        <h3 class="font-serif font-bold text-navy-900 text-lg leading-snug mb-3 group-hover:text-gold-600 transition-colors">
                            KHL Launches 5 MW Rooftop Solar Programme Across 14 Industrial Facilities
                        </h3>
                        <p class="text-slate-500 text-sm leading-relaxed flex-1 mb-5">
                            The initiative is projected to reduce combined annual carbon emissions by 4,200 metric tonnes and save BDT 22 crore in energy costs across all participating facilities.
                        </p>
                        <span class="inline-flex items-center gap-2 text-sm font-bold text-navy-900 border-b border-transparent hover:border-gold-600 hover:text-gold-600 transition-all pb-0.5">
                            Read More <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </span>
                    </div>
                </article>

                {{-- Card 4 --}}
                <article onclick="openDrawer({
                    badge: 'Trade & Logistics',
                    title: 'KHL Global Trade Signs MoU with Malaysian Palm Oil Board',
                    location: 'Chittagong, Bangladesh',
                    linkText: 'Contact Trade Division',
                    linkUrl: '{{ route('contact') }}',
                    content: `
                        <p class='text-slate-600 mb-4'>The strategic agreement opens a direct supply channel for 80,000 MT of crude palm oil annually, strengthening Bangladesh's food processing and biofuel supply chains.</p>
                        <div class='p-4 bg-slate-50 border border-slate-200 rounded-lg space-y-2 text-xs mb-4'>
                            <div class='flex justify-between'><span class='text-slate-500'>Volume:</span><span class='text-slate-900 font-bold'>80,000 MT Annual Import</span></div>
                            <div class='flex justify-between'><span class='text-slate-500'>Port Hub:</span><span class='text-slate-900 font-bold'>Chittagong Port & Warehousing</span></div>
                        </div>
                    `
                })" class="group bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-200 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col cursor-pointer">
                    <div class="relative h-48 bg-[#2a1a0a] flex items-center justify-center overflow-hidden">
                        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:20px_20px]"></div>
                        <svg class="w-16 h-16 text-amber-500/40 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                        <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-amber-900/60 border border-amber-700/40 text-amber-300 text-xs font-bold">Trade</span>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <p class="text-xs text-slate-400 mb-3 flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            May 22, 2026
                        </p>
                        <h3 class="font-serif font-bold text-navy-900 text-lg leading-snug mb-3 group-hover:text-gold-600 transition-colors">
                            KHL Global Trade Signs MoU with Malaysian Palm Oil Board for Agro-Commodity Imports
                        </h3>
                        <p class="text-slate-500 text-sm leading-relaxed flex-1 mb-5">
                            The strategic agreement opens a direct supply channel for 80,000 MT of crude palm oil annually, strengthening Bangladesh's food processing and biofuel supply chains.
                        </p>
                        <span class="inline-flex items-center gap-2 text-sm font-bold text-navy-900 border-b border-transparent hover:border-gold-600 hover:text-gold-600 transition-all pb-0.5">
                            Read More <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </span>
                    </div>
                </article>

                {{-- Card 5 --}}
                <article class="group bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-200 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col">
                    <div class="relative h-48 bg-[#0a0a2a] flex items-center justify-center overflow-hidden">
                        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:20px_20px]"></div>
                        <svg class="w-16 h-16 text-blue-400/40 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-blue-900/60 border border-blue-700/40 text-blue-300 text-xs font-bold">Technology</span>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <p class="text-xs text-slate-400 mb-3 flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            May 10, 2026
                        </p>
                        <h3 class="font-serif font-bold text-navy-900 text-lg leading-snug mb-3 group-hover:text-gold-600 transition-colors">
                            Kapotakkhho Digital Secures Seed Funding for PropTech Platform 'NilKheto'
                        </h3>
                        <p class="text-slate-500 text-sm leading-relaxed flex-1 mb-5">
                            The AI-powered real estate marketplace targets BDT 500 crore in annual property transactions by FY2027, digitising the entire property search and buying lifecycle.
                        </p>
                        <a href="#" class="inline-flex items-center gap-2 text-sm font-bold text-navy-900 border-b border-transparent hover:border-gold-600 hover:text-gold-600 transition-all pb-0.5">
                            Read More <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </article>

                {{-- Card 6 --}}
                <article class="group bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-200 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col">
                    <div class="relative h-48 bg-[#1a0a1a] flex items-center justify-center overflow-hidden">
                        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:20px_20px]"></div>
                        <svg class="w-16 h-16 text-purple-400/40 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-purple-900/60 border border-purple-700/40 text-purple-300 text-xs font-bold">Corporate</span>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <p class="text-xs text-slate-400 mb-3 flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            April 16, 2026
                        </p>
                        <h3 class="font-serif font-bold text-navy-900 text-lg leading-snug mb-3 group-hover:text-gold-600 transition-colors">
                            KHL Annual Report FY2025 Released: Revenue Surpasses BDT 3,200 Crore Milestone
                        </h3>
                        <p class="text-slate-500 text-sm leading-relaxed flex-1 mb-5">
                            The Group reports 28% year-on-year revenue growth, driven by record project completions across engineering, properties, and agro-trade — the strongest performance in company history.
                        </p>
                        <a href="#" class="inline-flex items-center gap-2 text-sm font-bold text-navy-900 border-b border-transparent hover:border-gold-600 hover:text-gold-600 transition-all pb-0.5">
                            Read More <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </article>

            </div>

            <div class="text-center mt-12">
                <a href="#" class="inline-flex items-center gap-2 px-8 py-3.5 rounded-sm border border-navy-800 bg-navy-900 text-white font-bold text-sm uppercase tracking-wider hover:bg-gold-600 hover:text-navy-950 hover:border-gold-600 transition-all">
                    Load More News
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </a>
            </div>
        </div>
    </section>

    {{-- ====================================================== --}}
    {{-- PRESS RELEASES                                          --}}
    {{-- ====================================================== --}}
    <section id="press-releases" class="py-20 bg-navy-950 relative overflow-hidden">
        <div class="absolute inset-0 opacity-5 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:28px_28px]"></div>
        <div class="absolute right-0 top-0 w-1/3 h-full bg-gradient-to-l from-gold-600/5 to-transparent"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-12 gap-4">
                <div>
                    <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-2 block">Official Statements</span>
                    <h2 class="text-3xl sm:text-4xl font-serif font-bold text-white">Press Releases</h2>
                </div>
                <a href="#" class="inline-flex items-center gap-2 text-sm font-semibold text-slate-400 hover:text-gold-600 transition-colors">
                    Download Media Kit
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                </a>
            </div>

            <div class="space-y-4">
                @php
                    $pressReleases = [
                        ['date' => 'July 05, 2026', 'category' => 'Financial', 'headline' => 'Kapotakkhho Holdings Ltd. Announces Successful Completion of BDT 800 Crore Bond Issuance', 'summary' => 'The oversubscribed bond offering, rated AA by CRISL, demonstrates strong investor confidence in KHL\'s financial stability and long-term growth strategy.', 'badge_color' => 'bg-gold-600 text-navy-950'],
                        ['date' => 'June 25, 2026', 'category' => 'Regulatory', 'headline' => 'KHL Properties Receives Environmental Clearance for Coastal Resort Development in Cox\'s Bazar', 'summary' => 'The Department of Environment has approved the eco-sensitive development plan, paving the way for a 120-key luxury resort complex on 18 acres of reclaimed coastline.', 'badge_color' => 'bg-green-700 text-green-100'],
                        ['date' => 'June 10, 2026', 'category' => 'Partnership', 'headline' => 'Strategic Alliance with Japan International Cooperation Agency (JICA) for Urban Infrastructure Development', 'summary' => 'Under the agreement, JICA will provide technical assistance and concessional financing for three upcoming urban water and sanitation infrastructure projects.', 'badge_color' => 'bg-blue-700 text-blue-100'],
                        ['date' => 'May 30, 2026', 'category' => 'Corporate Governance', 'headline' => 'KHL Board Approves 5-Year Strategic Plan "Vision 2031" Targeting BDT 8,000 Crore in Revenue', 'summary' => 'The ambitious growth blueprint charts expansion across six sectors with emphasis on digital transformation, ESG integration, and regional market entry into Myanmar and Nepal.', 'badge_color' => 'bg-purple-700 text-purple-100'],
                        ['date' => 'May 12, 2026', 'category' => 'CSR', 'headline' => 'Kapotakkhho Foundation Establishes BDT 50 Crore Endowment for Engineering Scholarships', 'summary' => 'The flagship scholarship programme will support 200 meritorious students annually from BUET, KUET, and RUET with full tuition, stipend, and placement guarantee.', 'badge_color' => 'bg-rose-700 text-rose-100'],
                    ];
                @endphp

                @foreach($pressReleases as $pr)
                <div class="group flex flex-col sm:flex-row sm:items-center gap-5 p-6 bg-navy-900/70 border border-navy-800 rounded-xl hover:border-gold-600/40 hover:bg-navy-900 transition-all duration-300">
                    <div class="sm:w-36 shrink-0">
                        <p class="text-gold-600 text-xs font-bold uppercase tracking-wider">{{ $pr['date'] }}</p>
                    </div>
                    <div class="w-px h-10 bg-navy-700 shrink-0 hidden sm:block"></div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="px-2.5 py-0.5 rounded-full text-xs font-bold {{ $pr['badge_color'] }}">{{ $pr['category'] }}</span>
                        </div>
                        <h4 class="font-serif font-bold text-white text-sm sm:text-base leading-snug mb-1 group-hover:text-gold-400 transition-colors">{{ $pr['headline'] }}</h4>
                        <p class="text-slate-400 text-xs leading-relaxed">{{ $pr['summary'] }}</p>
                    </div>
                    <div class="shrink-0">
                        <a href="#" class="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg border border-navy-700 text-slate-400 hover:border-gold-600 hover:text-gold-600 text-xs font-semibold transition-all">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                            PDF
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ====================================================== --}}
    {{-- COMPANY ANNOUNCEMENTS                                   --}}
    {{-- ====================================================== --}}
    <section id="announcements" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Official Notices</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-4">Company Announcements</h2>
                <p class="text-slate-600 text-sm">Important corporate notices, operational updates, and regulatory disclosures for stakeholders and the general public.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @php
                    $announcements = [
                        ['icon' => 'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z', 'color' => 'bg-navy-50 border-navy-200 text-navy-700', 'date' => 'July 10, 2026', 'tag' => 'AGM Notice', 'title' => '35th Annual General Meeting – Notice to Shareholders', 'desc' => 'The Annual General Meeting of Kapotakkhho Holdings Ltd. will be held on August 15, 2026 at the LGRD Bhaban Auditorium, Dhaka, at 10:00 AM. All shareholders are requested to register their attendance.'],
                        ['icon' => 'M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z', 'color' => 'bg-gold-50 border-gold-200 text-gold-700', 'date' => 'July 02, 2026', 'tag' => 'Dividend', 'title' => 'Interim Cash Dividend of BDT 4.00 Per Share for FY2025-26', 'desc' => 'The Board of Directors has approved an interim cash dividend of BDT 4.00 per ordinary share. The record date is July 20, 2026 and payment will be processed by August 05, 2026 via BSEC-approved channels.'],
                        ['icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'color' => 'bg-green-50 border-green-200 text-green-700', 'date' => 'June 28, 2026', 'tag' => 'Compliance', 'title' => 'Successful ISO 9001:2015 Re-Certification Across All Business Units', 'desc' => 'Following an extensive third-party audit by Bureau Veritas, all six divisions of Kapotakkhho Holdings have successfully renewed ISO 9001:2015 Quality Management System certification for the next three-year cycle.'],
                        ['icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4', 'color' => 'bg-slate-50 border-slate-200 text-slate-600', 'date' => 'June 14, 2026', 'tag' => 'Operations', 'title' => 'Temporary Closure of Uttara Project Sales Office for Renovation (June 17–25)', 'desc' => 'The Uttara Sector-3 Sales and Customer Experience Office will be closed for renovation from June 17 to June 25, 2026. Clients may contact the central helpline or visit the head office for all queries.'],
                    ];
                @endphp

                @foreach($announcements as $ann)
                <div class="flex gap-5 p-6 border border-slate-200 rounded-xl hover:border-gold-600/40 hover:shadow-md transition-all duration-300">
                    <div class="shrink-0 w-12 h-12 rounded-lg {{ $ann['color'] }} border flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $ann['icon'] }}"/></svg>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="text-xs font-bold text-gold-600 uppercase tracking-wide">{{ $ann['tag'] }}</span>
                            <span class="text-slate-400 text-xs">{{ $ann['date'] }}</span>
                        </div>
                        <h4 class="font-serif font-bold text-navy-900 text-sm leading-snug mb-2">{{ $ann['title'] }}</h4>
                        <p class="text-slate-500 text-xs leading-relaxed">{{ $ann['desc'] }}</p>
                        <a href="#" class="mt-3 inline-flex items-center gap-1 text-xs font-bold text-navy-700 hover:text-gold-600 transition-colors">
                            Read Full Notice <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ====================================================== --}}
    {{-- AWARDS & ACHIEVEMENTS                                   --}}
    {{-- ====================================================== --}}
    <section id="awards" class="py-20 bg-[#f4f6f9]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Recognition &amp; Honours</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-4">Awards &amp; Achievements</h2>
                <p class="text-slate-600 text-sm">Industry recognition that reflects our commitment to quality, innovation, and responsible corporate citizenship.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $awards = [
                        ['year' => '2026', 'award' => 'Best Developer of the Year', 'body' => 'Real Estate &amp; Housing Association of Bangladesh', 'icon' => 'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z'],
                        ['year' => '2025', 'award' => 'National Infrastructure Award – Gold', 'body' => 'Bangladesh Institute of Engineers', 'icon' => 'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z'],
                        ['year' => '2025', 'award' => 'Top 10 Most Trusted Companies', 'body' => 'Bangladesh Brand Forum Annual Rankings', 'icon' => 'M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z'],
                        ['year' => '2024', 'award' => 'ESG Leadership Excellence Award', 'body' => 'ICMAB Corporate Governance Awards', 'icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                    ];
                @endphp

                @foreach($awards as $award)
                <div class="group relative bg-white rounded-xl p-7 border border-slate-200 hover:border-gold-600/60 hover:shadow-xl transition-all duration-300 text-center overflow-hidden">
                    <div class="absolute -top-6 -right-6 w-20 h-20 rounded-full bg-gold-600/5 group-hover:bg-gold-600/10 transition-colors"></div>
                    <span class="inline-block px-3 py-1 rounded-full bg-navy-950 text-gold-600 text-xs font-bold mb-5">{{ $award['year'] }}</span>
                    <div class="w-14 h-14 rounded-full bg-gold-50 border border-gold-200 flex items-center justify-center mx-auto mb-5">
                        <svg class="w-7 h-7 text-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $award['icon'] }}"/></svg>
                    </div>
                    <h4 class="font-serif font-bold text-navy-900 text-base leading-snug mb-3 group-hover:text-gold-600 transition-colors">{{ $award['award'] }}</h4>
                    <p class="text-slate-500 text-xs leading-relaxed">{!! $award['body'] !!}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ====================================================== --}}
    {{-- EVENT TIMELINE                                          --}}
    {{-- ====================================================== --}}
    <section id="events" class="py-20 bg-navy-950 relative overflow-hidden">
        <div class="absolute inset-0 opacity-5 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:32px_32px]"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Corporate Calendar</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-white mb-4">Event Timeline</h2>
                <p class="text-slate-400 text-sm">Key milestones, conferences, and corporate events on the Kapotakkhho Holdings agenda.</p>
            </div>

            <div class="relative">
                <div class="absolute left-4 sm:left-1/2 top-0 bottom-0 w-px bg-navy-800 sm:-translate-x-px"></div>

                <div class="space-y-10">
                    @php
                        $events = [
                            ['side' => 'left', 'date' => 'Aug 15, 2026', 'type' => 'Upcoming', 'type_color' => 'bg-gold-600 text-navy-950', 'title' => '35th Annual General Meeting', 'venue' => 'LGRD Bhaban Auditorium, Dhaka', 'desc' => 'Shareholders will vote on board composition, dividend declarations, and the Vision 2031 strategic plan ratification.'],
                            ['side' => 'right', 'date' => 'Sep 10–12, 2026', 'type' => 'Upcoming', 'type_color' => 'bg-gold-600 text-navy-950', 'title' => 'Bangladesh Investment Summit 2026 – Keynote Participation', 'venue' => 'Pan Pacific Sonargaon, Dhaka', 'desc' => 'KHL Chairman will deliver the keynote address on "Conglomerate-Led Growth: Bangladesh\'s Next Decade".'],
                            ['side' => 'left', 'date' => 'June 30, 2026', 'type' => 'Completed', 'type_color' => 'bg-green-700 text-green-100', 'title' => 'Purbachal Township Groundbreaking Ceremony', 'venue' => 'Purbachal New Town, Dhaka', 'desc' => 'Historic groundbreaking attended by the Honourable Commerce Minister and over 400 industry leaders, clients, and media.'],
                            ['side' => 'right', 'date' => 'May 20, 2026', 'type' => 'Completed', 'type_color' => 'bg-green-700 text-green-100', 'title' => 'South Asia Real Estate & Infrastructure Expo', 'venue' => 'Bashundhara International Convention City', 'desc' => 'KHL exhibited across a 3,000 sqft pavilion, generating 1,200+ qualified leads and securing 4 MoUs with international partners.'],
                            ['side' => 'left', 'date' => 'March 15, 2026', 'type' => 'Completed', 'type_color' => 'bg-green-700 text-green-100', 'title' => 'KHL Leadership Conclave 2026', 'venue' => 'Cox\'s Bazar Convention Centre', 'desc' => 'Two-day offsite for 85 senior leaders to align on Vision 2031 roadmap, cultural transformation, and digital acceleration strategy.'],
                        ];
                    @endphp

                    @foreach($events as $event)
                    <div class="relative flex flex-col sm:flex-row {{ $event['side'] === 'right' ? 'sm:flex-row-reverse' : '' }} items-start sm:items-center gap-6">
                        <div class="absolute left-4 sm:left-1/2 w-4 h-4 rounded-full bg-gold-600 border-4 border-navy-950 sm:-translate-x-1/2 top-6 sm:top-auto z-10"></div>

                        <div class="sm:w-1/2 {{ $event['side'] === 'right' ? 'sm:pl-12' : 'sm:pr-12 sm:text-right' }} pl-10 sm:pl-0">
                            <div class="bg-navy-900/80 border border-navy-800 rounded-xl p-5 hover:border-gold-600/40 transition-all group">
                                <div class="flex items-center gap-2 mb-3 {{ $event['side'] === 'right' ? '' : 'sm:justify-end' }}">
                                    <span class="px-2.5 py-0.5 rounded-full text-xs font-bold {{ $event['type_color'] }}">{{ $event['type'] }}</span>
                                    <span class="text-gold-600 text-xs font-semibold">{{ $event['date'] }}</span>
                                </div>
                                <h4 class="font-serif font-bold text-white text-base mb-1 group-hover:text-gold-400 transition-colors">{{ $event['title'] }}</h4>
                                <p class="text-gold-600/70 text-xs mb-2 flex items-center gap-1 {{ $event['side'] === 'right' ? '' : 'sm:justify-end' }}">
                                    <svg class="w-3.5 h-3.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    {{ $event['venue'] }}
                                </p>
                                <p class="text-slate-400 text-xs leading-relaxed">{{ $event['desc'] }}</p>
                            </div>
                        </div>

                        <div class="hidden sm:block sm:w-1/2"></div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ====================================================== --}}
    {{-- MEDIA GALLERY PREVIEW                                   --}}
    {{-- ====================================================== --}}
    <section id="media-gallery" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-end justify-between mb-12">
                <div>
                    <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-2 block">Visual Archive</span>
                    <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900">Media Gallery</h2>
                </div>
                <a href="#" class="hidden sm:inline-flex items-center gap-2 text-sm font-semibold text-navy-600 hover:text-gold-600 transition-colors">
                    Full Gallery
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4" style="grid-auto-rows: 160px;">
                @php
                    $gallery = [
                        ['span' => 'col-span-2 row-span-2', 'label' => 'Purbachal Township Groundbreaking', 'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4', 'bg' => 'bg-navy-900'],
                        ['span' => '', 'label' => 'AGM 2025', 'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z', 'bg' => 'bg-[#112d4a]'],
                        ['span' => '', 'label' => 'Sylhet Bridge Completion', 'icon' => 'M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18', 'bg' => 'bg-[#1a3a1a]'],
                        ['span' => '', 'label' => 'LEED Certification Ceremony', 'icon' => 'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z', 'bg' => 'bg-[#2a1a0a]'],
                        ['span' => '', 'label' => 'Leadership Conclave 2026', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z', 'bg' => 'bg-[#1a0a1a]'],
                        ['span' => 'col-span-2', 'label' => 'South Asia Real Estate Expo Pavilion', 'icon' => 'M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z', 'bg' => 'bg-[#0a0a2a]'],
                    ];
                @endphp

                @foreach($gallery as $item)
                <div class="group relative {{ $item['span'] }} {{ $item['bg'] }} rounded-xl overflow-hidden cursor-pointer border border-slate-200 hover:border-gold-600/60 transition-all">
                    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:18px_18px]"></div>
                    <div class="absolute inset-0 flex flex-col items-center justify-center p-4">
                        <svg class="w-10 h-10 text-gold-600/40 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="{{ $item['icon'] }}"/></svg>
                    </div>
                    <div class="absolute inset-0 bg-navy-950/0 group-hover:bg-navy-950/70 transition-all duration-300 flex items-end p-4">
                        <p class="text-white font-semibold text-xs opacity-0 group-hover:opacity-100 transition-all duration-300 translate-y-2 group-hover:translate-y-0">{{ $item['label'] }}</p>
                    </div>
                    <div class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/0 group-hover:bg-white/10 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/></svg>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="text-center mt-8">
                <a href="#" class="inline-flex items-center gap-2 px-6 py-3 border border-navy-300 rounded-sm text-navy-700 text-sm font-semibold hover:bg-navy-900 hover:text-white hover:border-navy-900 transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    Browse Full Media Library
                </a>
            </div>
        </div>
    </section>

    {{-- ====================================================== --}}
    {{-- NEWSLETTER SUBSCRIPTION                                 --}}
    {{-- ====================================================== --}}
    <section id="newsletter" class="py-24 bg-navy-950 relative overflow-hidden">
        <div class="absolute inset-0 opacity-5 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:24px_24px]"></div>
        <div class="absolute left-0 top-0 w-72 h-72 rounded-full bg-gold-600 filter blur-[160px] opacity-10"></div>
        <div class="absolute right-0 bottom-0 w-96 h-96 rounded-full bg-navy-600 filter blur-[120px] opacity-10"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-navy-900 border border-navy-800 mb-8">
                <svg class="w-8 h-8 text-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </div>
            <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-4 block">Never Miss An Update</span>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-white mb-5">Subscribe to Our<br>Corporate Newsletter</h2>
            <p class="text-slate-400 text-sm sm:text-base leading-relaxed max-w-xl mx-auto mb-10">
                Receive curated briefings on KHL's latest projects, financial disclosures, leadership updates, and strategic developments — delivered straight to your inbox, twice a month.
            </p>

            <form id="newsletter-form" action="#" onsubmit="handleNewsletterSubmit(event)" class="max-w-xl mx-auto">
                <div class="flex flex-col sm:flex-row gap-3">
                    <div class="flex-1 relative">
                        <div class="absolute inset-y-0 left-4 flex items-center pointer-events-none">
                            <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/></svg>
                        </div>
                        <input
                            id="newsletter-email"
                            type="email"
                            name="email"
                            placeholder="Enter your corporate email"
                            required
                            class="w-full bg-navy-900 border border-navy-700 rounded-lg pl-11 pr-4 py-4 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-gold-600 focus:ring-1 focus:ring-gold-600/30 transition-all"
                        >
                    </div>
                    <button
                        id="newsletter-btn"
                        type="submit"
                        class="px-8 py-4 bg-gold-600 text-navy-950 font-bold text-sm uppercase tracking-wider rounded-lg hover:bg-gold-500 transition-all shadow-lg hover:shadow-gold-600/20"
                    >
                        Subscribe
                    </button>
                </div>
                <p id="newsletter-success" class="hidden mt-4 text-green-400 text-sm font-semibold">
                    You have successfully subscribed to the KHL corporate newsletter.
                </p>
                <p class="mt-4 text-slate-500 text-xs">No spam. Unsubscribe at any time. By subscribing, you agree to our Privacy Policy.</p>
            </form>

            <div class="mt-12 pt-12 border-t border-navy-800 grid grid-cols-3 gap-6">
                @foreach([['4,800+', 'Subscribers'], ['2x', 'Monthly Issues'], ['100%', 'No Spam']] as $stat)
                <div>
                    <p class="text-2xl font-serif font-bold text-gold-600">{{ $stat[0] }}</p>
                    <p class="text-slate-400 text-xs mt-1">{{ $stat[1] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>
    function handleNewsletterSubmit(e) {
        e.preventDefault();
        var btn = document.getElementById('newsletter-btn');
        var success = document.getElementById('newsletter-success');
        var emailInput = document.getElementById('newsletter-email');

        btn.textContent = 'Subscribing...';
        btn.disabled = true;

        setTimeout(function() {
            btn.textContent = 'Subscribed!';
            btn.classList.remove('bg-gold-600', 'hover:bg-gold-500');
            btn.classList.add('bg-green-600');
            success.classList.remove('hidden');
            emailInput.value = '';
        }, 800);
    }

    document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
            var href = this.getAttribute('href');
            if (href && href.length > 1) {
                var target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            }
        });
    });
</script>
@endpush
