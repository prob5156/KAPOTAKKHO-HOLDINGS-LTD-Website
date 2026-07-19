@extends('layouts.app')

@section('title', 'Sustainability & CSR | Kapotakkhho Holdings Ltd.')

@section('content')

    {{-- ===== HERO BANNER ===== --}}
    <section class="relative min-h-[55vh] flex items-center bg-navy-950 overflow-hidden py-24">
        <div class="absolute inset-0 z-0 opacity-10">
            <div class="absolute inset-0 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:24px_24px]"></div>
        </div>
        <div class="absolute -left-24 top-0 w-96 h-96 rounded-full bg-green-600 filter blur-[180px] opacity-10 z-0"></div>
        <div class="absolute right-0 bottom-0 w-64 h-64 rounded-full bg-gold-600 filter blur-[130px] opacity-10 z-0"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-navy-900 border border-navy-800 text-gold-600 text-xs font-semibold uppercase tracking-wider mb-6">
                        <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                        Sustainability & CSR
                    </span>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-serif text-white font-bold leading-tight mb-6">
                        Business With a <span class="text-gold-600">Purpose</span>
                    </h1>
                    <p class="text-slate-300 text-base sm:text-lg max-w-xl leading-relaxed mb-8">
                        At Kapotakkhho, we believe that true success means uplifting communities, protecting the environment, and creating a legacy that outlasts any financial year.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#csr-activities" class="px-8 py-3.5 bg-gold-600 text-navy-950 font-bold rounded-sm hover:bg-gold-500 transition-all text-sm uppercase tracking-wider">
                            Our CSR Work
                        </a>
                        <a href="#sdg-alignment" class="px-8 py-3.5 border border-navy-700 text-slate-300 font-semibold rounded-sm hover:border-gold-600 hover:text-gold-600 transition-all text-sm uppercase tracking-wider">
                            SDG Alignment
                        </a>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4 hidden lg:grid">
                    @php
                        $heroStats = [
                            ['val' => '৳ 48 Cr', 'label' => 'CSR Investment (FY25)', 'icon' => '💚'],
                            ['val' => '1.2L+', 'label' => 'Lives Impacted', 'icon' => '🤝'],
                            ['val' => '12', 'label' => 'SDGs Aligned', 'icon' => '🌍'],
                            ['val' => '2040', 'label' => 'Net-Zero Target', 'icon' => '🌿'],
                        ];
                    @endphp
                    @foreach($heroStats as $s)
                        <div class="bg-navy-900/80 border border-navy-800 rounded-xl p-6 {{ $loop->even ? 'mt-6' : '' }}">
                            <div class="text-2xl mb-2">{{ $s['icon'] }}</div>
                            <span class="text-gold-600 text-2xl font-serif font-bold block mb-0.5">{{ $s['val'] }}</span>
                            <span class="text-slate-400 text-xs">{{ $s['label'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ===== SUSTAINABILITY VISION ===== --}}
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Our Commitment</span>
                    <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-6 leading-tight">Sustainability Vision 2030</h2>
                    <p class="text-slate-500 text-base leading-relaxed mb-6">
                        By 2030, Kapotakkhho Holdings Ltd. is committed to embedding sustainability into the very DNA of our operations. Our integrated ESG strategy balances economic growth with environmental stewardship and social equity.
                    </p>
                    <p class="text-slate-500 text-base leading-relaxed mb-8">
                        We operate under the principle that profit and purpose are not competing forces — they are complementary pillars of long-term corporate excellence.
                    </p>
                    <div class="grid grid-cols-3 gap-4">
                        @php
                            $pillars = [
                                ['letter' => 'E', 'title' => 'Environmental', 'desc' => 'Carbon reduction, green buildings, renewable energy'],
                                ['letter' => 'S', 'title' => 'Social', 'desc' => 'Community empowerment, education, healthcare'],
                                ['letter' => 'G', 'title' => 'Governance', 'desc' => 'Transparency, accountability, ethical leadership'],
                            ];
                        @endphp
                        @foreach($pillars as $p)
                            <div class="bg-[#f4f6f9] rounded-xl p-5 text-center border border-slate-100 hover:border-gold-600/30 transition-all">
                                <div class="w-12 h-12 rounded-full bg-navy-950 flex items-center justify-center mx-auto mb-3">
                                    <span class="text-gold-600 font-serif font-bold text-xl">{{ $p['letter'] }}</span>
                                </div>
                                <h4 class="text-navy-900 font-bold text-sm mb-1">{{ $p['title'] }}</h4>
                                <p class="text-slate-500 text-xs leading-relaxed">{{ $p['desc'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="space-y-4">
                    @php
                        $targets = [
                            ['target' => 'Reduce carbon emissions by 40%', 'by' => 'By 2027', 'progress' => 60, 'color' => 'bg-green-500'],
                            ['target' => 'Achieve 30% renewable energy usage', 'by' => 'By 2026', 'progress' => 45, 'color' => 'bg-emerald-500'],
                            ['target' => 'Zero-waste operations in all facilities', 'by' => 'By 2028', 'progress' => 35, 'color' => 'bg-teal-500'],
                            ['target' => '100% sustainable procurement', 'by' => 'By 2030', 'progress' => 25, 'color' => 'bg-cyan-500'],
                            ['target' => 'Net-Zero carbon operations', 'by' => 'By 2040', 'progress' => 18, 'color' => 'bg-blue-500'],
                        ];
                    @endphp
                    <h3 class="text-navy-900 font-serif font-bold text-xl mb-6">2030 Sustainability Targets Progress</h3>
                    @foreach($targets as $t)
                        <div class="bg-[#f4f6f9] rounded-xl border border-slate-100 p-5">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-navy-800 text-sm font-medium">{{ $t['target'] }}</span>
                                <span class="text-xs font-semibold text-gold-600 shrink-0 ml-2">{{ $t['by'] }}</span>
                            </div>
                            <div class="h-2 bg-slate-200 rounded-full overflow-hidden">
                                <div class="{{ $t['color'] }} h-full rounded-full" style="width:{{ $t['progress'] }}%"></div>
                            </div>
                            <div class="text-right text-xs text-slate-400 mt-1">{{ $t['progress'] }}% complete</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ===== CSR ACTIVITIES ===== --}}
    <section id="csr-activities" class="py-24 bg-[#f4f6f9]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Community Impact</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-4">CSR Activities</h2>
                <p class="text-slate-500 text-base leading-relaxed">Our CSR programs span education, healthcare, environment, and disaster relief — creating tangible impact across Bangladesh.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $activities = [
                        ['title' => 'Kapotakkhho Scholarship Fund', 'cat' => 'Education', 'desc' => 'Annual scholarships for 500+ underprivileged students across 20 districts. Full tuition, stipend, and mentorship from senior company executives.', 'stat' => '2,500+', 'statLabel' => 'Scholars Supported', 'emoji' => '🎓'],
                        ['title' => 'Free Medical Camp Program', 'cat' => 'Healthcare', 'desc' => 'Monthly free medical camps in rural areas with specialist doctors, diagnostics, and medicine distribution. Operated 48 camps annually.', 'stat' => '35,000+', 'statLabel' => 'Patients Served/Year', 'emoji' => '🏥'],
                        ['title' => 'Mangrove Reforestation Drive', 'cat' => 'Environment', 'desc' => 'Planting 100,000 mangrove saplings annually in coastal Bangladesh to combat rising sea levels and protect biodiversity.', 'stat' => '3.5 Lakh', 'statLabel' => 'Trees Planted', 'emoji' => '🌿'],
                        ['title' => 'Flood Relief Operations', 'cat' => 'Disaster Relief', 'desc' => 'Emergency food, shelter, and medical supplies deployed within 24 hours of natural disasters in affected regions of Bangladesh.', 'stat' => '50,000+', 'statLabel' => 'Families Assisted', 'emoji' => '🆘'],
                        ['title' => 'Women Empowerment Initiative', 'cat' => 'Social', 'desc' => 'Vocational training and micro-enterprise grants for women in rural communities, enabling financial independence and economic participation.', 'stat' => '8,000+', 'statLabel' => 'Women Empowered', 'emoji' => '💪'],
                        ['title' => 'Clean Water Access Program', 'cat' => 'Healthcare', 'desc' => 'Installation of tube wells and water purification units in remote areas lacking access to safe drinking water across 15 districts.', 'stat' => '200+', 'statLabel' => 'Villages Served', 'emoji' => '💧'],
                    ];
                    $catColors = ['Education' => 'bg-blue-50 text-blue-600', 'Healthcare' => 'bg-red-50 text-red-500', 'Environment' => 'bg-green-50 text-green-600', 'Disaster Relief' => 'bg-orange-50 text-orange-600', 'Social' => 'bg-purple-50 text-purple-600'];
                @endphp
                @foreach($activities as $act)
                    <div class="bg-white rounded-xl border border-slate-100 p-7 hover:shadow-lg hover:border-gold-600/20 transition-all duration-300">
                        <div class="flex items-start justify-between mb-4">
                            <span class="text-3xl">{{ $act['emoji'] }}</span>
                            <span class="px-2.5 py-1 rounded-full text-xs font-semibold {{ $catColors[$act['cat']] ?? 'bg-slate-50 text-slate-600' }}">{{ $act['cat'] }}</span>
                        </div>
                        <h3 class="text-navy-900 font-serif font-bold text-base mb-3">{{ $act['title'] }}</h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-5">{{ $act['desc'] }}</p>
                        <div class="pt-4 border-t border-slate-100">
                            <span class="text-gold-600 font-serif font-bold text-xl block">{{ $act['stat'] }}</span>
                            <span class="text-slate-400 text-xs">{{ $act['statLabel'] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== EDUCATION INITIATIVES ===== --}}
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Building Tomorrow's Leaders</span>
                    <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-6">Education Initiatives</h2>
                    <p class="text-slate-500 text-base leading-relaxed mb-8">We believe education is the most powerful tool for sustainable development. Our education programs invest in human capital at every level.</p>
                    <div class="space-y-5">
                        @php
                            $eduPrograms = [
                                ['title' => 'Kapotakkhho Scholarship Program', 'desc' => '500 annual scholarships for students from underprivileged backgrounds from class 6 to university level.'],
                                ['title' => 'Digital Learning Labs', 'desc' => '30 computer labs established in rural government schools with full internet access and teacher training.'],
                                ['title' => 'STEM for Girls Initiative', 'desc' => 'Encouraging girls in secondary schools to pursue science, technology, engineering, and mathematics careers.'],
                                ['title' => 'Vocational Training Centers', 'desc' => 'Free technical skills training in carpentry, tailoring, IT, and construction for out-of-school youth.'],
                                ['title' => 'Teacher Development Program', 'desc' => 'Annual capacity building workshops for 1,000+ teachers across partner institutions.'],
                            ];
                        @endphp
                        @foreach($eduPrograms as $edu)
                            <div class="flex items-start gap-4">
                                <div class="w-8 h-8 rounded-full bg-blue-50 border border-blue-100 flex items-center justify-center shrink-0 mt-0.5">
                                    <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-navy-900 font-semibold text-sm mb-0.5">{{ $edu['title'] }}</h4>
                                    <p class="text-slate-500 text-sm leading-relaxed">{{ $edu['desc'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-5">
                    @php
                        $eduStats = [
                            ['val' => '2,500+', 'label' => 'Scholarships Awarded', 'color' => 'bg-blue-50 border-blue-100'],
                            ['val' => '30', 'label' => 'Digital Labs Installed', 'color' => 'bg-[#f4f6f9] border-slate-100'],
                            ['val' => '15K+', 'label' => 'Students Trained', 'color' => 'bg-[#f4f6f9] border-slate-100'],
                            ['val' => '1,000+', 'label' => 'Teachers Developed', 'color' => 'bg-blue-50 border-blue-100'],
                        ];
                    @endphp
                    @foreach($eduStats as $st)
                        <div class="{{ $st['color'] }} rounded-xl border p-6 text-center hover:shadow-sm transition-all">
                            <span class="text-navy-900 font-serif font-bold text-2xl block mb-1">{{ $st['val'] }}</span>
                            <span class="text-slate-500 text-xs leading-relaxed">{{ $st['label'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ===== HEALTHCARE INITIATIVES ===== --}}
    <section class="py-24 bg-navy-950 relative overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:32px_32px]"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Healthy Communities</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-white mb-4">Healthcare Initiatives</h2>
                <p class="text-slate-400 text-base leading-relaxed">Bridging the healthcare gap in underserved communities through mobile clinics, free treatments, and medical infrastructure.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $health = [
                        ['title' => 'Free Medical Camps', 'desc' => 'Monthly camps in 15 districts with specialist doctors, diagnostics, and free medications for all.', 'stat' => '48 camps/year', 'icon' => '🏥'],
                        ['title' => 'Mobile Health Units', 'desc' => '5 fully equipped mobile medical vans serving remote areas unreachable by traditional facilities.', 'stat' => '5 mobile units', 'icon' => '🚑'],
                        ['title' => 'Maternal Health Program', 'desc' => 'Pre/postnatal care, safe delivery support, and infant nutrition programs for rural mothers.', 'stat' => '5,000+ mothers', 'icon' => '👶'],
                        ['title' => 'Eye Care Camps', 'desc' => 'Annual free cataract surgery and vision testing drives, restoring sight for thousands.', 'stat' => '3,000+ surgeries', 'icon' => '👁️'],
                    ];
                @endphp
                @foreach($health as $h)
                    <div class="bg-navy-900 border border-navy-800 rounded-xl p-6 hover:border-gold-600/30 transition-all duration-300 text-center">
                        <div class="text-4xl mb-4">{{ $h['icon'] }}</div>
                        <h3 class="text-white font-serif font-bold text-sm mb-3">{{ $h['title'] }}</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-4">{{ $h['desc'] }}</p>
                        <span class="inline-block px-3 py-1.5 rounded-full bg-gold-600/10 text-gold-600 text-xs font-semibold border border-gold-600/20">{{ $h['stat'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== ENVIRONMENTAL PROGRAMS ===== --}}
    <section class="py-24 bg-[#f4f6f9]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Planet First</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-4">Environmental Programs</h2>
                <p class="text-slate-500 text-base leading-relaxed">Concrete steps toward a greener Bangladesh — from renewable energy adoption to large-scale reforestation.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @php
                    $envPrograms = [
                        ['title' => 'Mangrove Reforestation', 'desc' => 'Restoring coastal ecosystems by planting 100,000 mangrove trees annually in Sundarbans-adjacent areas, providing natural storm barriers and carbon sequestration.', 'metric' => '3.5 Lakh trees planted', 'color' => 'border-l-green-500'],
                        ['title' => 'Solar Energy Transition', 'desc' => 'Installing solar panels across 12 company facilities with a target to generate 5MW of clean energy by 2026, reducing grid dependency by 30%.', 'metric' => '2.1 MW installed capacity', 'color' => 'border-l-yellow-500'],
                        ['title' => 'Zero-Plastic Operations', 'desc' => 'Phasing out all single-use plastics across offices, construction sites, and supply chains, replaced with biodegradable and recycled alternatives.', 'metric' => '85% plastic reduction', 'color' => 'border-l-blue-500'],
                        ['title' => 'Green Building Standards', 'desc' => 'All new real estate and infrastructure projects designed to LEED Gold or equivalent Bangladesh Green Building Council standards from 2024.', 'metric' => '4 LEED-certified projects', 'color' => 'border-l-emerald-500'],
                    ];
                @endphp
                @foreach($envPrograms as $ep)
                    <div class="bg-white rounded-xl border border-slate-100 border-l-4 {{ $ep['color'] }} p-7 hover:shadow-md transition-all duration-300">
                        <h3 class="text-navy-900 font-serif font-bold text-lg mb-3">{{ $ep['title'] }}</h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-4">{{ $ep['desc'] }}</p>
                        <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-green-50 text-green-700 text-xs font-semibold border border-green-100">
                            <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                            {{ $ep['metric'] }}
                        </span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== SDG ALIGNMENT ===== --}}
    <section id="sdg-alignment" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Global Goals</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-4">SDG Alignment</h2>
                <p class="text-slate-500 text-base leading-relaxed">Our operations and CSR programs are aligned with 12 of the 17 UN Sustainable Development Goals, driving measurable impact.</p>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4 mb-12">
                @php
                    $sdgs = [
                        ['num' => 'SDG 1', 'title' => 'No Poverty', 'color' => 'bg-red-600', 'emoji' => '🚫'],
                        ['num' => 'SDG 3', 'title' => 'Good Health', 'color' => 'bg-green-600', 'emoji' => '💚'],
                        ['num' => 'SDG 4', 'title' => 'Quality Education', 'color' => 'bg-red-700', 'emoji' => '📚'],
                        ['num' => 'SDG 5', 'title' => 'Gender Equality', 'color' => 'bg-orange-500', 'emoji' => '⚖️'],
                        ['num' => 'SDG 6', 'title' => 'Clean Water', 'color' => 'bg-blue-600', 'emoji' => '💧'],
                        ['num' => 'SDG 7', 'title' => 'Clean Energy', 'color' => 'bg-yellow-500', 'emoji' => '☀️'],
                        ['num' => 'SDG 8', 'title' => 'Decent Work', 'color' => 'bg-red-600', 'emoji' => '💼'],
                        ['num' => 'SDG 9', 'title' => 'Innovation', 'color' => 'bg-orange-600', 'emoji' => '🏗️'],
                        ['num' => 'SDG 10', 'title' => 'Reduced Inequality', 'color' => 'bg-pink-600', 'emoji' => '🤝'],
                        ['num' => 'SDG 11', 'title' => 'Sustainable Cities', 'color' => 'bg-orange-500', 'emoji' => '🏙️'],
                        ['num' => 'SDG 13', 'title' => 'Climate Action', 'color' => 'bg-green-700', 'emoji' => '🌍'],
                        ['num' => 'SDG 17', 'title' => 'Partnerships', 'color' => 'bg-blue-700', 'emoji' => '🌐'],
                    ];
                @endphp
                @foreach($sdgs as $sdg)
                    <div class="rounded-xl {{ $sdg['color'] }} p-4 text-center text-white hover:opacity-90 transition-opacity cursor-default">
                        <div class="text-2xl mb-1">{{ $sdg['emoji'] }}</div>
                        <div class="font-bold text-xs mb-0.5">{{ $sdg['num'] }}</div>
                        <div class="text-xxs opacity-90 leading-tight">{{ $sdg['title'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== CSR STATISTICS ===== --}}
    <section class="py-24 bg-navy-950 relative overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:32px_32px]"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Impact at a Glance</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-white mb-4">CSR Statistics</h2>
                <p class="text-slate-400 text-base leading-relaxed">Measurable impact across education, healthcare, environment, and community development.</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-10">
                @php
                    $csrStats = [
                        ['val' => '৳ 48 Cr', 'label' => 'CSR Spend FY 2024–25', 'sub' => '+26% vs prior year'],
                        ['val' => '1.2 Lakh', 'label' => 'Lives Impacted (Annual)', 'sub' => 'Across 20 districts'],
                        ['val' => '150+', 'label' => 'Community Projects', 'sub' => 'Since founding in 2001'],
                        ['val' => '12 SDGs', 'label' => 'UN Goals Aligned', 'sub' => 'Out of 17 total'],
                    ];
                @endphp
                @foreach($csrStats as $stat)
                    <div class="bg-navy-900 border border-navy-800 rounded-xl p-6 text-center gold-glow">
                        <span class="text-gold-600 font-serif font-bold text-2xl sm:text-3xl block mb-1">{{ $stat['val'] }}</span>
                        <span class="text-white text-xs font-semibold block mb-1">{{ $stat['label'] }}</span>
                        <span class="text-slate-500 text-xs">{{ $stat['sub'] }}</span>
                    </div>
                @endforeach
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                @php
                    $miniStats = [
                        ['val' => '2,500+', 'label' => 'Scholarships Given'],
                        ['val' => '35K+', 'label' => 'Medical Patients/Yr'],
                        ['val' => '3.5L', 'label' => 'Trees Planted'],
                        ['val' => '8,000+', 'label' => 'Women Empowered'],
                        ['val' => '200+', 'label' => 'Villages Served'],
                        ['val' => '50K+', 'label' => 'Flood Relief Families'],
                    ];
                @endphp
                @foreach($miniStats as $ms)
                    <div class="bg-navy-900/60 border border-navy-800 rounded-xl p-4 text-center">
                        <span class="text-gold-600 font-serif font-bold text-lg block mb-0.5">{{ $ms['val'] }}</span>
                        <span class="text-slate-500 text-xs leading-relaxed">{{ $ms['label'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
