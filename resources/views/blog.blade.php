@extends('layouts.app')

@section('title', 'Blog & Insights')
@section('meta_description', 'Expert perspectives on tax regulation, financial strategy, and corporate restructuring from the NTFC consulting team.')

@section('content')

<!-- ============================================================
     HEADER SECTION
     ============================================================ -->
<section style="padding-top: 80px; padding-bottom: 48px; background-color: #131313;" class="page-padding">
    <div style="width: 100%;">
        <div class="reveal-up">
            <h1 style="font-family: 'Inter', sans-serif; font-size: clamp(40px, 5.5vw, 76px); line-height: 1.02; font-weight: 700; letter-spacing: -0.04em; color: #e5e2e1; margin-bottom: 16px;">
                Insights &amp; Analysis
            </h1>
            <p style="font-family: 'Inter', sans-serif; font-size: 16px; line-height: 26px; color: #cfc4c5; max-width: 580px;">
                Expert perspectives on tax regulation, financial strategy, and corporate restructuring from the NTFC consulting team.
            </p>
        </div>
    </div>
</section>

<!-- ============================================================
     FEATURED INSIGHT BLOCK
     ============================================================ -->
@if($featured)
<section style="padding-top: 0; padding-bottom: 80px; background-color: #131313;" class="page-padding">
    <div style="width: 100%;">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-0" style="border: 1px solid rgba(76,69,70,0.3); overflow: hidden;">

            <!-- Left: Featured Photo (7 Cols) -->
            <div class="reveal-up md:col-span-7" style="position: relative; min-height: 460px; background-color: #0e0e0e;">
                <img
                    src="{{ $featured->image ?? 'https://images.unsplash.com/photo-1497366216548-37526070297c' }}"
                    alt="{{ $featured->title }}"
                    style="width: 100%; height: 100%; object-fit: cover; object-position: center; display: block;"
                >
                <!-- FEATURED INSIGHT BADGE -->
                <div style="position: absolute; top: 24px; left: 24px; z-index: 10;">
                    <span style="background-color: #e5e2e1; color: #131313;
                                 font-family: 'Inter', sans-serif; font-size: 10px; font-weight: 700; letter-spacing: 0.12em;
                                 padding: 6px 14px; text-transform: uppercase;">
                        FEATURED INSIGHT
                    </span>
                </div>
            </div>

            <!-- Right: Content Box (5 Cols) (#1c1b1b) -->
            <div class="reveal-up delay-100 md:col-span-5"
                 style="padding: 56px 48px; background-color: #1c1b1b; display: flex; flex-direction: column; justify-content: center;">
                
                <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 24px;">
                    <span style="font-family: 'Courier Prime', monospace; font-size: 12px; color: rgba(207,196,197,0.6);">
                        {{ $featured->published_at ? $featured->published_at->format('Y.m.d') : date('Y.m.d') }}
                    </span>
                    <span style="color: rgba(207,196,197,0.4); font-size: 12px;">•</span>
                    <span style="font-family: 'Inter', sans-serif; font-size: 11px; font-weight: 700; letter-spacing: 0.1em; color: #048CD6; text-transform: uppercase;">
                        {{ $featured->category }}
                    </span>
                </div>

                <h2 style="font-family: 'Inter', sans-serif; font-size: clamp(26px, 2.8vw, 36px); line-height: 1.15; font-weight: 700; letter-spacing: -0.02em; color: #e5e2e1; margin-bottom: 20px;">
                    {{ $featured->title }}
                </h2>

                <p style="font-family: 'Inter', sans-serif; font-size: 15px; line-height: 24px; color: #cfc4c5; margin-bottom: 36px;">
                    {{ $featured->excerpt }}
                </p>

                <a href="{{ route('blog.show', $featured->slug) }}" style="font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600; letter-spacing: 0.05em; color: #048CD6; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; transition: gap 0.3s;"
                   onmouseover="this.style.gap='12px'" onmouseout="this.style.gap='8px'">
                    Read Report <span class="material-symbols-outlined" style="font-size: 16px;">arrow_forward</span>
                </a>
            </div>

        </div>
    </div>
</section>
@endif

<!-- ============================================================
     TAXONOMY SIDEBAR & ARTICLES GRID SECTION
     ============================================================ -->
<section style="padding-top: 40px; padding-bottom: 96px; background-color: #131313;" class="page-padding">
    <div style="width: 100%;">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12">

            <!-- LEFT: TAXONOMY SIDEBAR (3 Cols) -->
            <div class="md:col-span-3 space-y-6">
                <h3 style="font-family: 'Inter', sans-serif; font-size: 20px; font-weight: 600; color: #e5e2e1; letter-spacing: -0.01em; margin-bottom: 24px;">
                    Taxonomy
                </h3>

                <ul style="display: flex; flex-direction: column; gap: 14px;">
                    <li>
                        <a href="{{ route('blog', ['category' => 'all']) }}" 
                           style="display: flex; justify-content: space-between; align-items: center; font-family: 'Inter', sans-serif; font-size: 11px; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; text-decoration: none; color: {{ $activeCategory === 'all' ? '#e5e2e1' : '#cfc4c5' }}; opacity: {{ $activeCategory === 'all' ? '1' : '0.7' }}; transition: all 0.2s;"
                           onmouseover="this.style.opacity='1'; this.style.color='#e5e2e1'"
                           onmouseout="this.style.opacity='{{ $activeCategory === 'all' ? '1' : '0.7' }}'; this.style.color='{{ $activeCategory === 'all' ? '#e5e2e1' : '#cfc4c5' }}'">
                            <span>ALL INSIGHTS</span>
                            <span style="font-family: 'Courier Prime', monospace; font-size: 12px; opacity: 0.6;">
                                {{ sprintf('%02d', $taxonomy['ALL INSIGHTS'] ?? 42) }}
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('blog', ['category' => 'CORPORATE FINANCE']) }}" 
                           style="display: flex; justify-content: space-between; align-items: center; font-family: 'Inter', sans-serif; font-size: 11px; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; text-decoration: none; color: {{ $activeCategory === 'CORPORATE FINANCE' ? '#048CD6' : '#cfc4c5' }}; opacity: {{ $activeCategory === 'CORPORATE FINANCE' ? '1' : '0.7' }}; transition: all 0.2s;"
                           onmouseover="this.style.opacity='1'; this.style.color='#e5e2e1'"
                           onmouseout="this.style.opacity='{{ $activeCategory === 'CORPORATE FINANCE' ? '1' : '0.7' }}'; this.style.color='{{ $activeCategory === 'CORPORATE FINANCE' ? '#048CD6' : '#cfc4c5' }}'">
                            <span>CORPORATE FINANCE</span>
                            <span style="font-family: 'Courier Prime', monospace; font-size: 12px; opacity: 0.6;">
                                {{ sprintf('%02d', $taxonomy['CORPORATE FINANCE'] ?? 18) }}
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('blog', ['category' => 'TAX STRATEGY']) }}" 
                           style="display: flex; justify-content: space-between; align-items: center; font-family: 'Inter', sans-serif; font-size: 11px; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; text-decoration: none; color: {{ $activeCategory === 'TAX STRATEGY' ? '#048CD6' : '#cfc4c5' }}; opacity: {{ $activeCategory === 'TAX STRATEGY' ? '1' : '0.7' }}; transition: all 0.2s;"
                           onmouseover="this.style.opacity='1'; this.style.color='#e5e2e1'"
                           onmouseout="this.style.opacity='{{ $activeCategory === 'TAX STRATEGY' ? '1' : '0.7' }}'; this.style.color='{{ $activeCategory === 'TAX STRATEGY' ? '#048CD6' : '#cfc4c5' }}'">
                            <span>TAX STRATEGY</span>
                            <span style="font-family: 'Courier Prime', monospace; font-size: 12px; opacity: 0.6;">
                                {{ sprintf('%02d', $taxonomy['TAX STRATEGY'] ?? 13) }}
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('blog', ['category' => 'MERGERS & ACQUISITIONS']) }}" 
                           style="display: flex; justify-content: space-between; align-items: center; font-family: 'Inter', sans-serif; font-size: 11px; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; text-decoration: none; color: {{ $activeCategory === 'MERGERS & ACQUISITIONS' ? '#048CD6' : '#cfc4c5' }}; opacity: {{ $activeCategory === 'MERGERS & ACQUISITIONS' ? '1' : '0.7' }}; transition: all 0.2s;"
                           onmouseover="this.style.opacity='1'; this.style.color='#e5e2e1'"
                           onmouseout="this.style.opacity='{{ $activeCategory === 'MERGERS & ACQUISITIONS' ? '1' : '0.7' }}'; this.style.color='{{ $activeCategory === 'MERGERS & ACQUISITIONS' ? '#048CD6' : '#cfc4c5' }}'">
                            <span>MERGERS &amp; ACQUISITIONS</span>
                            <span style="font-family: 'Courier Prime', monospace; font-size: 12px; opacity: 0.6;">
                                {{ sprintf('%02d', $taxonomy['MERGERS & ACQUISITIONS'] ?? 7) }}
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('blog', ['category' => 'REGULATORY COMPLIANCE']) }}" 
                           style="display: flex; justify-content: space-between; align-items: center; font-family: 'Inter', sans-serif; font-size: 11px; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; text-decoration: none; color: {{ $activeCategory === 'REGULATORY COMPLIANCE' ? '#048CD6' : '#cfc4c5' }}; opacity: {{ $activeCategory === 'REGULATORY COMPLIANCE' ? '1' : '0.7' }}; transition: all 0.2s;"
                           onmouseover="this.style.opacity='1'; this.style.color='#e5e2e1'"
                           onmouseout="this.style.opacity='{{ $activeCategory === 'REGULATORY COMPLIANCE' ? '1' : '0.7' }}'; this.style.color='{{ $activeCategory === 'REGULATORY COMPLIANCE' ? '#048CD6' : '#cfc4c5' }}'">
                            <span>REGULATORY COMPLIANCE</span>
                            <span style="font-family: 'Courier Prime', monospace; font-size: 12px; opacity: 0.6;">
                                {{ sprintf('%02d', $taxonomy['REGULATORY COMPLIANCE'] ?? 5) }}
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- RIGHT: ARTICLES GRID 2 COLUMNS (9 Cols) -->
            <div class="md:col-span-9 space-y-12">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-12">
                    @forelse($posts as $index => $post)
                        <div class="reveal-up space-y-4" style="transition-delay: {{ $index * 100 }}ms;">
                            <!-- Image Container -->
                            <div style="width: 100%; aspect-ratio: 16/9; overflow: hidden; background-color: #0e0e0e; border: 1px solid rgba(76,69,70,0.3);">
                                <img src="{{ $post->image ?? 'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe' }}" 
                                     alt="{{ $post->title }}" 
                                     style="width: 100%; height: 100%; object-fit: cover; filter: grayscale(80%); transition: filter 0.5s ease, transform 0.5s ease;"
                                     onmouseover="this.style.filter='grayscale(0%)'; this.style.transform='scale(1.03)'"
                                     onmouseout="this.style.filter='grayscale(80%)'; this.style.transform='scale(1)'">
                            </div>

                            <!-- Date + Category -->
                            <div style="display: flex; align-items: center; gap: 8px; font-size: 12px;">
                                <span style="font-family: 'Courier Prime', monospace; color: rgba(207,196,197,0.6);">
                                    {{ $post->published_at ? $post->published_at->format('Y.m.d') : date('Y.m.d') }}
                                </span>
                                <span style="color: rgba(207,196,197,0.4);">•</span>
                                <span style="font-family: 'Inter', sans-serif; font-size: 10px; font-weight: 700; letter-spacing: 0.1em; color: #048CD6; text-transform: uppercase;">
                                    {{ $post->category }}
                                </span>
                            </div>

                            <!-- Title -->
                            <h3 style="font-family: 'Inter', sans-serif; font-size: 20px; line-height: 28px; font-weight: 600; letter-spacing: -0.01em; color: #e5e2e1;">
                                <a href="{{ route('blog.show', $post->slug) }}" style="color: inherit; text-decoration: none; transition: color 0.2s;" onmouseover="this.style.color='#048CD6'" onmouseout="this.style.color='#e5e2e1'">
                                    {{ $post->title }}
                                </a>
                            </h3>

                            <!-- Excerpt -->
                            <p style="font-family: 'Inter', sans-serif; font-size: 14px; line-height: 22px; color: #cfc4c5; line-clamp: 2; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                {{ $post->excerpt }}
                            </p>
                        </div>
                    @empty
                        <div class="col-span-2 py-12 text-center text-[#cfc4c5] italic">
                            No insights found in this category.
                        </div>
                    @endforelse
                </div>

                <!-- PAGINATION BAR AT BOTTOM -->
                @if($posts->hasPages())
                    <div style="padding-top: 48px; border-top: 0.5px solid rgba(76,69,70,0.3); display: flex; align-items: center; justify-content: space-between;">
                        <!-- Previous Page Link -->
                        @if ($posts->onFirstPage())
                            <span style="font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600; color: rgba(207,196,197,0.3); border: 1px solid rgba(76,69,70,0.3); padding: 8px 20px; border-radius: 4px; pointer-events: none;">
                                ← Previous
                            </span>
                        @else
                            <a href="{{ $posts->previousPageUrl() }}" style="font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600; color: #e5e2e1; border: 1px solid rgba(76,69,70,0.5); padding: 8px 20px; border-radius: 4px; text-decoration: none; transition: all 0.2s;" onmouseover="this.style.borderColor='#048CD6'; this.style.color='#048CD6'" onmouseout="this.style.borderColor='rgba(76,69,70,0.5)'; this.style.color='#e5e2e1'">
                                ← Previous
                            </a>
                        @endif

                        <!-- Page Numbers Counter -->
                        <span style="font-family: 'Courier Prime', monospace; font-size: 12px; color: #cfc4c5; letter-spacing: 0.05em;">
                            Page {{ sprintf('%02d', $posts->currentPage()) }} / {{ sprintf('%02d', $posts->lastPage()) }}
                        </span>

                        <!-- Next Page Link -->
                        @if ($posts->hasMorePages())
                            <a href="{{ $posts->nextPageUrl() }}" style="font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600; color: #e5e2e1; border: 1px solid rgba(76,69,70,0.5); padding: 8px 20px; border-radius: 4px; text-decoration: none; transition: all 0.2s;" onmouseover="this.style.borderColor='#048CD6'; this.style.color='#048CD6'" onmouseout="this.style.borderColor='rgba(76,69,70,0.5)'; this.style.color='#e5e2e1'">
                                Next →
                            </a>
                        @else
                            <span style="font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600; color: rgba(207,196,197,0.3); border: 1px solid rgba(76,69,70,0.3); padding: 8px 20px; border-radius: 4px; pointer-events: none;">
                                Next →
                            </span>
                        @endif
                    </div>
                @else
                    <div style="padding-top: 48px; border-top: 0.5px solid rgba(76,69,70,0.3); display: flex; align-items: center; justify-content: space-between;">
                        <span style="font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600; color: rgba(207,196,197,0.3); border: 1px solid rgba(76,69,70,0.3); padding: 8px 20px; border-radius: 4px;">
                            ← Previous
                        </span>

                        <span style="font-family: 'Courier Prime', monospace; font-size: 12px; color: #cfc4c5; letter-spacing: 0.05em;">
                            Page 01 / 01
                        </span>

                        <span style="font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 600; color: rgba(207,196,197,0.3); border: 1px solid rgba(76,69,70,0.3); padding: 8px 20px; border-radius: 4px;">
                            Next →
                        </span>
                    </div>
                @endif
            </div>

        </div>
    </div>
</section>

@endsection
