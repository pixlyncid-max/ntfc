<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Portfolio;
use App\Models\BlogPost;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index()
    {
        $appUrl = config('app.url');
        if (empty($appUrl) || str_contains($appUrl, 'localhost')) {
            $baseUrl = 'https://ntfconsulting.id';
        } else {
            $baseUrl = rtrim($appUrl, '/');
        }

        // Static routes
        $urls = [
            [
                'loc' => $baseUrl . '/',
                'lastmod' => date('Y-m-d'),
                'changefreq' => 'daily',
                'priority' => '1.0',
            ],
            [
                'loc' => $baseUrl . '/tentang-kami',
                'lastmod' => date('Y-m-d'),
                'changefreq' => 'monthly',
                'priority' => '0.8',
            ],
            [
                'loc' => $baseUrl . '/layanan',
                'lastmod' => date('Y-m-d'),
                'changefreq' => 'weekly',
                'priority' => '0.9',
            ],
            [
                'loc' => $baseUrl . '/portofolio',
                'lastmod' => date('Y-m-d'),
                'changefreq' => 'weekly',
                'priority' => '0.8',
            ],
            [
                'loc' => $baseUrl . '/blog',
                'lastmod' => date('Y-m-d'),
                'changefreq' => 'daily',
                'priority' => '0.8',
            ],
        ];

        // Active Services
        try {
            $services = Service::query()->where('is_active', true)->get();
            foreach ($services as $service) {
                $urls[] = [
                    'loc' => $baseUrl . '/layanan/' . $service->slug,
                    'lastmod' => $service->updated_at ? $service->updated_at->format('Y-m-d') : date('Y-m-d'),
                    'changefreq' => 'weekly',
                    'priority' => '0.8',
                ];
            }
        } catch (\Exception $e) {
            // Log or ignore if table missing
        }

        // Active Portfolios
        try {
            $portfolios = Portfolio::query()->where('is_active', true)->get();
            foreach ($portfolios as $portfolio) {
                $urls[] = [
                    'loc' => $baseUrl . '/portofolio/' . $portfolio->slug,
                    'lastmod' => $portfolio->updated_at ? $portfolio->updated_at->format('Y-m-d') : date('Y-m-d'),
                    'changefreq' => 'monthly',
                    'priority' => '0.7',
                ];
            }
        } catch (\Exception $e) {
            // Log or ignore
        }

        // Published Blog Posts
        try {
            $posts = BlogPost::query()->where('is_published', true)->get();
            foreach ($posts as $post) {
                $urls[] = [
                    'loc' => $baseUrl . '/blog/' . $post->slug,
                    'lastmod' => $post->updated_at ? $post->updated_at->format('Y-m-d') : date('Y-m-d'),
                    'changefreq' => 'monthly',
                    'priority' => '0.7',
                ];
            }
        } catch (\Exception $e) {
            // Log or ignore
        }

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        foreach ($urls as $url) {
            $xml .= '  <url>' . "\n";
            $xml .= '    <loc>' . htmlspecialchars($url['loc']) . '</loc>' . "\n";
            $xml .= '    <lastmod>' . $url['lastmod'] . '</lastmod>' . "\n";
            $xml .= '    <changefreq>' . $url['changefreq'] . '</changefreq>' . "\n";
            $xml .= '    <priority>' . $url['priority'] . '</priority>' . "\n";
            $xml .= '  </url>' . "\n";
        }

        $xml .= '</urlset>';

        // Also save to public/sitemap.xml for static server delivery
        try {
            file_put_contents(public_path('sitemap.xml'), $xml);
            file_put_contents(base_path('sitemap.xml'), $xml);
        } catch (\Exception $e) {
            // Ignore write permission errors if any
        }

        return response($xml, 200)->header('Content-Type', 'text/xml');
    }
}
