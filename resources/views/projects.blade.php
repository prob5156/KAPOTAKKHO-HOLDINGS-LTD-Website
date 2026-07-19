@extends('layouts.app')

@section('title', 'Projects | Kapotakkhho Holdings Ltd.')

@section('content')

    {{-- =============================================
         HERO BANNER
    ============================================== --}}
    <section class="relative min-h-[42vh] flex items-center bg-navy-950 overflow-hidden py-20">
        {{-- Decorative dot pattern --}}
        <div class="absolute inset-0 z-0 opacity-10">
            <div class="absolute inset-0 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:24px_24px]"></div>
        </div>
        <div class="absolute -right-20 -top-20 w-80 h-80 rounded-full bg-gold-600 filter blur-[120px] opacity-20 z-0"></div>
        <div class="absolute -left-20 bottom-0 w-64 h-64 rounded-full bg-navy-500 filter blur-[100px] opacity-20 z-0"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-navy-900 border border-navy-800 text-gold-600 text-xs font-semibold uppercase tracking-wider mb-6">
                        <span class="w-1.5 h-1.5 rounded-full bg-gold-600 animate-ping"></span>
                        Corporate Portfolio
                    </span>
                    <h1 class="text-4xl sm:text-5xl font-serif text-white font-bold leading-tight mb-4">
                        Our <span class="text-gold-600">Projects</span>
                    </h1>
                    <p class="text-slate-300 text-base sm:text-lg max-w-xl leading-relaxed">
                        Explore our landmark achievements — from premier real estate towers to national infrastructure and sustainable agro-parks across Bangladesh.
                    </p>
                </div>

                {{-- Quick stats strip --}}
                <div class="grid grid-cols-3 gap-4">
                    <div class="bg-navy-900 border border-navy-800 rounded-xl p-5 text-center">
                        <span class="text-gold-600 font-serif font-bold text-3xl block">150+</span>
                        <span class="text-slate-400 text-xs uppercase tracking-widest mt-1 block">Total Projects</span>
                    </div>
                    <div class="bg-navy-900 border border-navy-800 rounded-xl p-5 text-center">
                        <span class="text-gold-600 font-serif font-bold text-3xl block">12</span>
                        <span class="text-slate-400 text-xs uppercase tracking-widest mt-1 block">Ongoing</span>
                    </div>
                    <div class="bg-navy-900 border border-navy-800 rounded-xl p-5 text-center">
                        <span class="text-gold-600 font-serif font-bold text-3xl block">6+</span>
                        <span class="text-slate-400 text-xs uppercase tracking-widest mt-1 block">Sectors</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- =============================================
         PROJECT CATEGORIES FILTER BAR
    ============================================== --}}
    <section class="bg-white border-b border-slate-200 sticky top-[80px] z-40 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center gap-2 overflow-x-auto py-4 scrollbar-hide" id="category-filter">
                <button data-filter="all" onclick="filterProjects('all')" class="filter-btn active-filter shrink-0 px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition-all duration-200 bg-navy-900 text-white">
                    All Projects
                </button>
                <button data-filter="real-estate" onclick="filterProjects('real-estate')" class="filter-btn shrink-0 px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition-all duration-200 bg-slate-100 text-slate-600 hover:bg-navy-900 hover:text-white">
                    Real Estate
                </button>
                <button data-filter="infrastructure" onclick="filterProjects('infrastructure')" class="filter-btn shrink-0 px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition-all duration-200 bg-slate-100 text-slate-600 hover:bg-navy-900 hover:text-white">
                    Infrastructure
                </button>
                <button data-filter="construction" onclick="filterProjects('construction')" class="filter-btn shrink-0 px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition-all duration-200 bg-slate-100 text-slate-600 hover:bg-navy-900 hover:text-white">
                    Construction
                </button>
                <button data-filter="agriculture" onclick="filterProjects('agriculture')" class="filter-btn shrink-0 px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition-all duration-200 bg-slate-100 text-slate-600 hover:bg-navy-900 hover:text-white">
                    Agriculture
                </button>
                <button data-filter="technology" onclick="filterProjects('technology')" class="filter-btn shrink-0 px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition-all duration-200 bg-slate-100 text-slate-600 hover:bg-navy-900 hover:text-white">
                    Technology
                </button>
                <button data-filter="trading" onclick="filterProjects('trading')" class="filter-btn shrink-0 px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wider transition-all duration-200 bg-slate-100 text-slate-600 hover:bg-navy-900 hover:text-white">
                    Trading
                </button>
            </div>
        </div>
    </section>

    {{-- =============================================
         FEATURED PROJECTS
    ============================================== --}}
    <section class="py-20 bg-white" id="featured-projects">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="mb-12">
                <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Signature Works</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900">Featured Projects</h2>
            </div>

            {{-- Featured Large Card --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8" id="featured-grid">

                {{-- Featured Card 1 - Large --}}
                <div onclick="openDrawer({
                    badge: 'Featured · Completed',
                    title: 'Kapotakkhho Imperial Tower',
                    location: 'Dhaka, Bangladesh',
                    linkText: 'Inquire About Property',
                    linkUrl: '{{ route('contact') }}',
                    content: `
                        <p class='text-slate-600 mb-4'>A 24-storied luxury commercial high-rise integrating structural safety parameters, automated fire systems, and double-glazed low-E facades in the heart of Dhaka.</p>
                        <div class='p-4 bg-slate-50 border border-slate-200 rounded-lg space-y-2 text-xs mb-4'>
                            <div class='flex justify-between'><span class='text-slate-500'>Location:</span><span class='text-slate-900 font-bold'>Dhaka, Bangladesh</span></div>
                            <div class='flex justify-between'><span class='text-slate-500'>Height:</span><span class='text-slate-900 font-bold'>24 Storeys</span></div>
                            <div class='flex justify-between'><span class='text-slate-500'>Certification:</span><span class='text-emerald-700 font-bold'>ISO & Seismic Certified</span></div>
                        </div>
                    `
                })" class="project-card real-estate group relative rounded-2xl overflow-hidden bg-navy-950 border border-navy-800 shadow-xl h-[420px] flex flex-col justify-end transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 cursor-pointer">
                    {{-- Image Placeholder --}}
                    <div class="absolute inset-0 bg-gradient-to-br from-navy-800 to-navy-950 flex items-center justify-center">
                        <span class="font-serif text-[120px] font-black text-navy-700 select-none leading-none">K</span>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-navy-950 via-navy-950/60 to-transparent"></div>

                    {{-- Badge --}}
                    <span class="absolute top-5 left-5 px-3 py-1 bg-gold-600 text-navy-950 text-xxs font-bold uppercase tracking-wider rounded-sm">Featured</span>
                    <span class="absolute top-5 right-5 px-3 py-1 bg-green-500/90 text-white text-xxs font-bold uppercase tracking-wider rounded-sm">Completed</span>

                    <div class="relative z-10 p-8">
                        <span class="text-gold-600 text-xs uppercase tracking-widest font-semibold">Real Estate · Dhaka</span>
                        <h3 class="text-2xl font-serif font-bold text-white mt-2 mb-3 group-hover:text-gold-600 transition-colors">Kapotakkhho Imperial Tower</h3>
                        <p class="text-slate-300 text-sm leading-relaxed line-clamp-2">A 24-storied luxury commercial high-rise integrating structural safety parameters, automated fire systems, and double-glazed low-E facades in the heart of Dhaka.</p>
                    </div>
                </div>

                {{-- Right column: two smaller featured cards --}}
                <div class="flex flex-col gap-8">

                    {{-- Featured Card 2 --}}
                    <div onclick="openDrawer({
                        badge: 'Infrastructure · Completed',
                        title: 'Meghna Bridge Expansion',
                        location: 'Narayanganj, Bangladesh',
                        linkText: 'Inquire About Infrastructure',
                        linkUrl: '{{ route('contact') }}',
                        content: `
                            <p class='text-slate-600 mb-4'>Executing critical structural girders and dynamic load tests for the national bridge expansion initiative to handle heavy cargo vehicles.</p>
                        `
                    })" class="project-card infrastructure group relative rounded-2xl overflow-hidden bg-navy-950 border border-navy-800 shadow-xl h-[196px] flex flex-col justify-end transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 cursor-pointer">
                        <div class="absolute inset-0 bg-gradient-to-br from-navy-800 to-navy-950 flex items-center justify-center">
                            <span class="font-serif text-[80px] font-black text-navy-700 select-none leading-none">M</span>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-navy-950 via-navy-950/50 to-transparent"></div>
                        <span class="absolute top-4 right-4 px-2.5 py-1 bg-green-500/90 text-white text-xxs font-bold uppercase tracking-wider rounded-sm">Completed</span>
                        <div class="relative z-10 p-6">
                            <span class="text-gold-600 text-xs uppercase tracking-widest font-semibold">Infrastructure · Narayanganj</span>
                            <h3 class="text-lg font-serif font-bold text-white mt-1 group-hover:text-gold-600 transition-colors">Meghna Bridge Expansion</h3>
                        </div>
                    </div>

                    {{-- Featured Card 3 --}}
                    <div onclick="openDrawer({
                        badge: 'Agriculture · Completed',
                        title: 'Green Horizon Agro Park',
                        location: 'Jessore, Bangladesh',
                        linkText: 'Inquire About Agro Park',
                        linkUrl: '{{ route('contact') }}',
                        content: `
                            <p class='text-slate-600 mb-4'>Expanding local agribusiness capabilities with organic processing facilities, high capacity cold storage units, and logistics centers in Jessore.</p>
                        `
                    })" class="project-card agriculture group relative rounded-2xl overflow-hidden bg-navy-950 border border-navy-800 shadow-xl h-[196px] flex flex-col justify-end transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 cursor-pointer">
                        <div class="absolute inset-0 bg-gradient-to-br from-navy-800 to-navy-950 flex items-center justify-center">
                            <span class="font-serif text-[80px] font-black text-navy-700 select-none leading-none">G</span>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-navy-950 via-navy-950/50 to-transparent"></div>
                        <span class="absolute top-4 right-4 px-2.5 py-1 bg-green-500/90 text-white text-xxs font-bold uppercase tracking-wider rounded-sm">Completed</span>
                        <div class="relative z-10 p-6">
                            <span class="text-gold-600 text-xs uppercase tracking-widest font-semibold">Agriculture · Jessore</span>
                            <h3 class="text-lg font-serif font-bold text-white mt-1 group-hover:text-gold-600 transition-colors">Green Horizon Agro Park</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- =============================================
         ONGOING PROJECTS
    ============================================== --}}
    <section class="py-20 bg-[#f4f6f9]" id="ongoing-projects">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-4 mb-12">
                <div>
                    <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Active Development</span>
                    <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900">Ongoing Projects</h2>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-amber-500 animate-pulse inline-block"></span>
                    <span class="text-slate-600 text-sm font-medium">12 Projects in Progress</span>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="ongoing-grid">

                @php
                $ongoingProjects = [
                    [
                        'letter' => 'B', 'category' => 'real-estate', 'badge_label' => 'Real Estate',
                        'status' => 'ongoing', 'status_label' => 'In Progress', 'progress' => 68,
                        'location' => 'Gulshan, Dhaka', 'name' => 'Banani Premium Residences',
                        'desc' => 'A luxury residential complex with 18 storeys, featuring rooftop amenities, a sky lounge, and modern smart-home integrations.'
                    ],
                    [
                        'letter' => 'D', 'category' => 'infrastructure', 'badge_label' => 'Infrastructure',
                        'status' => 'ongoing', 'status_label' => 'In Progress', 'progress' => 45,
                        'location' => 'Chattogram', 'name' => 'Deep Sea Port Access Road',
                        'desc' => 'Constructing a 22km arterial expressway connecting the deep-sea port to the national highway network with dual carriageways.'
                    ],
                    [
                        'letter' => 'S', 'category' => 'technology', 'badge_label' => 'Technology',
                        'status' => 'ongoing', 'status_label' => 'In Progress', 'progress' => 80,
                        'location' => 'Dhaka', 'name' => 'Smart City Command Center',
                        'desc' => 'Deploying an IoT-enabled urban management platform with real-time surveillance, traffic analytics, and civic service dashboards.'
                    ],
                    [
                        'letter' => 'R', 'category' => 'real-estate', 'badge_label' => 'Real Estate',
                        'status' => 'ongoing', 'status_label' => 'In Progress', 'progress' => 30,
                        'location' => 'Uttara, Dhaka', 'name' => 'Riverside Commercial Hub',
                        'desc' => 'A mixed-use commercial complex with Grade-A office spaces, retail podium, and underground parking facilities.'
                    ],
                    [
                        'letter' => 'A', 'category' => 'agriculture', 'badge_label' => 'Agriculture',
                        'status' => 'ongoing', 'status_label' => 'In Progress', 'progress' => 55,
                        'location' => 'Rajshahi', 'name' => 'AgroPrime Processing Unit',
                        'desc' => 'Establishing a large-scale mango and vegetable processing plant with cold chain infrastructure serving northern Bangladesh.'
                    ],
                    [
                        'letter' => 'P', 'category' => 'construction', 'badge_label' => 'Construction',
                        'status' => 'ongoing', 'status_label' => 'In Progress', 'progress' => 20,
                        'location' => 'Sylhet', 'name' => 'Purbachal Civic Center',
                        'desc' => 'A government-contracted civic multiplex featuring administrative offices, public hall, and community health facilities.'
                    ],
                ];
                @endphp

                @foreach($ongoingProjects as $project)
                <div onclick="openDrawer({
                    badge: '{{ addslashes($project['badge_label']) }} · {{ addslashes($project['status_label']) }}',
                    title: '{{ addslashes($project['name']) }}',
                    location: '{{ addslashes($project['location']) }}',
                    linkText: 'Inquire About This Project',
                    linkUrl: '{{ route('contact') }}',
                    content: `
                        <p class='text-slate-600 mb-4'>{{ addslashes($project['desc']) }}</p>
                        <div class='grid grid-cols-2 gap-3 mb-6 text-xs'>
                            <div class='p-3 bg-slate-50 border border-slate-200 rounded-lg'><span class='text-slate-500 block font-semibold mb-1'>Location:</span><span class='text-slate-900 font-bold'>{{ addslashes($project['location']) }}</span></div>
                            <div class='p-3 bg-slate-50 border border-slate-200 rounded-lg'><span class='text-slate-500 block font-semibold mb-1'>Progress:</span><span class='text-gold-600 font-bold'>{{ $project['progress'] }}% Complete</span></div>
                        </div>
                        <h4 class='text-slate-800 font-bold text-xs uppercase tracking-wider mb-2'>Project Scope & Specs</h4>
                        <p class='text-xs text-slate-500 leading-relaxed'>Managed under Kapotakkhho corporate quality standards with strict adherence to environmental clearances, safety protocols, and certified civil engineering parameters.</p>
                    `
                })" class="project-card {{ $project['category'] }} bg-white rounded-xl overflow-hidden shadow-md border border-slate-200 group hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col cursor-pointer">
                    {{-- Image Placeholder --}}
                    <div class="relative h-48 bg-navy-950 overflow-hidden flex items-center justify-center shrink-0">
                        <span class="font-serif text-7xl font-black text-navy-800 select-none">{{ $project['letter'] }}</span>
                        <div class="absolute inset-0 bg-gradient-to-t from-navy-950/80 via-transparent to-transparent"></div>
                        <span class="absolute top-3 left-3 px-2.5 py-1 bg-gold-600 text-navy-950 text-xxs font-bold uppercase tracking-wider rounded-sm">{{ $project['badge_label'] }}</span>
                        <span class="absolute top-3 right-3 px-2.5 py-1 bg-amber-500 text-white text-xxs font-bold uppercase tracking-wider rounded-sm flex items-center gap-1">
                            <span class="w-1.5 h-1.5 rounded-full bg-white animate-pulse"></span>
                            {{ $project['status_label'] }}
                        </span>
                    </div>

                    {{-- Card Body --}}
                    <div class="p-6 flex flex-col flex-1">
                        <span class="text-slate-400 text-xs uppercase tracking-wider">{{ $project['location'] }}</span>
                        <h3 class="text-base font-bold text-navy-900 mt-1 mb-2 group-hover:text-gold-600 transition-colors leading-snug">{{ $project['name'] }}</h3>
                        <p class="text-slate-600 text-xs leading-relaxed flex-1">{{ $project['desc'] }}</p>

                        {{-- Progress Bar --}}
                        <div class="mt-4 pt-4 border-t border-slate-100">
                            <div class="flex justify-between items-center mb-1.5">
                                <span class="text-xs text-slate-500 font-medium">Completion Progress</span>
                                <span class="text-xs font-bold text-navy-900">{{ $project['progress'] }}%</span>
                            </div>
                            <div class="w-full bg-slate-100 h-1.5 rounded-full overflow-hidden">
                                <div class="bg-gold-600 h-full rounded-full transition-all duration-1000" style="width: {{ $project['progress'] }}%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    {{-- =============================================
         COMPLETED PROJECTS
    ============================================== --}}
    <section class="py-20 bg-navy-950 text-white" id="completed-projects">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="mb-12">
                <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Delivered Excellence</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold">Completed Projects</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6" id="completed-grid">

                @php
                $completedProjects = [
                    [
                        'letter' => 'K', 'category' => 'real-estate', 'badge_label' => 'Real Estate',
                        'location' => 'Dhaka', 'name' => 'Kapotakkhho Imperial Tower',
                        'year' => '2022', 'desc' => '24-storey Grade-A commercial tower with automated systems and low-E facades.'
                    ],
                    [
                        'letter' => 'M', 'category' => 'infrastructure', 'badge_label' => 'Infrastructure',
                        'location' => 'Narayanganj', 'name' => 'Meghna Bridge Expansion',
                        'year' => '2021', 'desc' => 'Critical bridge widening to support dual carriageway heavy cargo transportation.'
                    ],
                    [
                        'letter' => 'G', 'category' => 'agriculture', 'badge_label' => 'Agriculture',
                        'location' => 'Jessore', 'name' => 'Green Horizon Agro Park',
                        'year' => '2023', 'desc' => 'Organic processing plant with 10,000-ton cold storage and distribution network.'
                    ],
                    [
                        'letter' => 'C', 'category' => 'construction', 'badge_label' => 'Construction',
                        'location' => 'Cumilla', 'name' => 'Central Business District Phase I',
                        'year' => '2020', 'desc' => 'Mixed-use commercial development with structured parking and retail spaces.'
                    ],
                    [
                        'letter' => 'N', 'category' => 'infrastructure', 'badge_label' => 'Infrastructure',
                        'location' => 'Bogura', 'name' => 'Northern Grid Power Station',
                        'year' => '2019', 'desc' => '60MW power distribution facility serving Rajshahi division municipalities.'
                    ],
                    [
                        'letter' => 'T', 'category' => 'trading', 'badge_label' => 'Trading',
                        'location' => 'Mongla Port', 'name' => 'Trade & Logistics Hub',
                        'year' => '2021', 'desc' => 'Modern bonded warehouse and import clearing facility at Mongla Port.'
                    ],
                    [
                        'letter' => 'E', 'category' => 'technology', 'badge_label' => 'Technology',
                        'location' => 'Dhaka', 'name' => 'Enterprise ERP Platform',
                        'year' => '2022', 'desc' => 'Nationwide ERP rollout for 3 government agencies with custom reporting tools.'
                    ],
                    [
                        'letter' => 'H', 'category' => 'real-estate', 'badge_label' => 'Real Estate',
                        'location' => 'Chittagong', 'name' => 'Hilltop Executive Residences',
                        'year' => '2023', 'desc' => '12-storey premium residential tower with sea-view apartments and clubhouse.'
                    ],
                ];
                @endphp

                @foreach($completedProjects as $project)
                <div onclick="openDrawer({
                    badge: '{{ addslashes($project['badge_label']) }} · {{ $project['year'] }}',
                    title: '{{ addslashes($project['name']) }}',
                    location: '{{ addslashes($project['location']) }}',
                    linkText: 'Inquire About Project',
                    linkUrl: '{{ route('contact') }}',
                    content: `
                        <p class='text-slate-600 mb-4'>{{ addslashes($project['desc']) }}</p>
                        <div class='p-4 bg-slate-50 border border-slate-200 rounded-lg space-y-2 text-xs mb-4'>
                            <div class='flex justify-between'><span class='text-slate-500'>Completed Year:</span><span class='text-slate-900 font-bold'>{{ $project['year'] }}</span></div>
                            <div class='flex justify-between'><span class='text-slate-500'>Location:</span><span class='text-slate-900 font-bold'>{{ addslashes($project['location']) }}</span></div>
                        </div>
                    `
                })" class="project-card {{ $project['category'] }} bg-navy-900 border border-navy-800 rounded-xl overflow-hidden group hover:border-gold-600/40 hover:-translate-y-1 transition-all duration-300 flex flex-col cursor-pointer">
                    {{-- Image Placeholder --}}
                    <div class="relative h-36 bg-navy-800 overflow-hidden flex items-center justify-center shrink-0">
                        <span class="font-serif text-6xl font-black text-navy-700 select-none">{{ $project['letter'] }}</span>
                        <div class="absolute inset-0 bg-gradient-to-t from-navy-900/80 to-transparent"></div>
                        <span class="absolute top-2.5 left-2.5 px-2 py-0.5 bg-gold-600 text-navy-950 text-xxs font-bold uppercase tracking-wider rounded-sm">{{ $project['badge_label'] }}</span>
                        <span class="absolute top-2.5 right-2.5 px-2 py-0.5 bg-green-500/90 text-white text-xxs font-bold uppercase tracking-wider rounded-sm">{{ $project['year'] }}</span>
                    </div>

                    <div class="p-5 flex flex-col flex-1">
                        <span class="text-slate-500 text-xs uppercase tracking-wider">{{ $project['location'] }}</span>
                        <h3 class="text-sm font-bold text-white mt-1 mb-2 group-hover:text-gold-600 transition-colors leading-snug">{{ $project['name'] }}</h3>
                        <p class="text-slate-400 text-xs leading-relaxed flex-1">{{ $project['desc'] }}</p>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    {{-- =============================================
         COMPANY ACHIEVEMENTS
    ============================================== --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Milestones</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-4">Our Achievements</h2>
                <p class="text-slate-600 text-sm sm:text-base">
                    Decades of consistent delivery have built a portfolio of achievements that benchmark our corporate excellence.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                {{-- Achievement 1 --}}
                <div class="flex gap-5 p-6 border border-slate-200 rounded-xl hover:border-gold-600/30 hover:shadow-md transition-all duration-300 group">
                    <div class="w-12 h-12 rounded-lg bg-navy-50 flex items-center justify-center shrink-0 border border-navy-100 group-hover:bg-gold-600 transition-colors">
                        <svg class="w-6 h-6 text-navy-900 group-hover:text-navy-950 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-navy-900 font-bold text-base mb-1">ISO 9001:2015 Certified</h3>
                        <p class="text-slate-600 text-xs leading-relaxed">Internationally recognized quality management certification across all engineering and construction activities.</p>
                    </div>
                </div>

                {{-- Achievement 2 --}}
                <div class="flex gap-5 p-6 border border-slate-200 rounded-xl hover:border-gold-600/30 hover:shadow-md transition-all duration-300 group">
                    <div class="w-12 h-12 rounded-lg bg-navy-50 flex items-center justify-center shrink-0 border border-navy-100 group-hover:bg-gold-600 transition-colors">
                        <svg class="w-6 h-6 text-navy-900 group-hover:text-navy-950 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-navy-900 font-bold text-base mb-1">National Real Estate Award 2023</h3>
                        <p class="text-slate-600 text-xs leading-relaxed">Awarded Best Developer of the Year by the Real Estate & Housing Association of Bangladesh (REHAB).</p>
                    </div>
                </div>

                {{-- Achievement 3 --}}
                <div class="flex gap-5 p-6 border border-slate-200 rounded-xl hover:border-gold-600/30 hover:shadow-md transition-all duration-300 group">
                    <div class="w-12 h-12 rounded-lg bg-navy-50 flex items-center justify-center shrink-0 border border-navy-100 group-hover:bg-gold-600 transition-colors">
                        <svg class="w-6 h-6 text-navy-900 group-hover:text-navy-950 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-navy-900 font-bold text-base mb-1">Green Building Initiative</h3>
                        <p class="text-slate-600 text-xs leading-relaxed">Three LEED-certified buildings in our portfolio, demonstrating commitment to sustainable and eco-friendly construction.</p>
                    </div>
                </div>

                {{-- Achievement 4 --}}
                <div class="flex gap-5 p-6 border border-slate-200 rounded-xl hover:border-gold-600/30 hover:shadow-md transition-all duration-300 group">
                    <div class="w-12 h-12 rounded-lg bg-navy-50 flex items-center justify-center shrink-0 border border-navy-100 group-hover:bg-gold-600 transition-colors">
                        <svg class="w-6 h-6 text-navy-900 group-hover:text-navy-950 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-navy-900 font-bold text-base mb-1">5,000+ Families Housed</h3>
                        <p class="text-slate-600 text-xs leading-relaxed">Delivered residential units to over five thousand families, making quality urban living accessible across Bangladesh.</p>
                    </div>
                </div>

                {{-- Achievement 5 --}}
                <div class="flex gap-5 p-6 border border-slate-200 rounded-xl hover:border-gold-600/30 hover:shadow-md transition-all duration-300 group">
                    <div class="w-12 h-12 rounded-lg bg-navy-50 flex items-center justify-center shrink-0 border border-navy-100 group-hover:bg-gold-600 transition-colors">
                        <svg class="w-6 h-6 text-navy-900 group-hover:text-navy-950 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-navy-900 font-bold text-base mb-1">BDT 3,500 Crore Project Value</h3>
                        <p class="text-slate-600 text-xs leading-relaxed">Cumulative project value delivered across public and private sector contracts, reflecting financial scale and trust.</p>
                    </div>
                </div>

                {{-- Achievement 6 --}}
                <div class="flex gap-5 p-6 border border-slate-200 rounded-xl hover:border-gold-600/30 hover:shadow-md transition-all duration-300 group">
                    <div class="w-12 h-12 rounded-lg bg-navy-50 flex items-center justify-center shrink-0 border border-navy-100 group-hover:bg-gold-600 transition-colors">
                        <svg class="w-6 h-6 text-navy-900 group-hover:text-navy-950 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-navy-900 font-bold text-base mb-1">98% On-Time Delivery</h3>
                        <p class="text-slate-600 text-xs leading-relaxed">Industry-leading project completion rate, with 98% of contracted timelines met or exceeded over the past decade.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- =============================================
         STATISTICS STRIP
    ============================================== --}}
    <section class="py-16 bg-navy-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:16px_16px]"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-10 text-center">
                <div>
                    <span class="text-4xl sm:text-5xl font-serif font-bold text-gold-600 block mb-2">150+</span>
                    <span class="text-slate-400 text-xs uppercase tracking-widest">Projects Delivered</span>
                </div>
                <div>
                    <span class="text-4xl sm:text-5xl font-serif font-bold text-gold-600 block mb-2">12</span>
                    <span class="text-slate-400 text-xs uppercase tracking-widest">Active Sites</span>
                </div>
                <div>
                    <span class="text-4xl sm:text-5xl font-serif font-bold text-gold-600 block mb-2">8</span>
                    <span class="text-slate-400 text-xs uppercase tracking-widest">Divisions</span>
                </div>
                <div>
                    <span class="text-4xl sm:text-5xl font-serif font-bold text-gold-600 block mb-2">25+</span>
                    <span class="text-slate-400 text-xs uppercase tracking-widest">Years of Excellence</span>
                </div>
            </div>
        </div>
    </section>

    {{-- =============================================
         CALL TO ACTION
    ============================================== --}}
    <section class="py-20 bg-gold-600 text-navy-950">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-serif font-bold mb-4">Have a Project in Mind?</h2>
            <p class="text-navy-800 text-lg mb-8 max-w-2xl mx-auto font-medium">
                Let's collaborate on your next landmark. Our expert teams are ready to assess, design, and deliver your vision with precision.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ url('/#contact') }}" class="inline-block px-8 py-4 rounded-sm bg-navy-950 text-white font-bold hover:bg-navy-900 transition-all text-sm uppercase tracking-wider shadow-xl">
                    Start a Conversation
                </a>
                <a href="{{ route('about') }}" class="inline-block px-8 py-4 rounded-sm bg-transparent border-2 border-navy-900 text-navy-900 font-bold hover:bg-navy-900 hover:text-white transition-all text-sm uppercase tracking-wider">
                    Learn About Us
                </a>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>
    // ─── Project Category Filter ───────────────────────────────────
    function filterProjects(category) {
        // Update button styles
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.classList.remove('active-filter', 'bg-navy-900', 'text-white');
            btn.classList.add('bg-slate-100', 'text-slate-600');
        });
        const activeBtn = document.querySelector(`[data-filter="${category}"]`);
        if (activeBtn) {
            activeBtn.classList.add('active-filter', 'bg-navy-900', 'text-white');
            activeBtn.classList.remove('bg-slate-100', 'text-slate-600');
        }

        // Show/hide project cards
        document.querySelectorAll('.project-card').forEach(card => {
            if (category === 'all' || card.classList.contains(category)) {
                card.style.display = '';
                card.style.opacity = '0';
                card.style.transform = 'translateY(16px)';
                setTimeout(() => {
                    card.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, 10);
            } else {
                card.style.transition = 'opacity 0.2s ease';
                card.style.opacity = '0';
                setTimeout(() => { card.style.display = 'none'; }, 200);
            }
        });
    }
</script>
@endpush
