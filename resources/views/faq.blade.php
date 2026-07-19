@extends('layouts.app')

@section('title', 'FAQ | Kapotakkhho Holdings Ltd.')

@section('content')

    {{-- ===== HERO BANNER ===== --}}
    <section class="relative min-h-[45vh] flex items-center bg-navy-950 overflow-hidden py-20">
        <div class="absolute inset-0 z-0 opacity-10">
            <div class="absolute inset-0 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:24px_24px]"></div>
        </div>
        <div class="absolute -right-20 -top-20 w-80 h-80 rounded-full bg-gold-600 filter blur-[120px] opacity-15 z-0"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full text-center">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-navy-900 border border-navy-800 text-gold-600 text-xs font-semibold uppercase tracking-wider mb-6">
                <span class="w-1.5 h-1.5 rounded-full bg-gold-600"></span>
                Help Center
            </span>
            <h1 class="text-4xl sm:text-5xl font-serif text-white font-bold leading-tight mb-4">
                Frequently Asked <span class="text-gold-600">Questions</span>
            </h1>
            <p class="text-slate-300 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed mb-8">
                Find answers to the most common questions about Kapotakkhho Holdings Ltd. — our business, careers, investments, and more.
            </p>
            <div class="max-w-xl mx-auto">
                <div class="relative">
                    <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    <input id="faq-search" type="text" placeholder="Search your question..." oninput="searchFAQ(this.value)"
                        class="w-full bg-navy-900 border border-navy-800 rounded-xl pl-12 pr-4 py-4 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-gold-600 transition-colors">
                </div>
            </div>
        </div>
    </section>

    {{-- ===== FAQ CATEGORY TABS ===== --}}
    <section class="py-6 bg-white border-b border-slate-100 sticky top-[96px] z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap gap-3 justify-center" id="faq-tabs">
                @php
                    $categories = ['All', 'General', 'Recruitment', 'Investor', 'Business', 'Governance', 'CSR'];
                @endphp
                @foreach($categories as $i => $cat)
                    <button onclick="filterFAQ('{{ $cat }}')" data-faqcat="{{ $cat }}"
                        class="faq-tab-btn px-5 py-2 rounded-full text-xs font-semibold uppercase tracking-wider border transition-all {{ $i === 0 ? 'bg-gold-600 text-navy-950 border-gold-600' : 'bg-white text-slate-600 border-slate-200 hover:border-gold-600 hover:text-gold-600' }}">
                        {{ $cat }}
                    </button>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== FAQ ACCORDION ===== --}}
    <section class="py-20 bg-[#f4f6f9]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            @php
                $faqs = [
                    // General
                    ['cat' => 'General', 'q' => 'What is Kapotakkhho Holdings Ltd.?', 'a' => 'Kapotakkhho Holdings Ltd. is a leading diversified conglomerate based in Bangladesh, founded in 2001. We operate across six core business divisions: Real Estate & Properties, Engineering & Construction, Global Trade, Infrastructure, Digital Services, and Energy. With over 25 years of operational excellence and 500+ team members, we are one of Bangladesh\'s most trusted corporate groups.'],
                    ['cat' => 'General', 'q' => 'Where is Kapotakkhho Holdings Ltd. headquartered?', 'a' => 'Our corporate headquarters is located at Kapotakkhho House, 72 Motijheel Commercial Area, Dhaka-1000, Bangladesh. We also have regional offices in Chittagong, Sylhet, and Rajshahi.'],
                    ['cat' => 'General', 'q' => 'What are the core business divisions of the group?', 'a' => 'Kapotakkhho Holdings operates through six principal divisions: (1) Kapotakkhho Properties — real estate development; (2) Kapotakkhho Engineering — civil and structural works; (3) Kapotakkhho Global Trade — import/export; (4) Kapotakkhho Infra Ltd. — infrastructure projects; (5) Kapotakkhho Digital — technology solutions; and our emerging Energy division.'],
                    ['cat' => 'General', 'q' => 'How can I contact Kapotakkhho Holdings Ltd.?', 'a' => 'You can reach us via phone at +880 2 9884571, email at info@kapotakkhho.com, or through our online contact form at the Contact page. For specific department queries, dedicated contact information is listed on our Contact page.'],
                    ['cat' => 'General', 'q' => 'Is Kapotakkhho Holdings a publicly listed company?', 'a' => 'Kapotakkhho Holdings Ltd. is currently a private limited company registered under the Companies Act 1994 of Bangladesh. We are actively exploring options for a public listing on the Dhaka Stock Exchange (DSE) as part of our 2025–30 strategic plan.'],

                    // Recruitment FAQs
                    ['cat' => 'Recruitment', 'q' => 'How do I apply for a job at Kapotakkhho Holdings?', 'a' => 'You can apply through our Careers page by filling out the online application form, or by sending your CV and cover letter directly to careers@kapotakkhho.com. Please specify the position you are applying for in the subject line. We review all applications personally.'],
                    ['cat' => 'Recruitment', 'q' => 'What is the typical recruitment process timeline?', 'a' => 'Our standard recruitment process takes 3–5 weeks from application to offer. It includes: (1) Application review — 5 business days; (2) HR screening call — Week 2; (3) Department interviews — Week 3; (4) Technical/skill assessment — Week 3–4; (5) Final interview with senior leadership — Week 4; (6) Offer letter — Week 5.'],
                    ['cat' => 'Recruitment', 'q' => 'Do you offer internship opportunities?', 'a' => 'Yes! We run the Kapotakkhho Internship Program twice annually (January and July intakes). Internships run 3–6 months with a monthly stipend, dedicated mentor, and real project ownership. We have an 85% Pre-Placement Offer (PPO) rate for outstanding interns. Apply via our Careers page.'],
                    ['cat' => 'Recruitment', 'q' => 'What is the Graduate Future Leaders Program?', 'a' => 'Our 2-year Graduate Program is designed for top fresh graduates from Bangladesh\'s leading universities. It includes a structured rotation across 3 business divisions in Year 1, followed by specialization in Year 2. Graduates receive BDT 45,000+ monthly package, mentorship from C-suite executives, and are placed in mid-to-senior roles upon completion.'],
                    ['cat' => 'Recruitment', 'q' => 'What benefits do Kapotakkhho employees receive?', 'a' => 'We offer a comprehensive Total Rewards Package including: competitive salary + performance bonuses, comprehensive medical insurance (self + family), dental and vision coverage, 20+ annual leave days, paid parental leave, provident fund (PF), festival bonuses, MBA support programs, training and certification sponsorships, and access to international conferences.'],
                    ['cat' => 'Recruitment', 'q' => 'Are there remote work options available?', 'a' => 'Yes, select roles — particularly within our Digital division — offer hybrid or fully remote work arrangements. This is clearly indicated in the job description. Most corporate and operational roles require in-office presence at our Dhaka headquarters or relevant project sites.'],

                    // Investor FAQs
                    ['cat' => 'Investor', 'q' => 'What are the latest financial highlights of the group?', 'a' => 'In FY 2024–25, Kapotakkhho Holdings achieved record revenue of ৳ 4,850 Crore (up 18.4% YoY), Net Profit After Tax of ৳ 920 Crore (+22.1% YoY), and a Return on Equity of 19.0%. Total assets stand at ৳ 12,300 Crore. We have maintained positive revenue growth for 10+ consecutive years.'],
                    ['cat' => 'Investor', 'q' => 'How can I access the Annual Report?', 'a' => 'Annual Reports are available for download from our Investor Relations page under the Download Center section. The FY 2024–25 Annual Report (148 pages) is the latest available. For physical copies or specific documents, contact our Investor Relations team at ir@kapotakkhho.com.'],
                    ['cat' => 'Investor', 'q' => 'What is Kapotakkhho\'s dividend policy?', 'a' => 'Kapotakkhho distributes 35% of Net Profit After Tax as annual dividends to shareholders. In FY 2024–25, total dividend payout was ৳ 322 Crore. Dividends are declared annually at the Annual General Meeting (AGM) and paid within 30 days of the declaration date.'],
                    ['cat' => 'Investor', 'q' => 'Who is the Investor Relations contact?', 'a' => 'Our Head of Investor Relations is Mr. Tanvir Ahmed, CFA. You can reach the IR team at ir@kapotakkhho.com or via the dedicated investor hotline at +880 2 9884575. We respond to all investor queries within 2 business days.'],
                    ['cat' => 'Investor', 'q' => 'What is the credit rating of the company?', 'a' => 'Kapotakkhho Holdings holds an AA (Stable) rating from CRISL Bangladesh — representing the highest creditworthiness category among private conglomerates. This reflects our strong financials, sound governance, and consistent cash flow generation.'],

                    // Business FAQs
                    ['cat' => 'Business', 'q' => 'How can my company become a supplier or vendor for Kapotakkhho?', 'a' => 'We welcome qualified suppliers across all divisions. Send your company profile, product/service catalogue, and relevant certifications to procurement@kapotakkhho.com. Our procurement team evaluates vendors on quality, compliance, financial stability, and ESG criteria. Approved vendors are added to our pre-qualified supplier database.'],
                    ['cat' => 'Business', 'q' => 'Does Kapotakkhho undertake joint venture projects?', 'a' => 'Yes, we actively pursue joint ventures, particularly in real estate development, infrastructure, and energy projects. Proposals can be submitted to our Business Development team at bd@kapotakkhho.com. We evaluate each opportunity based on strategic fit, market potential, and mutual value creation.'],
                    ['cat' => 'Business', 'q' => 'What types of infrastructure projects does Kapotakkhho execute?', 'a' => 'Through Kapotakkhho Infra Ltd., we execute roads and bridges, industrial parks, port facilities, power infrastructure, commercial real estate, and urban development projects. We are registered with the Government of Bangladesh for public procurement and have executed projects exceeding ৳ 5,000 Crore cumulatively.'],
                    ['cat' => 'Business', 'q' => 'How can I get a business proposal from Kapotakkhho?', 'a' => 'Click the "Get Proposal" button in our website navigation, or visit our Contact page. Provide your project scope, budget range, timeline, and contact details. Our Business Development team will reach out within 3 business days with an initial consultation and proposal outline.'],

                    // Governance FAQs
                    ['cat' => 'Governance', 'q' => 'How is the Board of Directors structured?', 'a' => 'Our Board consists of 6 directors: 3 Executive Directors (including the Chairman, Vice-Chairperson, and Managing Director) and 3 Independent Directors with expertise in engineering, law, and banking. The Board is supported by 4 specialized committees: Audit, Remuneration, Risk, and Nomination.'],
                    ['cat' => 'Governance', 'q' => 'How do you handle whistleblower reports?', 'a' => 'We have a dedicated, anonymous whistleblower channel (ethics@kapotakkhho.com and a 24/7 hotline). All reports are investigated by an independent compliance officer and the Audit Committee. We have a strict zero-retaliation policy. Report outcomes are reviewed by the Board quarterly.'],
                    ['cat' => 'Governance', 'q' => 'Where can I find governance policies and documents?', 'a' => 'All governance documents including Board Charter, Code of Business Ethics, Related Party Transaction Policy, and Remuneration Policy are available in the Download Center on our Investor Relations page. We update these annually in line with best practices and regulatory requirements.'],

                    // CSR FAQs
                    ['cat' => 'CSR', 'q' => 'How much does Kapotakkhho invest in CSR annually?', 'a' => 'In FY 2024–25, we invested ৳ 48 Crore in CSR and sustainability initiatives — a 26% increase over the previous year. This represents approximately 5.2% of our Net Profit After Tax. Our CSR budget is approved annually by the Board and allocated across education, healthcare, environment, and disaster relief.'],
                    ['cat' => 'CSR', 'q' => 'How can I apply for the Kapotakkhho Scholarship?', 'a' => 'The Kapotakkhho Scholarship Program opens applications every September. Eligible students (Class 6 to University level) from underprivileged backgrounds can apply through partner schools and institutions. Applications can also be submitted via email to scholarship@kapotakkhho.com. 500 scholarships are awarded annually across 20 districts.'],
                    ['cat' => 'CSR', 'q' => 'Can my NGO or organization partner with Kapotakkhho for CSR?', 'a' => 'We welcome partnerships with credible NGOs and social enterprises that align with our CSR focus areas (education, healthcare, environment, women empowerment). Submit a partnership proposal to csr@kapotakkhho.com. Our CSR Committee evaluates proposals quarterly based on impact potential, credibility, and geographic focus.'],
                ];
            @endphp

            <div id="faq-container" class="space-y-3">
                @foreach($faqs as $i => $faq)
                    <div class="faq-item bg-white rounded-xl border border-slate-100 overflow-hidden hover:border-gold-600/20 transition-all duration-200"
                         data-cat="{{ $faq['cat'] }}"
                         data-q="{{ strtolower($faq['q']) }}"
                         data-a="{{ strtolower($faq['a']) }}">
                        <button onclick="toggleFAQ({{ $i }})"
                            class="w-full flex items-center justify-between px-6 py-5 text-left group"
                            id="faq-btn-{{ $i }}" aria-expanded="false">
                            <div class="flex items-start gap-4 flex-1 min-w-0">
                                <span class="shrink-0 px-2 py-0.5 rounded-full bg-navy-950 text-gold-600 text-xs font-bold">{{ $faq['cat'] }}</span>
                                <span class="text-navy-900 font-semibold text-sm leading-relaxed group-hover:text-gold-600 transition-colors">{{ $faq['q'] }}</span>
                            </div>
                            <svg id="faq-icon-{{ $i }}" class="w-5 h-5 text-gold-600 shrink-0 ml-4 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="faq-answer-{{ $i }}" class="hidden px-6 pb-6">
                            <div class="pt-1 border-t border-slate-50">
                                <p class="text-slate-600 text-sm leading-relaxed mt-4">{{ $faq['a'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- No Results --}}
            <div id="faq-no-results" class="hidden text-center py-16">
                <div class="text-5xl mb-4">🔍</div>
                <h3 class="text-navy-900 font-serif font-bold text-xl mb-2">No results found</h3>
                <p class="text-slate-500 text-sm">Try different keywords or browse by category above.</p>
            </div>

        </div>
    </section>

    {{-- ===== CONTACT SUPPORT SECTION ===== --}}
    <section class="py-24 bg-navy-950 relative overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:32px_32px]"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-14">
                <span class="text-gold-600 font-bold text-xs uppercase tracking-widest mb-3 block">Still Have Questions?</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-white mb-4">Contact Our Support Team</h2>
                <p class="text-slate-400 text-base leading-relaxed">Our team is available Monday–Friday, 9 AM – 6 PM BST. We typically respond within 24 hours.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                @php
                    $support = [
                        ['title' => 'General Inquiries', 'val' => 'info@kapotakkhho.com', 'sub' => '+880 2 9884571', 'icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'href' => 'mailto:info@kapotakkhho.com'],
                        ['title' => 'Career Support', 'val' => 'careers@kapotakkhho.com', 'sub' => 'Response within 5 business days', 'icon' => 'M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'href' => 'mailto:careers@kapotakkhho.com'],
                        ['title' => 'Investor Relations', 'val' => 'ir@kapotakkhho.com', 'sub' => 'Response within 2 business days', 'icon' => 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6', 'href' => 'mailto:ir@kapotakkhho.com'],
                    ];
                @endphp
                @foreach($support as $s)
                    <a href="{{ $s['href'] }}" class="bg-navy-900 border border-navy-800 rounded-xl p-7 hover:border-gold-600/40 transition-all duration-300 group block">
                        <div class="w-11 h-11 rounded-lg bg-gold-600/10 border border-gold-600/20 flex items-center justify-center mb-4 group-hover:bg-gold-600/20 transition-all">
                            <svg class="w-5 h-5 text-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $s['icon'] }}"></path>
                            </svg>
                        </div>
                        <h3 class="text-white font-semibold text-sm mb-2">{{ $s['title'] }}</h3>
                        <p class="text-gold-600 text-sm font-medium mb-1">{{ $s['val'] }}</p>
                        <p class="text-slate-500 text-xs">{{ $s['sub'] }}</p>
                    </a>
                @endforeach
            </div>

            {{-- Quick Contact Form --}}
            <div class="max-w-2xl mx-auto bg-navy-900 border border-navy-800 rounded-2xl p-8">
                <h3 class="text-white font-serif font-bold text-xl mb-6 text-center">Send Us a Message</h3>
                <form id="faq-support-form" class="space-y-4" onsubmit="event.preventDefault(); document.getElementById('faq-support-success').classList.remove('hidden'); this.reset();">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2" for="faq-name">Your Name *</label>
                            <input id="faq-name" type="text" required placeholder="Full name" class="w-full bg-navy-950 border border-navy-800 rounded-lg px-4 py-3 text-sm text-white placeholder-slate-600 focus:outline-none focus:border-gold-600 transition-colors">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2" for="faq-email">Email Address *</label>
                            <input id="faq-email" type="email" required placeholder="your@email.com" class="w-full bg-navy-950 border border-navy-800 rounded-lg px-4 py-3 text-sm text-white placeholder-slate-600 focus:outline-none focus:border-gold-600 transition-colors">
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2" for="faq-dept">Department</label>
                        <select id="faq-dept" class="w-full bg-navy-950 border border-navy-800 rounded-lg px-4 py-3 text-sm text-white focus:outline-none focus:border-gold-600 transition-colors">
                            <option value="" disabled selected>Select department</option>
                            <option>General Inquiry</option>
                            <option>Human Resources / Careers</option>
                            <option>Investor Relations</option>
                            <option>Business Development</option>
                            <option>CSR / Sustainability</option>
                            <option>Media / Press</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2" for="faq-question">Your Question *</label>
                        <textarea id="faq-question" rows="4" required placeholder="Please type your question here..." class="w-full bg-navy-950 border border-navy-800 rounded-lg px-4 py-3 text-sm text-white placeholder-slate-600 focus:outline-none focus:border-gold-600 transition-colors resize-none"></textarea>
                    </div>
                    <div id="faq-support-success" class="hidden bg-green-900/40 border border-green-700 rounded-lg px-5 py-4 text-green-400 text-sm font-medium">
                        ✅ Your message has been sent! We will respond within 24 hours.
                    </div>
                    <button type="submit" class="w-full py-4 bg-gold-600 text-navy-950 font-bold text-sm uppercase tracking-widest rounded-sm hover:bg-gold-500 transition-all duration-300">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>
    // Toggle individual FAQ item
    function toggleFAQ(index) {
        const answer = document.getElementById('faq-answer-' + index);
        const icon = document.getElementById('faq-icon-' + index);
        const btn = document.getElementById('faq-btn-' + index);

        const isOpen = !answer.classList.contains('hidden');

        // Close all
        document.querySelectorAll('[id^="faq-answer-"]').forEach(el => el.classList.add('hidden'));
        document.querySelectorAll('[id^="faq-icon-"]').forEach(el => el.classList.remove('rotate-180'));
        document.querySelectorAll('[id^="faq-btn-"]').forEach(el => el.setAttribute('aria-expanded', 'false'));

        // Toggle current
        if (!isOpen) {
            answer.classList.remove('hidden');
            icon.classList.add('rotate-180');
            btn.setAttribute('aria-expanded', 'true');
        }
    }

    // Filter FAQ by category
    function filterFAQ(cat) {
        const items = document.querySelectorAll('.faq-item');
        const tabs = document.querySelectorAll('.faq-tab-btn');

        tabs.forEach(t => {
            t.classList.remove('bg-gold-600', 'text-navy-950', 'border-gold-600');
            t.classList.add('bg-white', 'text-slate-600', 'border-slate-200');
        });

        const activeTab = document.querySelector(`[data-faqcat="${cat}"]`);
        if (activeTab) {
            activeTab.classList.remove('bg-white', 'text-slate-600', 'border-slate-200');
            activeTab.classList.add('bg-gold-600', 'text-navy-950', 'border-gold-600');
        }

        let visibleCount = 0;
        items.forEach(item => {
            const itemCat = item.getAttribute('data-cat');
            if (cat === 'All' || itemCat === cat) {
                item.style.display = '';
                visibleCount++;
            } else {
                item.style.display = 'none';
            }
        });

        document.getElementById('faq-no-results').classList.toggle('hidden', visibleCount > 0);

        // Clear search
        document.getElementById('faq-search').value = '';
    }

    // Search FAQ
    function searchFAQ(query) {
        const q = query.toLowerCase().trim();
        const items = document.querySelectorAll('.faq-item');
        let visible = 0;

        // Reset tab styles
        document.querySelectorAll('.faq-tab-btn').forEach(t => {
            t.classList.remove('bg-gold-600', 'text-navy-950', 'border-gold-600');
            t.classList.add('bg-white', 'text-slate-600', 'border-slate-200');
        });
        const allTab = document.querySelector('[data-faqcat="All"]');
        if (allTab) {
            allTab.classList.add('bg-gold-600', 'text-navy-950', 'border-gold-600');
            allTab.classList.remove('bg-white', 'text-slate-600', 'border-slate-200');
        }

        items.forEach(item => {
            if (!q) {
                item.style.display = '';
                visible++;
                return;
            }
            const question = item.getAttribute('data-q') || '';
            const answer = item.getAttribute('data-a') || '';
            if (question.includes(q) || answer.includes(q)) {
                item.style.display = '';
                visible++;
            } else {
                item.style.display = 'none';
            }
        });

        document.getElementById('faq-no-results').classList.toggle('hidden', visible > 0);
    }
</script>
@endpush
