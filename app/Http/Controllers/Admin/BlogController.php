<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::latest()->get();
        return view('admin.blog.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:4096',
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'is_published' => 'boolean',
            'is_featured' => 'boolean',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_published'] = $request->has('is_published');
        $validated['is_featured'] = $request->has('is_featured');
        $validated['published_at'] = $validated['is_published'] ? now() : null;

        if ($validated['is_featured']) {
            BlogPost::where('is_featured', true)->update(['is_featured' => false]);
        }

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('blog', 'public');
            $validated['image'] = asset('storage/' . $path);
        } elseif ($request->filled('image_url')) {
            $validated['image'] = $request->input('image_url');
        }

        BlogPost::create($validated);

        return redirect()->route('admin.blog.index')->with('success', 'Artikel blog berhasil dipublikasikan!');
    }

    public function edit(BlogPost $blog)
    {
        return view('admin.blog.edit', ['post' => $blog]);
    }

    public function update(Request $request, BlogPost $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:4096',
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'is_published' => 'boolean',
            'is_featured' => 'boolean',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_published'] = $request->has('is_published');
        $validated['is_featured'] = $request->has('is_featured');

        if ($validated['is_featured']) {
            BlogPost::where('id', '!=', $blog->id)->where('is_featured', true)->update(['is_featured' => false]);
        }

        if ($validated['is_published'] && !$blog->published_at) {
            $validated['published_at'] = now();
        }

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('blog', 'public');
            $validated['image'] = asset('storage/' . $path);
        } elseif ($request->filled('image_url')) {
            $validated['image'] = $request->input('image_url');
        }

        $blog->update($validated);

        return redirect()->route('admin.blog.index')->with('success', 'Artikel blog berhasil diperbarui!');
    }

    public function destroy(BlogPost $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blog.index')->with('success', 'Artikel blog berhasil dihapus.');
    }
}
