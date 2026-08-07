<!DOCTYPE html>
<html lang="id" class="dark scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'NTFC') | Nusantara Tax, Finance, and Consulting</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ $siteSettings['site_favicon'] ?? asset('images/icon.png') }}">
    <link rel="shortcut icon" href="{{ $siteSettings['site_favicon'] ?? asset('images/icon.png') }}">

    <!-- Preconnect for fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Courier+Prime&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('head')
</head>
<body style="background-color: #131313; color: #e5e2e1;" class="antialiased min-h-screen flex flex-col">

<!-- ============================================================
     NAVIGATION
     ============================================================ -->
<header id="main-nav" class="w-full sticky top-0 z-50 transition-all duration-300"
        style="background-color: #131313; border-bottom: 1px solid transparent;">
    <div class="flex justify-between items-center w-full py-4 page-padding">

        <!-- Logo -->
        <div class="flex items-center">
            <a href="{{ route('beranda') }}" class="flex items-center group">
                <img src="{{ $siteSettings['site_logo'] ?? asset('images/logo biru.png') }}" alt="NTFC" style="height: 40px; width: auto; object-fit: contain;">
            </a>
        </div>

        <!-- Desktop Nav -->
        <nav class="hidden md:flex items-center" style="gap: 32px;">
            <a href="{{ route('beranda') }}"
               style="font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600; letter-spacing: 0.05em; text-transform: uppercase;
               {{ request()->routeIs('beranda') ? 'color: #c6c6c6; border-bottom: 2px solid #c6c6c6; padding-bottom: 4px;' : 'color: #cfc4c5;' }}
               transition: color 0.3s;">Beranda</a>
            <a href="{{ route('tentang-kami') }}"
               style="font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600; letter-spacing: 0.05em; text-transform: uppercase;
               {{ request()->routeIs('tentang-kami') ? 'color: #c6c6c6; border-bottom: 2px solid #c6c6c6; padding-bottom: 4px;' : 'color: #cfc4c5;' }}
               transition: color 0.3s;">Tentang Kami</a>
            <a href="{{ route('layanan') }}"
               style="font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600; letter-spacing: 0.05em; text-transform: uppercase;
               {{ request()->routeIs('layanan') ? 'color: #c6c6c6; border-bottom: 2px solid #c6c6c6; padding-bottom: 4px;' : 'color: #cfc4c5;' }}
               transition: color 0.3s;">Layanan</a>
            <a href="{{ route('portofolio') }}"
               style="font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600; letter-spacing: 0.05em; text-transform: uppercase;
               {{ request()->routeIs('portofolio') ? 'color: #c6c6c6; border-bottom: 2px solid #c6c6c6; padding-bottom: 4px;' : 'color: #cfc4c5;' }}
               transition: color 0.3s;">Portofolio</a>
            <a href="{{ route('blog') }}"
               style="font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600; letter-spacing: 0.05em; text-transform: uppercase;
               {{ request()->routeIs('blog') ? 'color: #c6c6c6; border-bottom: 2px solid #c6c6c6; padding-bottom: 4px;' : 'color: #cfc4c5;' }}
               transition: color 0.3s;">Blog</a>
        </nav>

        <!-- CTA Button -->
        <a href="{{ $siteSettings['cta_url'] ?? $siteSettings['wa_url'] }}" target="_blank" rel="noopener" class="btn-primary hidden md:inline-flex"
           style="padding: 10px 24px; font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600; letter-spacing: 0.05em; text-transform: uppercase; text-decoration: none;">
            {{ $siteSettings['nav_cta_text'] ?? 'Konsultasi Sekarang' }}
        </a>

        <!-- Mobile Hamburger -->
        <button id="mobile-menu-btn" class="md:hidden" style="color: #e5e2e1; background: none; border: none; cursor: pointer; padding: 4px;" aria-label="Toggle menu">
            <span class="material-symbols-outlined" id="menu-icon" style="font-size: 24px;">menu</span>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" style="background-color: #0e0e0e; border-top: 0.5px solid rgba(255,255,255,0.1);">
        <div style="padding: 16px 20px; display: flex; flex-direction: column; gap: 0;">
            <a href="{{ route('beranda') }}" style="padding: 14px 0; font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600; letter-spacing: 0.05em; text-transform: uppercase; color: {{ request()->routeIs('beranda') ? '#048CD6' : '#cfc4c5' }}; border-bottom: 0.5px solid rgba(255,255,255,0.08); text-decoration: none;">Beranda</a>
            <a href="{{ route('tentang-kami') }}" style="padding: 14px 0; font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600; letter-spacing: 0.05em; text-transform: uppercase; color: {{ request()->routeIs('tentang-kami') ? '#048CD6' : '#cfc4c5' }}; border-bottom: 0.5px solid rgba(255,255,255,0.08); text-decoration: none;">Tentang Kami</a>
            <a href="{{ route('layanan') }}" style="padding: 14px 0; font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600; letter-spacing: 0.05em; text-transform: uppercase; color: {{ request()->routeIs('layanan') ? '#048CD6' : '#cfc4c5' }}; border-bottom: 0.5px solid rgba(255,255,255,0.08); text-decoration: none;">Layanan</a>
            <a href="{{ route('portofolio') }}" style="padding: 14px 0; font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600; letter-spacing: 0.05em; text-transform: uppercase; color: {{ request()->routeIs('portofolio') ? '#048CD6' : '#cfc4c5' }}; border-bottom: 0.5px solid rgba(255,255,255,0.08); text-decoration: none;">Portofolio</a>
            <a href="{{ route('blog') }}" style="padding: 14px 0; font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600; letter-spacing: 0.05em; text-transform: uppercase; color: {{ request()->routeIs('blog') ? '#048CD6' : '#cfc4c5' }}; border-bottom: 0.5px solid rgba(255,255,255,0.08); text-decoration: none;">Blog</a>
            <div style="padding-top: 16px;">
                <a href="{{ $siteSettings['cta_url'] ?? $siteSettings['wa_url'] }}" target="_blank" rel="noopener" class="btn-primary" style="padding: 12px 24px; font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600; letter-spacing: 0.05em; text-transform: uppercase; text-decoration: none; width: 100%; justify-content: center;">
                    {{ $siteSettings['nav_cta_text'] ?? 'Konsultasi Sekarang' }}
                </a>
            </div>
        </div>
    </div>
