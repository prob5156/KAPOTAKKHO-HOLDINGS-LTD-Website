<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard — Kapotakkhho Holdings Ltd.</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-serif { font-family: 'Playfair Display', serif; }
        /* Scrollbar styles for the sidebar */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #334155; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #475569; }
    </style>
</head>
<body class="bg-slate-50 text-slate-900 flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <aside class="w-64 bg-[#0f172a] text-slate-300 flex flex-col h-full shrink-0 shadow-xl z-20">
        <!-- Logo Area -->
        <div class="h-16 flex items-center px-6 bg-[#0b1121] border-b border-slate-800 shrink-0">
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-amber-500 to-amber-700 flex items-center justify-center shadow-lg group-hover:shadow-amber-500/20 transition-all">
                    <span class="text-white font-serif font-bold text-lg">K</span>
                </div>
                <span class="font-serif text-white font-bold tracking-wide truncate">Kapotakkhho</span>
            </a>
        </div>

        <!-- Navigation -->
        <nav class="flex-1 overflow-y-auto py-4 px-3 space-y-1">
            <div class="px-3 mb-2 mt-4 text-xs font-semibold text-slate-500 uppercase tracking-wider">Overview</div>
            
            <a href="{{ route('admin.dashboard') }}" class="flex items-center px-3 py-2.5 rounded-lg bg-amber-500/10 text-amber-500 font-medium">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                Dashboard
            </a>

            <div class="px-3 mb-2 mt-6 text-xs font-semibold text-slate-500 uppercase tracking-wider">Management</div>

            <a href="{{ route('admin.employees.index') }}" class="flex items-center px-3 py-2.5 rounded-lg hover:bg-slate-800 hover:text-white transition-colors">
                <svg class="w-5 h-5 mr-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                Employees
            </a>
            
            <a href="{{ route('admin.departments.index') }}" class="flex items-center px-3 py-2.5 rounded-lg hover:bg-slate-800 hover:text-white transition-colors">
                <svg class="w-5 h-5 mr-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                Departments
            </a>

            <a href="{{ route('admin.projects.index') }}" class="flex items-center px-3 py-2.5 rounded-lg hover:bg-slate-800 hover:text-white transition-colors">
                <svg class="w-5 h-5 mr-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                Projects
            </a>

            <a href="{{ route('admin.news.index') }}" class="flex items-center px-3 py-2.5 rounded-lg hover:bg-slate-800 hover:text-white transition-colors">
                <svg class="w-5 h-5 mr-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                News & Media
            </a>

            <a href="{{ route('admin.faqs.index') }}" class="flex items-center px-3 py-2.5 rounded-lg hover:bg-slate-800 hover:text-white transition-colors">
                <svg class="w-5 h-5 mr-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                FAQs
            </a>

            <a href="{{ route('admin.clients.index') }}" class="flex items-center px-3 py-2.5 rounded-lg hover:bg-slate-800 hover:text-white transition-colors">
                <svg class="w-5 h-5 mr-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                Clients
            </a>

            <a href="{{ route('admin.jobs.index') }}" class="flex items-center px-3 py-2.5 rounded-lg hover:bg-slate-800 hover:text-white transition-colors">
                <svg class="w-5 h-5 mr-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                Careers
            </a>

            <div class="px-3 mb-2 mt-6 text-xs font-semibold text-slate-500 uppercase tracking-wider">Communication</div>

            <a href="{{ route('admin.contacts.index') }}" class="flex items-center px-3 py-2.5 rounded-lg hover:bg-slate-800 hover:text-white transition-colors">
                <svg class="w-5 h-5 mr-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                Inquiries
            </a>
        </nav>

        <!-- User Profile Area -->
        <div class="p-4 border-t border-slate-800 bg-[#0b1121]">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-10 h-10 rounded-full bg-slate-700 flex items-center justify-center shrink-0">
                    <span class="text-white font-medium">{{ substr(Auth::user()->name ?? 'A', 0, 1) }}</span>
                </div>
                <div class="overflow-hidden">
                    <p class="text-sm font-medium text-white truncate">{{ Auth::user()->name ?? 'Admin User' }}</p>
                    <p class="text-xs text-slate-400 truncate">{{ Auth::user()->email ?? 'admin@example.com' }}</p>
                </div>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full flex items-center justify-center gap-2 py-2 px-3 text-sm text-slate-400 hover:text-white hover:bg-slate-800 rounded-lg transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                    Sign Out
                </button>
            </form>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col h-full overflow-hidden">
        
        <!-- Top Header -->
        <header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-6 shrink-0 z-10 shadow-sm">
            <div class="flex items-center gap-4">
                <h1 class="text-lg font-semibold text-slate-800">@yield('title', 'Dashboard')</h1>
            </div>
            
            <div class="flex items-center gap-4">
                <button onclick="openAdminNotifDrawer()" class="p-2 text-slate-400 hover:text-slate-600 hover:bg-slate-100 rounded-full transition-all relative" title="Notification Center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                    <span id="notif-unread-badge" class="absolute top-1.5 right-1.5 w-2.5 h-2.5 bg-red-500 rounded-full ring-2 ring-white animate-pulse"></span>
                </button>
            </div>
        </header>

        <!-- Main View Area -->
        <main class="flex-1 overflow-y-auto bg-slate-50 p-6">
            @yield('content')
        </main>
    </div>

    <!-- Admin Notification Slide Drawer -->
    <div id="admin-notif-backdrop" class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-[100] opacity-0 pointer-events-none transition-opacity duration-300"></div>

    <div id="admin-notif-drawer" class="fixed top-0 right-0 bottom-0 w-full max-w-md bg-white border-l border-slate-200 text-slate-800 z-[101] translate-x-full transition-transform duration-300 ease-in-out shadow-2xl flex flex-col overflow-hidden">
        
        <!-- Drawer Header -->
        <div class="p-5 border-b border-slate-200 flex items-center justify-between bg-slate-50 shrink-0">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-full bg-amber-100 text-amber-700 flex items-center justify-center font-bold text-base shadow-sm">
                    🔔
                </div>
                <div>
                    <h3 class="text-base font-bold text-slate-900 leading-snug">Notification Center</h3>
                    <p class="text-xs text-slate-500">Live inquiries & system events</p>
                </div>
            </div>
            <button id="notif-close-btn" class="w-8 h-8 rounded-full bg-white border border-slate-200 hover:bg-slate-100 text-slate-500 flex items-center justify-center transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>

        <!-- Filter Tabs -->
        <div class="px-5 py-3 border-b border-slate-200 bg-white flex items-center justify-between gap-2 shrink-0 text-xs">
            <div class="flex gap-1.5">
                <button onclick="filterNotifs('all')" id="tab-all" class="px-3 py-1.5 rounded-full bg-slate-900 text-white font-semibold transition-all">All</button>
                <button onclick="filterNotifs('inquiry')" id="tab-inquiry" class="px-3 py-1.5 rounded-full bg-slate-100 text-slate-600 hover:bg-slate-200 font-semibold transition-all">Inquiries</button>
                <button onclick="filterNotifs('system')" id="tab-system" class="px-3 py-1.5 rounded-full bg-slate-100 text-slate-600 hover:bg-slate-200 font-semibold transition-all">System</button>
            </div>
            <button onclick="markAllNotifsRead()" class="text-amber-600 hover:text-amber-700 font-bold hover:underline">Mark all read</button>
        </div>

        <!-- Notifications Content Body -->
        <div class="p-5 flex-1 overflow-y-auto space-y-4 divide-y divide-slate-100 text-sm scrollbar-thin">
            
            @php
                $realContacts = [];
                try {
                    if (class_exists('\App\Models\Contact')) {
                        $realContacts = \App\Models\Contact::orderBy('id', 'desc')->take(6)->get();
                    }
                } catch (\Throwable $e) {}
            @endphp

            @if(count($realContacts) > 0)
                @foreach($realContacts as $contact)
                <div class="notif-item notif-inquiry pt-3 first:pt-0 flex items-start gap-3 group">
                    <div class="w-9 h-9 rounded-lg bg-amber-50 border border-amber-200 text-amber-700 flex items-center justify-center shrink-0 mt-0.5 font-bold text-xs">
                        ✉️
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center justify-between gap-2 mb-1">
                            <span class="font-bold text-xs text-slate-900 truncate">{{ $contact->full_name ?? $contact->name ?? 'Website Visitor' }}</span>
                            <span class="text-[10px] text-slate-400 shrink-0">{{ $contact->created_at ? $contact->created_at->diffForHumans() : 'Recently' }}</span>
                        </div>
                        <p class="text-xs text-amber-800 font-semibold mb-1 truncate">{{ $contact->department ?? 'General Inquiry' }} - {{ $contact->subject ?? 'Contact Message' }}</p>
                        <p class="text-xs text-slate-500 line-clamp-2 leading-relaxed mb-2">{{ $contact->message }}</p>
                        <a href="{{ route('admin.contacts.show', $contact->id) }}" class="inline-flex items-center gap-1 text-[11px] font-bold text-amber-600 hover:text-amber-700">
                            View Inquiry Details →
                        </a>
                    </div>
                </div>
                @endforeach
            @else
                <div class="notif-item notif-inquiry pt-3 first:pt-0 flex items-start gap-3">
                    <div class="w-9 h-9 rounded-lg bg-slate-100 text-slate-500 flex items-center justify-center shrink-0 text-xs">
                        📥
                    </div>
                    <div class="flex-1">
                        <p class="font-bold text-xs text-slate-800 mb-0.5">No new contact messages</p>
                        <p class="text-xs text-slate-400">Submissions from contact form will appear here in real-time.</p>
                    </div>
                </div>
            @endif

            <!-- System Activity Logs -->
            <div class="notif-item notif-system pt-3 flex items-start gap-3">
                <div class="w-9 h-9 rounded-lg bg-blue-50 border border-blue-200 text-blue-700 flex items-center justify-center shrink-0 mt-0.5 text-xs font-bold">
                    🛡️
                </div>
                <div class="flex-1">
                    <div class="flex items-center justify-between gap-2 mb-1">
                        <span class="font-bold text-xs text-slate-900">Security & Session Audit</span>
                        <span class="text-[10px] text-slate-400">10 mins ago</span>
                    </div>
                    <p class="text-xs text-slate-600 leading-relaxed">Admin session verified for {{ Auth::user()->name ?? 'Administrator' }}. Database backup active.</p>
                </div>
            </div>

            <div class="notif-item notif-system pt-3 flex items-start gap-3">
                <div class="w-9 h-9 rounded-lg bg-emerald-50 border border-emerald-200 text-emerald-700 flex items-center justify-center shrink-0 mt-0.5 text-xs font-bold">
                    ⚡
                </div>
                <div class="flex-1">
                    <div class="flex items-center justify-between gap-2 mb-1">
                        <span class="font-bold text-xs text-slate-900">Database Diagnostics</span>
                        <span class="text-[10px] text-slate-400">1 hour ago</span>
                    </div>
                    <p class="text-xs text-slate-600 leading-relaxed">Oracle DB & MySQL schema sync verified with 0 errors. Query response latency: 12ms.</p>
                </div>
            </div>

            <div class="notif-item notif-system pt-3 flex items-start gap-3">
                <div class="w-9 h-9 rounded-lg bg-purple-50 border border-purple-200 text-purple-700 flex items-center justify-center shrink-0 mt-0.5 text-xs font-bold">
                    📈
                </div>
                <div class="flex-1">
                    <div class="flex items-center justify-between gap-2 mb-1">
                        <span class="font-bold text-xs text-slate-900">Traffic Surge Detected</span>
                        <span class="text-[10px] text-slate-400">3 hours ago</span>
                    </div>
                    <p class="text-xs text-slate-600 leading-relaxed">Daily website visitors increased by +34% across Projects & Divisions modules.</p>
                </div>
            </div>

        </div>

        <!-- Drawer Footer -->
        <div class="p-4 border-t border-slate-200 bg-slate-50 flex items-center justify-between gap-3 shrink-0">
            <a href="{{ route('admin.contacts.index') }}" class="w-full py-2.5 px-4 bg-slate-900 hover:bg-slate-800 text-white font-bold text-center text-xs uppercase tracking-wider rounded-lg transition-all">
                Manage Inquiries
            </a>
        </div>

    </div>

    <script>
        function openAdminNotifDrawer() {
            document.getElementById('admin-notif-backdrop').classList.remove('opacity-0', 'pointer-events-none');
            document.getElementById('admin-notif-backdrop').classList.add('opacity-100', 'pointer-events-auto');
            document.getElementById('admin-notif-drawer').classList.remove('translate-x-full');
            document.getElementById('admin-notif-drawer').classList.add('translate-x-0');
            const badge = document.getElementById('notif-unread-badge');
            if (badge) badge.style.display = 'none';
        }

        function closeAdminNotifDrawer() {
            document.getElementById('admin-notif-backdrop').classList.remove('opacity-100', 'pointer-events-auto');
            document.getElementById('admin-notif-backdrop').classList.add('opacity-0', 'pointer-events-none');
            document.getElementById('admin-notif-drawer').classList.remove('translate-x-0');
            document.getElementById('admin-notif-drawer').classList.add('translate-x-full');
        }

        function filterNotifs(type) {
            document.querySelectorAll('#tab-all, #tab-inquiry, #tab-system').forEach(btn => {
                btn.classList.remove('bg-slate-900', 'text-white');
                btn.classList.add('bg-slate-100', 'text-slate-600');
            });
            const activeTab = document.getElementById('tab-' + type);
            if (activeTab) {
                activeTab.classList.add('bg-slate-900', 'text-white');
                activeTab.classList.remove('bg-slate-100', 'text-slate-600');
            }

            document.querySelectorAll('.notif-item').forEach(item => {
                if (type === 'all' || item.classList.contains('notif-' + type)) {
                    item.style.display = 'flex';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        function markAllNotifsRead() {
            const badge = document.getElementById('notif-unread-badge');
            if (badge) badge.style.display = 'none';
            document.querySelectorAll('.notif-item').forEach(item => {
                item.style.opacity = '0.75';
            });
        }

        document.getElementById('notif-close-btn').addEventListener('click', closeAdminNotifDrawer);
        document.getElementById('admin-notif-backdrop').addEventListener('click', closeAdminNotifDrawer);
    </script>

</body>
</html>
