<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{

    public function index(Request $request)
    {
        $query = Job::query();
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where('title', 'like', "%{$search}%")
                  ->orWhere('department', 'like', "%{$search}%");
        }
        $jobs = $query->orderBy('id', 'desc')->paginate(10);
        return view('admin.jobs.index', compact('jobs'));
    }

    public function create()
    {
        return view('admin.jobs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'department' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'type' => 'required|in:Full-time,Part-time,Contract,Internship',
            'description' => 'nullable|string',
            'requirements' => 'nullable|string',
            'status' => 'required|in:Open,Closed',
            'deadline' => 'nullable|date',
        ]);

        DB::transaction(function () use ($validated) {
            Job::create($validated);
        });

        return redirect()->route('admin.jobs.index')->with('success', 'Job posting created successfully.');
    }

    public function edit(Job $job)
    {
        return view('admin.jobs.edit', compact('job'));
    }

    public function update(Request $request, Job $job)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'department' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'type' => 'required|in:Full-time,Part-time,Contract,Internship',
            'description' => 'nullable|string',
            'requirements' => 'nullable|string',
            'status' => 'required|in:Open,Closed',
            'deadline' => 'nullable|date',
        ]);

        DB::transaction(function () use ($job, $validated) {
            $job->update($validated);
        });

        return redirect()->route('admin.jobs.index')->with('success', 'Job posting updated successfully.');
    }

    public function destroy(Job $job)
    {
        DB::transaction(function () use ($job) {
            $job->delete();
        });
        return redirect()->route('admin.jobs.index')->with('success', 'Job posting deleted successfully.');
    }
}
