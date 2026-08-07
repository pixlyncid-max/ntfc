<?php

namespace App\Http\Controllers;

use App\Models\Service;

class LayananController extends Controller
{
    public function index()
    {
        $services = Service::where('is_active', true)->orderBy('order')->get();
        return view('layanan', compact('services'));
    }

    public function show($slug)
    {
        $service = Service::where('slug', $slug)->where('is_active', true)->firstOrFail();
        return view('layanan-detail', compact('service'));
    }
}
