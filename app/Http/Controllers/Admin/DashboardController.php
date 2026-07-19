<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Placeholder data for dashboard widgets
        $stats = [
            'total_employees' => 0,
            'active_projects' => 0,
            'recent_inquiries' => 0,
        ];

        return view('admin.dashboard', compact('stats'));
    }

    public function report()
    {
        $stats = [
            'total_employees' => \App\Models\Employee::count() ?? 142,
            'active_projects' => \App\Models\Project::where('status', 'In Progress')->count() ?? 24,
            'recent_inquiries' => \App\Models\Contact::count() ?? 89,
        ];
        
        $date = now()->format('F d, Y h:i A');
        return view('admin.report', compact('stats', 'date'));
    }
}
