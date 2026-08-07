@extends('layouts.app')

@section('title', 'Portofolio')
@section('meta_description', 'Studi Kasus — Seleksi keterlibatan restrukturisasi keuangan dan optimasi pajak kami yang paling berdampak. Dieksekusi presisi, hasil terukur.')

@section('content')

<!-- ============================================================
     HEADER SECTION (Grid Background)
     ============================================================ -->
<section style="padding-top: 80px; padding-bottom: 64px; background-color: #131313; position: relative;" class="page-padding bg-grid-lg">
    <div style="width: 100%; position: relative; z-index: 10;">
        <h1 class="reveal-up" style="font-family: 'Inter', sans-serif; font-size: clamp(40px, 5vw, 72px); line-height: 1.05; font-weight: 700; letter-spacing: -0.03em; color: #e5e2e1; margin-bottom: 20px;">
            Studi Kasus & Portofolio
        </h1>
        <p class="reveal-up delay-100" style="font-family: 'Inter', sans-serif; font-size: 16px; line-height: 26px; color: #cfc4c5; max-width: 580px; margin-bottom: 28px;">
            Seleksi keterlibatan restrukturisasi keuangan dan optimasi pajak kami yang paling berdampak. Dieksekusi presisi, hasil terukur.
        </p>
        <div class="reveal-up delay-200" style="width: 64px; height: 3px; background-color: #048CD6;"></div>
    </div>
</section>

<!-- ============================================================
     CASE STUDIES GRID — Dynamic from MySQL Database
     ============================================================ -->
<section style="padding-top: 48px; padding-bottom: 96px; background-color: #131313;" class="page-padding bg-grid-lg">
    <div style="width: 100%;">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @forelse($portfolios as $index => $portfolio)
                <div class="reveal-up"
                     style="background-color: #1c1b1b; border: 1px solid rgba(76,69,70,0.3); padding: 40px; display: flex; flex-direction: column; justify-content: flex-start; min-height: 320px; transition: background-color 0.3s ease, border-color 0.3s ease;"
                     onmouseover="this.style.backgroundColor='#222121'; this.style.borderColor='rgba(4,140,214,0.5)'"
                     onmouseout="this.style.backgroundColor='#1c1b1b'; this.style.borderColor='rgba(76,69,70,0.3)'">

                    @if($portfolio->image)
                        <div style="width: 100%; height: 220px; overflow: hidden; border-radius: 4px; margin-bottom: 24px; border: 1px solid rgba(255,255,255,0.1);">
                            <img src="{{ $portfolio->image }}" alt="{{ $portfolio->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                    @endif

                    <div style="margin-bottom: 16px; display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-family: 'Courier Prime', monospace; font-size: 12px; letter-spacing: 0.15em; color: #048CD6; text-transform: uppercase;">
                            {{ $portfolio->category }}
                        </span>
                        @if($portfolio->client)
                            <span style="font-family: 'Inter', sans-serif; font-size: 12px; color: rgba(207,196,197,0.5);">
                                {{ $portfolio->client }}
                            </span>
                        @endif
                    </div>

                    <h3 style="font-family: 'Inter', sans-serif; font-size: 22px; line-height: 30px; font-weight: 600; letter-spacing: -0.01em; color: #e5e2e1; margin-bottom: 16px;">
                        {{ $portfolio->title }}
                    </h3>

                    <p style="font-family: 'Inter', sans-serif; font-size: 15px; line-height: 24px; color: #cfc4c5; margin-bottom: 24px;">
                        {{ $portfolio->summary }}
                    </p>

                    @if($portfolio->result)
                        <div style="border-top: 1px solid rgba(255,255,255,0.08); padding-top: 16px; margin-top: auto;">
                            <span style="font-family: 'Courier Prime', monospace; font-size: 11px; text-transform: uppercase; color: #048CD6; display: block; margin-bottom: 4px;">Hasil Kunci:</span>
                            <p style="font-family: 'Inter', sans-serif; font-size: 13px; color: #e5e2e1;">{{ $portfolio->result }}</p>
                        </div>
                    @endif
                </div>
            @empty
                <div class="col-span-2 text-center py-12 text-[#cfc4c5]">
                    Belum ada portofolio terdaftar.
                </div>
            @endforelse
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
