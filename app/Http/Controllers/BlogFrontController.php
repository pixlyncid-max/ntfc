<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogFrontController extends Controller
{
    public function index(Request $request)
    {
        // Featured Post
        $featured = BlogPost::where('is_published', true)
            ->where('is_featured', true)
            ->first();

        if (!$featured) {
            $featured = BlogPost::where('is_published', true)->latest()->first();
        }

        // Taxonomy counts
        $taxonomy = [
            'ALL INSIGHTS' => BlogPost::where('is_published', true)->count(),
            'CORPORATE FINANCE' => BlogPost::where('is_published', true)->where('category', 'CORPORATE FINANCE')->count(),
            'TAX STRATEGY' => BlogPost::where('is_published', true)->where('category', 'TAX STRATEGY')->count(),
            'MERGERS & ACQUISITIONS' => BlogPost::where('is_published', true)->where('category', 'MERGERS & ACQUISITIONS')->count(),
            'REGULATORY COMPLIANCE' => BlogPost::where('is_published', true)->where('category', 'REGULATORY COMPLIANCE')->count(),
        ];

        // Active Category Filter
        $activeCategory = $request->query('category', 'all');

        $query = BlogPost::where('is_published', true);

        if ($featured) {
            $query->where('id', '!=', $featured->id);
        }

        if ($activeCategory !== 'all' && !empty($activeCategory)) {
            $query->where('category', $activeCategory);
        }

        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('excerpt', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }

        $posts = $query->latest('published_at')->paginate(4);

        return view('blog', compact('posts', 'featured', 'taxonomy', 'activeCategory'));
    }

    public function show($slug)
    {
        $post = BlogPost::where('slug', $slug)->where('is_published', true)->firstOrFail();
        $recent_posts = BlogPost::where('is_published', true)->where('id', '!=', $post->id)->latest()->take(3)->get();
        return view('blog-detail', compact('post', 'recent_posts'));
    }
}
