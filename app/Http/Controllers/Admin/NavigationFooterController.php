<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class NavigationFooterController extends Controller
{
    public function index()
    {
        $settings = Setting::where('group', 'nav_footer')->pluck('value', 'key')->toArray();

        return view('admin.nav-footer.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'site_logo_file' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:4096',
            'site_favicon_file' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg,ico|max:2048',
            'site_logo' => 'nullable|string',
            'site_favicon' => 'nullable|string',
            'nav_cta_text' => 'nullable|string|max:255',
            'nav_cta_link' => 'nullable|string|max:255',
            'whatsapp_number' => 'nullable|string|max:50',
            'whatsapp_message' => 'nullable|string',
            'social_tiktok' => 'nullable|string|max:255',
            'social_instagram' => 'nullable|string|max:255',
            'social_facebook' => 'nullable|string|max:255',
            'footer_copyright' => 'nullable|string',
            'footer_tagline' => 'nullable|string',
            'footer_privacy_link' => 'nullable|string|max:255',
            'footer_terms_link' => 'nullable|string|max:255',
            'footer_career_link' => 'nullable|string|max:255',
            'footer_contact_link' => 'nullable|string|max:255',
        ]);

        $keys = [
            'nav_cta_text',
            'nav_cta_link',
            'whatsapp_number',
            'whatsapp_message',
            'social_tiktok',
            'social_instagram',
            'social_facebook',
            'footer_copyright',
            'footer_tagline',
            'footer_privacy_link',
            'footer_terms_link',
            'footer_career_link',
            'footer_contact_link',
        ];

        foreach ($keys as $key) {
            if ($request->has($key)) {
                Setting::setByKey($key, $request->input($key), 'nav_footer');
            }
        }

        // Handle Logo Upload
        if ($request->hasFile('site_logo_file')) {
            $path = $request->file('site_logo_file')->store('branding', 'public');
            Setting::setByKey('site_logo', asset('storage/' . $path), 'nav_footer');
        } elseif ($request->filled('site_logo')) {
            Setting::setByKey('site_logo', $request->input('site_logo'), 'nav_footer');
        }

        // Handle Favicon Upload
        if ($request->hasFile('site_favicon_file')) {
            $path = $request->file('site_favicon_file')->store('branding', 'public');
            Setting::setByKey('site_favicon', asset('storage/' . $path), 'nav_footer');
        } elseif ($request->filled('site_favicon')) {
            Setting::setByKey('site_favicon', $request->input('site_favicon'), 'nav_footer');
        }

        return redirect()->route('admin.nav-footer.index')->with('success', 'Pengaturan Navbar, Footer & Social Media berhasil diperbarui!');
    }
}
