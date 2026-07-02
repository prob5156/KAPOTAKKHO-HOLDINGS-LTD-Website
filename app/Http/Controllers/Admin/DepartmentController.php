<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::orderBy('name', 'asc')->get();
        return view('admin.departments.index', compact('departments'));
    }

    public function create()
    {
        return view('admin.departments.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:50|unique:departments,code',
            'description' => 'nullable|string',
            'manager' => 'nullable|string|max:255',
            'status' => 'required|in:Active,Inactive',
        ]);

        DB::transaction(function () use ($validated) {
            Department::create($validated);
        });

        return redirect()->route('admin.departments.index')->with('success', 'Department created successfully.');
    }

    public function edit(Department $department)
    {
        return view('admin.departments.edit', compact('department'));
    }

    public function update(Request $request, Department $department)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:50|unique:departments,code,' . $department->id,
            'description' => 'nullable|string',
            'manager' => 'nullable|string|max:255',
            'status' => 'required|in:Active,Inactive',
        ]);

        DB::transaction(function () use ($department, $validated) {
            $department->update($validated);
        });

        return redirect()->route('admin.departments.index')->with('success', 'Department updated successfully.');
    }

    public function destroy(Department $department)
    {
        DB::transaction(function () use ($department) {
            $department->delete();
        });
        return redirect()->route('admin.departments.index')->with('success', 'Department deleted successfully.');
    }
}
