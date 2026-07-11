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
}
