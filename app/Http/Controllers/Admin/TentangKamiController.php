<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

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

        return view('admin.tentang-kami.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $data = $request->except('_token');

        foreach ($data as $key => $value) {
            Setting::setByKey($key, $value, 'tentang_kami');
        }

        return back()->with('success', 'Konten halaman Tentang Kami berhasil diperbarui!');
    }
}
