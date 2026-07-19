@extends('layouts.app')

@section('title', 'My Account Profile — Kapotakkhho Holdings Ltd.')

@section('content')
<div class="min-h-[80vh] bg-slate-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto space-y-6">

        {{-- Status Alerts --}}
        @if(session('warning'))
            <div class="p-4 bg-amber-50 border-l-4 border-amber-500 rounded-r-xl shadow-sm flex items-start gap-3">
                <svg class="w-5 h-5 text-amber-600 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                <div>
                    <p class="text-xs font-bold uppercase tracking-wider text-amber-800">Access Restricted</p>
                    <p class="text-sm text-amber-700 mt-0.5">{{ session('warning') }}</p>
                </div>
            </div>
        @endif

        @if(session('status'))
            <div class="p-4 bg-emerald-50 border-l-4 border-emerald-500 rounded-r-xl shadow-sm flex items-center gap-3">
                <svg class="w-5 h-5 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <p class="text-sm text-emerald-700 font-medium">{{ session('status') }}</p>
            </div>
        @endif

        {{-- Profile Header Card --}}
        <div class="bg-navy-950 text-white rounded-2xl p-6 sm:p-8 shadow-xl border border-navy-800 relative overflow-hidden flex flex-col sm:flex-row items-center gap-6">
            <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:20px_20px]"></div>
            
            <div class="w-24 h-24 rounded-2xl bg-gradient-to-br from-gold-500 to-amber-700 flex items-center justify-center text-navy-950 font-serif font-bold text-4xl shadow-lg shrink-0 relative z-10 border-2 border-gold-400">
                {{ strtoupper(substr($user->name ?? 'U', 0, 1)) }}
            </div>

            <div class="text-center sm:text-left relative z-10 flex-1">
                <div class="flex items-center justify-center sm:justify-start gap-2 mb-1">
                    <h1 class="text-2xl sm:text-3xl font-serif font-bold text-white">{{ $user->name }}</h1>
                    @if($user->isAdmin())
                        <span class="px-2.5 py-0.5 rounded-full bg-gold-600/20 border border-gold-500/40 text-gold-400 text-xxs font-bold uppercase tracking-wider">Admin</span>
                    @else
                        <span class="px-2.5 py-0.5 rounded-full bg-blue-500/20 border border-blue-400/40 text-blue-300 text-xxs font-bold uppercase tracking-wider">Standard User</span>
                    @endif
                </div>
                <p class="text-slate-400 text-sm mb-3">{{ $user->email }}</p>
                <div class="flex flex-wrap items-center justify-center sm:justify-start gap-4 text-xs text-slate-400">
                    <span class="flex items-center gap-1.5">
                        <svg class="w-4 h-4 text-gold-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        Member Since {{ $user->created_at ? $user->created_at->format('M Y') : '2026' }}
                    </span>
                    <span class="flex items-center gap-1.5">
                        <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        Account Active
                    </span>
                </div>
            </div>

            @if($user->isAdmin())
                <div class="relative z-10 shrink-0">
                    <a href="{{ route('admin.dashboard') }}" class="px-5 py-2.5 bg-gold-600 hover:bg-gold-500 text-navy-950 font-bold text-xs uppercase tracking-wider rounded-lg transition-all shadow-md inline-flex items-center gap-2">
                        Go to Admin Dashboard →
                    </a>
                </div>
            @endif
        </div>

        {{-- Notice Banner --}}
        <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm flex items-start gap-4">
            <div class="w-10 h-10 rounded-xl bg-slate-100 text-slate-600 flex items-center justify-center shrink-0 font-bold">
                ℹ️
            </div>
            <div class="text-xs text-slate-600 leading-relaxed">
                <span class="font-bold text-slate-900 block mb-0.5">Account Permissions Notice</span>
                You are currently signed in with standard user permissions. You can manage and update your personal account details below. Administrative dashboards and system management features are strictly reserved for corporate administrators.
            </div>
        </div>

        {{-- Settings Form --}}
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6 sm:p-8">
            <h2 class="text-lg font-serif font-bold text-navy-900 mb-6 border-b border-slate-100 pb-4">Personal Account Settings</h2>

            <form method="POST" action="{{ route('profile.update') }}" class="space-y-6">
                @csrf

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    {{-- Full Name --}}
                    <div>
                        <label for="name" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Full Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required
                            class="w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 text-sm focus:outline-none focus:ring-2 focus:ring-navy-900 focus:bg-white transition-all">
                        @error('name')
                            <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Email Address --}}
                    <div>
                        <label for="email" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Email Address</label>
                        <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required
                            class="w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 text-sm focus:outline-none focus:ring-2 focus:ring-navy-900 focus:bg-white transition-all">
                        @error('email')
                            <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="border-t border-slate-100 pt-6 mt-6">
                    <h3 class="text-sm font-bold text-slate-900 mb-1">Change Password</h3>
                    <p class="text-xs text-slate-500 mb-4">Leave blank if you do not wish to change your password.</p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        {{-- Current Password --}}
                        <div>
                            <label for="current_password" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Current Password</label>
                            <input type="password" name="current_password" id="current_password"
                                class="w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 text-sm focus:outline-none focus:ring-2 focus:ring-navy-900 focus:bg-white transition-all">
                            @error('current_password')
                                <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- New Password --}}
                        <div>
                            <label for="new_password" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">New Password</label>
                            <input type="password" name="new_password" id="new_password"
                                class="w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 text-sm focus:outline-none focus:ring-2 focus:ring-navy-900 focus:bg-white transition-all">
                            @error('new_password')
                                <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    {{-- Confirm Password --}}
                    <div class="mt-4 max-w-md">
                        <label for="new_password_confirmation" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Confirm New Password</label>
                        <input type="password" name="new_password_confirmation" id="new_password_confirmation"
                            class="w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 text-sm focus:outline-none focus:ring-2 focus:ring-navy-900 focus:bg-white transition-all">
                    </div>
                </div>

                <div class="flex items-center justify-between border-t border-slate-100 pt-6">
                    <button type="submit" class="px-6 py-3 bg-navy-900 hover:bg-navy-800 text-gold-500 font-bold text-xs uppercase tracking-wider rounded-xl transition-all shadow-md">
                        Save Profile Changes
                    </button>
                    
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-xs font-bold text-slate-500 hover:text-red-600 transition-colors cursor-pointer">
                        Sign Out Account →
                    </a>
                </div>
            </form>

            <form id="logout-form" method="POST" action="{{ route('logout') }}" class="hidden">
                @csrf
            </form>
        </div>

    </div>
</div>
@endsection
