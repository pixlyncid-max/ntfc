<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\TeamMember;

class TentangKamiController extends Controller
{
    public function index()
    {
        $keys = [
            'about_hero_title', 'about_hero_subtext',
            'about_intro_title', 'about_intro_body',
            'about_vision', 'about_mission'
        ];

        $settings = [];
        foreach ($keys as $key) {
            $settings[$key] = Setting::getByKey($key, '');
        }

        $team = TeamMember::where('is_active', true)->orderBy('order')->get();

        return view('tentang-kami', compact('settings', 'team'));
    }
}