</header>

<!-- ============================================================
     MAIN CONTENT
     ============================================================ -->
<main class="flex-grow flex flex-col">
    @yield('content')
</main>

<!-- ============================================================
     FOOTER — 3 Columns Perfectly Aligned Side-by-Side
     ============================================================ -->
<footer style="background-color: #0e0e0e; border-top: 0.5px solid rgba(255,255,255,0.15); width: 100%;">
    <div class="page-padding w-full grid grid-cols-1 md:grid-cols-12 gap-8 items-start py-16 animate-on-scroll" style="background-color: #0e0e0e;">
        
        <!-- Brand & Socials Column (6 Grid Cols) -->
        <div class="md:col-span-6 flex flex-col items-start gap-4">
            <a href="{{ route('beranda') }}" class="inline-block">
                <img src="{{ $siteSettings['site_logo'] ?? asset('images/logo biru.png') }}" alt="NTFC" style="height: 36px; width: auto; object-fit: contain; display: block;">
            </a>
            <p style="font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600; letter-spacing: 0.05em; color: #cfc4c5; line-height: 20px;">
                {{ $siteSettings['footer_copyright'] ?? '© ' . date('Y') . ' Nusantara Tax, Finance, and Consulting. Hak cipta dilindungi undang-undang.' }}
            </p>
            <p style="font-family: 'Courier Prime', monospace; font-size: 13px; color: #cfc4c5; opacity: 0.6;">
                {{ $siteSettings['footer_tagline'] ?? 'Rekayasa keuangan presisi untuk korporasi modern.' }}
            </p>

            <!-- Social Media Links (WhatsApp, TikTok, Instagram, Facebook) -->
            <div class="flex items-center gap-3 pt-2">
                <!-- WhatsApp -->
                @if(!empty($siteSettings['wa_url']))
                    <a href="{{ $siteSettings['wa_url'] }}" target="_blank" rel="noopener" title="WhatsApp Konsultasi"
                       style="width: 38px; height: 38px; border-radius: 50%; background-color: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.15); display: flex; align-items: center; justify-content: center; color: #25D366; text-decoration: none; transition: all 0.3s;"
                       onmouseover="this.style.backgroundColor='#25D366'; this.style.color='#ffffff'; this.style.borderColor='#25D366'; this.style.transform='translateY(-2px)'"
                       onmouseout="this.style.backgroundColor='rgba(255,255,255,0.06)'; this.style.color='#25D366'; this.style.borderColor='rgba(255,255,255,0.15)'; this.style.transform='translateY(0)'">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662a11.87 11.87 0 005.707 1.456h.005c6.554 0 11.89-5.335 11.893-11.893 0-3.177-1.238-6.164-3.484-8.41"/></svg>
                    </a>
                @endif

                <!-- TikTok -->
                @if(!empty($siteSettings['social_tiktok']))
                    <a href="{{ $siteSettings['social_tiktok'] }}" target="_blank" rel="noopener" title="TikTok"
                       style="width: 38px; height: 38px; border-radius: 50%; background-color: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.15); display: flex; align-items: center; justify-content: center; color: #e5e2e1; text-decoration: none; transition: all 0.3s;"
                       onmouseover="this.style.backgroundColor='#000000'; this.style.color='#00f2fe'; this.style.borderColor='#00f2fe'; this.style.transform='translateY(-2px)'"
                       onmouseout="this.style.backgroundColor='rgba(255,255,255,0.06)'; this.style.color='#e5e2e1'; this.style.borderColor='rgba(255,255,255,0.15)'; this.style.transform='translateY(0)'">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-5.2 1.74 2.89 2.89 0 012.31-4.64 2.93 2.93 0 01.88.13V9.4a6.84 6.84 0 00-1-.05A6.33 6.33 0 003 15.68 6.34 6.34 0 009.68 22a6.34 6.34 0 006.32-6.32V9.85a8.18 8.18 0 004.83 1.57V8a4.84 4.84 0 01-1.24-1.31z"/></svg>
                    </a>
                @endif

                <!-- Instagram -->
                @if(!empty($siteSettings['social_instagram']))
                    <a href="{{ $siteSettings['social_instagram'] }}" target="_blank" rel="noopener" title="Instagram"
                       style="width: 38px; height: 38px; border-radius: 50%; background-color: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.15); display: flex; align-items: center; justify-content: center; color: #e5e2e1; text-decoration: none; transition: all 0.3s;"
                       onmouseover="this.style.backgroundColor='#E1306C'; this.style.color='#ffffff'; this.style.borderColor='#E1306C'; this.style.transform='translateY(-2px)'"
                       onmouseout="this.style.backgroundColor='rgba(255,255,255,0.06)'; this.style.color='#e5e2e1'; this.style.borderColor='rgba(255,255,255,0.15)'; this.style.transform='translateY(0)'">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                @endif

                <!-- Facebook -->
                @if(!empty($siteSettings['social_facebook']))
                    <a href="{{ $siteSettings['social_facebook'] }}" target="_blank" rel="noopener" title="Facebook"
                       style="width: 38px; height: 38px; border-radius: 50%; background-color: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.15); display: flex; align-items: center; justify-content: center; color: #e5e2e1; text-decoration: none; transition: all 0.3s;"
                       onmouseover="this.style.backgroundColor='#1877F2'; this.style.color='#ffffff'; this.style.borderColor='#1877F2'; this.style.transform='translateY(-2px)'"
                       onmouseout="this.style.backgroundColor='rgba(255,255,255,0.06)'; this.style.color='#e5e2e1'; this.style.borderColor='rgba(255,255,255,0.15)'; this.style.transform='translateY(0)'">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                @endif
            </div>
        </div>

        <!-- Navigasi Column (3 Grid Cols) -->
        <div class="md:col-span-3 flex flex-col items-start gap-3.5">
            <span style="font-family: 'Courier Prime', monospace; font-size: 12px; color: rgba(207,196,197,0.5); text-transform: uppercase; letter-spacing: 0.1em; line-height: 36px; display: block; margin: 0;">NAVIGASI</span>
            <a href="{{ route('beranda') }}" style="font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600; letter-spacing: 0.05em; color: #cfc4c5; text-decoration: none; text-transform: uppercase; transition: color 0.3s;" onmouseover="this.style.color='#c6c6c6'" onmouseout="this.style.color='#cfc4c5'">Beranda</a>
            <a href="{{ route('tentang-kami') }}" style="font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600; letter-spacing: 0.05em; color: #cfc4c5; text-decoration: none; text-transform: uppercase; transition: color 0.3s;" onmouseover="this.style.color='#c6c6c6'" onmouseout="this.style.color='#cfc4c5'">Tentang Kami</a>
            <a href="{{ route('layanan') }}" style="font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600; letter-spacing: 0.05em; color: #cfc4c5; text-decoration: none; text-transform: uppercase; transition: color 0.3s;" onmouseover="this.style.color='#c6c6c6'" onmouseout="this.style.color='#cfc4c5'">Layanan</a>
            <a href="{{ route('portofolio') }}" style="font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600; letter-spacing: 0.05em; color: #cfc4c5; text-decoration: none; text-transform: uppercase; transition: color 0.3s;" onmouseover="this.style.color='#c6c6c6'" onmouseout="this.style.color='#cfc4c5'">Portofolio</a>
            <a href="{{ route('blog') }}" style="font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600; letter-spacing: 0.05em; color: #cfc4c5; text-decoration: none; text-transform: uppercase; transition: color 0.3s;" onmouseover="this.style.color='#c6c6c6'" onmouseout="this.style.color='#cfc4c5'">Blog</a>
        </div>

        <!-- Legal & Kontak Column (3 Grid Cols) -->
        <div class="md:col-span-3 flex flex-col items-start gap-3.5">
            <span style="font-family: 'Courier Prime', monospace; font-size: 12px; color: rgba(207,196,197,0.5); text-transform: uppercase; letter-spacing: 0.1em; line-height: 36px; display: block; margin: 0;">LEGAL &amp; KONTAK</span>
            <a href="{{ $siteSettings['footer_privacy_link'] ?? '#' }}" style="font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600; letter-spacing: 0.05em; color: #cfc4c5; text-decoration: none; text-transform: uppercase; transition: color 0.3s;" onmouseover="this.style.color='#c6c6c6'" onmouseout="this.style.color='#cfc4c5'">Kebijakan Privasi</a>
            <a href="{{ $siteSettings['footer_terms_link'] ?? '#' }}" style="font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600; letter-spacing: 0.05em; color: #cfc4c5; text-decoration: none; text-transform: uppercase; transition: color 0.3s;" onmouseover="this.style.color='#c6c6c6'" onmouseout="this.style.color='#cfc4c5'">Syarat &amp; Ketentuan</a>
            <a href="{{ $siteSettings['footer_career_link'] ?? '#' }}" style="font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600; letter-spacing: 0.05em; color: #cfc4c5; text-decoration: none; text-transform: uppercase; transition: color 0.3s;" onmouseover="this.style.color='#c6c6c6'" onmouseout="this.style.color='#cfc4c5'">Karier</a>
            <a href="{{ $siteSettings['footer_contact_link'] ?? ($siteSettings['wa_url'] ?? '#') }}" target="_blank" style="font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600; letter-spacing: 0.05em; color: #cfc4c5; text-decoration: none; text-transform: uppercase; transition: color 0.3s;" onmouseover="this.style.color='#c6c6c6'" onmouseout="this.style.color='#cfc4c5'">Kontak WA</a>
        </div>

    </div>
</footer>

</body>
</html>
