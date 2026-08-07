<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;

class PortofolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::where('is_active', true)->orderBy('order')->get();
        return view('portofolio', compact('portfolios'));
    }

    public function show($slug)
    {
        $portfolio = Portfolio::where('slug', $slug)->where('is_active', true)->firstOrFail();
        return view('portofolio-detail', compact('portfolio'));
    }
}
