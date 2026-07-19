@extends('layouts.app')

@section('title', 'Investor Relations | Kapotakkhho Holdings Ltd.')

@section('content')

    {{-- ===== HERO BANNER ===== --}}
    <section class="relative min-h-[55vh] flex items-center bg-navy-950 overflow-hidden py-24">
        <div class="absolute inset-0 z-0 opacity-10">
            <div class="absolute inset-0 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:24px_24px]"></div>
        </div>
        <div class="absolute -right-20 -top-20 w-96 h-96 rounded-full bg-gold-600 filter blur-[140px] opacity-15 z-0"></div>
        <div class="absolute left-0 bottom-0 w-64 h-64 rounded-full bg-navy-700 filter blur-[100px] opacity-20 z-0"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full text-center">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-navy-900 border border-navy-800 text-gold-600 text-xs font-semibold uppercase tracking-wider mb-6">
                <span class="w-1.5 h-1.5 rounded-full bg-gold-600"></span>
                Investor Relations
            </span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-serif text-white font-bold leading-tight mb-6">
                Investing in <span class="text-gold-600">Bangladesh's</span><br>Future
            </h1>
            <p class="text-slate-300 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed mb-10">
                Transparent, accountable, and value-driven. Discover why Kapotakkhho Holdings Ltd. is a trusted partner for discerning investors and institutional stakeholders.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="#financial-highlights" class="px-8 py-3.5 bg-gold-600 text-navy-950 font-bold rounded-sm hover:bg-gold-500 transition-all text-sm uppercase tracking-wider shadow-lg">
                    Financial Highlights
                </a>
                <a href="#download-center" class="px-8 py-3.5 border border-navy-700 text-slate-300 font-semibold rounded-sm hover:border-gold-600 hover:text-gold-600 transition-all text-sm uppercase tracking-wider">
                    Download Reports
                </a>
            </div>
        </div>
    </section>

    {{-- ===== FINANCIAL HIGHLIGHTS ===== --}}
    <section id="financial-highlights" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">FY 2024–25</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-4">Financial Highlights</h2>
                <p class="text-slate-500 text-base leading-relaxed">Key performance indicators reflecting our strong financial position and sustained growth trajectory.</p>
            </div>

            {{-- KPI Cards --}}
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
                @php
                    $kpis = [
                        ['val' => '৳ 4,850 Cr', 'label' => 'Total Revenue', 'change' => '+18.4%', 'up' => true],
                        ['val' => '৳ 920 Cr', 'label' => 'Net Profit (PAT)', 'change' => '+22.1%', 'up' => true],
                        ['val' => '৳ 12,300 Cr', 'label' => 'Total Assets', 'change' => '+15.7%', 'up' => true],
                        ['val' => '19.0%', 'label' => 'Return on Equity', 'change' => '+2.3 pts', 'up' => true],
                    ];
                @endphp
                @foreach($kpis as $kpi)
                    <div class="bg-[#f4f6f9] rounded-xl border border-slate-100 p-7 text-center hover:shadow-md hover:border-gold-600/30 transition-all duration-300">
                        <div class="text-navy-900 font-serif font-bold text-2xl sm:text-3xl mb-2">{{ $kpi['val'] }}</div>
                        <div class="text-slate-500 text-xs uppercase tracking-wider mb-3">{{ $kpi['label'] }}</div>
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full {{ $kpi['up'] ? 'bg-green-50 text-green-600' : 'bg-red-50 text-red-500' }} text-xs font-semibold">
                            <svg class="w-3 h-3 {{ $kpi['up'] ? '' : 'rotate-180' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
                            {{ $kpi['change'] }} YoY
                        </span>
                    </div>
                @endforeach
            </div>

            {{-- Revenue Breakdown --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <div>
                    <h3 class="text-navy-900 font-serif font-bold text-xl mb-6">Revenue by Division (FY 2024–25)</h3>
                    <div class="space-y-5">
                        @php
                            $divisions = [
                                ['name' => 'Kapotakkhho Properties', 'pct' => 35, 'val' => '৳ 1,698 Cr'],
                                ['name' => 'Kapotakkhho Engineering', 'pct' => 28, 'val' => '৳ 1,358 Cr'],
                                ['name' => 'Kapotakkhho Global Trade', 'pct' => 20, 'val' => '৳ 970 Cr'],
                                ['name' => 'Kapotakkhho Infra Ltd.', 'pct' => 12, 'val' => '৳ 582 Cr'],
                                ['name' => 'Kapotakkhho Digital', 'pct' => 5, 'val' => '৳ 242 Cr'],
                            ];
                        @endphp
                        @foreach($divisions as $div)
                            <div>
                                <div class="flex justify-between items-center mb-1.5">
                                    <span class="text-navy-800 text-sm font-medium">{{ $div['name'] }}</span>
                                    <span class="text-slate-500 text-xs font-semibold">{{ $div['val'] }} ({{ $div['pct'] }}%)</span>
                                </div>
                                <div class="h-2.5 bg-slate-100 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-gold-600 to-gold-400 rounded-full transition-all duration-700" style="width: {{ $div['pct'] }}%"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div>
                    <h3 class="text-navy-900 font-serif font-bold text-xl mb-6">5-Year Financial Summary</h3>
                    <div class="overflow-x-auto rounded-xl border border-slate-100 shadow-sm">
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="bg-navy-950 text-left">
                                    <th class="px-4 py-3 text-gold-600 font-semibold text-xs uppercase tracking-wider">FY Year</th>
                                    <th class="px-4 py-3 text-gold-600 font-semibold text-xs uppercase tracking-wider">Revenue (Cr)</th>
                                    <th class="px-4 py-3 text-gold-600 font-semibold text-xs uppercase tracking-wider">PAT (Cr)</th>
                                    <th class="px-4 py-3 text-gold-600 font-semibold text-xs uppercase tracking-wider">ROE</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-50">
                                @php
                                    $financials = [
                                        ['year' => 'FY 2020–21', 'rev' => '2,450', 'pat' => '410', 'roe' => '12.4%'],
                                        ['year' => 'FY 2021–22', 'rev' => '2,980', 'pat' => '530', 'roe' => '14.1%'],
                                        ['year' => 'FY 2022–23', 'rev' => '3,510', 'pat' => '660', 'roe' => '15.8%'],
                                        ['year' => 'FY 2023–24', 'rev' => '4,100', 'pat' => '754', 'roe' => '16.7%'],
                                        ['year' => 'FY 2024–25', 'rev' => '4,850', 'pat' => '920', 'roe' => '19.0%'],
                                    ];
                                @endphp
                                @foreach($financials as $i => $row)
                                    <tr class="{{ $i % 2 === 0 ? 'bg-white' : 'bg-[#f9fafb]' }} hover:bg-gold-600/5 transition-colors {{ $i === 4 ? 'font-semibold text-navy-900' : 'text-slate-600' }}">
                                        <td class="px-4 py-3">{{ $row['year'] }}</td>
                                        <td class="px-4 py-3">৳ {{ $row['rev'] }}</td>
                                        <td class="px-4 py-3">৳ {{ $row['pat'] }}</td>
                                        <td class="px-4 py-3 text-green-600">{{ $row['roe'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== ANNUAL REPORTS ===== --}}
    <section class="py-24 bg-[#f4f6f9]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Corporate Disclosure</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-4">Annual Reports</h2>
                <p class="text-slate-500 text-base leading-relaxed">Comprehensive annual reports providing detailed financial and operational insights for our stakeholders.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $reports = [
                        ['year' => '2024–25', 'pages' => '148 Pages', 'size' => '12.4 MB', 'highlight' => 'Record Revenue Year', 'featured' => true],
                        ['year' => '2023–24', 'pages' => '136 Pages', 'size' => '10.8 MB', 'highlight' => 'Expansion Strategy', 'featured' => false],
                        ['year' => '2022–23', 'pages' => '124 Pages', 'size' => '9.5 MB', 'highlight' => 'Digital Transformation', 'featured' => false],
                        ['year' => '2021–22', 'pages' => '118 Pages', 'size' => '8.7 MB', 'highlight' => 'Post-Pandemic Growth', 'featured' => false],
                    ];
                @endphp
                @foreach($reports as $report)
                    <div class="bg-white rounded-xl border {{ $report['featured'] ? 'border-gold-600' : 'border-slate-100' }} p-6 hover:shadow-lg transition-all duration-300 group relative overflow-hidden">
                        @if($report['featured'])
                            <span class="absolute top-0 right-0 bg-gold-600 text-navy-950 text-xs font-bold px-3 py-1 rounded-bl-lg uppercase tracking-wider">Latest</span>
                        @endif
                        <div class="w-12 h-14 rounded-lg bg-navy-950 flex flex-col items-center justify-center mb-5 shadow-lg">
                            <svg class="w-5 h-5 text-gold-600 mb-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <span class="text-white text-xs font-bold">PDF</span>
                        </div>
                        <h3 class="text-navy-900 font-serif font-bold text-lg mb-1">Annual Report</h3>
                        <p class="text-gold-600 font-semibold text-sm mb-2">FY {{ $report['year'] }}</p>
                        <p class="text-slate-400 text-xs mb-1">{{ $report['pages'] }} · {{ $report['size'] }}</p>
                        <p class="text-slate-500 text-xs italic mb-5">{{ $report['highlight'] }}</p>
                        <a href="#download-center" class="flex items-center gap-2 text-xs font-semibold text-navy-900 group-hover:text-gold-600 transition-colors uppercase tracking-wider">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                            Download
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== SHAREHOLDER INFORMATION ===== --}}
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                <div>
                    <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Ownership Structure</span>
                    <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-6">Shareholder Information</h2>
                    <p class="text-slate-500 text-base leading-relaxed mb-8">Our ownership structure reflects a balanced mix of founding promoters, institutional investors, and strategic partners committed to long-term value creation.</p>

                    {{-- Shareholding Pie (Visual Representation) --}}
                    <div class="space-y-4 mb-8">
                        @php
                            $shareholders = [
                                ['cat' => 'Promoter Group', 'pct' => 51, 'color' => 'bg-gold-600'],
                                ['cat' => 'Institutional Investors', 'pct' => 28, 'color' => 'bg-navy-700'],
                                ['cat' => 'Strategic Partners', 'pct' => 13, 'color' => 'bg-navy-500'],
                                ['cat' => 'Public / Others', 'pct' => 8, 'color' => 'bg-slate-300'],
                            ];
                        @endphp
                        @foreach($shareholders as $s)
                            <div class="flex items-center gap-4">
                                <div class="w-3 h-3 rounded-full {{ $s['color'] }} shrink-0"></div>
                                <div class="flex-1">
                                    <div class="flex justify-between mb-1">
                                        <span class="text-navy-800 text-sm font-medium">{{ $s['cat'] }}</span>
                                        <span class="text-slate-500 text-sm font-bold">{{ $s['pct'] }}%</span>
                                    </div>
                                    <div class="h-2 bg-slate-100 rounded-full overflow-hidden">
                                        <div class="{{ $s['color'] }} h-full rounded-full" style="width:{{ $s['pct'] }}%"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="bg-[#f4f6f9] rounded-xl border border-slate-100 p-6">
                        <h4 class="text-navy-900 font-semibold text-sm mb-4 uppercase tracking-wider">Key Shareholder Details</h4>
                        <dl class="space-y-3 text-sm">
                            @php
                                $details = [
                                    ['label' => 'Company Type', 'val' => 'Private Limited Company'],
                                    ['label' => 'Authorized Capital', 'val' => '৳ 5,000 Crore'],
                                    ['label' => 'Paid-Up Capital', 'val' => '৳ 2,200 Crore'],
                                    ['label' => 'Dividend Policy', 'val' => '35% of Net Profit (Annual)'],
                                    ['label' => 'Auditors', 'val' => 'Rahman Rahman Huq (KPMG)'],
                                    ['label' => 'Registrar', 'val' => 'RJSC, Bangladesh'],
                                ];
                            @endphp
                            @foreach($details as $d)
                                <div class="flex justify-between items-center border-b border-slate-100 pb-2">
                                    <dt class="text-slate-500">{{ $d['label'] }}</dt>
                                    <dd class="text-navy-800 font-semibold text-right">{{ $d['val'] }}</dd>
                                </div>
                            @endforeach
                        </dl>
                    </div>
                </div>

                <div>
                    <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Dividend History</span>
                    <h3 class="text-2xl font-serif font-bold text-navy-900 mb-6">Dividend Distribution</h3>
                    <div class="overflow-x-auto rounded-xl border border-slate-100 shadow-sm mb-8">
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="bg-navy-950 text-left">
                                    <th class="px-4 py-3 text-gold-600 font-semibold text-xs uppercase tracking-wider">Year</th>
                                    <th class="px-4 py-3 text-gold-600 font-semibold text-xs uppercase tracking-wider">Dividend %</th>
                                    <th class="px-4 py-3 text-gold-600 font-semibold text-xs uppercase tracking-wider">Total Paid (Cr)</th>
                                    <th class="px-4 py-3 text-gold-600 font-semibold text-xs uppercase tracking-wider">Type</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-50">
                                @php
                                    $dividends = [
                                        ['year' => '2024–25', 'pct' => '35%', 'paid' => '৳ 322', 'type' => 'Cash'],
                                        ['year' => '2023–24', 'pct' => '32%', 'paid' => '৳ 241', 'type' => 'Cash'],
                                        ['year' => '2022–23', 'pct' => '28%', 'paid' => '৳ 185', 'type' => 'Cash + Bonus'],
                                        ['year' => '2021–22', 'pct' => '25%', 'paid' => '৳ 133', 'type' => 'Cash'],
                                        ['year' => '2020–21', 'pct' => '20%', 'paid' => '৳ 82', 'type' => 'Cash'],
                                    ];
                                @endphp
                                @foreach($dividends as $i => $d)
                                    <tr class="{{ $i % 2 === 0 ? 'bg-white' : 'bg-[#f9fafb]' }} hover:bg-gold-600/5 transition-colors text-slate-600">
                                        <td class="px-4 py-3 font-medium text-navy-800">{{ $d['year'] }}</td>
                                        <td class="px-4 py-3 text-green-600 font-semibold">{{ $d['pct'] }}</td>
                                        <td class="px-4 py-3">{{ $d['paid'] }}</td>
                                        <td class="px-4 py-3">{{ $d['type'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="bg-navy-950 rounded-xl border border-navy-800 p-6 gold-glow">
                        <h4 class="text-white font-semibold text-sm mb-3">Investment Grade Rating</h4>
                        <div class="flex items-center gap-4">
                            <div class="w-16 h-16 rounded-full bg-gold-600/20 border-2 border-gold-600 flex items-center justify-center">
                                <span class="text-gold-600 font-serif font-bold text-xl">AA</span>
                            </div>
                            <div>
                                <p class="text-white font-bold text-lg">AA (Stable)</p>
                                <p class="text-slate-400 text-xs">Rated by CRISL Bangladesh — Indicative highest creditworthiness category among private conglomerates.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== COMPANY MILESTONES ===== --}}
    <section class="py-24 bg-navy-950 relative overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:32px_32px]"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Our Journey</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-white mb-4">Company Milestones</h2>
                <p class="text-slate-400 text-base leading-relaxed">Two decades of growth, diversification, and value creation for investors and communities alike.</p>
            </div>
            <div class="relative">
                {{-- Timeline Line --}}
                <div class="absolute left-1/2 top-0 bottom-0 w-0.5 bg-gradient-to-b from-gold-600 via-navy-700 to-gold-600 opacity-30 hidden lg:block transform -translate-x-1/2"></div>
                <div class="space-y-10">
                    @php
                        $milestones = [
                            ['year' => '2001', 'title' => 'Foundation', 'desc' => 'Kapotakkhho Holdings Ltd. incorporated in Dhaka with initial capital of ৳ 50 Crore in real estate.', 'side' => 'left'],
                            ['year' => '2005', 'title' => 'Engineering Division', 'desc' => 'Launched Kapotakkhho Engineering, completing first major infrastructure contract worth ৳ 120 Crore.', 'side' => 'right'],
                            ['year' => '2009', 'title' => 'International Trade', 'desc' => 'Kapotakkhho Global Trade established, entering export-import of industrial goods and commodities.', 'side' => 'left'],
                            ['year' => '2013', 'title' => '৳ 1,000 Crore Milestone', 'desc' => 'Crossed annual revenue milestone of ৳ 1,000 Crore, becoming one of Bangladesh\'s top 50 conglomerates.', 'side' => 'right'],
                            ['year' => '2018', 'title' => 'Infra & Digital Launches', 'desc' => 'Expanded portfolio with Kapotakkhho Infra Ltd. and Kapotakkhho Digital, entering new growth sectors.', 'side' => 'left'],
                            ['year' => '2023', 'title' => 'Sustainability Commitment', 'desc' => 'Launched ESG framework and committed to net-zero operations by 2040 across all divisions.', 'side' => 'right'],
                            ['year' => '2025', 'title' => 'Record Financial Year', 'desc' => 'Posted record revenue of ৳ 4,850 Crore with 19% ROE, positioning for international capital raising.', 'side' => 'left'],
                        ];
                    @endphp
                    @foreach($milestones as $ms)
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-0 items-center">
                            @if($ms['side'] === 'left')
                                <div class="lg:pr-16 lg:text-right">
                                    <div class="bg-navy-900 border border-navy-800 rounded-xl p-6 hover:border-gold-600/30 transition-all duration-300">
                                        <span class="text-gold-600 font-serif font-bold text-2xl block mb-2">{{ $ms['year'] }}</span>
                                        <h3 class="text-white font-bold text-base mb-2">{{ $ms['title'] }}</h3>
                                        <p class="text-slate-400 text-sm leading-relaxed">{{ $ms['desc'] }}</p>
                                    </div>
                                </div>
                                <div class="hidden lg:flex justify-start pl-8">
                                    <div class="w-5 h-5 rounded-full bg-gold-600 border-4 border-navy-950 shadow-lg"></div>
                                </div>
                            @else
                                <div class="hidden lg:flex justify-end pr-8">
                                    <div class="w-5 h-5 rounded-full bg-gold-600 border-4 border-navy-950 shadow-lg"></div>
                                </div>
                                <div class="lg:pl-16">
                                    <div class="bg-navy-900 border border-navy-800 rounded-xl p-6 hover:border-gold-600/30 transition-all duration-300">
                                        <span class="text-gold-600 font-serif font-bold text-2xl block mb-2">{{ $ms['year'] }}</span>
                                        <h3 class="text-white font-bold text-base mb-2">{{ $ms['title'] }}</h3>
                                        <p class="text-slate-400 text-sm leading-relaxed">{{ $ms['desc'] }}</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ===== DOWNLOAD CENTER ===== --}}
    <section id="download-center" class="py-24 bg-[#f4f6f9]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Investor Resources</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-4">Download Center</h2>
                <p class="text-slate-500 text-base leading-relaxed">Access all corporate documents, financial statements, and presentations in one place.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $downloads = [
                        ['cat' => 'Annual Reports', 'icon' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z', 'items' => ['Annual Report FY 2024–25 (PDF · 12.4 MB)', 'Annual Report FY 2023–24 (PDF · 10.8 MB)', 'Annual Report FY 2022–23 (PDF · 9.5 MB)']],
                        ['cat' => 'Financial Statements', 'icon' => 'M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z', 'items' => ['Audited Balance Sheet FY 2024–25', 'Quarterly Results Q4 FY 2024–25', 'Consolidated P&L Statement FY 2024–25']],
                        ['cat' => 'Investor Presentations', 'icon' => 'M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z', 'items' => ['Investor Day Presentation 2025', 'Q4 Earnings Presentation', 'Corporate Strategy Deck 2025–30']],
                        ['cat' => 'Corporate Governance', 'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'items' => ['Corporate Governance Report 2025', 'Board Charter & Policies', 'Code of Business Ethics']],
                        ['cat' => 'ESG Reports', 'icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064', 'items' => ['ESG & Sustainability Report 2024', 'Carbon Footprint Assessment 2024', 'Social Impact Report 2024']],
                        ['cat' => 'Legal & Regulatory', 'icon' => 'M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3', 'items' => ['Articles of Association', 'Memorandum of Association', 'RJSC Registration Certificate']],
                    ];
                @endphp
                @foreach($downloads as $dl)
                    <div class="bg-white rounded-xl border border-slate-100 p-6 hover:shadow-md hover:border-gold-600/30 transition-all duration-300">
                        <div class="flex items-center gap-3 mb-5">
                            <div class="w-10 h-10 rounded-lg bg-navy-950 flex items-center justify-center">
                                <svg class="w-5 h-5 text-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $dl['icon'] }}"></path>
                                </svg>
                            </div>
                            <h3 class="text-navy-900 font-serif font-bold text-sm">{{ $dl['cat'] }}</h3>
                        </div>
                        <ul class="space-y-3">
                            @foreach($dl['items'] as $item)
                                <li>
                                    <button onclick="alert('Document download request sent. Our investor relations team will email you the requested document within 24 hours.')" class="flex items-center gap-2 text-slate-600 hover:text-gold-600 text-xs transition-colors w-full text-left group">
                                        <svg class="w-4 h-4 text-gold-600/60 group-hover:text-gold-600 shrink-0 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                        {{ $item }}
                                    </button>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== INVESTOR CONTACT ===== --}}
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                <div>
                    <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Get In Touch</span>
                    <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-6">Investor Contact</h2>
                    <p class="text-slate-500 text-base leading-relaxed mb-8">Our Investor Relations team is dedicated to providing timely, transparent, and comprehensive information to all our stakeholders.</p>

                    <div class="space-y-5 mb-8">
                        @php
                            $contacts = [
                                ['icon' => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z', 'label' => 'Head of Investor Relations', 'val' => 'Mr. Tanvir Ahmed, CFA'],
                                ['icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'label' => 'Investor Relations Email', 'val' => 'ir@kapotakkhho.com'],
                                ['icon' => 'M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z', 'label' => 'Direct Investor Hotline', 'val' => '+880 2 9884575'],
                                ['icon' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z', 'label' => 'Registered Office', 'val' => 'Kapotakkhho House, 72 Motijheel, Dhaka-1000'],
                            ];
                        @endphp
                        @foreach($contacts as $c)
                            <div class="flex items-start gap-4 p-4 rounded-xl bg-[#f4f6f9] border border-slate-100">
                                <div class="w-10 h-10 rounded-lg bg-navy-950 flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5 text-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $c['icon'] }}"></path></svg>
                                </div>
                                <div>
                                    <p class="text-slate-500 text-xs uppercase tracking-wider mb-0.5">{{ $c['label'] }}</p>
                                    <p class="text-navy-900 font-semibold text-sm">{{ $c['val'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="bg-[#f4f6f9] rounded-2xl border border-slate-100 p-8">
                    <h3 class="text-navy-900 font-serif font-bold text-xl mb-6">Send an Investor Inquiry</h3>
                    <form id="investor-form" class="space-y-5" onsubmit="event.preventDefault(); document.getElementById('investor-success').classList.remove('hidden'); this.reset();">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-xs font-semibold text-navy-900 uppercase tracking-wider mb-2" for="inv-name">Full Name *</label>
                                <input id="inv-name" type="text" required placeholder="Your full name" class="w-full bg-white border border-slate-200 rounded-lg px-4 py-3 text-sm text-navy-900 focus:outline-none focus:border-gold-600 transition-colors">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-navy-900 uppercase tracking-wider mb-2" for="inv-email">Email *</label>
                                <input id="inv-email" type="email" required placeholder="your@email.com" class="w-full bg-white border border-slate-200 rounded-lg px-4 py-3 text-sm text-navy-900 focus:outline-none focus:border-gold-600 transition-colors">
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-navy-900 uppercase tracking-wider mb-2" for="inv-org">Organization</label>
                            <input id="inv-org" type="text" placeholder="Fund / Company name" class="w-full bg-white border border-slate-200 rounded-lg px-4 py-3 text-sm text-navy-900 focus:outline-none focus:border-gold-600 transition-colors">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-navy-900 uppercase tracking-wider mb-2" for="inv-type">Inquiry Type *</label>
                            <select id="inv-type" required class="w-full bg-white border border-slate-200 rounded-lg px-4 py-3 text-sm text-navy-900 focus:outline-none focus:border-gold-600 transition-colors">
                                <option value="" disabled selected>Select inquiry type</option>
                                <option>Financial Results</option>
                                <option>Annual Report Request</option>
                                <option>Dividend Information</option>
                                <option>Investment Opportunity</option>
                                <option>Corporate Governance</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-navy-900 uppercase tracking-wider mb-2" for="inv-msg">Your Message *</label>
                            <textarea id="inv-msg" rows="4" required placeholder="Please describe your inquiry in detail..." class="w-full bg-white border border-slate-200 rounded-lg px-4 py-3 text-sm text-navy-900 focus:outline-none focus:border-gold-600 transition-colors resize-none"></textarea>
                        </div>
                        <div id="investor-success" class="hidden bg-green-50 border border-green-200 rounded-lg px-5 py-4 text-green-700 text-sm font-medium">
                            ✅ Your inquiry has been received. Our IR team will respond within 2 business days.
                        </div>
                        <button type="submit" class="w-full py-4 bg-navy-950 text-gold-600 font-bold text-sm uppercase tracking-widest rounded-sm hover:bg-gold-600 hover:text-navy-950 transition-all duration-300">
                            Submit Inquiry
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
