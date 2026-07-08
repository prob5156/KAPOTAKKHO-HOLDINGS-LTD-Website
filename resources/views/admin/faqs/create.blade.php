@extends('layouts.admin')

@section('title', 'Add FAQ')

@section('content')
<div class="max-w-3xl mx-auto space-y-6">

    <div class="flex items-center gap-4">
        <a href="{{ route('admin.faqs.index') }}" class="w-8 h-8 rounded-full bg-white border border-slate-200 flex items-center justify-center text-slate-500 hover:text-slate-800 hover:bg-slate-50 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
        </a>
        <h2 class="text-xl font-bold text-slate-800">Add New FAQ</h2>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
        <form action="{{ route('admin.faqs.store') }}" method="POST" class="p-6 md:p-8 space-y-6">
            @csrf

            <!-- Question -->
            <div>
                <label for="question" class="block text-sm font-medium text-slate-700 mb-1">Question</label>
                <input type="text" name="question" id="question" value="{{ old('question') }}" required
                    class="w-full bg-slate-50 border @error('question') border-red-300 @else border-slate-200 @enderror rounded-xl px-4 py-2.5 text-sm text-slate-900 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors">
                @error('question') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
            </div>

            <!-- Answer -->
            <div>
                <label for="answer" class="block text-sm font-medium text-slate-700 mb-1">Answer</label>
                <textarea name="answer" id="answer" rows="5" required
                    class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-900 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors">{{ old('answer') }}</textarea>
                @error('answer') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Category -->
                <div>
                    <label for="category" class="block text-sm font-medium text-slate-700 mb-1">Category</label>
                    <input type="text" name="category" id="category" value="{{ old('category', 'General') }}" required
                        class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-900 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors">
                    @error('category') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
                </div>

                <!-- Display Order -->
                <div>
                    <label for="display_order" class="block text-sm font-medium text-slate-700 mb-1">Display Order</label>
                    <input type="number" name="display_order" id="display_order" value="{{ old('display_order', 0) }}" min="0" required
                        class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-900 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors">
                    @error('display_order') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
                </div>

                <!-- Status -->
                <div>
                    <label for="status" class="block text-sm font-medium text-slate-700 mb-1">Status</label>
                    <select name="status" id="status" required
                        class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-900 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors">
                        <option value="Active" {{ old('status') == 'Active' ? 'selected' : '' }}>Active</option>
                        <option value="Inactive" {{ old('status') == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                    @error('status') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="pt-6 border-t border-slate-100 flex justify-end gap-3">
                <a href="{{ route('admin.faqs.index') }}" class="px-5 py-2.5 rounded-xl font-medium text-sm text-slate-600 hover:bg-slate-100 transition-colors">Cancel</a>
                <button type="submit" class="bg-amber-600 hover:bg-amber-700 text-white px-6 py-2.5 rounded-xl font-medium text-sm transition-colors shadow-sm shadow-amber-600/20">
                    Save FAQ
                </button>
            </div>
        </form>
    </div>

</div>
@endsection
