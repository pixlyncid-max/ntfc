@extends('layouts.app')

@section('title', 'Beranda')
@section('meta_description', 'NTFC — Nusantara Tax, Finance, and Consulting. Presisi dalam perpajakan, keuangan, dan konsultasi bisnis untuk lingkungan berisiko tinggi.')

@section('content')

    <!-- ============================================================
         HERO SECTION — Centered Swiss Typography Treatment
         ============================================================ -->
    <section class="swiss-grid bg-grid-pattern relative overflow-hidden flex flex-col items-center justify-center text-center"
        style="padding-top: 112px; padding-bottom: 128px; min-height: 80vh; background-color: #131313;">

        <!-- Ghost background typography -->
        <div id="hero-ghost"
            style="position: absolute; top: -60px; left: 50%; transform: translateX(-50%); font-size: 240px; font-family: 'Inter', sans-serif; font-weight: 700;
                    color: rgba(57,57,57,0.08); user-select: none; pointer-events: none; line-height: 1;">
            NTFC
        </div>

        <div class="col-span-4 md:col-span-12 flex flex-col items-center text-center relative" style="z-index: 10; max-width: 960px; margin: 0 auto;">
            <!-- Main Headline -->
            <div class="animate-on-scroll" style="margin-bottom: 32px; width: 100%;">
                <h1 style="font-family: 'Inter', sans-serif; font-weight: 700; letter-spacing: -0.04em; color: #e5e2e1; line-height: 0.95; text-align: center;"
                    class="text-headline-lg-mobile" id="hero-headline">
                    <span style="display: block; font-size: clamp(48px, 9vw, 110px); line-height: 0.92;">{{ $settings['hero_title_1'] ?? 'PRESISI' }}</span>
                    <span style="display: block; font-size: clamp(48px, 9vw, 110px); line-height: 0.92;">{{ $settings['hero_title_2'] ?? 'DALAM PAJAK' }}</span>
                    <span style="display: block; font-size: clamp(48px, 9vw, 110px); line-height: 0.92;">{{ $settings['hero_title_3'] ?? '& KEUANGAN.' }}</span>
                </h1>
            </div>

            <!-- Subtext -->
            <div class="animate-on-scroll stagger-1" style="max-width: 640px; margin: 0 auto 40px;">
                <p style="font-family: 'Inter', sans-serif; font-size: 18px; line-height: 28px; color: #cfc4c5; text-align: center;">
                    {{ $settings['hero_subtext'] ?? 'Kejernihan objektif dalam ekosistem keuangan yang kompleks. Kami menghadirkan keteraturan struktural dan konsultasi strategis untuk lingkungan berisiko tinggi.' }}
                </p>
            </div>

            <!-- CTA Button -->
            <div class="animate-on-scroll stagger-2">
                <a href="{{ $siteSettings['cta_url'] ?? $siteSettings['wa_url'] }}" target="_blank" rel="noopener" class="btn-primary"
                    style="padding: 16px 40px; font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600; letter-spacing: 0.05em; text-transform: uppercase; text-decoration: none; display: inline-flex; align-items: center; justify-content: center; gap: 10px;">
                    {{ $settings['hero_cta_text'] ?? 'Konsultasi Sekarang' }}
                    <span class="material-symbols-outlined" style="font-size: 16px; transition: transform 0.3s;"
                        onmouseover="this.style.transform='translateX(4px)'"
                        onmouseout="this.style.transform='translateX(0)'">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Divider -->
    <div class="divider"></div>

    <!-- ============================================================
         STATS SECTION
         ============================================================ -->
    <section style="padding: 64px 0; background-color: #1c1b1b;">
        <div class="swiss-grid">
            <!-- Stat 1 -->
            <div class="col-span-2 md:col-span-3 text-center animate-on-scroll" style="position: relative;">
                <h4 style="font-family: 'Inter', sans-serif; font-size: 48px; line-height: 56px; letter-spacing: -0.02em; font-weight: 600; color: #c6c6c6; margin-bottom: 8px;"
                    data-counter="{{ $settings['stat_1_val'] ?? '15+' }}">{{ $settings['stat_1_val'] ?? '15+' }}</h4>
                <p style="font-family: 'Courier Prime', monospace; font-size: 12px; font-weight: 600; letter-spacing: 0.1em; color: #cfc4c5; text-transform: uppercase;">
                    {{ $settings['stat_1_label'] ?? 'Tahun Pengalaman' }}</p>
            </div>
            <!-- Stat 2 -->
            <div class="col-span-2 md:col-span-3 text-center animate-on-scroll stagger-1">
                <h4 style="font-family: 'Inter', sans-serif; font-size: 48px; line-height: 56px; letter-spacing: -0.02em; font-weight: 600; color: #c6c6c6; margin-bottom: 8px;"
                    data-counter="{{ $settings['stat_2_val'] ?? '500+' }}">{{ $settings['stat_2_val'] ?? '500+' }}</h4>
                <p style="font-family: 'Courier Prime', monospace; font-size: 12px; font-weight: 600; letter-spacing: 0.1em; color: #cfc4c5; text-transform: uppercase;">
                    {{ $settings['stat_2_label'] ?? 'Klien Global' }}</p>
            </div>
            <!-- Stat 3 -->
            <div class="col-span-2 md:col-span-3 text-center animate-on-scroll stagger-2">
                <h4 style="font-family: 'Inter', sans-serif; font-size: 48px; line-height: 56px; letter-spacing: -0.02em; font-weight: 600; color: #c6c6c6; margin-bottom: 8px;">
                    {{ $settings['stat_3_val'] ?? '$2B+' }}</h4>
                <p style="font-family: 'Courier Prime', monospace; font-size: 12px; font-weight: 600; letter-spacing: 0.1em; color: #cfc4c5; text-transform: uppercase;">
                    {{ $settings['stat_3_label'] ?? 'Aset Dikelola' }}</p>
            </div>
            <!-- Stat 4 -->
            <div class="col-span-2 md:col-span-3 text-center animate-on-scroll stagger-3">
                <h4 style="font-family: 'Inter', sans-serif; font-size: 48px; line-height: 56px; letter-spacing: -0.02em; font-weight: 600; color: #c6c6c6; margin-bottom: 8px;">
                    {{ $settings['stat_4_val'] ?? '24/7' }}</h4>
                <p style="font-family: 'Courier Prime', monospace; font-size: 12px; font-weight: 600; letter-spacing: 0.1em; color: #cfc4c5; text-transform: uppercase;">
                    {{ $settings['stat_4_label'] ?? 'Dukungan Strategis' }}</p>
            </div>
        </div>
    </section>

    <!-- Divider -->
    <div class="divider"></div>

    <!-- ============================================================
         PHILOSOPHY SECTION
         ============================================================ -->
    <section style="padding: 96px 0; background-color: #131313;">
        <div class="swiss-grid">
            <!-- Label -->
            <div class="col-span-4 md:col-span-5 animate-on-scroll">
                <h2 style="font-family: 'Inter', sans-serif; font-size: 24px; line-height: 32px; letter-spacing: 0.1em; font-weight: 600; color: #e5e2e1; text-transform: uppercase; margin-bottom: 32px;">
                    {{ $settings['philosophy_title'] ?? 'Filosofi Presisi' }}
                </h2>
            </div>
            <div class="col-span-4 md:col-span-7 animate-on-scroll stagger-1">
                <p style="font-family: 'Inter', sans-serif; font-size: 18px; line-height: 28px; color: #cfc4c5; margin-bottom: 24px;">
                    {{ $settings['philosophy_body_1'] ?? 'Di era kompleksitas finansial yang belum pernah ada sebelumnya, ambiguitas adalah risiko.' }}
                </p>
                <p style="font-family: 'Inter', sans-serif; font-size: 16px; line-height: 24px; color: rgba(207,196,197,0.7);">
                    {{ $settings['philosophy_body_2'] ?? 'Kami tidak hanya memberi saran; kami merancang stabilitas keuangan.' }}
                </p>
            </div>
        </div>
    </section>

    <!-- Divider -->
    <div class="divider"></div>

    <!-- ============================================================
         CORE CAPABILITIES / SERVICES GRID
         ============================================================ -->
    <section style="padding: 96px 0; background-color: #131313;">
        <div class="swiss-grid" style="margin-bottom: 64px;">
            <div class="col-span-4 md:col-span-8 animate-on-scroll">
                <h2 style="font-family: 'Inter', sans-serif; font-size: 24px; line-height: 32px; letter-spacing: 0.1em; font-weight: 600; color: #e5e2e1; text-transform: uppercase;">
                    Kapabilitas Inti
                </h2>
            </div>
            <div class="col-span-4 md:col-span-4 flex items-center justify-end animate-on-scroll stagger-1">
                <a href="{{ route('layanan') }}"
                    style="font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600; letter-spacing: 0.05em; color: #048CD6; text-decoration: none; text-transform: uppercase;">
                    Lihat Semua Layanan →
                </a>
            </div>
        </div>

        <div class="swiss-grid">
            @foreach($services as $index => $service)
                <div class="col-span-4 md:col-span-4 service-card animate-on-scroll stagger-{{ $index % 3 }}"
                    style="background-color: #0e0e0e; padding: 32px; display: flex; flex-direction: column; justify-content: space-between; min-height: 300px; border: 1px solid rgba(76,69,70,0.3); {{ $index > 0 ? 'border-left: none;' : '' }}">
                    <span class="material-symbols-outlined"
                        style="font-size: 36px; color: #048CD6; margin-bottom: 32px; font-variation-settings: 'FILL' 0, 'wght' 200;">{{ $service->icon }}</span>
                    <div>
                        <h3 style="font-family: 'Inter', sans-serif; font-size: 24px; line-height: 32px; letter-spacing: -0.01em; font-weight: 600; color: #e5e2e1; margin-bottom: 16px;">
                            {{ $service->title }}</h3>
                        <p style="font-family: 'Inter', sans-serif; font-size: 16px; line-height: 24px; color: #cfc4c5;">
                            {{ $service->short_description }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- See All Services CTA -->
        <div class="swiss-grid" style="margin-top: 32px;">
            <div class="col-span-4 md:col-span-12 text-center animate-on-scroll">
                <a href="{{ route('layanan') }}"
                    style="display: inline-flex; align-items: center; gap: 8px; font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600; letter-spacing: 0.05em; color: #048CD6; text-decoration: none; text-transform: uppercase; padding: 8px 0; border-bottom: 1px solid transparent; transition: border-color 0.3s;"
                    onmouseover="this.style.borderBottomColor='#048CD6'"
                    onmouseout="this.style.borderBottomColor='transparent'">
                    Lihat Semua Layanan
                    <span class="material-symbols-outlined" style="font-size: 16px;">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Divider -->
    <div class="divider"></div>

    <!-- ============================================================
         WHY NTFC — Values Section
         ============================================================ -->
    <section style="padding: 96px 0; background-color: #1c1b1b;">
        <div class="swiss-grid" style="margin-bottom: 64px;">
            <div class="col-span-4 md:col-span-12 animate-on-scroll">
                <h2 style="font-family: 'Inter', sans-serif; font-size: 24px; line-height: 32px; letter-spacing: 0.1em; font-weight: 600; color: #e5e2e1; text-transform: uppercase;">
                    Mengapa NTFC
                </h2>
            </div>
        </div>
        <div class="swiss-grid">
            <!-- Value 1 -->
            <div class="col-span-4 md:col-span-3 animate-on-scroll"
                style="border-top: 2px solid #048CD6; padding-top: 24px;">
                <span style="font-family: 'Courier Prime', monospace; font-size: 14px; color: #048CD6; display: block; margin-bottom: 16px;">01.</span>
                <h3 style="font-family: 'Inter', sans-serif; font-size: 24px; font-weight: 600; color: #e5e2e1; margin-bottom: 12px; letter-spacing: -0.01em;">
                    Objektivitas</h3>
                <p style="font-family: 'Inter', sans-serif; font-size: 16px; line-height: 24px; color: #cfc4c5;">Setiap rekomendasi didorong oleh data kuantitatif dan analisis bebas bias.</p>
            </div>
            <!-- Value 2 -->
            <div class="col-span-4 md:col-span-3 animate-on-scroll stagger-1"
                style="border-top: 2px solid rgba(76,69,70,0.5); padding-top: 24px;">
                <span style="font-family: 'Courier Prime', monospace; font-size: 14px; color: #048CD6; display: block; margin-bottom: 16px;">02.</span>
                <h3 style="font-family: 'Inter', sans-serif; font-size: 24px; font-weight: 600; color: #e5e2e1; margin-bottom: 12px; letter-spacing: -0.01em;">
                    Presisi</h3>
                <p style="font-family: 'Inter', sans-serif; font-size: 16px; line-height: 24px; color: #cfc4c5;">Solusi rekayasa yang disesuaikan secara matematis dengan kebutuhan spesifik bisnis Anda.</p>
            </div>
            <!-- Value 3 -->
            <div class="col-span-4 md:col-span-3 animate-on-scroll stagger-2"
                style="border-top: 2px solid rgba(76,69,70,0.5); padding-top: 24px;">
                <span style="font-family: 'Courier Prime', monospace; font-size: 14px; color: #048CD6; display: block; margin-bottom: 16px;">03.</span>
                <h3 style="font-family: 'Inter', sans-serif; font-size: 24px; font-weight: 600; color: #e5e2e1; margin-bottom: 12px; letter-spacing: -0.01em;">
                    Kepatuhan</h3>
                <p style="font-family: 'Inter', sans-serif; font-size: 16px; line-height: 24px; color: #cfc4c5;">Seluruh strategi sepenuhnya selaras dengan peraturan perundang-undangan yang berlaku.</p>
            </div>
            <!-- Value 4 -->
            <div class="col-span-4 md:col-span-3 animate-on-scroll stagger-3"
                style="border-top: 2px solid rgba(76,69,70,0.5); padding-top: 24px;">
                <span style="font-family: 'Courier Prime', monospace; font-size: 14px; color: #048CD6; display: block; margin-bottom: 16px;">04.</span>
                <h3 style="font-family: 'Inter', sans-serif; font-size: 24px; font-weight: 600; color: #e5e2e1; margin-bottom: 12px; letter-spacing: -0.01em;">
                    Kerahasiaan</h3>
                <p style="font-family: 'Inter', sans-serif; font-size: 16px; line-height: 24px; color: #cfc4c5;">Protokol keamanan kelembagaan untuk melindungi aset intelektual dan finansial klien kami.</p>
            </div>
        </div>
    </section>

    <!-- Divider -->
    <div class="divider"></div>

    <!-- ============================================================
         CTA SECTION
         ============================================================ -->
    <section style="padding: 128px 0; background-color: #131313; position: relative; overflow: hidden;"
        class="bg-grid-pattern">
        <div class="swiss-grid">
            <div class="col-span-4 md:col-span-8 md:col-start-3 text-center animate-on-scroll">
                <h2 style="font-family: 'Inter', sans-serif; font-size: clamp(32px, 5vw, 64px); line-height: 1; letter-spacing: -0.03em; font-weight: 700; color: #e5e2e1; margin-bottom: 32px;">
                    Butuh Keahlian Khusus?
                </h2>
                <p style="font-family: 'Inter', sans-serif; font-size: 18px; line-height: 28px; color: #cfc4c5; max-width: 480px; margin: 0 auto 48px;">
                    Jadwalkan konsultasi dengan tim senior kami dan temukan bagaimana kami dapat merancang solusi yang tepat untuk bisnis Anda.
                </p>
                <a href="{{ $siteSettings['cta_url'] ?? $siteSettings['wa_url'] }}" target="_blank" rel="noopener" class="btn-primary"
                    style="padding: 18px 48px; font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600; letter-spacing: 0.05em; text-transform: uppercase; text-decoration: none; display: inline-flex; align-items: center; justify-content: center; gap: 10px;">
                    Inisiasi Konsultasi
                    <span class="material-symbols-outlined" style="font-size: 16px;">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

@endsection