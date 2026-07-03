@extends('layouts.admin')

@section('title', 'Edit Employee')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">

    <div class="flex items-center gap-4">
        <a href="{{ route('admin.employees.index') }}" class="w-8 h-8 rounded-full bg-white border border-slate-200 flex items-center justify-center text-slate-500 hover:text-slate-800 hover:bg-slate-50 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
        </a>
        <h2 class="text-xl font-bold text-slate-800">Edit Employee: {{ $employee->name }}</h2>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
        <form action="{{ route('admin.employees.update', $employee) }}" method="POST" class="p-6 md:p-8 space-y-6">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-slate-700 mb-1">Full Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $employee->name) }}" required
                        class="w-full bg-slate-50 border @error('name') border-red-300 @else border-slate-200 @enderror rounded-xl px-4 py-2.5 text-sm text-slate-900 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors">
                    @error('name') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-slate-700 mb-1">Email Address</label>
                    <input type="email" name="email" id="email" value="{{ old('email', $employee->email) }}" required
                        class="w-full bg-slate-50 border @error('email') border-red-300 @else border-slate-200 @enderror rounded-xl px-4 py-2.5 text-sm text-slate-900 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors">
                    @error('email') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
                </div>

                <!-- Phone -->
                <div>
                    <label for="phone" class="block text-sm font-medium text-slate-700 mb-1">Phone Number</label>
                    <input type="text" name="phone" id="phone" value="{{ old('phone', $employee->phone) }}"
                        class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-900 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors">
                    @error('phone') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
                </div>

                <!-- Department -->
                <div>
                    <label for="department" class="block text-sm font-medium text-slate-700 mb-1">Department</label>
                    <input type="text" name="department" id="department" value="{{ old('department', $employee->department) }}" required
                        class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-900 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors">
                    @error('department') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
                </div>

                <!-- Position -->
                <div>
                    <label for="position" class="block text-sm font-medium text-slate-700 mb-1">Position / Title</label>
                    <input type="text" name="position" id="position" value="{{ old('position', $employee->position) }}" required
                        class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-900 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors">
                    @error('position') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
                </div>

                <!-- Join Date -->
                <div>
                    <label for="join_date" class="block text-sm font-medium text-slate-700 mb-1">Join Date</label>
                    <input type="date" name="join_date" id="join_date" value="{{ old('join_date', $employee->join_date ? $employee->join_date->format('Y-m-d') : '') }}" required
                        class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-900 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors">
                    @error('join_date') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
                </div>

                <!-- Status -->
                <div>
                    <label for="status" class="block text-sm font-medium text-slate-700 mb-1">Status</label>
                    <select name="status" id="status" required
                        class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm text-slate-900 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors">
                        <option value="Active" {{ old('status', $employee->status) == 'Active' ? 'selected' : '' }}>Active</option>
                        <option value="Inactive" {{ old('status', $employee->status) == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                    @error('status') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="pt-6 border-t border-slate-100 flex justify-end gap-3">
                <a href="{{ route('admin.employees.index') }}" class="px-5 py-2.5 rounded-xl font-medium text-sm text-slate-600 hover:bg-slate-100 transition-colors">Cancel</a>
                <button type="submit" class="bg-amber-600 hover:bg-amber-700 text-white px-6 py-2.5 rounded-xl font-medium text-sm transition-colors shadow-sm shadow-amber-600/20">
                    Update Employee
                </button>
            </div>
        </form>
    </div>

</div>
@endsection
