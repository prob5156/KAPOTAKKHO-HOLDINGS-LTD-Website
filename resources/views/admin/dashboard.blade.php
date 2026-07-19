@extends('layouts.admin')

@section('title', 'Dashboard Overview')

@section('content')
<div class="space-y-6">

    <!-- Welcome Section -->
    <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <h2 class="text-xl font-bold text-slate-800">Welcome back, {{ Auth::user()->name ?? 'Admin' }}!</h2>
            <p class="text-slate-500 mt-1 text-sm">Here's what's happening across the organization today.</p>
        </div>
        <div>
            <a href="{{ route('admin.report') }}" target="_blank" class="inline-block bg-amber-600 hover:bg-amber-700 text-white px-5 py-2.5 rounded-xl font-medium text-sm transition-colors shadow-sm shadow-amber-600/20">
                Generate Report
            </a>
        </div>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
        <!-- Total Employees -->
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 group hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <span class="text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded-md">+12%</span>
            </div>
            <h3 class="text-3xl font-bold text-slate-800">{{ $stats['total_employees'] ?? 142 }}</h3>
            <p class="text-sm text-slate-500 mt-1 font-medium">Total Employees</p>
        </div>

        <!-- Active Projects -->
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 group hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                </div>
                <span class="text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded-md">+5%</span>
            </div>
            <h3 class="text-3xl font-bold text-slate-800">{{ $stats['active_projects'] ?? 24 }}</h3>
            <p class="text-sm text-slate-500 mt-1 font-medium">Active Projects</p>
        </div>

        <!-- Recent Inquiries -->
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 group hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>
                <span class="text-xs font-semibold text-rose-600 bg-rose-50 px-2 py-1 rounded-md">-2%</span>
            </div>
            <h3 class="text-3xl font-bold text-slate-800">{{ $stats['recent_inquiries'] ?? 89 }}</h3>
            <p class="text-sm text-slate-500 mt-1 font-medium">New Inquiries</p>
        </div>

    </div>

    <!-- Recent Activity Placeholder -->
    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
        <div class="px-6 py-5 border-b border-slate-100 flex justify-between items-center">
            <h3 class="font-bold text-slate-800">Recent Activity</h3>
            <a href="#" class="text-sm font-medium text-amber-600 hover:text-amber-700">View All</a>
        </div>
        <div class="p-6 text-center text-slate-500 py-12">
            <svg class="w-12 h-12 mx-auto text-slate-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
            <p>No recent activity to display yet.</p>
        </div>
    </div>

</div>
@endsection
