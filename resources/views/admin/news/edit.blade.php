@extends('layouts.admin')

@section('title', 'Edit News Article')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">

    <div class="flex items-center gap-4">
        <a href="{{ route('admin.news.index') }}" class="w-8 h-8 rounded-full bg-white border border-slate-200 flex items-center justify-center text-slate-500 hover:text-slate-800 hover:bg-slate-50 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
        </a>
        <h2 class="text-xl font-bold text-slate-800">Edit News: {{ Str::limit($news->title, 40) }}</h2>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
        <form action="{{ route('admin.news.update', $news) }}" method="POST" class="p-6 md:p-8 space-y-6">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Title -->
                <div class="md:col-span-2">
                    <label for="title" class="block text-sm font-medium text-slate-700 mb-1">Article Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $news->title) }}" required
                        class="w-full bg-slate-50 border @error('title') border-red-300 @else border-slate-200 @enderror rounded-xl px-4 py-2.5 text-sm text-slate-900 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors">
                    @error('title') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
                </div>

                <!-- Category -->
                <div>
                    <label for="category" class="block text-sm font-medium text-slate-700 mb-1">Category</label>
                    <select name="category" id="category" required
                        class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-900 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors">
                        <option value="News" {{ old('category', $news->category) == 'News' ? 'selected' : '' }}>Company News</option>
                        <option value="Press Release" {{ old('category', $news->category) == 'Press Release' ? 'selected' : '' }}>Press Release</option>
                        <option value="Event" {{ old('category', $news->category) == 'Event' ? 'selected' : '' }}>Event</option>
                    </select>
                    @error('category') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
                </div>

                <!-- Status -->
                <div>
                    <label for="status" class="block text-sm font-medium text-slate-700 mb-1">Status</label>
                    <select name="status" id="status" required
                        class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-900 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors">
                        <option value="Draft" {{ old('status', $news->status) == 'Draft' ? 'selected' : '' }}>Draft</option>
                        <option value="Published" {{ old('status', $news->status) == 'Published' ? 'selected' : '' }}>Published</option>
                        <option value="Archived" {{ old('status', $news->status) == 'Archived' ? 'selected' : '' }}>Archived</option>
                    </select>
                    @error('status') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
                </div>

                <!-- Published Date -->
                <div>
                    <label for="published_date" class="block text-sm font-medium text-slate-700 mb-1">Published Date</label>
                    <input type="date" name="published_date" id="published_date" value="{{ old('published_date', $news->published_date ? $news->published_date->format('Y-m-d') : '') }}"
                        class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-900 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors">
                    @error('published_date') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
                </div>

                <!-- Content -->
                <div class="md:col-span-2">
                    <label for="content" class="block text-sm font-medium text-slate-700 mb-1">Article Content</label>
                    <textarea name="content" id="content" rows="8" required
                        class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-900 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors">{{ old('content', $news->content) }}</textarea>
                    @error('content') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="pt-6 border-t border-slate-100 flex justify-end gap-3">
                <a href="{{ route('admin.news.index') }}" class="px-5 py-2.5 rounded-xl font-medium text-sm text-slate-600 hover:bg-slate-100 transition-colors">Cancel</a>
                <button type="submit" class="bg-amber-600 hover:bg-amber-700 text-white px-6 py-2.5 rounded-xl font-medium text-sm transition-colors shadow-sm shadow-amber-600/20">
                    Update Article
                </button>
            </div>
        </form>
    </div>

</div>
@endsection
