@extends('layouts.admin')

@section('title', 'News & Media')

@section('content')
<div class="space-y-6">

    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
        <h2 class="text-xl font-bold text-slate-800">News Articles</h2>
        <div class="flex items-center gap-4 w-full sm:w-auto">
            <form action="{{ route('admin.news.index') }}" method="GET" class="flex-1 sm:w-64">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search news..." class="w-full px-4 py-2 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-amber-500 focus:border-amber-500">
            </form>
            <a href="{{ route('admin.news.create') }}" class="bg-amber-600 hover:bg-amber-700 text-white px-5 py-2.5 rounded-xl font-medium text-sm transition-colors shadow-sm flex items-center gap-2 whitespace-nowrap">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Add Article
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-xl">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm whitespace-nowrap">
                <thead class="bg-slate-50 text-slate-500 border-b border-slate-100 uppercase text-xs tracking-wider">
                    <tr>
                        <th class="px-6 py-4 font-semibold">Title</th>
                        <th class="px-6 py-4 font-semibold">Category</th>
                        <th class="px-6 py-4 font-semibold">Published</th>
                        <th class="px-6 py-4 font-semibold">Status</th>
                        <th class="px-6 py-4 font-semibold text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-slate-700">
                    @forelse($news as $article)
                        <tr class="hover:bg-slate-50/50 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-xl bg-sky-50 text-sky-600 flex items-center justify-center">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                                    </div>
                                    <div>
                                        <div class="font-medium text-slate-900 w-64 truncate">{{ $article->title }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">{{ $article->category }}</td>
                            <td class="px-6 py-4">{{ $article->published_date ? $article->published_date->format('M d, Y') : 'N/A' }}</td>
                            <td class="px-6 py-4">
                                @php
                                    $statusClasses = [
                                        'Draft' => 'bg-slate-100 text-slate-700',
                                        'Published' => 'bg-green-100 text-green-700',
                                        'Archived' => 'bg-rose-100 text-rose-700',
                                    ];
                                    $class = $statusClasses[$article->status] ?? 'bg-gray-100 text-gray-700';
                                @endphp
                                <span class="px-2.5 py-1 rounded-full text-xs font-medium {{ $class }}">
                                    {{ $article->status }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="{{ route('admin.news.edit', $article) }}" class="text-indigo-600 hover:text-indigo-900 mx-2 font-medium">Edit</a>
                                <form action="{{ route('admin.news.destroy', $article) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this article?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-rose-600 hover:text-rose-900 font-medium">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-12 text-center text-slate-500">
                                <svg class="w-12 h-12 mx-auto text-slate-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                                No news articles found. Click "Add Article" to create one.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($news->hasPages())
            <div class="px-6 py-4 border-t border-slate-100">
                {{ $news->withQueryString()->links() }}
            </div>
        @endif
    </div>

</div>
@endsection
