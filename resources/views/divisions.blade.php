@extends('layouts.app')

@section('title', 'Business Divisions | Kapotakkhho Holdings Ltd.')

@section('content')

    {{-- =============================================
         HERO BANNER
    ============================================== --}}
    <section class="relative min-h-[45vh] flex items-center bg-navy-950 overflow-hidden py-20">
        {{-- Dot grid --}}
        <div class="absolute inset-0 z-0 opacity-10">
            <div class="absolute inset-0 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:24px_24px]"></div>
        </div>
        <div class="absolute -right-20 top-0 w-96 h-96 rounded-full bg-gold-600 filter blur-[140px] opacity-15 z-0"></div>
        <div class="absolute left-0 -bottom-20 w-72 h-72 rounded-full bg-navy-500 filter blur-[100px] opacity-20 z-0"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                {{-- Left: title block --}}
                <div>
                    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-navy-900 border border-navy-800 text-gold-600 text-xs font-semibold uppercase tracking-wider mb-6">
                        <span class="w-1.5 h-1.5 rounded-full bg-gold-600 animate-ping"></span>
                        Corporate Structure
                    </span>
                    <h1 class="text-4xl sm:text-5xl font-serif text-white font-bold leading-tight mb-5">
                        Our Business <span class="text-gold-600">Divisions</span>
                    </h1>
                    <p class="text-slate-300 text-base sm:text-lg max-w-xl leading-relaxed">
                        Six strategically positioned business verticals driving sustainable growth, infrastructure excellence, and economic contribution across Bangladesh.
                    </p>
                </div>

                {{-- Right: 6-pill icon strip --}}
                <div class="hidden lg:grid grid-cols-3 gap-4">
                    @php
                    $pillData = [
                        ['icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4', 'label' => 'Real Estate'],
                        ['icon' => 'M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'label' => 'Construction'],
                        ['icon' => 'M12 19l9 2-9-18-9 18 9-2zm0 0v-8', 'label' => 'Infrastructure'],
                        ['icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'label' => 'Trading'],
                        ['icon' => 'M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m0-12.728l.707.707m12.728 12.728l.707-.707M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'label' => 'Agriculture'],
                        ['icon' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'label' => 'Technology'],
                    ];
                    @endphp
                    @foreach($pillData as $pill)
                    <div class="bg-navy-900 border border-navy-800 rounded-xl p-4 flex flex-col items-center gap-2 text-center hover:border-gold-600/50 transition-colors">
                        <div class="w-10 h-10 rounded-lg bg-navy-800 flex items-center justify-center">
                            <svg class="w-5 h-5 text-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $pill['icon'] }}"></path>
                            </svg>
                        </div>
                        <span class="text-white text-xs font-semibold leading-tight">{{ $pill['label'] }}</span>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>

    {{-- =============================================
         INTRODUCTION
    ============================================== --}}
    <section class="py-16 bg-white border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Our Portfolio</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-6">A Diversified Engine of Growth</h2>
                <p class="text-slate-600 text-base sm:text-lg leading-relaxed mb-8">
                    Kapotakkhho Holdings Ltd. operates across six distinct verticals, each a leader in its respective industry. This diversification not only shields our group from sector-specific risks but also creates powerful synergies that amplify collective performance.
                </p>
                {{-- Key numbers row --}}
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-10">
                    <div class="text-center p-4 bg-[#f4f6f9] rounded-xl">
                        <span class="text-3xl font-serif font-bold text-navy-900 block">6</span>
                        <span class="text-slate-500 text-xs uppercase tracking-wider mt-1 block">Core Divisions</span>
                    </div>
                    <div class="text-center p-4 bg-[#f4f6f9] rounded-xl">
                        <span class="text-3xl font-serif font-bold text-navy-900 block">25+</span>
                        <span class="text-slate-500 text-xs uppercase tracking-wider mt-1 block">Years Operating</span>
                    </div>
                    <div class="text-center p-4 bg-[#f4f6f9] rounded-xl">
                        <span class="text-3xl font-serif font-bold text-navy-900 block">1,200+</span>
                        <span class="text-slate-500 text-xs uppercase tracking-wider mt-1 block">Professionals</span>
                    </div>
                    <div class="text-center p-4 bg-[#f4f6f9] rounded-xl">
                        <span class="text-3xl font-serif font-bold text-navy-900 block">64</span>
                        <span class="text-slate-500 text-xs uppercase tracking-wider mt-1 block">Districts Reached</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- =============================================
         SIX DIVISION CARDS
    ============================================== --}}
    <section class="py-24 bg-[#f4f6f9]" id="all-divisions">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">What We Do</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-4">Our Six Core Divisions</h2>
                <p class="text-slate-600 text-sm sm:text-base">
                    Each division is independently structured with dedicated leadership, specialized resources, and clearly defined performance targets.
                </p>
            </div>

            @php
            $divisions = [
                [
                    'id'          => 'real-estate',
                    'color'       => 'from-navy-900 to-navy-950',
                    'accent'      => 'bg-blue-900/40 border-blue-700/40',
                    'number'      => '01',
                    'name'        => 'Real Estate & Properties',
                    'tagline'     => 'Kapotakkhho Properties Ltd.',
                    'icon'        => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                    'description' => 'Crafting premium residential and commercial developments that redefine urban living standards. From luxury high-rises to planned townships, we deliver architectural excellence that stands the test of time.',
                    'services'    => ['Luxury Residential Development', 'Grade-A Commercial Towers', 'Planned Township Projects', 'Property Management', 'Real Estate Investment Consulting'],
                    'projects'    => 58,
                    'highlight'   => '5,000+ families housed',
                ],
                [
                    'id'          => 'construction',
                    'color'       => 'from-slate-800 to-slate-900',
                    'accent'      => 'bg-slate-700/30 border-slate-600/40',
                    'number'      => '02',
                    'name'        => 'Civil Engineering & Construction',
                    'tagline'     => 'Kapotakkhho Engineering Ltd.',
                    'icon'        => 'M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                    'description' => 'Delivering complex civil contracting, structural engineering, and construction management solutions for both private and public sector clients across Bangladesh.',
                    'services'    => ['Civil & Structural Engineering', 'General Contracting', 'Project Management', 'Design-Build Delivery', 'Construction Material Supply'],
                    'projects'    => 42,
                    'highlight'   => 'ISO 9001:2015 Certified',
                ],
                [
                    'id'          => 'infrastructure',
                    'color'       => 'from-navy-900 to-navy-950',
                    'accent'      => 'bg-indigo-900/30 border-indigo-700/30',
                    'number'      => '03',
                    'name'        => 'Infrastructure & Utilities',
                    'tagline'     => 'Kapotakkhho Infra Ltd.',
                    'icon'        => 'M12 19l9 2-9-18-9 18 9-2zm0 0v-8',
                    'description' => 'Building the backbone of the nation — arterial roads, bridges, power distribution networks, water treatment facilities, and urban utility systems that connect and empower communities.',
                    'services'    => ['Road & Bridge Construction', 'Power Distribution Systems', 'Water Treatment Plants', 'Urban Utility Networks', 'Government Contract Execution'],
                    'projects'    => 27,
                    'highlight'   => 'BDT 1,200 Cr. in Gov. Contracts',
                ],
                [
                    'id'          => 'trading',
                    'color'       => 'from-slate-800 to-slate-900',
                    'accent'      => 'bg-amber-900/20 border-amber-700/30',
                    'number'      => '04',
                    'name'        => 'Trading & Logistics',
                    'tagline'     => 'Kapotakkhho Global Trade Ltd.',
                    'icon'        => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
                    'description' => 'Managing the full import-export lifecycle, commodity trading, bonded warehousing, and B2B supply chain operations for industrial equipment, raw materials, and consumer commodities.',
                    'services'    => ['Import & Export Operations', 'Commodity Trading', 'Bonded Warehousing', 'Supply Chain Management', 'Industrial Equipment Distribution'],
                    'projects'    => 34,
                    'highlight'   => '$85M+ annual trade volume',
                ],
                [
                    'id'          => 'agriculture',
                    'color'       => 'from-navy-900 to-navy-950',
                    'accent'      => 'bg-green-900/20 border-green-700/30',
                    'number'      => '05',
                    'name'        => 'Agribusiness & Food Systems',
                    'tagline'     => 'Kapotakkhho Agro Ltd.',
                    'icon'        => 'M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m0-12.728l.707.707m12.728 12.728l.707-.707M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
                    'description' => 'Revolutionizing the agricultural value chain through modern farming technology, organic processing facilities, cold-chain infrastructure, and direct-to-market distribution of quality produce.',
                    'services'    => ['Organic Crop Processing', 'Cold Chain & Cold Storage', 'Agro-Park Development', 'Farm-to-Market Logistics', 'Agricultural R&D Investments'],
                    'projects'    => 19,
                    'highlight'   => '50,000+ farmers supported',
                ],
                [
                    'id'          => 'technology',
                    'color'       => 'from-slate-800 to-slate-900',
                    'accent'      => 'bg-purple-900/20 border-purple-700/30',
                    'number'      => '06',
                    'name'        => 'Technology & Digital Services',
                    'tagline'     => 'Kapotakkhho Digital Ltd.',
                    'icon'        => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                    'description' => 'Accelerating Bangladesh\'s digital transformation through custom enterprise software, smart city platforms, IoT networks, private cloud infrastructure, and e-governance solutions.',
                    'services'    => ['Enterprise ERP Solutions', 'Smart City Platforms', 'IoT Network Deployment', 'Private Cloud Infrastructure', 'E-Governance Systems'],
                    'projects'    => 22,
                    'highlight'   => '3 Gov. agencies onboarded',
                ],
            ];
            @endphp

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                @foreach($divisions as $div)
                <div id="{{ $div['id'] }}" class="group bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col">

                    {{-- Card Header (dark gradient with number + icon) --}}
                    <div class="bg-gradient-to-br {{ $div['color'] }} px-8 pt-8 pb-6 flex items-start justify-between gap-4 relative overflow-hidden">
                        {{-- Subtle bg letter --}}
                        <span class="absolute right-4 top-0 font-serif font-black text-[90px] text-white/5 select-none leading-none">{{ $div['number'] }}</span>

                        <div class="flex-1">
                            <span class="text-gold-600 text-xs font-bold uppercase tracking-widest block mb-2">{{ $div['tagline'] }}</span>
                            <h3 class="text-white font-serif font-bold text-xl sm:text-2xl leading-tight group-hover:text-gold-600 transition-colors">{{ $div['name'] }}</h3>
                        </div>

                        <div class="w-14 h-14 rounded-xl bg-white/10 border border-white/20 flex items-center justify-center shrink-0 group-hover:bg-gold-600 transition-colors">
                            <svg class="w-7 h-7 text-gold-600 group-hover:text-navy-950 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $div['icon'] }}"></path>
                            </svg>
                        </div>
                    </div>

                    {{-- Card Body --}}
                    <div class="p-8 flex flex-col flex-1">
                        <p class="text-slate-600 text-sm leading-relaxed mb-6">{{ $div['description'] }}</p>

                        {{-- Key Services --}}
                        <div class="mb-6">
                            <h4 class="text-navy-900 font-bold text-xs uppercase tracking-widest mb-3">Key Services</h4>
                            <ul class="space-y-2">
                                @foreach($div['services'] as $service)
                                <li class="flex items-center gap-2.5 text-slate-600 text-sm">
                                    <span class="w-1.5 h-1.5 rounded-full bg-gold-600 shrink-0"></span>
                                    {{ $service }}
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        {{-- Stats row --}}
                        <div class="mt-auto pt-5 border-t border-slate-100 flex items-center justify-between gap-4">
                            <div class="flex items-center gap-3">
                                <div class="text-center">
                                    <span class="text-2xl font-serif font-bold text-navy-900 block">{{ $div['projects'] }}</span>
                                    <span class="text-xs text-slate-500 uppercase tracking-wider">Projects</span>
                                </div>
                                <div class="w-px h-10 bg-slate-200"></div>
                                <span class="text-xs text-gold-600 font-semibold">{{ $div['highlight'] }}</span>
                            </div>

                            <button onclick="openDrawer({
                                badge: '{{ $div['number'] }} · {{ $div['tagline'] }}',
                                title: '{{ $div['name'] }}',
                                linkText: 'Inquire About {{ $div['name'] }}',
                                linkUrl: '{{ route('contact') }}',
                                content: `
                                    <p class='text-slate-300 mb-4'>{{ addslashes($div['description']) }}</p>
                                    <h4 class='text-gold-600 font-bold text-xs uppercase tracking-wider mb-2'>Core Services</h4>
                                    <ul class='space-y-2 text-xs text-slate-400 mb-6'>
                                        @foreach($div['services'] as $srv)
                                        <li class='flex items-center gap-2'><span class='w-1.5 h-1.5 rounded-full bg-gold-600'></span> {{ addslashes($srv) }}</li>
                                        @endforeach
                                    </ul>
                                    <div class='p-4 bg-navy-900 border border-navy-800 rounded-lg flex justify-between items-center text-xs'>
                                        <span class='text-slate-400'>Division Highlight:</span>
                                        <span class='text-gold-600 font-bold'>{{ addslashes($div['highlight']) }}</span>
                                    </div>
                                `
                            })" class="shrink-0 inline-flex items-center gap-1.5 px-4 py-2 rounded-sm border border-navy-900 text-navy-900 hover:bg-navy-900 hover:text-white transition-all text-xs font-bold uppercase tracking-wider cursor-pointer">
                                View Full Specs
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- =============================================
         WHY OUR BUSINESS PORTFOLIO
    ============================================== --}}
    <section class="py-24 bg-navy-950 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:20px_20px]"></div>
        </div>
        <div class="absolute right-0 top-0 w-1/2 h-full bg-gradient-to-l from-gold-600/5 to-transparent pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                {{-- Left: heading + text --}}
                <div>
                    <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Our Advantage</span>
                    <h2 class="text-3xl sm:text-4xl font-serif font-bold mb-6 leading-tight">Why Our Diversified Portfolio Wins</h2>
                    <p class="text-slate-300 text-base leading-relaxed mb-8">
                        In an era of market volatility, our six-division model is engineered for resilience. Revenue diversification ensures that downturns in one sector are cushioned by the performance of others — creating sustained, compounded growth year over year.
                    </p>

                    {{-- Feature list --}}
                    <ul class="space-y-5">
                        @php
                        $whyPoints = [
                            ['title' => 'Cross-Division Synergies', 'desc' => 'Our construction arm builds for our real estate projects; our tech division powers our logistics ops — creating cost efficiencies others cannot replicate.'],
                            ['title' => 'Shared Talent & Infrastructure', 'desc' => 'Centralized HR, finance, and procurement functions reduce overhead while maintaining specialized division-level expertise.'],
                            ['title' => 'Proven Risk Mitigation', 'desc' => 'No single division accounts for more than 30% of group revenue, creating a naturally balanced and de-risked holding structure.'],
                            ['title' => 'Government & Private Sector Access', 'desc' => 'Our breadth of licenses and certifications gives us access to both large government tenders and high-value private contracts simultaneously.'],
                        ];
                        @endphp
                        @foreach($whyPoints as $point)
                        <li class="flex gap-4">
                            <div class="w-5 h-5 rounded-full bg-gold-600 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-3 h-3 text-navy-950" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-white font-bold text-sm mb-1">{{ $point['title'] }}</h4>
                                <p class="text-slate-400 text-sm leading-relaxed">{{ $point['desc'] }}</p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Right: stat cards grid --}}
                <div class="grid grid-cols-2 gap-5">
                    @php
                    $portfolioStats = [
                        ['value' => '98%', 'label' => 'On-Time Project Delivery', 'sub' => 'Over last 10 years'],
                        ['value' => 'BDT 3,500 Cr.', 'label' => 'Cumulative Project Value', 'sub' => 'Across all divisions'],
                        ['value' => '64', 'label' => 'Districts Served', 'sub' => 'Nationwide coverage'],
                        ['value' => '3', 'label' => 'International Partnerships', 'sub' => 'Asia & Middle East'],
                        ['value' => 'AA+', 'label' => 'Credit Rating', 'sub' => 'By CRISL Bangladesh'],
                        ['value' => '1,200+', 'label' => 'Professionals', 'sub' => 'Across all divisions'],
                    ];
                    @endphp
                    @foreach($portfolioStats as $stat)
                    <div class="bg-navy-900 border border-navy-800 rounded-xl p-6 hover:border-gold-600/40 transition-colors">
                        <span class="text-gold-600 font-serif font-bold text-2xl sm:text-3xl block mb-1 leading-none">{{ $stat['value'] }}</span>
                        <span class="text-white text-xs font-semibold block mb-0.5">{{ $stat['label'] }}</span>
                        <span class="text-slate-500 text-xs">{{ $stat['sub'] }}</span>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>

    {{-- =============================================
         FUTURE EXPANSION PLANS
    ============================================== --}}
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">What's Next</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-4">Future Expansion Plans</h2>
                <p class="text-slate-600 text-sm sm:text-base">
                    As part of our 2030 strategic roadmap, Kapotakkhho Holdings is committed to entering new high-growth sectors and deepening its footprint in existing verticals.
                </p>
            </div>

            {{-- Timeline-style expansion cards --}}
            <div class="relative">
                {{-- Vertical connector line (desktop only) --}}
                <div class="hidden lg:block absolute left-1/2 top-8 bottom-8 w-px bg-slate-200 -translate-x-1/2"></div>

                <div class="space-y-12">
                    @php
                    $expansions = [
                        [
                            'year'  => '2025–2026',
                            'side'  => 'left',
                            'title' => 'Hospitality & Tourism Division',
                            'desc'  => 'Launching a dedicated hospitality division to develop business hotels, resort properties, and convention centers across Dhaka, Cox\'s Bazar, and Sylhet, targeting both domestic and MICE tourism markets.',
                            'badge' => 'New Division',
                            'color' => 'bg-blue-50 border-blue-200',
                            'badge_color' => 'bg-blue-600',
                        ],
                        [
                            'year'  => '2026–2027',
                            'side'  => 'right',
                            'title' => 'Green Energy & Renewables',
                            'desc'  => 'Entering the renewable energy sector with solar farm developments, rooftop solar EPC contracting, and wind resource assessments, in alignment with Bangladesh\'s National Renewable Energy Policy.',
                            'badge' => 'Planned Entry',
                            'color' => 'bg-green-50 border-green-200',
                            'badge_color' => 'bg-green-600',
                        ],
                        [
                            'year'  => '2027–2028',
                            'side'  => 'left',
                            'title' => 'Healthcare Infrastructure',
                            'desc'  => 'Investing in specialized healthcare facility construction, medical equipment supply, and hospital management consulting to address Bangladesh\'s rapidly growing demand for quality medical infrastructure.',
                            'badge' => 'Under Study',
                            'color' => 'bg-red-50 border-red-200',
                            'badge_color' => 'bg-red-500',
                        ],
                        [
                            'year'  => '2028–2030',
                            'side'  => 'right',
                            'title' => 'Regional Expansion — South Asia',
                            'desc'  => 'Establishing regional offices and project execution capabilities in Nepal, Bhutan, and Myanmar, leveraging Bangladesh\'s geopolitical position as a connectivity hub in the Bay of Bengal region.',
                            'badge' => 'Long-term',
                            'color' => 'bg-amber-50 border-amber-200',
                            'badge_color' => 'bg-amber-500',
                        ],
                    ];
                    @endphp

                    @foreach($expansions as $i => $exp)
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                        @if($exp['side'] === 'left')
                            {{-- Card on the left --}}
                            <div class="{{ $exp['color'] }} border rounded-xl p-7 hover:shadow-lg transition-all duration-300">
                                <div class="flex items-start justify-between gap-4 mb-4">
                                    <div>
                                        <span class="text-slate-500 text-xs uppercase tracking-wider font-semibold block mb-1">{{ $exp['year'] }}</span>
                                        <h3 class="text-navy-900 font-serif font-bold text-xl leading-snug">{{ $exp['title'] }}</h3>
                                    </div>
                                    <span class="shrink-0 px-3 py-1 {{ $exp['badge_color'] }} text-white text-xxs font-bold uppercase tracking-wider rounded-full">{{ $exp['badge'] }}</span>
                                </div>
                                <p class="text-slate-600 text-sm leading-relaxed">{{ $exp['desc'] }}</p>
                            </div>
                            {{-- Center dot spacer --}}
                            <div class="hidden lg:flex justify-start pl-8">
                                <div class="w-4 h-4 rounded-full bg-gold-600 border-4 border-white shadow-md"></div>
                            </div>
                        @else
                            {{-- Center dot spacer --}}
                            <div class="hidden lg:flex justify-end pr-8">
                                <div class="w-4 h-4 rounded-full bg-gold-600 border-4 border-white shadow-md"></div>
                            </div>
                            {{-- Card on the right --}}
                            <div class="{{ $exp['color'] }} border rounded-xl p-7 hover:shadow-lg transition-all duration-300">
                                <div class="flex items-start justify-between gap-4 mb-4">
                                    <div>
                                        <span class="text-slate-500 text-xs uppercase tracking-wider font-semibold block mb-1">{{ $exp['year'] }}</span>
                                        <h3 class="text-navy-900 font-serif font-bold text-xl leading-snug">{{ $exp['title'] }}</h3>
                                    </div>
                                    <span class="shrink-0 px-3 py-1 {{ $exp['badge_color'] }} text-white text-xxs font-bold uppercase tracking-wider rounded-full">{{ $exp['badge'] }}</span>
                                </div>
                                <p class="text-slate-600 text-sm leading-relaxed">{{ $exp['desc'] }}</p>
                            </div>
                        @endif
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    {{-- =============================================
         DIVISIONS STATS STRIP
    ============================================== --}}
    <section class="py-16 bg-navy-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:16px_16px]"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 text-center">
                <div>
                    <span class="text-3xl font-serif font-bold text-gold-600 block mb-1">58</span>
                    <span class="text-slate-400 text-xxs uppercase tracking-widest leading-tight">Real Estate</span>
                </div>
                <div>
                    <span class="text-3xl font-serif font-bold text-gold-600 block mb-1">42</span>
                    <span class="text-slate-400 text-xxs uppercase tracking-widest leading-tight">Construction</span>
                </div>
                <div>
                    <span class="text-3xl font-serif font-bold text-gold-600 block mb-1">27</span>
                    <span class="text-slate-400 text-xxs uppercase tracking-widest leading-tight">Infrastructure</span>
                </div>
                <div>
                    <span class="text-3xl font-serif font-bold text-gold-600 block mb-1">34</span>
                    <span class="text-slate-400 text-xxs uppercase tracking-widest leading-tight">Trading</span>
                </div>
                <div>
                    <span class="text-3xl font-serif font-bold text-gold-600 block mb-1">19</span>
                    <span class="text-slate-400 text-xxs uppercase tracking-widest leading-tight">Agriculture</span>
                </div>
                <div>
                    <span class="text-3xl font-serif font-bold text-gold-600 block mb-1">22</span>
                    <span class="text-slate-400 text-xxs uppercase tracking-widest leading-tight">Technology</span>
                </div>
            </div>
        </div>
    </section>

    {{-- =============================================
         CALL TO ACTION
    ============================================== --}}
    <section class="py-20 bg-gold-600 text-navy-950">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-serif font-bold mb-4">Partner with a Division</h2>
            <p class="text-navy-800 text-lg mb-8 max-w-2xl mx-auto font-medium">
                Whether you are an investor, government agency, or enterprise client — we have a division ready to serve your needs with precision and professionalism.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ url('/#contact') }}" class="inline-block px-8 py-4 rounded-sm bg-navy-950 text-white font-bold hover:bg-navy-900 transition-all text-sm uppercase tracking-wider shadow-xl">
                    Send an Enquiry
                </a>
                <a href="{{ route('projects') }}" class="inline-block px-8 py-4 rounded-sm bg-transparent border-2 border-navy-900 text-navy-900 font-bold hover:bg-navy-900 hover:text-white transition-all text-sm uppercase tracking-wider">
                    View Our Projects
                </a>
            </div>
        </div>
    </section>

@endsection
