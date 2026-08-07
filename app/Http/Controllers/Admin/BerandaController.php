<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class BerandaController extends Controller
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

        return view('admin.beranda.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $data = $request->except('_token');

        foreach ($data as $key => $value) {
            Setting::setByKey($key, $value, 'beranda');
        }

        return back()->with('success', 'Konten Beranda berhasil diperbarui!');
    }
}
