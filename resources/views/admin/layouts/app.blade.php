<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') | NTFC Admin CMS</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('images/icon.png') }}">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Courier+Prime&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

    <!-- Bulletproof CSS & JS Links for Hostinger Shared Hosting -->
    @if(file_exists(public_path('build/manifest.json')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <link rel="stylesheet" href="{{ asset('build/assets/app-Dr0NJUgt.css') }}">
    <link rel="stylesheet" href="{{ asset('public/build/assets/app-Dr0NJUgt.css') }}">
    <script src="{{ asset('build/assets/app-D3s2Cjru.js') }}" defer></script>
    <script src="{{ asset('public/build/assets/app-D3s2Cjru.js') }}" defer></script>

    <style>
        body { background-color: #0e0e0e; color: #e5e2e1; font-family: 'Inter', sans-serif; }
        .sidebar-link { display: flex; align-items: center; gap: 12px; padding: 12px 18px; color: #cfc4c5; font-size: 13px; font-weight: 500; text-decoration: none; border-radius: 6px; transition: all 0.2s; }
        .sidebar-link:hover, .sidebar-link.active { background-color: rgba(4, 140, 214, 0.15); color: #048CD6; font-weight: 600; }
        .admin-card { background-color: #131313; border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; padding: 24px; }
        .form-input { background-color: #1c1b1b; border: 1px solid rgba(255,255,255,0.12); color: #e5e2e1; padding: 10px 14px; border-radius: 6px; width: 100%; font-size: 14px; }
        .form-input:focus { outline: none; border-color: #048CD6; box-shadow: 0 0 0 2px rgba(4, 140, 214, 0.2); }
        .btn-admin { background-color: #048CD6; color: #ffffff; padding: 10px 20px; font-weight: 600; font-size: 13px; border-radius: 6px; text-transform: uppercase; letter-spacing: 0.05em; transition: all 0.2s; display: inline-flex; align-items: center; gap: 8px; border: none; cursor: pointer; text-decoration: none; }
        .btn-admin:hover { background-color: #0374b3; }
        .btn-admin-secondary { background-color: rgba(255,255,255,0.08); color: #e5e2e1; border: 1px solid rgba(255,255,255,0.12); }
        .btn-admin-secondary:hover { background-color: rgba(255,255,255,0.15); }
        .btn-admin-danger { background-color: #dc2626; color: #fff; }
        .btn-admin-danger:hover { background-color: #b91c1c; }
    </style>
</head>
<body class="min-h-screen flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-[#131313] border-r border-white/10 flex flex-col justify-between flex-shrink-0 min-h-screen">
        <div>
            <!-- Logo Header -->
            <div class="p-6 border-b border-white/10 flex items-center justify-between">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3">
                    <img src="{{ asset('images/logo biru.png') }}" alt="NTFC" style="height: 32px; width: auto;">
                    <span class="text-xs uppercase tracking-widest text-[#048CD6] font-mono font-bold">CMS</span>
                </a>
            </div>

            <!-- Navigation Links -->
            <nav class="p-4 space-y-1">
                <a href="{{ route('admin.dashboard') }}" class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <span class="material-symbols-outlined text-lg">dashboard</span>
                    Dashboard
                </a>
                
                <div class="pt-4 pb-2 px-4 text-[10px] uppercase font-mono tracking-widest text-white/40">Konten Halaman</div>

                <a href="{{ route('admin.beranda.index') }}" class="sidebar-link {{ request()->routeIs('admin.beranda.*') ? 'active' : '' }}">
                    <span class="material-symbols-outlined text-lg">home</span>
                    Beranda
                </a>

                <a href="{{ route('admin.tentang-kami.index') }}" class="sidebar-link {{ request()->routeIs('admin.tentang-kami.*') ? 'active' : '' }}">
                    <span class="material-symbols-outlined text-lg">info</span>
                    Tentang Kami
                </a>

                <a href="{{ route('admin.team.index') }}" class="sidebar-link {{ request()->routeIs('admin.team.*') ? 'active' : '' }}">
                    <span class="material-symbols-outlined text-lg">groups</span>
                    Foto & Profil Tim
                </a>

                <a href="{{ route('admin.layanan.index') }}" class="sidebar-link {{ request()->routeIs('admin.layanan.*') ? 'active' : '' }}">
                    <span class="material-symbols-outlined text-lg">medical_services</span>
                    Layanan
                </a>

                <a href="{{ route('admin.portofolio.index') }}" class="sidebar-link {{ request()->routeIs('admin.portofolio.*') ? 'active' : '' }}">
                    <span class="material-symbols-outlined text-lg">work</span>
                    Portofolio
                </a>

                <a href="{{ route('admin.blog.index') }}" class="sidebar-link {{ request()->routeIs('admin.blog.*') ? 'active' : '' }}">
                    <span class="material-symbols-outlined text-lg">article</span>
                    Blog & Insight
                </a>

                <div class="pt-4 pb-2 px-4 text-[10px] uppercase font-mono tracking-widest text-white/40">Sistem & Layout</div>

                <a href="{{ route('admin.nav-footer.index') }}" class="sidebar-link {{ request()->routeIs('admin.nav-footer.*') ? 'active' : '' }}">
                    <span class="material-symbols-outlined text-lg">dock</span>
                    Navbar & Footer
                </a>
            </nav>
        </div>

        <!-- Footer / User Info -->
        <div class="p-4 border-t border-white/10">
            <div class="flex items-center justify-between">
                <div class="truncate">
                    <p class="text-xs font-semibold text-white truncate">{{ auth()->user()->name }}</p>
                    <p class="text-[11px] text-white/50 truncate">{{ auth()->user()->email }}</p>
                </div>
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="p-2 text-white/60 hover:text-red-400 transition-colors" title="Keluar">
                        <span class="material-symbols-outlined text-lg">logout</span>
                    </button>
                </form>
            </div>
            <div class="mt-4 pt-2 border-t border-white/5 flex items-center justify-between text-[11px]">
                <a href="{{ route('beranda') }}" target="_blank" class="text-[#048CD6] hover:underline flex items-center gap-1">
                    <span class="material-symbols-outlined text-xs">open_in_new</span> Lihat Website
                </a>
            </div>
        </div>
    </aside>

    <!-- Main Content Area -->
    <div class="flex-grow flex flex-col min-w-0 bg-[#0e0e0e]">
        <!-- Top Bar -->
        <header class="h-16 border-b border-white/10 px-8 flex items-center justify-between bg-[#131313]">
            <h1 class="text-lg font-semibold text-white">@yield('title')</h1>
            <div class="flex items-center gap-4">
                <span class="text-xs font-mono text-white/50">{{ date('d M Y, H:i') }} WITA</span>
            </div>
        </header>

        <!-- Content -->
        <main class="p-8 flex-grow">
            @if(session('success'))
                <div class="mb-6 p-4 rounded-lg bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-sm flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-lg">check_circle</span>
                        {{ session('success') }}
                    </div>
                </div>
            @endif

            @if($errors->any())
                <div class="mb-6 p-4 rounded-lg bg-red-500/10 border border-red-500/30 text-red-400 text-sm">
                    <div class="flex items-center gap-2 font-semibold mb-1">
                        <span class="material-symbols-outlined text-lg">error</span>
                        Terdapat kesalahan pada inputan:
                    </div>
                    <ul class="list-disc list-inside space-y-1 text-xs">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')
        </main>
    </div>

</body>
</html>
