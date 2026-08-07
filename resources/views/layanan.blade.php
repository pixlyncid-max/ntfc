@extends('layouts.app')

@section('title', 'Layanan')
@section('meta_description', 'Layanan NTFC — Perpajakan korporat, restrukturisasi keuangan, manajemen konsultasi, risiko & kepatuhan, dan akuntansi forensik untuk lingkungan bisnis berisiko tinggi.')

@section('content')

<!-- ============================================================
     HEADER SECTION
     ============================================================ -->
<section style="padding-top: 80px; padding-bottom: 72px; background-color: #131313; border-bottom: 0.5px solid rgba(76,69,70,0.3);" class="page-padding">
    <div style="width: 100%;">
        <div class="reveal-up">
            <h1 style="font-family: 'Inter', sans-serif; font-size: clamp(32px, 4vw, 64px); line-height: 1.1; letter-spacing: -0.03em; font-weight: 700; color: #e5e2e1; margin-bottom: 20px; max-width: 800px;">
                Layanan Komprehensif Keuangan &amp;<br>Konsultasi
            </h1>
            <p style="font-family: 'Inter', sans-serif; font-size: 16px; line-height: 26px; color: #cfc4c5; max-width: 580px;">
                Kami menghadirkan strategi berbasis data yang objektif di bidang perpajakan, keuangan korporat, dan restrukturisasi perusahaan. Dirancang presisi untuk lingkungan berisiko tinggi.
            </p>
        </div>
    </div>
</section>

<!-- ============================================================
     SERVICES GRID — Dynamic from MySQL Database
     ============================================================ -->
<section style="padding-top: 64px; padding-bottom: 64px; background-color: #131313;" class="page-padding">
    <div style="width: 100%;">

        <div style="border: 1px solid rgba(76,69,70,0.5); overflow: hidden;">
            <div style="display: grid; grid-template-columns: repeat(2, 1fr);" class="grid-cols-1 md:grid-cols-2">
                @forelse($services as $index => $service)
                    <div class="reveal-up"
                         style="padding: 48px; background-color: #131313; border-bottom: 1px solid rgba(76,69,70,0.5); {{ $index % 2 == 0 ? 'border-right: 1px solid rgba(76,69,70,0.5);' : '' }}
                                transition: background-color 0.3s ease;"
                         onmouseover="this.style.backgroundColor='#1c1b1b'"
                         onmouseout="this.style.backgroundColor='#131313'">
                        <div style="margin-bottom: 32px;">
                            <span class="material-symbols-outlined"
                                  style="font-size: 32px; color: #048CD6; font-variation-settings: 'FILL' 0, 'wght' 200;">{{ $service->icon }}</span>
                        </div>
                        <h2 style="font-family: 'Inter', sans-serif; font-size: 24px; line-height: 32px; font-weight: 600; letter-spacing: -0.01em; color: #e5e2e1; margin-bottom: 12px;">
                            {{ $service->title }}
                        </h2>
                        <div style="width: 40px; height: 2px; background-color: #048CD6; margin-bottom: 24px;"></div>
                        <p style="font-family: 'Inter', sans-serif; font-size: 15px; line-height: 24px; color: #cfc4c5; margin-bottom: 32px; max-width: 480px;">
                            {{ $service->short_description }}
                        </p>
                        @if(!empty($service->features) && is_array($service->features))
                            <ul style="display: flex; flex-direction: column; gap: 10px;">
                                @foreach($service->features as $item)
                                <li style="display: flex; align-items: center; gap: 10px;">
                                    <span style="color: #048CD6; font-size: 14px; font-weight: 600; flex-shrink: 0;">+</span>
                                    <span style="font-family: 'Courier Prime', monospace; font-size: 14px; color: rgba(207,196,197,0.8);">{{ $item }}</span>
                                </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                @empty
                    <div class="col-span-2 p-12 text-center text-[#cfc4c5]">
                        Belum ada layanan terdaftar.
                    </div>
                @endforelse
            </div>
        </div>

    </div>
</section>

<!-- ============================================================
     CTA SECTION
     ============================================================ -->
<section style="padding: 112px 0; background-color: #131313; border-top: 0.5px solid rgba(76,69,70,0.3); position: relative; overflow: hidden;"
    class="bg-grid-pattern page-padding">
    <div class="w-full text-center animate-on-scroll">
        <h2 style="font-family: 'Inter', sans-serif; font-size: clamp(32px, 5vw, 56px); line-height: 1.1; letter-spacing: -0.03em; font-weight: 700; color: #e5e2e1; margin-bottom: 24px;">
            Butuh Keahlian Khusus?
        </h2>
        <p style="font-family: 'Inter', sans-serif; font-size: 16px; line-height: 26px; color: #cfc4c5; max-width: 520px; margin: 0 auto 40px;">
            Jadwalkan konsultasi dengan tim senior kami dan temukan bagaimana kami dapat merancang solusi yang tepat untuk bisnis Anda.
        </p>
        <a href="{{ $siteSettings['cta_url'] ?? $siteSettings['wa_url'] }}" target="_blank" rel="noopener" class="btn-primary"
            style="padding: 18px 48px; font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600; letter-spacing: 0.05em; text-transform: uppercase; text-decoration: none; display: inline-flex; align-items: center; justify-content: center; gap: 10px;">
            Inisiasi Konsultasi
            <span class="material-symbols-outlined" style="font-size: 16px;">arrow_forward</span>
        </a>
    </div>
</section>

@endsection
