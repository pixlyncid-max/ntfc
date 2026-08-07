<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index()
    {
        $team = TeamMember::orderBy('order')->get();
        return view('admin.team.index', compact('team'));
    }

    public function create()
    {
        return view('admin.team.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:4096',
            'order' => 'integer',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('team', 'public');
            $validated['image'] = asset('storage/' . $path);
        } elseif ($request->filled('image_url')) {
            $validated['image'] = $request->input('image_url');
        }

        $validated['is_active'] = $request->has('is_active');
        $validated['order'] = $request->input('order', 0);

        TeamMember::create($validated);

        return redirect()->route('admin.team.index')->with('success', 'Anggota tim berhasil ditambahkan!');
    }

    public function edit(TeamMember $team)
    {
        return view('admin.team.edit', compact('team'));
    }

    public function update(Request $request, TeamMember $team)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:4096',
            'order' => 'integer',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('team', 'public');
            $validated['image'] = asset('storage/' . $path);
        } elseif ($request->filled('image_url')) {
            $validated['image'] = $request->input('image_url');
        }

        $validated['is_active'] = $request->has('is_active');
        $validated['order'] = $request->input('order', 0);

        $team->update($validated);

        return redirect()->route('admin.team.index')->with('success', 'Data anggota tim berhasil diperbarui!');
    }

    public function destroy(TeamMember $team)
    {
        $team->delete();
        return redirect()->route('admin.team.index')->with('success', 'Anggota tim berhasil dihapus.');
    }
}
