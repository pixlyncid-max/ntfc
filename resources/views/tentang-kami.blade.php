@extends('layouts.app')

@section('title', 'Tentang Kami')
@section('meta_description', 'Tentang NTFC — Nusantara Tax, Finance, and Consulting. Persimpangan antara metodologi analitis yang ketat dan ketajaman strategis dalam lanskap keuangan yang kompleks.')

@section('content')

<!-- ============================================================
     HERO SECTION
     ============================================================ -->
<section style="padding-top: 72px; padding-bottom: 80px; border-bottom: 0.5px solid rgba(76,69,70,0.3); background-color: #131313; position: relative; overflow: hidden;" class="bg-grid-lg page-padding">
    <div style="width: 100%;">
        <!-- 2-column hero: text left, video right -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16 items-start">

            <!-- Left: Headline + Text (7 Cols) -->
            <div class="reveal lg:col-span-7 flex flex-col justify-start z-10 relative" style="padding-top: 8px;">
                <h1 style="font-family: 'Inter', sans-serif; font-size: clamp(32px, 5vw, 68px); line-height: 1.05; letter-spacing: -0.04em; font-weight: 700; color: #e5e2e1; margin-bottom: 20px;">
                    {{ $settings['about_hero_title'] ?? 'Presisi Dalam Praktik.' }}
                </h1>
                <p style="font-family: 'Inter', sans-serif; font-size: 15px; line-height: 25px; color: #cfc4c5; max-width: 540px;">
                    {{ $settings['about_hero_subtext'] ?? 'Nusantara Tax, Finance, and Consulting merupakan persimpangan antara metodologi analitis yang ketat dan ketajaman strategis. Kami menghadirkan kejelasan dalam lanskap keuangan yang kompleks.' }}
                </p>
            </div>

            <!-- Right: Video Panel (5 Cols) -->
            <div class="reveal lg:col-span-5 w-full z-10 relative" style="transition-delay: 200ms;">
                <div style="width: 100%; aspect-ratio: 16/9; max-height: 480px; border: 1px solid rgba(76,69,70,0.3); overflow: hidden; position: relative; background-color: #20201f;" class="lg:aspect-[3/4]">
                    <video
                        autoplay
                        loop
                        muted
                        playsinline
                        style="width: 100%; height: 100%; object-fit: cover; object-position: center; display: block;"
                    >
                        <source src="{{ asset('images/animasi black.mp4') }}" type="video/mp4">
                        Browser Anda tidak mendukung pemutar video.
                    </video>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ============================================================
     VISI & MISI
     ============================================================ -->
<section style="padding-top: 80px; padding-bottom: 80px; border-bottom: 0.5px solid rgba(76,69,70,0.3); background-color: #131313;" class="page-padding">
    <div style="width: 100%; display: grid; grid-template-columns: 1fr 1fr; gap: 32px;" class="grid-cols-1 md:grid-cols-2">

        <!-- Vision Card -->
        <div class="reveal"
             style="border: 1px solid rgba(76,69,70,0.3); padding: 40px; background-color: #1c1b1b; position: relative;
                    transition: background-color 0.4s ease, transform 0.4s ease;"
             onmouseover="this.style.backgroundColor='#20201f'; this.style.transform='translateY(-4px)'"
             onmouseout="this.style.backgroundColor='#1c1b1b'; this.style.transform='translateY(0)'">
            <div style="position: absolute; top: 20px; right: 20px;">
                <span class="material-symbols-outlined" style="color: #cfc4c5; font-size: 22px; font-variation-settings: 'FILL' 0, 'wght' 300;">visibility</span>
            </div>
            <h2 style="font-family: 'Inter', sans-serif; font-size: 24px; line-height: 32px; font-weight: 600; letter-spacing: -0.01em; color: #e5e2e1; margin-bottom: 24px; border-bottom: 2px solid #048CD6; display: inline-block; padding-bottom: 6px;">
                Visi
            </h2>
            <p style="font-family: 'Inter', sans-serif; font-size: 16px; line-height: 26px; color: #cfc4c5;">
                {{ $settings['about_vision'] ?? 'Membangun infrastruktur keuangan paling tangguh bagi korporasi, menetapkan standar kejelasan, kepatuhan, dan kelincahan strategis yang tidak tergoyahkan di pasar global.' }}
            </p>
        </div>

        <!-- Mission Card -->
        <div class="reveal" style="transition-delay: 200ms; border: 1px solid rgba(76,69,70,0.3); padding: 40px; background-color: #1c1b1b; position: relative;
                    transition: background-color 0.4s ease, transform 0.4s ease;"
             onmouseover="this.style.backgroundColor='#20201f'; this.style.transform='translateY(-4px)'"
             onmouseout="this.style.backgroundColor='#1c1b1b'; this.style.transform='translateY(0)'">
            <div style="position: absolute; top: 20px; right: 20px;">
                <span class="material-symbols-outlined" style="color: #cfc4c5; font-size: 22px; font-variation-settings: 'FILL' 0, 'wght' 300;">rocket_launch</span>
            </div>
            <h2 style="font-family: 'Inter', sans-serif; font-size: 24px; line-height: 32px; font-weight: 600; letter-spacing: -0.01em; color: #e5e2e1; margin-bottom: 24px; border-bottom: 2px solid #048CD6; display: inline-block; padding-bottom: 6px;">
                Misi
            </h2>
            <p style="font-family: 'Inter', sans-serif; font-size: 16px; line-height: 26px; color: #cfc4c5;">
                {{ $settings['about_mission'] ?? 'Memberikan kejernihan struktural, efisiensi pajak maksimal, dan mitigasi risiko komprehensif bagi setiap mitra bisnis.' }}
            </p>
        </div>

    </div>
