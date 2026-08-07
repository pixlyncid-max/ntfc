<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (config('app.env') === 'production' || request()->header('X-Forwarded-Proto') === 'https' || isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
            \Illuminate\Support\Facades\URL::forceScheme('https');
        }

        View::composer('*', function ($view) {
            $siteSettings = [];
            if (Schema::hasTable('settings')) {
                $siteSettings = Setting::where('group', 'nav_footer')->pluck('value', 'key')->toArray();
            }

            // Build dynamic WhatsApp URL
            $waNum = preg_replace('/[^0-9]/', '', $siteSettings['whatsapp_number'] ?? '6281234567890');
            if (empty($waNum)) {
                $waNum = '6281234567890';
            }
            $waMsg = $siteSettings['whatsapp_message'] ?? 'Halo NTFC, saya ingin berkonsultasi mengenai layanan pajak & keuangan.';
            
            $waUrl = 'https://wa.me/' . $waNum . '?text=' . urlencode($waMsg);

            // Set default CTA URL if nav_cta_link is custom or empty
            $siteSettings['cta_url'] = !empty($siteSettings['nav_cta_link']) ? $siteSettings['nav_cta_link'] : $waUrl;
            $siteSettings['wa_url'] = $waUrl;

            $view->with('siteSettings', $siteSettings);
        });
    }
}
