@extends('layouts.admin')

@section('title', 'Post New Job')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">

    <div class="flex items-center gap-4">
        <a href="{{ route('admin.jobs.index') }}" class="w-8 h-8 rounded-full bg-white border border-slate-200 flex items-center justify-center text-slate-500 hover:text-slate-800 hover:bg-slate-50 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
        </a>
        <h2 class="text-xl font-bold text-slate-800">Post New Job</h2>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
        <form action="{{ route('admin.jobs.store') }}" method="POST" class="p-6 md:p-8 space-y-6">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Title -->
                <div>
                    <label for="title" class="block text-sm font-medium text-slate-700 mb-1">Job Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" required
                        class="w-full bg-slate-50 border @error('title') border-red-300 @else border-slate-200 @enderror rounded-xl px-4 py-2.5 text-sm text-slate-900 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors">
                    @error('title') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
                </div>

                <!-- Department -->
                <div>
                    <label for="department" class="block text-sm font-medium text-slate-700 mb-1">Department</label>
                    <input type="text" name="department" id="department" value="{{ old('department') }}"
                        class="w-full bg-slate-50 border @error('department') border-red-300 @else border-slate-200 @enderror rounded-xl px-4 py-2.5 text-sm text-slate-900 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors">
                    @error('department') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
                </div>

                <!-- Location -->
                <div>
                    <label for="location" class="block text-sm font-medium text-slate-700 mb-1">Location</label>
                    <input type="text" name="location" id="location" value="{{ old('location') }}"
                        class="w-full bg-slate-50 border @error('location') border-red-300 @else border-slate-200 @enderror rounded-xl px-4 py-2.5 text-sm text-slate-900 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors">
                    @error('location') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
                </div>

                <!-- Type -->
                <div>
                    <label for="type" class="block text-sm font-medium text-slate-700 mb-1">Employment Type</label>
                    <select name="type" id="type" required
                        class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-900 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors">
                        <option value="Full-time" {{ old('type') == 'Full-time' ? 'selected' : '' }}>Full-time</option>
                        <option value="Part-time" {{ old('type') == 'Part-time' ? 'selected' : '' }}>Part-time</option>
                        <option value="Contract" {{ old('type') == 'Contract' ? 'selected' : '' }}>Contract</option>
                        <option value="Internship" {{ old('type') == 'Internship' ? 'selected' : '' }}>Internship</option>
                    </select>
                    @error('type') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
                </div>

                <!-- Description -->
                <div class="md:col-span-2">
                    <label for="description" class="block text-sm font-medium text-slate-700 mb-1">Job Description</label>
                    <textarea name="description" id="description" rows="4"
                        class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-900 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors">{{ old('description') }}</textarea>
                    @error('description') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
                </div>
                
                <!-- Requirements -->
                <div class="md:col-span-2">
                    <label for="requirements" class="block text-sm font-medium text-slate-700 mb-1">Requirements</label>
                    <textarea name="requirements" id="requirements" rows="4"
                        class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-900 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors">{{ old('requirements') }}</textarea>
                    @error('requirements') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
                </div>

                <!-- Deadline -->
                <div>
                    <label for="deadline" class="block text-sm font-medium text-slate-700 mb-1">Application Deadline</label>
                    <input type="date" name="deadline" id="deadline" value="{{ old('deadline') }}"
                        class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-900 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors">
                    @error('deadline') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
                </div>

                <!-- Status -->
                <div>
                    <label for="status" class="block text-sm font-medium text-slate-700 mb-1">Status</label>
                    <select name="status" id="status" required
                        class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-900 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors">
                        <option value="Open" {{ old('status') == 'Open' ? 'selected' : '' }}>Open (Accepting Applications)</option>
                        <option value="Closed" {{ old('status') == 'Closed' ? 'selected' : '' }}>Closed</option>
                    </select>
                    @error('status') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="pt-6 border-t border-slate-100 flex justify-end gap-3">
                <a href="{{ route('admin.jobs.index') }}" class="px-5 py-2.5 rounded-xl font-medium text-sm text-slate-600 hover:bg-slate-100 transition-colors">Cancel</a>
                <button type="submit" class="bg-amber-600 hover:bg-amber-700 text-white px-6 py-2.5 rounded-xl font-medium text-sm transition-colors shadow-sm shadow-amber-600/20">
                    Post Job
                </button>
            </div>
        </form>
    </div>

</div>
@endsection
