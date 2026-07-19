<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class PageController extends Controller
{
    public function home(Request $request)
    {
        if (!$request->hasCookie('first_visit_time')) {
            Cookie::queue('first_visit_time', now()->toDateTimeString(), 60 * 24 * 365); // 1 year
        }
        
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function projects()
    {
        return view('projects');
    }

    public function divisions()
    {
        return view('divisions');
    }

    public function contact()
    {
        return view('contact');
    }

    public function submitContact(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'department' => 'required|string|max:100',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:20',
            'privacy' => 'accepted'
        ]);

        $fullMessage = "Phone: " . ($request->phone ?? 'N/A') . "\n";
        $fullMessage .= "Department: " . $request->department . "\n\n";
        $fullMessage .= "Message:\n" . $request->message;

        \App\Models\Contact::create([
            'name' => $request->full_name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $fullMessage,
            'status' => 'Unread'
        ]);

        return response()->json(['success' => true, 'message' => 'Your enquiry has been submitted successfully.']);
    }

    public function news()
    {
        return view('news');
    }

    public function careers()
    {
        return view('careers');
    }

    public function investorRelations()
    {
        return view('investor-relations');
    }

    public function governance()
    {
        return view('governance');
    }

    public function sustainability()
    {
        return view('sustainability');
    }

    public function faq()
    {
        return view('faq');
    }
}
