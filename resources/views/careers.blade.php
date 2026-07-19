@extends('layouts.app')

@section('title', 'Careers | Kapotakkhho Holdings Ltd.')

@section('content')

    {{-- ===== HERO BANNER ===== --}}
    <section class="relative min-h-[55vh] flex items-center bg-navy-950 overflow-hidden py-24">
        <div class="absolute inset-0 z-0 opacity-10">
            <div class="absolute inset-0 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:24px_24px]"></div>
        </div>
        <div class="absolute -left-20 -bottom-20 w-96 h-96 rounded-full bg-gold-600 filter blur-[140px] opacity-15 z-0"></div>
        <div class="absolute right-0 top-0 w-64 h-64 rounded-full bg-navy-700 filter blur-[100px] opacity-20 z-0"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-navy-900 border border-navy-800 text-gold-600 text-xs font-semibold uppercase tracking-wider mb-6">
                        <span class="w-1.5 h-1.5 rounded-full bg-gold-600 animate-pulse"></span>
                        We Are Hiring
                    </span>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-serif text-white font-bold leading-tight mb-6">
                        Build Your <span class="text-gold-600">Future</span><br>With Us
                    </h1>
                    <p class="text-slate-300 text-base sm:text-lg max-w-xl leading-relaxed mb-8">
                        Join Kapotakkhho Holdings Ltd. — where ambitious professionals shape the next chapter of Bangladesh's most dynamic conglomerate.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#open-positions" class="px-8 py-3.5 bg-gold-600 text-navy-950 font-bold rounded-sm hover:bg-gold-500 transition-all text-sm uppercase tracking-wider shadow-lg">
                            View Open Positions
                        </a>
                        <a href="#apply-now" class="px-8 py-3.5 border border-navy-700 text-slate-300 font-semibold rounded-sm hover:border-gold-600 hover:text-gold-600 transition-all text-sm uppercase tracking-wider">
                            Apply Now
                        </a>
                    </div>
                </div>
                <div class="hidden lg:grid grid-cols-2 gap-4">
                    <div class="bg-navy-900/80 border border-navy-800 rounded-xl p-6 gold-glow">
                        <span class="text-gold-600 text-3xl font-serif font-bold block mb-1">500+</span>
                        <span class="text-slate-400 text-xs uppercase tracking-wider">Team Members</span>
                    </div>
                    <div class="bg-navy-900/80 border border-navy-800 rounded-xl p-6 mt-6">
                        <span class="text-gold-600 text-3xl font-serif font-bold block mb-1">6+</span>
                        <span class="text-slate-400 text-xs uppercase tracking-wider">Business Divisions</span>
                    </div>
                    <div class="bg-navy-900/80 border border-navy-800 rounded-xl p-6">
                        <span class="text-gold-600 text-3xl font-serif font-bold block mb-1">25+</span>
                        <span class="text-slate-400 text-xs uppercase tracking-wider">Years of Excellence</span>
                    </div>
                    <div class="bg-navy-900/80 border border-navy-800 rounded-xl p-6 mt-6 gold-glow">
                        <span class="text-gold-600 text-3xl font-serif font-bold block mb-1">15+</span>
                        <span class="text-slate-400 text-xs uppercase tracking-wider">Active Openings</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== WHY JOIN US ===== --}}
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Grow With Us</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-4">Why Join Kapotakkhho?</h2>
                <p class="text-slate-500 text-base leading-relaxed">Be part of a team that drives real economic impact. At Kapotakkhho, careers are shaped by purpose, growth, and lasting value.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $whyJoin = [
                        ['icon' => 'M13 10V3L4 14h7v7l9-11h-7z', 'title' => 'Career Acceleration', 'desc' => 'Fast-track your career with structured development programs, mentorship, and clear promotion pathways.'],
                        ['icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z', 'title' => 'Collaborative Culture', 'desc' => 'Work alongside Bangladesh\'s brightest minds in a diverse, inclusive, and high-performance environment.'],
                        ['icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'Competitive Compensation', 'desc' => 'Market-leading salaries, performance bonuses, and comprehensive financial benefits to reward your contributions.'],
                        ['icon' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z', 'title' => 'Innovation Driven', 'desc' => 'Bring your ideas to life. We foster a culture where innovation is encouraged and change-makers are celebrated.'],
                        ['icon' => 'M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9', 'title' => 'National Impact', 'desc' => 'Your work directly contributes to Bangladesh\'s economic development, infrastructure, and social progress.'],
                        ['icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253', 'title' => 'Learning & Development', 'desc' => 'Access world-class training programs, international conferences, and continuous upskilling opportunities.'],
                    ];
                @endphp
                @foreach($whyJoin as $item)
                    <div class="group bg-[#f4f6f9] hover:bg-navy-950 rounded-xl p-8 border border-transparent hover:border-navy-800 transition-all duration-300 cursor-default">
                        <div class="w-12 h-12 rounded-lg bg-gold-600/10 group-hover:bg-gold-600/20 border border-gold-600/20 flex items-center justify-center mb-5 transition-all">
                            <svg class="w-6 h-6 text-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $item['icon'] }}"></path>
                            </svg>
                        </div>
                        <h3 class="text-navy-900 group-hover:text-white font-serif font-bold text-lg mb-3 transition-colors">{{ $item['title'] }}</h3>
                        <p class="text-slate-500 group-hover:text-slate-400 text-sm leading-relaxed transition-colors">{{ $item['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== COMPANY CULTURE ===== --}}
    <section class="py-24 bg-navy-950 overflow-hidden relative">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:32px_32px]"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Our DNA</span>
                    <h2 class="text-3xl sm:text-4xl font-serif font-bold text-white mb-6 leading-tight">A Culture That<br>Empowers Champions</h2>
                    <p class="text-slate-400 text-base leading-relaxed mb-8">
                        At Kapotakkhho, we believe culture is our ultimate competitive advantage. Our environment is built on mutual respect, bold ambition, and a relentless commitment to excellence. Every team member is valued as a vital contributor to our collective success.
                    </p>
                    <div class="space-y-5">
                        @php
                            $values = [
                                ['label' => 'Integrity First', 'desc' => 'We uphold the highest ethical standards in every business decision.'],
                                ['label' => 'Ownership Mindset', 'desc' => 'Our people take full ownership of their roles and outcomes.'],
                                ['label' => 'Collective Growth', 'desc' => 'When the company grows, every team member grows with it.'],
                                ['label' => 'Diversity & Inclusion', 'desc' => 'We celebrate diverse perspectives as the foundation of innovation.'],
                            ];
                        @endphp
                        @foreach($values as $v)
                            <div class="flex items-start gap-4">
                                <div class="w-8 h-8 rounded-full bg-gold-600/15 border border-gold-600/30 flex items-center justify-center shrink-0 mt-0.5">
                                    <svg class="w-4 h-4 text-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-white font-semibold text-sm mb-0.5">{{ $v['label'] }}</h4>
                                    <p class="text-slate-400 text-sm leading-relaxed">{{ $v['desc'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="rounded-xl bg-navy-900 border border-navy-800 p-6 gold-glow col-span-2">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 rounded-lg bg-gold-600/20 flex items-center justify-center">
                                <svg class="w-5 h-5 text-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                            </div>
                            <span class="text-white font-semibold text-sm">Employee Recognition</span>
                        </div>
                        <p class="text-slate-400 text-sm leading-relaxed">We celebrate wins big and small. Our quarterly awards program recognizes outstanding contributors across all business divisions.</p>
                    </div>
                    <div class="rounded-xl bg-navy-900 border border-navy-800 p-6">
                        <span class="text-gold-600 text-2xl font-serif font-bold block mb-1">93%</span>
                        <span class="text-slate-400 text-xs">Employee Satisfaction Rate</span>
                    </div>
                    <div class="rounded-xl bg-navy-900 border border-navy-800 p-6">
                        <span class="text-gold-600 text-2xl font-serif font-bold block mb-1">4.7★</span>
                        <span class="text-slate-400 text-xs">Avg. Workplace Rating</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== EMPLOYEE BENEFITS ===== --}}
    <section class="py-24 bg-[#f4f6f9]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Perks & Benefits</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-4">Total Rewards Package</h2>
                <p class="text-slate-500 text-base leading-relaxed">We invest in our people with a comprehensive benefits package that supports your professional and personal wellbeing.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $benefits = [
                        ['icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z', 'title' => 'Health & Wellness', 'items' => ['Comprehensive medical insurance', 'Dental & vision coverage', 'Mental health support', 'Annual health checkups']],
                        ['icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'Work-Life Balance', 'items' => ['Flexible working hours', 'Remote work options', '20+ annual leave days', 'Paid parental leave']],
                        ['icon' => 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6', 'title' => 'Financial Benefits', 'items' => ['Performance bonuses', 'Provident fund (PF)', 'Festival bonuses', 'Profit-sharing scheme']],
                        ['icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253', 'title' => 'Growth & Learning', 'items' => ['Training & certifications', 'Conference sponsorships', 'MBA support program', 'Leadership coaching']],
                    ];
                @endphp
                @foreach($benefits as $benefit)
                    <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-7 hover:shadow-md hover:border-gold-600/30 transition-all duration-300">
                        <div class="w-11 h-11 rounded-lg bg-navy-950 flex items-center justify-center mb-5">
                            <svg class="w-5 h-5 text-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $benefit['icon'] }}"></path>
                            </svg>
                        </div>
                        <h3 class="text-navy-900 font-serif font-bold text-base mb-4">{{ $benefit['title'] }}</h3>
                        <ul class="space-y-2">
                            @foreach($benefit['items'] as $item)
                                <li class="flex items-center gap-2 text-slate-500 text-sm">
                                    <span class="w-1.5 h-1.5 rounded-full bg-gold-600 shrink-0"></span>
                                    {{ $item }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== RECRUITMENT PROCESS ===== --}}
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Hiring Journey</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-4">Our Recruitment Process</h2>
                <p class="text-slate-500 text-base leading-relaxed">Our transparent, candidate-centric process is designed to identify exceptional talent and ensure the best mutual fit.</p>
            </div>
            <div class="relative">
                {{-- Connector line --}}
                <div class="hidden lg:block absolute top-10 left-[calc(10%+2rem)] right-[calc(10%+2rem)] h-0.5 bg-gradient-to-r from-gold-600 via-navy-200 to-gold-600 opacity-30"></div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
                    @php
                        $steps = [
                            ['num' => '01', 'title' => 'Application', 'desc' => 'Submit your application and resume through our online portal or via email.'],
                            ['num' => '02', 'title' => 'Screening', 'desc' => 'Our HR team reviews applications and shortlists qualified candidates.'],
                            ['num' => '03', 'title' => 'Interview', 'desc' => 'Multi-stage interviews with HR, department heads, and senior leadership.'],
                            ['num' => '04', 'title' => 'Assessment', 'desc' => 'Skill-based assessments and technical evaluations relevant to the role.'],
                            ['num' => '05', 'title' => 'Offer', 'desc' => 'Selected candidates receive a competitive offer and onboarding plan.'],
                        ];
                    @endphp
                    @foreach($steps as $step)
                        <div class="flex flex-col items-center text-center">
                            <div class="w-20 h-20 rounded-full bg-navy-950 border-4 border-gold-600 flex items-center justify-center mb-5 shadow-lg relative z-10">
                                <span class="text-gold-600 font-serif font-bold text-xl">{{ $step['num'] }}</span>
                            </div>
                            <h3 class="text-navy-900 font-serif font-bold text-base mb-2">{{ $step['title'] }}</h3>
                            <p class="text-slate-500 text-sm leading-relaxed">{{ $step['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ===== CURRENT OPEN POSITIONS ===== --}}
    <section id="open-positions" class="py-24 bg-[#f4f6f9]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Current Openings</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-4">Open Positions</h2>
                <p class="text-slate-500 text-base leading-relaxed">Explore our current vacancies across our diverse business divisions and find your perfect role.</p>
            </div>

            {{-- Filter Tabs --}}
            <div class="flex flex-wrap justify-center gap-3 mb-10" id="job-filters">
                @php
                    $filters = ['All', 'Corporate', 'Engineering', 'Finance', 'Real Estate', 'Digital', 'Trade'];
                @endphp
                @foreach($filters as $i => $filter)
                    <button onclick="filterJobs('{{ $filter }}')" data-filter="{{ $filter }}"
                        class="job-filter-btn px-5 py-2 rounded-full text-xs font-semibold uppercase tracking-wider border transition-all {{ $i === 0 ? 'bg-gold-600 text-navy-950 border-gold-600' : 'bg-white text-slate-600 border-slate-200 hover:border-gold-600 hover:text-gold-600' }}">
                        {{ $filter }}
                    </button>
                @endforeach
            </div>

            @php
                $positions = [
                    ['title' => 'Chief Financial Officer', 'dept' => 'Finance', 'type' => 'Full-time', 'loc' => 'Dhaka, Bangladesh', 'exp' => '12+ years', 'badge' => 'Senior'],
                    ['title' => 'Senior Civil Engineer', 'dept' => 'Engineering', 'type' => 'Full-time', 'loc' => 'Dhaka, Bangladesh', 'exp' => '8+ years', 'badge' => 'Senior'],
                    ['title' => 'Real Estate Portfolio Manager', 'dept' => 'Real Estate', 'type' => 'Full-time', 'loc' => 'Dhaka, Bangladesh', 'exp' => '6+ years', 'badge' => 'Mid-Level'],
                    ['title' => 'Digital Marketing Specialist', 'dept' => 'Digital', 'type' => 'Full-time', 'loc' => 'Dhaka, Bangladesh', 'exp' => '3+ years', 'badge' => 'Mid-Level'],
                    ['title' => 'HR Business Partner', 'dept' => 'Corporate', 'type' => 'Full-time', 'loc' => 'Dhaka, Bangladesh', 'exp' => '5+ years', 'badge' => 'Mid-Level'],
                    ['title' => 'International Trade Executive', 'dept' => 'Trade', 'type' => 'Full-time', 'loc' => 'Dhaka, Bangladesh', 'exp' => '4+ years', 'badge' => 'Mid-Level'],
                    ['title' => 'Full-Stack Developer', 'dept' => 'Digital', 'type' => 'Full-time', 'loc' => 'Remote / Dhaka', 'exp' => '3+ years', 'badge' => 'Mid-Level'],
                    ['title' => 'Corporate Legal Counsel', 'dept' => 'Corporate', 'type' => 'Full-time', 'loc' => 'Dhaka, Bangladesh', 'exp' => '7+ years', 'badge' => 'Senior'],
                    ['title' => 'Financial Analyst', 'dept' => 'Finance', 'type' => 'Full-time', 'loc' => 'Dhaka, Bangladesh', 'exp' => '2+ years', 'badge' => 'Junior'],
                    ['title' => 'Structural Engineer', 'dept' => 'Engineering', 'type' => 'Full-time', 'loc' => 'Chittagong, Bangladesh', 'exp' => '5+ years', 'badge' => 'Mid-Level'],
                    ['title' => 'Project Coordinator', 'dept' => 'Real Estate', 'type' => 'Full-time', 'loc' => 'Dhaka, Bangladesh', 'exp' => '3+ years', 'badge' => 'Mid-Level'],
                    ['title' => 'Supply Chain Manager', 'dept' => 'Trade', 'type' => 'Full-time', 'loc' => 'Dhaka, Bangladesh', 'exp' => '6+ years', 'badge' => 'Senior'],
                ];
                $badgeColors = ['Senior' => 'text-gold-600 bg-gold-600/10', 'Mid-Level' => 'text-blue-600 bg-blue-50', 'Junior' => 'text-green-600 bg-green-50'];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5" id="jobs-grid">
                @foreach($positions as $pos)
                    <div class="job-card bg-white rounded-xl border border-slate-100 p-6 hover:border-gold-600/40 hover:shadow-md transition-all duration-300 flex flex-col sm:flex-row items-start sm:items-center gap-4"
                         data-dept="{{ $pos['dept'] }}">
                        <div class="w-12 h-12 rounded-lg bg-navy-950 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex flex-wrap items-center gap-2 mb-1">
                                <h3 class="text-navy-900 font-semibold text-sm">{{ $pos['title'] }}</h3>
                                <span class="px-2 py-0.5 rounded-full text-xs font-semibold {{ $badgeColors[$pos['badge']] }}">{{ $pos['badge'] }}</span>
                            </div>
                            <div class="flex flex-wrap gap-x-4 gap-y-1 text-xs text-slate-500">
                                <span>{{ $pos['dept'] }}</span>
                                <span class="flex items-center gap-1">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                                    {{ $pos['loc'] }}
                                </span>
                                <span>{{ $pos['exp'] }} exp.</span>
                            </div>
                        </div>
                        <a href="#apply-now" class="shrink-0 px-4 py-2 rounded-sm bg-navy-950 text-gold-600 text-xs font-semibold uppercase tracking-wider hover:bg-gold-600 hover:text-navy-950 transition-all">
                            Apply
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== INTERNSHIP PROGRAM ===== --}}
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative rounded-2xl overflow-hidden bg-navy-950 border border-navy-800 p-10 gold-glow">
                    <div class="absolute inset-0 opacity-5 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:20px_20px]"></div>
                    <div class="relative z-10">
                        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-gold-600/10 border border-gold-600/20 text-gold-600 text-xs font-semibold uppercase tracking-wider mb-6">
                            <span class="w-1.5 h-1.5 rounded-full bg-gold-600"></span>
                            Applications Open
                        </div>
                        <h3 class="text-white font-serif font-bold text-2xl mb-4">Kapotakkhho Internship Program</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6">Our flagship internship program connects high-potential students with real-world business challenges across our 6+ divisions. Gain exposure, mentorship, and hands-on experience.</p>
                        <div class="grid grid-cols-2 gap-4 mb-8">
                            @php
                                $internStats = [['val' => '3–6 Months', 'label' => 'Duration'], ['val' => 'Stipend', 'label' => 'Monthly Allowance'], ['val' => '50+', 'label' => 'Spots Available'], ['val' => '85%', 'label' => 'PPO Rate']];
                            @endphp
                            @foreach($internStats as $stat)
                                <div class="bg-navy-900 border border-navy-800 rounded-lg p-4">
                                    <span class="text-gold-600 font-serif font-bold text-lg block">{{ $stat['val'] }}</span>
                                    <span class="text-slate-500 text-xs">{{ $stat['label'] }}</span>
                                </div>
                            @endforeach
                        </div>
                        <a href="#apply-now" class="inline-flex items-center gap-2 px-6 py-3 bg-gold-600 text-navy-950 font-bold text-sm rounded-sm hover:bg-gold-500 transition-all uppercase tracking-wider">
                            Apply for Internship
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                </div>
                <div>
                    <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Internship Program</span>
                    <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-6 leading-tight">Launch Your Career<br>The Right Way</h2>
                    <p class="text-slate-500 text-base leading-relaxed mb-8">Our internship program is more than just work experience — it's a launchpad. We pair each intern with a dedicated mentor, assign real projects, and provide structured feedback throughout the journey.</p>
                    <div class="space-y-4">
                        @php
                            $internBenefits = [
                                'Dedicated mentor from senior management',
                                'Real project ownership and accountability',
                                'Cross-divisional exposure and rotations',
                                'Weekly learning sessions and workshops',
                                'Networking with industry leaders',
                                'Pre-placement offer (PPO) opportunity',
                            ];
                        @endphp
                        @foreach($internBenefits as $b)
                            <div class="flex items-center gap-3">
                                <div class="w-6 h-6 rounded-full bg-gold-600/10 border border-gold-600/20 flex items-center justify-center shrink-0">
                                    <svg class="w-3 h-3 text-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span class="text-slate-600 text-sm">{{ $b }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== GRADUATE OPPORTUNITIES ===== --}}
    <section class="py-24 bg-navy-950 relative overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:32px_32px]"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Graduate Program</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-white mb-4">Future Leaders Program</h2>
                <p class="text-slate-400 text-base leading-relaxed">Our 2-year graduate program is designed to accelerate top talent from Bangladesh's leading universities into future leadership roles at Kapotakkhho.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                @php
                    $gradPrograms = [
                        ['phase' => 'Year 1', 'title' => 'Foundation & Exposure', 'desc' => 'Rotate across 3 core business divisions to gain a comprehensive understanding of our operations.', 'color' => 'from-gold-600/20 to-gold-600/5'],
                        ['phase' => 'Year 2', 'title' => 'Specialization', 'desc' => 'Deepen expertise in your chosen domain with high-impact projects and senior mentorship.', 'color' => 'from-navy-700/40 to-navy-800/20'],
                        ['phase' => 'Post-Program', 'title' => 'Leadership Role', 'desc' => 'Graduates are placed in mid-to-senior roles with a clear path to leadership positions.', 'color' => 'from-gold-600/20 to-gold-600/5'],
                    ];
                @endphp
                @foreach($gradPrograms as $prog)
                    <div class="rounded-xl bg-gradient-to-br {{ $prog['color'] }} border border-navy-800 p-8">
                        <span class="inline-block px-3 py-1 rounded-full bg-gold-600/10 text-gold-600 text-xs font-bold uppercase tracking-wider mb-4">{{ $prog['phase'] }}</span>
                        <h3 class="text-white font-serif font-bold text-xl mb-3">{{ $prog['title'] }}</h3>
                        <p class="text-slate-400 text-sm leading-relaxed">{{ $prog['desc'] }}</p>
                    </div>
                @endforeach
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-6">
                @php
                    $gradStats = [
                        ['val' => 'BDT 45K+', 'label' => 'Starting Monthly Package'],
                        ['val' => '100%', 'label' => 'Placement Rate'],
                        ['val' => '15+', 'label' => 'Universities Partnered'],
                        ['val' => '2 Years', 'label' => 'Program Duration'],
                    ];
                @endphp
                @foreach($gradStats as $stat)
                    <div class="bg-navy-900 border border-navy-800 rounded-xl p-6 text-center gold-glow">
                        <span class="text-gold-600 font-serif font-bold text-xl block mb-1">{{ $stat['val'] }}</span>
                        <span class="text-slate-500 text-xs leading-relaxed">{{ $stat['label'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== APPLY NOW CTA ===== --}}
    <section id="apply-now" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto">
                <div class="text-center mb-12">
                    <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Ready to Join?</span>
                    <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-4">Apply Now</h2>
                    <p class="text-slate-500 text-base leading-relaxed">Send your CV and a cover letter to our HR team. We review all applications personally and respond within 5 business days.</p>
                </div>
                <form id="careers-form" class="bg-[#f4f6f9] rounded-2xl border border-slate-100 p-8 sm:p-10 space-y-6" onsubmit="event.preventDefault(); document.getElementById('careers-success').classList.remove('hidden'); this.reset();">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-semibold text-navy-900 uppercase tracking-wider mb-2" for="career-name">Full Name *</label>
                            <input id="career-name" type="text" required placeholder="Your full name" class="w-full bg-white border border-slate-200 rounded-lg px-4 py-3 text-sm text-navy-900 focus:outline-none focus:border-gold-600 transition-colors">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-navy-900 uppercase tracking-wider mb-2" for="career-email">Email Address *</label>
                            <input id="career-email" type="email" required placeholder="your@email.com" class="w-full bg-white border border-slate-200 rounded-lg px-4 py-3 text-sm text-navy-900 focus:outline-none focus:border-gold-600 transition-colors">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-navy-900 uppercase tracking-wider mb-2" for="career-phone">Phone Number</label>
                            <input id="career-phone" type="tel" placeholder="+880 1700 000000" class="w-full bg-white border border-slate-200 rounded-lg px-4 py-3 text-sm text-navy-900 focus:outline-none focus:border-gold-600 transition-colors">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-navy-900 uppercase tracking-wider mb-2" for="career-position">Position Applying For *</label>
                            <select id="career-position" required class="w-full bg-white border border-slate-200 rounded-lg px-4 py-3 text-sm text-navy-900 focus:outline-none focus:border-gold-600 transition-colors">
                                <option value="" disabled selected>Select a position</option>
                                <option>Chief Financial Officer</option>
                                <option>Senior Civil Engineer</option>
                                <option>Real Estate Portfolio Manager</option>
                                <option>Digital Marketing Specialist</option>
                                <option>HR Business Partner</option>
                                <option>International Trade Executive</option>
                                <option>Full-Stack Developer</option>
                                <option>Corporate Legal Counsel</option>
                                <option>Financial Analyst</option>
                                <option>Structural Engineer</option>
                                <option>Project Coordinator</option>
                                <option>Supply Chain Manager</option>
                                <option>Internship Program</option>
                                <option>Graduate Program</option>
                                <option>Other</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-navy-900 uppercase tracking-wider mb-2" for="career-message">Cover Letter / Message *</label>
                        <textarea id="career-message" rows="5" required placeholder="Tell us about yourself, your experience, and why you want to join Kapotakkhho..." class="w-full bg-white border border-slate-200 rounded-lg px-4 py-3 text-sm text-navy-900 focus:outline-none focus:border-gold-600 transition-colors resize-none"></textarea>
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-navy-900 uppercase tracking-wider mb-2" for="career-linkedin">LinkedIn Profile URL</label>
                        <input id="career-linkedin" type="url" placeholder="https://linkedin.com/in/yourprofile" class="w-full bg-white border border-slate-200 rounded-lg px-4 py-3 text-sm text-navy-900 focus:outline-none focus:border-gold-600 transition-colors">
                    </div>
                    <div id="careers-success" class="hidden bg-green-50 border border-green-200 rounded-lg px-5 py-4 text-green-700 text-sm font-medium">
                        ✅ Your application has been submitted! We'll be in touch within 5 business days.
                    </div>
                    <button type="submit" class="w-full py-4 bg-navy-950 text-gold-600 font-bold text-sm uppercase tracking-widest rounded-sm hover:bg-gold-600 hover:text-navy-950 transition-all duration-300 border border-navy-950 hover:border-gold-600">
                        Submit Application
                    </button>
                    <p class="text-center text-slate-400 text-xs">Or email your CV directly to: <a href="mailto:careers@kapotakkhho.com" class="text-gold-600 font-semibold hover:underline">careers@kapotakkhho.com</a></p>
                </form>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>
    // Job Filter Function
    function filterJobs(dept) {
        const cards = document.querySelectorAll('.job-card');
        const btns = document.querySelectorAll('.job-filter-btn');

        btns.forEach(btn => {
            btn.classList.remove('bg-gold-600', 'text-navy-950', 'border-gold-600');
            btn.classList.add('bg-white', 'text-slate-600', 'border-slate-200');
        });

        const activeBtn = document.querySelector(`[data-filter="${dept}"]`);
        if (activeBtn) {
            activeBtn.classList.remove('bg-white', 'text-slate-600', 'border-slate-200');
            activeBtn.classList.add('bg-gold-600', 'text-navy-950', 'border-gold-600');
        }

        cards.forEach(card => {
            const cardDept = card.getAttribute('data-dept');
            if (dept === 'All' || cardDept === dept) {
                card.style.display = 'flex';
            } else {
                card.style.display = 'none';
            }
        });
    }
</script>
@endpush
