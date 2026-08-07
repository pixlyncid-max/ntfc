<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LayananController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('order')->get();
        return view('admin.layanan.index', compact('services'));
    }

    public function create()
    {
        return view('admin.layanan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'features' => 'nullable|string', // comma separated input
            'order' => 'integer',
            'is_active' => 'boolean',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_active'] = $request->has('is_active');
        $validated['order'] = $request->input('order', 0);

        if (!empty($request->input('features'))) {
            $validated['features'] = array_map('trim', explode("\n", str_replace("\r", "", $request->input('features'))));
        } else {
            $validated['features'] = [];
        }

        Service::create($validated);

        return redirect()->route('admin.layanan.index')->with('success', 'Layanan baru berhasil ditambahkan!');
    }

    public function edit(Service $layanan)
    {
        return view('admin.layanan.edit', ['service' => $layanan]);
    }

    public function update(Request $request, Service $layanan)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'features' => 'nullable|string',
            'order' => 'integer',
            'is_active' => 'boolean',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_active'] = $request->has('is_active');
        $validated['order'] = $request->input('order', 0);

        if (!empty($request->input('features'))) {
            $validated['features'] = array_map('trim', explode("\n", str_replace("\r", "", $request->input('features'))));
        } else {
            $validated['features'] = [];
        }

        $layanan->update($validated);

        return redirect()->route('admin.layanan.index')->with('success', 'Layanan berhasil diperbarui!');
    }

    public function destroy(Service $layanan)
    {
        $layanan->delete();
        return redirect()->route('admin.layanan.index')->with('success', 'Layanan berhasil dihapus.');
    }
}
