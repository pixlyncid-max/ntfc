<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\BlogPost;

class HomeController extends Controller
{
    public function index()
    {
        $keys = [
            'hero_title_1', 'hero_title_2', 'hero_title_3', 'hero_subtext', 'hero_cta_text',
            'stat_1_val', 'stat_1_label', 'stat_2_val', 'stat_2_label',
            'stat_3_val', 'stat_3_label', 'stat_4_val', 'stat_4_label',
            'philosophy_title', 'philosophy_body_1', 'philosophy_body_2'
        ];

        $settings = [];
        foreach ($keys as $key) {
            $settings[$key] = Setting::getByKey($key, '');
        }

        $services = Service::where('is_active', true)->orderBy('order')->take(4)->get();
        $portfolios = Portfolio::where('is_active', true)->orderBy('order')->take(2)->get();
        $posts = BlogPost::where('is_published', true)->latest()->take(3)->get();

        return view('beranda', compact('settings', 'services', 'portfolios', 'posts'));
    }
}
