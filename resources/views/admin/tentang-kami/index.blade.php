@extends('admin.layouts.app')

@section('title', 'Kelola Tentang Kami')

@section('content')

<div class="space-y-8 max-w-4xl">
    <form action="{{ route('admin.tentang-kami.update') }}" method="POST" class="space-y-8">
        @csrf

        <!-- Header Section -->
        <div class="admin-card space-y-6">
            <h2 class="text-base font-semibold text-white border-b border-white/10 pb-3 flex items-center gap-2">
                <span class="material-symbols-outlined text-[#048CD6]">info</span>
                Hero & Deskripsi Utama (Tentang Kami)
            </h2>

            <div>
                <label class="block text-xs uppercase font-mono text-white/60 mb-2">Judul Hero</label>
                <input type="text" name="about_hero_title" value="{{ old('about_hero_title', $settings['about_hero_title'] ?? '') }}" class="form-input">
            </div>

            <div>
                <label class="block text-xs uppercase font-mono text-white/60 mb-2">Subtext Hero</label>
                <input type="text" name="about_hero_subtext" value="{{ old('about_hero_subtext', $settings['about_hero_subtext'] ?? '') }}" class="form-input">
            </div>

            <div>
                <label class="block text-xs uppercase font-mono text-white/60 mb-2">Judul Pengantar Utama</label>
                <input type="text" name="about_intro_title" value="{{ old('about_intro_title', $settings['about_intro_title'] ?? '') }}" class="form-input">
            </div>

            <div>
                <label class="block text-xs uppercase font-mono text-white/60 mb-2">Deskripsi Pengantar Utama</label>
                <textarea name="about_intro_body" rows="4" class="form-input">{{ old('about_intro_body', $settings['about_intro_body'] ?? '') }}</textarea>
            </div>
        </div>

        <!-- Vision & Mission -->
        <div class="admin-card space-y-6">
            <h2 class="text-base font-semibold text-white border-b border-white/10 pb-3 flex items-center gap-2">
                <span class="material-symbols-outlined text-[#048CD6]">flag</span>
                Visi & Misi Perusahaan
            </h2>

            <div>
                <label class="block text-xs uppercase font-mono text-white/60 mb-2">Visi NTFC</label>
                <textarea name="about_vision" rows="3" class="form-input">{{ old('about_vision', $settings['about_vision'] ?? '') }}</textarea>
            </div>

            <div>
                <label class="block text-xs uppercase font-mono text-white/60 mb-2">Misi NTFC</label>
                <textarea name="about_mission" rows="3" class="form-input">{{ old('about_mission', $settings['about_mission'] ?? '') }}</textarea>
            </div>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="btn-admin py-3 px-6">
                <span class="material-symbols-outlined">save</span> Simpan Perubahan Tentang Kami
            </button>
        </div>
    </form>

    <!-- Shortcut to Manage Team Photos -->
    <div class="admin-card flex items-center justify-between border-l-4 border-l-[#048CD6]">
        <div>
            <h3 class="text-base font-semibold text-white">Foto & Profil Anggota Tim</h3>
            <p class="text-xs text-white/50 mt-1">Kelola foto pimpinan, posisi, dan bio tim profesional NTFC yang tampil di halaman Tentang Kami.</p>
        </div>
        <a href="{{ route('admin.team.index') }}" class="btn-admin">
            <span class="material-symbols-outlined">groups</span> Kelola Foto Tim
        </a>
    </div>
</div>

@endsection
