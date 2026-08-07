@extends('admin.layouts.app')

@section('title', 'Kelola Konten Beranda')

@section('content')

<form action="{{ route('admin.beranda.update') }}" method="POST" class="space-y-8 max-w-4xl">
    @csrf

    <!-- Hero Section -->
    <div class="admin-card space-y-6">
        <h2 class="text-base font-semibold text-white border-b border-white/10 pb-3 flex items-center gap-2">
            <span class="material-symbols-outlined text-[#048CD6]">view_headline</span>
            Hero Headline & Subtext (Beranda)
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <label class="block text-xs uppercase font-mono text-white/60 mb-2">Headline Baris 1</label>
                <input type="text" name="hero_title_1" value="{{ old('hero_title_1', $settings['hero_title_1'] ?? '') }}" class="form-input">
            </div>
            <div>
                <label class="block text-xs uppercase font-mono text-white/60 mb-2">Headline Baris 2</label>
                <input type="text" name="hero_title_2" value="{{ old('hero_title_2', $settings['hero_title_2'] ?? '') }}" class="form-input">
            </div>
            <div>
                <label class="block text-xs uppercase font-mono text-white/60 mb-2">Headline Baris 3</label>
                <input type="text" name="hero_title_3" value="{{ old('hero_title_3', $settings['hero_title_3'] ?? '') }}" class="form-input">
            </div>
        </div>

        <div>
            <label class="block text-xs uppercase font-mono text-white/60 mb-2">Subtext Hero</label>
            <textarea name="hero_subtext" rows="3" class="form-input">{{ old('hero_subtext', $settings['hero_subtext'] ?? '') }}</textarea>
        </div>

        <div>
            <label class="block text-xs uppercase font-mono text-white/60 mb-2">Teks Tombol CTA</label>
            <input type="text" name="hero_cta_text" value="{{ old('hero_cta_text', $settings['hero_cta_text'] ?? '') }}" class="form-input">
        </div>
    </div>

    <!-- Stats Section -->
    <div class="admin-card space-y-6">
        <h2 class="text-base font-semibold text-white border-b border-white/10 pb-3 flex items-center gap-2">
            <span class="material-symbols-outlined text-[#048CD6]">equalizer</span>
            Statistik Utama (Stats Counters)
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-3 p-4 rounded-lg bg-[#1c1b1b]">
                <span class="text-xs font-mono text-[#048CD6]">Statistik 1</span>
                <div>
                    <label class="block text-xs text-white/60 mb-1">Nilai Counter</label>
                    <input type="text" name="stat_1_val" value="{{ old('stat_1_val', $settings['stat_1_val'] ?? '') }}" class="form-input">
                </div>
                <div>
                    <label class="block text-xs text-white/60 mb-1">Label Deskripsi</label>
                    <input type="text" name="stat_1_label" value="{{ old('stat_1_label', $settings['stat_1_label'] ?? '') }}" class="form-input">
                </div>
            </div>

            <div class="space-y-3 p-4 rounded-lg bg-[#1c1b1b]">
                <span class="text-xs font-mono text-[#048CD6]">Statistik 2</span>
                <div>
                    <label class="block text-xs text-white/60 mb-1">Nilai Counter</label>
                    <input type="text" name="stat_2_val" value="{{ old('stat_2_val', $settings['stat_2_val'] ?? '') }}" class="form-input">
                </div>
                <div>
                    <label class="block text-xs text-white/60 mb-1">Label Deskripsi</label>
                    <input type="text" name="stat_2_label" value="{{ old('stat_2_label', $settings['stat_2_label'] ?? '') }}" class="form-input">
                </div>
            </div>

            <div class="space-y-3 p-4 rounded-lg bg-[#1c1b1b]">
                <span class="text-xs font-mono text-[#048CD6]">Statistik 3</span>
                <div>
                    <label class="block text-xs text-white/60 mb-1">Nilai Counter</label>
                    <input type="text" name="stat_3_val" value="{{ old('stat_3_val', $settings['stat_3_val'] ?? '') }}" class="form-input">
                </div>
                <div>
                    <label class="block text-xs text-white/60 mb-1">Label Deskripsi</label>
                    <input type="text" name="stat_3_label" value="{{ old('stat_3_label', $settings['stat_3_label'] ?? '') }}" class="form-input">
                </div>
            </div>

            <div class="space-y-3 p-4 rounded-lg bg-[#1c1b1b]">
                <span class="text-xs font-mono text-[#048CD6]">Statistik 4</span>
                <div>
                    <label class="block text-xs text-white/60 mb-1">Nilai Counter</label>
                    <input type="text" name="stat_4_val" value="{{ old('stat_4_val', $settings['stat_4_val'] ?? '') }}" class="form-input">
                </div>
                <div>
                    <label class="block text-xs text-white/60 mb-1">Label Deskripsi</label>
                    <input type="text" name="stat_4_label" value="{{ old('stat_4_label', $settings['stat_4_label'] ?? '') }}" class="form-input">
                </div>
            </div>
        </div>
    </div>

    <!-- Philosophy Section -->
    <div class="admin-card space-y-6">
        <h2 class="text-base font-semibold text-white border-b border-white/10 pb-3 flex items-center gap-2">
            <span class="material-symbols-outlined text-[#048CD6]">psychology</span>
            Filosofi Presisi (Beranda)
        </h2>

        <div>
            <label class="block text-xs uppercase font-mono text-white/60 mb-2">Judul Filosofi</label>
            <input type="text" name="philosophy_title" value="{{ old('philosophy_title', $settings['philosophy_title'] ?? '') }}" class="form-input">
        </div>

        <div>
            <label class="block text-xs uppercase font-mono text-white/60 mb-2">Paragraf 1</label>
            <textarea name="philosophy_body_1" rows="4" class="form-input">{{ old('philosophy_body_1', $settings['philosophy_body_1'] ?? '') }}</textarea>
        </div>

        <div>
            <label class="block text-xs uppercase font-mono text-white/60 mb-2">Paragraf 2</label>
            <textarea name="philosophy_body_2" rows="4" class="form-input">{{ old('philosophy_body_2', $settings['philosophy_body_2'] ?? '') }}</textarea>
        </div>
    </div>

    <div class="flex justify-end">
        <button type="submit" class="btn-admin py-3 px-6">
            <span class="material-symbols-outlined">save</span> Simpan Perubahan Beranda
        </button>
    </div>
</form>

@endsection
