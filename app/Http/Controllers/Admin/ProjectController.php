<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{

    public function index(Request $request)
    {
        $query = Project::query();
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where('name', 'like', "%{$search}%")
                  ->orWhere('client', 'like', "%{$search}%");
        }
        $projects = $query->orderBy('id', 'desc')->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        $clients = \App\Models\Client::where('status', 'Active')->get();
        return view('admin.projects.create', compact('clients'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'client' => 'nullable|string|max:255',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'status' => 'required|in:Planning,In Progress,Completed,On Hold',
        ]);

        DB::transaction(function () use ($validated) {
            Project::create($validated);
        });

        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully.');
    }

    public function edit(Project $project)
    {
        $clients = \App\Models\Client::where('status', 'Active')->get();
        return view('admin.projects.edit', compact('project', 'clients'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'client' => 'nullable|string|max:255',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'status' => 'required|in:Planning,In Progress,Completed,On Hold',
        ]);

        if (isset($validated['status']) && $validated['status'] === 'Completed' && $project->status !== 'Completed') {
            DB::transaction(function () use ($project, $validated) {
                // Update other fields natively
                $project->update(\Illuminate\Support\Arr::except($validated, ['status', 'end_date']));
                
                // Execute Oracle Stored Procedure for the completion logic
                \Illuminate\Support\Facades\DB::statement('BEGIN MARK_PROJECT_COMPLETED(:id); END;', ['id' => $project->id]);
            });
        } else {
            DB::transaction(function () use ($project, $validated) {
                $project->update($validated);
            });
        }

        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        DB::transaction(function () use ($project) {
            $project->delete();
        });

        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully.');
    }
}
