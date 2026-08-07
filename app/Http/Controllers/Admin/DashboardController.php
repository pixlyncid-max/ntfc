<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\BlogPost;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'team_count' => TeamMember::count(),
            'service_count' => Service::count(),
            'portfolio_count' => Portfolio::count(),
            'blog_count' => BlogPost::count(),
        ];

        $latest_posts = BlogPost::latest()->take(5)->get();
        $team_members = TeamMember::orderBy('order')->take(5)->get();

        return view('admin.dashboard', compact('stats', 'latest_posts', 'team_members'));
    }
}
