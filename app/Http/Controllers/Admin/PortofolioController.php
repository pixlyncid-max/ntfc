<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortofolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::orderBy('order')->get();
        return view('admin.portofolio.index', compact('portfolios'));
    }

    public function create()
    {
        return view('admin.portofolio.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'client' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:4096',
            'summary' => 'nullable|string',
            'challenge' => 'nullable|string',
            'solution' => 'nullable|string',
            'result' => 'nullable|string',
            'order' => 'integer',
            'is_active' => 'boolean',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_active'] = $request->has('is_active');
        $validated['order'] = $request->input('order', 0);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('portfolio', 'public');
            $validated['image'] = asset('storage/' . $path);
        } elseif ($request->filled('image_url')) {
            $validated['image'] = $request->input('image_url');
        }

        Portfolio::create($validated);

        return redirect()->route('admin.portofolio.index')->with('success', 'Studi kasus portofolio berhasil ditambahkan!');
    }

    public function edit(Portfolio $portofolio)
    {
        return view('admin.portofolio.edit', ['portfolio' => $portofolio]);
    }

    public function update(Request $request, Portfolio $portofolio)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'client' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:4096',
            'summary' => 'nullable|string',
            'challenge' => 'nullable|string',
            'solution' => 'nullable|string',
            'result' => 'nullable|string',
            'order' => 'integer',
            'is_active' => 'boolean',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_active'] = $request->has('is_active');
        $validated['order'] = $request->input('order', 0);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('portfolio', 'public');
            $validated['image'] = asset('storage/' . $path);
        } elseif ($request->filled('image_url')) {
            $validated['image'] = $request->input('image_url');
        }

        $portofolio->update($validated);

        return redirect()->route('admin.portofolio.index')->with('success', 'Portofolio berhasil diperbarui!');
    }

    public function destroy(Portfolio $portofolio)
    {
        $portofolio->delete();
        return redirect()->route('admin.portofolio.index')->with('success', 'Portofolio berhasil dihapus.');
    }
}