</section>

<!-- ============================================================
     TIM KEPEMIMPINAN (FOTO TIM DINAMIS DARI DATABASE)
     ============================================================ -->
<section style="padding-top: 80px; padding-bottom: 80px; background-color: #131313;" class="page-padding">
    <div style="width: 100%;">

        <!-- Section Header -->
        <div style="margin-bottom: 48px; max-width: 600px;" class="reveal">
            <h2 style="font-family: 'Inter', sans-serif; font-size: clamp(32px, 4vw, 48px); line-height: 1.1; letter-spacing: -0.03em; font-weight: 600; color: #e5e2e1; margin-bottom: 16px;">
                Kepemimpinan.
            </h2>
            <p style="font-family: 'Inter', sans-serif; font-size: 16px; line-height: 25px; color: #cfc4c5;">
                Mitra kami membawa pengalaman lembaga puluhan tahun, beroperasi pada tingkat tertinggi dalam keuangan global dan kepatuhan regulasi.
            </p>
        </div>

        <!-- Team Grid — Dynamic rendering from MySQL Database -->
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 32px;" class="grid-cols-1 md:grid-cols-3">
            @forelse($team as $index => $member)
                <div class="reveal" style="transition-delay: {{ $index * 200 }}ms; border: 1px solid rgba(76,69,70,0.3); background-color: #0e0e0e; overflow: hidden;
                            transition: transform 0.5s ease, box-shadow 0.5s ease;"
                     onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 24px 64px rgba(0,0,0,0.5)'; this.querySelector('img').style.transform='scale(1.05)'; this.querySelector('img').style.filter='grayscale(0%)'; this.querySelector('img').style.mixBlendMode='normal'"
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'; this.querySelector('img').style.transform='scale(1)'; this.querySelector('img').style.filter='grayscale(100%)'; this.querySelector('img').style.mixBlendMode='luminosity'">
                    <div style="width: 100%; aspect-ratio: 4/5; overflow: hidden; position: relative; background-color: #1c1b1b;">
                        <img
                            src="{{ $member->image ?? 'https://images.unsplash.com/photo-1560250097-0b93528c311a' }}"
                            alt="{{ $member->name }} — {{ $member->position }}"
                            style="width: 100%; height: 100%; object-fit: cover; object-position: top center;
                                   filter: grayscale(100%); mix-blend-mode: luminosity;
                                   transition: transform 0.7s ease, filter 0.7s ease, mix-blend-mode 0.7s ease;"
                        >
                    </div>
                    <div style="padding: 28px; border-top: 0.5px solid rgba(76,69,70,0.3); background-color: #0e0e0e;">
                        <h3 style="font-family: 'Inter', sans-serif; font-size: 22px; line-height: 30px; font-weight: 600; letter-spacing: -0.01em; color: #e5e2e1; margin-bottom: 6px;">
                            {{ $member->name }}
                        </h3>
                        <p style="font-family: 'Courier Prime', monospace; font-size: 12px; color: #048CD6; margin-bottom: 14px; text-transform: uppercase; letter-spacing: 0.08em;">
                            {{ $member->position }}
                        </p>
                        <p style="font-family: 'Inter', sans-serif; font-size: 14px; line-height: 22px; color: #cfc4c5;">
                            {{ $member->bio }}
                        </p>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-12 text-[#cfc4c5]">
                    Belum ada anggota tim terdaftar.
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
