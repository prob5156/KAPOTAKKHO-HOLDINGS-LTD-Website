<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{

    public function index(Request $request)
    {
        $query = Employee::query();
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where('name', 'like', "%{$search}%")
                  ->orWhere('department', 'like', "%{$search}%");
        }
        $employees = $query->orderBy('id', 'desc')->paginate(10);
        return view('admin.employees.index', compact('employees'));
    }

    public function create()
    {
        return view('admin.employees.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            'phone' => 'nullable|string|max:20',
            'department' => 'required|string|max:100',
            'position' => 'required|string|max:100',
            'join_date' => 'required|date',
            'status' => 'required|in:Active,Inactive',
        ]);

        DB::transaction(function () use ($validated) {
            Employee::create($validated);
        });

        return redirect()->route('admin.employees.index')->with('success', 'Employee created successfully.');
    }

    public function edit(Employee $employee)
    {
        return view('admin.employees.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email,' . $employee->id,
            'phone' => 'nullable|string|max:20',
            'department' => 'required|string|max:100',
            'position' => 'required|string|max:100',
            'join_date' => 'required|date',
            'status' => 'required|in:Active,Inactive',
        ]);

        DB::transaction(function () use ($employee, $validated) {
            $employee->update($validated);
        });

        return redirect()->route('admin.employees.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy(Employee $employee)
    {
        DB::transaction(function () use ($employee) {
            $employee->delete();
        });
        return redirect()->route('admin.employees.index')->with('success', 'Employee deleted successfully.');
    }
}
