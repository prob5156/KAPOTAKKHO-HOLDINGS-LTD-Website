@extends('layouts.app')

@section('title', 'Corporate Governance | Kapotakkhho Holdings Ltd.')

@section('content')

    {{-- ===== HERO BANNER ===== --}}
    <section class="relative min-h-[50vh] flex items-center bg-navy-950 overflow-hidden py-24">
        <div class="absolute inset-0 z-0 opacity-10">
            <div class="absolute inset-0 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:24px_24px]"></div>
        </div>
        <div class="absolute -right-24 -top-24 w-96 h-96 rounded-full bg-gold-600 filter blur-[140px] opacity-15 z-0"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full text-center">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-navy-900 border border-navy-800 text-gold-600 text-xs font-semibold uppercase tracking-wider mb-6">
                <span class="w-1.5 h-1.5 rounded-full bg-gold-600"></span>
                Corporate Governance
            </span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-serif text-white font-bold leading-tight mb-6">
                Governance Built on <span class="text-gold-600">Trust</span>
            </h1>
            <p class="text-slate-300 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed">
                Our governance framework ensures accountability, transparency, and ethical leadership at every level of Kapotakkhho Holdings Ltd.
            </p>
        </div>
    </section>

    {{-- ===== BOARD OF DIRECTORS ===== --}}
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Leadership</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-4">Board of Directors</h2>
                <p class="text-slate-500 text-base leading-relaxed">Our Board brings together distinguished leaders with deep expertise across industry, finance, law, and public policy.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $directors = [
                        ['name' => 'Mr. Abdul Karim Chowdhury', 'title' => 'Chairman & Founder', 'bio' => 'Visionary entrepreneur with 30+ years in real estate and infrastructure. Founding member of BGMEA and recipient of the National Commercial Award 2018.', 'tag' => 'Executive'],
                        ['name' => 'Mrs. Farida Begum', 'title' => 'Vice-Chairperson', 'bio' => 'Leading strategic diversification initiatives with expertise in corporate finance and mergers & acquisitions across the South Asian market.', 'tag' => 'Executive'],
                        ['name' => 'Mr. Rafiqul Islam, FCA', 'title' => 'Managing Director', 'bio' => 'Chartered Accountant with 25 years of operational leadership, driving Kapotakkhho\'s multi-sector growth strategy and financial governance.', 'tag' => 'Executive'],
                        ['name' => 'Prof. Dr. Zahirul Haque', 'title' => 'Independent Director', 'bio' => 'Former Vice-Chancellor of BUET with internationally recognized expertise in civil engineering, infrastructure policy and environmental sustainability.', 'tag' => 'Independent'],
                        ['name' => 'Ms. Nasreen Sultana', 'title' => 'Independent Director', 'bio' => 'Senior advocate of the Supreme Court of Bangladesh, specializing in corporate law, securities regulation, and stakeholder protection frameworks.', 'tag' => 'Independent'],
                        ['name' => 'Mr. Shafiqul Alam', 'title' => 'Director – Finance', 'bio' => 'Former Deputy Governor of Bangladesh Bank. Brings critical insights into monetary policy, credit risk management, and institutional finance.', 'tag' => 'Executive'],
                    ];
                    $tagColors = ['Executive' => 'bg-navy-900 text-gold-600', 'Independent' => 'bg-gold-600/10 text-gold-700'];
                @endphp
                @foreach($directors as $dir)
                    <div class="group bg-[#f4f6f9] rounded-xl border border-transparent hover:border-navy-800 hover:bg-navy-950 transition-all duration-300 p-7 cursor-default">
                        <div class="flex items-start gap-4 mb-5">
                            <div class="w-14 h-14 rounded-full bg-navy-950 group-hover:bg-gold-600/20 border-2 border-navy-800 group-hover:border-gold-600/40 flex items-center justify-center shrink-0 transition-all">
                                <svg class="w-7 h-7 text-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            </div>
                            <div>
                                <h3 class="text-navy-900 group-hover:text-white font-serif font-bold text-sm leading-tight mb-1 transition-colors">{{ $dir['name'] }}</h3>
                                <p class="text-gold-600 text-xs font-semibold">{{ $dir['title'] }}</p>
                            </div>
                        </div>
                        <span class="inline-block px-2.5 py-1 rounded-full {{ $tagColors[$dir['tag']] }} text-xs font-semibold mb-4">{{ $dir['tag'] }} Director</span>
                        <p class="text-slate-500 group-hover:text-slate-400 text-sm leading-relaxed transition-colors">{{ $dir['bio'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== EXECUTIVE MANAGEMENT ===== --}}
    <section class="py-24 bg-navy-950 relative overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:32px_32px]"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Senior Leadership</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-white mb-4">Executive Management Team</h2>
                <p class="text-slate-400 text-base leading-relaxed">Seasoned professionals steering each business division with strategic clarity and operational excellence.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $executives = [
                        ['name' => 'Mr. Tariq Hossain', 'role' => 'CEO', 'div' => 'Group Operations', 'exp' => '22 years'],
                        ['name' => 'Ms. Rubina Akhter', 'role' => 'CFO', 'div' => 'Group Finance', 'exp' => '18 years'],
                        ['name' => 'Engr. Kamal Uddin', 'role' => 'MD', 'div' => 'Engineering Division', 'exp' => '20 years'],
                        ['name' => 'Ms. Sadia Islam', 'role' => 'Director', 'div' => 'Real Estate', 'exp' => '15 years'],
                        ['name' => 'Mr. Noman Faruq', 'role' => 'Director', 'div' => 'Global Trade', 'exp' => '17 years'],
                        ['name' => 'Mr. Riaz Ahmed', 'role' => 'CTO', 'div' => 'Digital Division', 'exp' => '12 years'],
                        ['name' => 'Ms. Farzana Haque', 'role' => 'CHRO', 'div' => 'Human Resources', 'exp' => '14 years'],
                        ['name' => 'Mr. Sumon Das', 'role' => 'Director', 'div' => 'Infrastructure', 'exp' => '16 years'],
                    ];
                @endphp
                @foreach($executives as $exec)
                    <div class="bg-navy-900 border border-navy-800 rounded-xl p-5 hover:border-gold-600/30 transition-all duration-300">
                        <div class="w-11 h-11 rounded-lg bg-gold-600/10 border border-gold-600/20 flex items-center justify-center mb-4">
                            <svg class="w-5 h-5 text-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        </div>
                        <span class="inline-block px-2 py-0.5 rounded-full bg-gold-600/10 text-gold-600 text-xs font-bold mb-2">{{ $exec['role'] }}</span>
                        <h3 class="text-white font-semibold text-sm leading-tight mb-0.5">{{ $exec['name'] }}</h3>
                        <p class="text-slate-500 text-xs mb-1">{{ $exec['div'] }}</p>
                        <p class="text-slate-600 text-xs">{{ $exec['exp'] }} experience</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== GOVERNANCE POLICIES ===== --}}
    <section class="py-24 bg-[#f4f6f9]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Our Framework</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-4">Governance Policies</h2>
                <p class="text-slate-500 text-base leading-relaxed">Our comprehensive governance policies are designed to safeguard stakeholder interests and ensure responsible corporate conduct.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @php
                    $policies = [
                        ['title' => 'Board Diversity Policy', 'desc' => 'We are committed to achieving a Board composition that reflects a balance of skills, experience, independence, and diversity — including gender, age, and professional background.', 'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0'],
                        ['title' => 'Related Party Transactions Policy', 'desc' => 'All transactions with related parties are conducted at arm\'s length, reviewed by independent directors, and disclosed in our annual reports in full compliance with applicable regulations.', 'icon' => 'M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4'],
                        ['title' => 'Remuneration Policy', 'desc' => 'Executive compensation is structured to align with long-term performance metrics, shareholder value creation, and benchmarked against industry peers by an independent Remuneration Committee.', 'icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                        ['title' => 'Insider Trading Prevention', 'desc' => 'A strict insider trading policy with defined trading windows, compliance certificates, and mandatory pre-clearance ensures the highest standards of market integrity.', 'icon' => 'M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636'],
                        ['title' => 'Disclosure & Transparency Policy', 'desc' => 'Material information is disclosed promptly and fairly to all stakeholders, with no selective or preferential disclosure, ensuring an informed investor community.', 'icon' => 'M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z'],
                        ['title' => 'Conflict of Interest Policy', 'desc' => 'Board members and employees are required to declare any actual or perceived conflicts of interest and recuse themselves from decisions where such conflicts exist.', 'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'],
                    ];
                @endphp
                @foreach($policies as $policy)
                    <div class="bg-white rounded-xl border border-slate-100 p-7 hover:shadow-md hover:border-gold-600/30 transition-all duration-300 flex gap-5">
                        <div class="w-11 h-11 rounded-lg bg-navy-950 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $policy['icon'] }}"></path></svg>
                        </div>
                        <div>
                            <h3 class="text-navy-900 font-serif font-bold text-sm mb-2">{{ $policy['title'] }}</h3>
                            <p class="text-slate-500 text-sm leading-relaxed">{{ $policy['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== ETHICS & COMPLIANCE ===== --}}
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Integrity in Action</span>
                    <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-6 leading-tight">Ethics &<br>Compliance</h2>
                    <p class="text-slate-500 text-base leading-relaxed mb-8">At Kapotakkhho, ethical conduct is not merely a compliance obligation — it is the cornerstone of every business decision, relationship, and strategy we pursue.</p>
                    <div class="space-y-5">
                        @php
                            $ethics = [
                                ['title' => 'Code of Business Ethics', 'desc' => 'Mandatory code binding all employees, directors, and business partners to the highest standards of professional conduct.'],
                                ['title' => 'Anti-Bribery & Anti-Corruption', 'desc' => 'Zero-tolerance policy on bribery and corruption, with annual mandatory training for all staff grades.'],
                                ['title' => 'Whistleblower Protection', 'desc' => 'Anonymous reporting channels and strict protections for individuals who report unethical or illegal conduct in good faith.'],
                                ['title' => 'Compliance Audits', 'desc' => 'Independent internal and external compliance audits conducted bi-annually across all business divisions.'],
                            ];
                        @endphp
                        @foreach($ethics as $e)
                            <div class="flex items-start gap-4">
                                <div class="w-8 h-8 rounded-full bg-gold-600/10 border border-gold-600/30 flex items-center justify-center shrink-0 mt-0.5">
                                    <svg class="w-4 h-4 text-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-navy-900 font-semibold text-sm mb-0.5">{{ $e['title'] }}</h4>
                                    <p class="text-slate-500 text-sm leading-relaxed">{{ $e['desc'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="space-y-5">
                    <div class="bg-navy-950 rounded-xl border border-navy-800 p-8 gold-glow">
                        <h3 class="text-white font-serif font-bold text-xl mb-5">Compliance Statistics</h3>
                        <div class="grid grid-cols-2 gap-5">
                            @php
                                $compStats = [
                                    ['val' => '100%', 'label' => 'Policy Compliance Rate'],
                                    ['val' => '0', 'label' => 'Regulatory Violations (5 Yrs)'],
                                    ['val' => '98%', 'label' => 'Ethics Training Completion'],
                                    ['val' => '24/7', 'label' => 'Whistleblower Hotline'],
                                ];
                            @endphp
                            @foreach($compStats as $s)
                                <div class="bg-navy-900 rounded-lg border border-navy-800 p-5 text-center">
                                    <span class="text-gold-600 font-serif font-bold text-2xl block mb-1">{{ $s['val'] }}</span>
                                    <span class="text-slate-400 text-xs leading-relaxed">{{ $s['label'] }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="bg-[#f4f6f9] rounded-xl border border-slate-100 p-6">
                        <h4 class="text-navy-900 font-semibold text-sm mb-3">Report an Ethics Concern</h4>
                        <p class="text-slate-500 text-sm leading-relaxed mb-4">All reports are treated with strict confidentiality. You may report anonymously.</p>
                        <a href="mailto:ethics@kapotakkhho.com" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-sm bg-navy-950 text-gold-600 text-xs font-bold uppercase tracking-wider hover:bg-gold-600 hover:text-navy-950 transition-all">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            ethics@kapotakkhho.com
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== RISK MANAGEMENT ===== --}}
    <section class="py-24 bg-[#f4f6f9]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Risk Framework</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-navy-900 mb-4">Risk Management</h2>
                <p class="text-slate-500 text-base leading-relaxed">A robust Enterprise Risk Management (ERM) framework ensures our operations remain resilient in the face of evolving business and macroeconomic conditions.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $risks = [
                        ['category' => 'Market Risk', 'level' => 'Medium', 'color' => 'text-yellow-600 bg-yellow-50', 'bar' => 'bg-yellow-400', 'pct' => 55, 'mitigation' => 'Portfolio diversification across uncorrelated sectors, hedging strategies, and regular market scenario analysis.'],
                        ['category' => 'Credit Risk', 'level' => 'Low', 'color' => 'text-green-600 bg-green-50', 'bar' => 'bg-green-500', 'pct' => 25, 'mitigation' => 'Rigorous counterparty due diligence, credit limits, and insurance coverage across all trade receivables.'],
                        ['category' => 'Operational Risk', 'level' => 'Low', 'color' => 'text-green-600 bg-green-50', 'bar' => 'bg-green-500', 'pct' => 30, 'mitigation' => 'ISO-certified process controls, business continuity plans, and regular operational audits.'],
                        ['category' => 'Regulatory Risk', 'level' => 'Low', 'color' => 'text-green-600 bg-green-50', 'bar' => 'bg-green-500', 'pct' => 20, 'mitigation' => 'Dedicated legal team monitoring regulatory changes, and proactive engagement with regulators.'],
                        ['category' => 'Reputational Risk', 'level' => 'Low', 'color' => 'text-green-600 bg-green-50', 'bar' => 'bg-green-500', 'pct' => 15, 'mitigation' => 'Strong ESG framework, stakeholder engagement programs, and transparent communication practices.'],
                        ['category' => 'Cyber & Data Risk', 'level' => 'Medium', 'color' => 'text-yellow-600 bg-yellow-50', 'bar' => 'bg-yellow-400', 'pct' => 45, 'mitigation' => 'ISO 27001-aligned security policies, penetration testing, employee security training, and incident response plans.'],
                    ];
                @endphp
                @foreach($risks as $risk)
                    <div class="bg-white rounded-xl border border-slate-100 p-7 hover:shadow-md hover:border-gold-600/20 transition-all duration-300">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-navy-900 font-serif font-bold text-sm">{{ $risk['category'] }}</h3>
                            <span class="px-2.5 py-1 rounded-full text-xs font-semibold {{ $risk['color'] }}">{{ $risk['level'] }}</span>
                        </div>
                        <div class="mb-4">
                            <div class="flex justify-between text-xs text-slate-400 mb-1.5">
                                <span>Risk Exposure</span>
                                <span>{{ $risk['pct'] }}%</span>
                            </div>
                            <div class="h-2 bg-slate-100 rounded-full overflow-hidden">
                                <div class="{{ $risk['bar'] }} h-full rounded-full" style="width:{{ $risk['pct'] }}%"></div>
                            </div>
                        </div>
                        <p class="text-slate-500 text-xs leading-relaxed">{{ $risk['mitigation'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== ORGANIZATION STRUCTURE ===== --}}
    <section class="py-24 bg-navy-950 relative overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:32px_32px]"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Structure</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-white mb-4">Organization Structure</h2>
                <p class="text-slate-400 text-base leading-relaxed">A clear governance hierarchy that ensures accountability at every operational level.</p>
            </div>
            {{-- Org Chart --}}
            <div class="flex flex-col items-center gap-0">
                {{-- Level 1 --}}
                <div class="flex justify-center">
                    <div class="bg-gold-600 text-navy-950 rounded-xl px-8 py-4 text-center shadow-lg">
                        <span class="font-serif font-bold text-base block">Board of Directors</span>
                        <span class="text-navy-800 text-xs">6 Members (3 Independent)</span>
                    </div>
                </div>
                {{-- Connector --}}
                <div class="w-0.5 h-8 bg-gold-600 opacity-40"></div>
                {{-- Level 2 --}}
                <div class="flex flex-wrap justify-center gap-4">
                    @php $l2 = ['Audit Committee', 'Remuneration Committee', 'Risk Committee', 'Nomination Committee']; @endphp
                    @foreach($l2 as $node)
                        <div class="bg-navy-900 border border-navy-800 rounded-lg px-5 py-3 text-center min-w-[160px]">
                            <span class="text-white text-xs font-semibold block">{{ $node }}</span>
                        </div>
                    @endforeach
                </div>
                <div class="w-0.5 h-8 bg-navy-700 opacity-40"></div>
                {{-- Level 3 --}}
                <div class="flex justify-center">
                    <div class="bg-navy-800 border border-navy-700 rounded-xl px-8 py-4 text-center">
                        <span class="text-gold-600 font-serif font-bold text-sm block">Managing Director & CEO</span>
                        <span class="text-slate-400 text-xs">Group Executive Leadership</span>
                    </div>
                </div>
                <div class="w-0.5 h-8 bg-navy-700 opacity-40"></div>
                {{-- Level 4 --}}
                <div class="flex flex-wrap justify-center gap-3">
                    @php $l4 = ['CFO', 'CHRO', 'CTO', 'COO – Properties', 'COO – Engineering', 'COO – Trade']; @endphp
                    @foreach($l4 as $node)
                        <div class="bg-navy-900 border border-navy-800 rounded-lg px-4 py-2.5 text-center min-w-[130px]">
                            <span class="text-slate-300 text-xs font-semibold">{{ $node }}</span>
                        </div>
                    @endforeach
                </div>
                <div class="w-0.5 h-8 bg-navy-700 opacity-40"></div>
                {{-- Level 5 --}}
                <div class="flex justify-center">
                    <div class="bg-navy-900/60 border border-navy-800 rounded-lg px-8 py-3 text-center">
                        <span class="text-slate-400 text-xs">Division Heads → Department Managers → Team Leaders → Staff</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
