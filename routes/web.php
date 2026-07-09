<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::middleware(['activity'])->group(function () {
    Route::get('/', [PageController::class, 'home'])->name('home');

    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/projects', [PageController::class, 'projects'])->name('projects');
    Route::get('/divisions', [PageController::class, 'divisions'])->name('divisions');
    Route::get('/contact', [PageController::class, 'contact'])->name('contact');
    Route::get('/news', [PageController::class, 'news'])->name('news');
    Route::get('/careers', [PageController::class, 'careers'])->name('careers');
    Route::get('/investor-relations', [PageController::class, 'investorRelations'])->name('investor-relations');
    Route::get('/governance', [PageController::class, 'governance'])->name('governance');
    Route::get('/sustainability', [PageController::class, 'sustainability'])->name('sustainability');
    Route::get('/faq', [PageController::class, 'faq'])->name('faq');

    // Authentication Routes
    Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
    Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

    Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

    // Password Reset Routes (Placeholders that match the views)
    Route::get('/forgot-password', function() { return view('auth.forgot-password'); })->name('password.request');
    Route::post('/forgot-password', function() { return back()->with('status', 'We have emailed your password reset link!'); })->name('password.email');
});

// Protected Admin Dashboard
Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('/admin/employees', App\Http\Controllers\Admin\EmployeeController::class)->names('admin.employees');
    Route::resource('/admin/departments', App\Http\Controllers\Admin\DepartmentController::class)->names('admin.departments');
    Route::resource('/admin/projects', App\Http\Controllers\Admin\ProjectController::class)->names('admin.projects');
    Route::resource('/admin/clients', App\Http\Controllers\Admin\ClientController::class)->names('admin.clients');
    Route::resource('/admin/contacts', App\Http\Controllers\Admin\ContactController::class)->only(['index', 'show', 'destroy'])->names('admin.contacts');
    Route::resource('/admin/jobs', App\Http\Controllers\Admin\JobController::class)->names('admin.jobs');
    Route::resource('/admin/news', App\Http\Controllers\Admin\NewsController::class)->names('admin.news');
    Route::resource('/admin/faqs', App\Http\Controllers\Admin\FaqController::class)->names('admin.faqs');
});
