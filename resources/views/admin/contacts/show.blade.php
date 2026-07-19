@extends('layouts.admin')

@section('title', 'View Message')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">

    <div class="flex items-center justify-between">
        <div class="flex items-center gap-4">
            <a href="{{ route('admin.contacts.index') }}" class="w-8 h-8 rounded-full bg-white border border-slate-200 flex items-center justify-center text-slate-500 hover:text-slate-800 hover:bg-slate-50 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            </a>
            <h2 class="text-xl font-bold text-slate-800">Message Details</h2>
        </div>
        
        <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this message?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-rose-50 text-rose-600 hover:bg-rose-100 px-4 py-2 rounded-xl font-medium text-sm transition-colors flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                Delete
            </button>
        </form>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
        <div class="p-6 md:p-8 space-y-6">
            
            <div class="flex flex-col md:flex-row md:items-start justify-between gap-4 border-b border-slate-100 pb-6">
                <div>
                    <h3 class="text-lg font-bold text-slate-900 mb-1">{{ $contact->subject }}</h3>
                    <div class="flex items-center gap-2 text-sm text-slate-500">
                        <span class="font-medium text-slate-700">{{ $contact->name }}</span>
                        <span>&bull;</span>
                        <a href="mailto:{{ $contact->email }}" class="text-indigo-600 hover:underline">{{ $contact->email }}</a>
                    </div>
                </div>
                <div class="text-right">
                    <div class="text-sm text-slate-500 mb-2">{{ $contact->created_at->format('l, F j, Y \a\t h:i A') }}</div>
                    <span class="px-3 py-1 rounded-full text-xs font-medium {{ $contact->status === 'Unread' ? 'bg-rose-100 text-rose-700' : ($contact->status === 'Read' ? 'bg-slate-100 text-slate-600' : 'bg-green-100 text-green-700') }}">
                        {{ $contact->status }}
                    </span>
                </div>
            </div>

            <div class="prose prose-slate max-w-none prose-p:text-slate-700 prose-p:leading-relaxed">
                {!! nl2br(e($contact->message)) !!}
            </div>
            
            <div class="pt-8 mt-4 border-t border-slate-100">
                <a href="mailto:{{ $contact->email }}?subject=Re: {{ $contact->subject }}" class="inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2.5 rounded-xl font-medium text-sm transition-colors shadow-sm shadow-indigo-600/20">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    Reply via Email
                </a>
            </div>

        </div>
    </div>

</div>
@endsection
