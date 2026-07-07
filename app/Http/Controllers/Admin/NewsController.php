<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewsController extends Controller
{

    public function index(Request $request)
    {
        $query = News::query();
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where('title', 'like', "%{$search}%")
                  ->orWhere('category', 'like', "%{$search}%");
        }
        $news = $query->orderBy('id', 'desc')->paginate(10);
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category' => 'required|in:News,Press Release,Event',
            'status' => 'required|in:Draft,Published,Archived',
            'published_date' => 'nullable|date',
        ]);

        $validated['slug'] = Str::slug($validated['title']) . '-' . time();

        DB::transaction(function () use ($validated) {
            News::create($validated);
        });

        return redirect()->route('admin.news.index')->with('success', 'News article created successfully.');
    }

    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category' => 'required|in:News,Press Release,Event',
            'status' => 'required|in:Draft,Published,Archived',
            'published_date' => 'nullable|date',
        ]);

        // Only update slug if title changed significantly
        if ($request->title !== $news->title) {
            $validated['slug'] = Str::slug($validated['title']) . '-' . time();
        }

        DB::transaction(function () use ($news, $validated) {
            $news->update($validated);
        });

        return redirect()->route('admin.news.index')->with('success', 'News article updated successfully.');
    }

    public function destroy(News $news)
    {
        DB::transaction(function () use ($news) {
            $news->delete();
        });
        return redirect()->route('admin.news.index')->with('success', 'News article deleted successfully.');
    }
}
