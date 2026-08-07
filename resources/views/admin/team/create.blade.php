@extends('admin.layouts.app')

@section('title', 'Tambah Anggota Tim Baru')

@section('content')

<div class="max-w-2xl">
    <form action="{{ route('admin.team.store') }}" method="POST" enctype="multipart/form-data" class="admin-card space-y-6">
        @csrf

        <div class="flex items-center justify-between border-b border-white/10 pb-4">
            <h2 class="text-base font-semibold text-white flex items-center gap-2">
                <span class="material-symbols-outlined text-[#048CD6]">add_a_photo</span>
                Form Tambah Anggota & Foto Tim
            </h2>
            <a href="{{ route('admin.team.index') }}" class="text-xs text-white/50 hover:text-white flex items-center gap-1">
                <span class="material-symbols-outlined text-sm">arrow_back</span> Kembali
            </a>
        </div>

        <div>
            <label class="block text-xs uppercase font-mono text-white/60 mb-2">Nama Lengkap & Gelar *</label>
            <input type="text" name="name" value="{{ old('name') }}" required class="form-input" placeholder="Contoh: Adrian Sterling, M.Sc.">
        </div>

        <div>
            <label class="block text-xs uppercase font-mono text-white/60 mb-2">Jabatan / Posisi *</label>
            <input type="text" name="name_position" name="position" value="{{ old('position') }}" required class="form-input" placeholder="Contoh: MANAGING PARTNER">
        </div>

        <div>
            <label class="block text-xs uppercase font-mono text-white/60 mb-2">Bio / Profil Singkat</label>
            <textarea name="bio" rows="3" class="form-input" placeholder="Ringkasan pengalaman profesional...">{{ old('bio') }}</textarea>
        </div>

        <!-- Image Upload -->
        <div class="space-y-3 p-4 rounded-lg bg-[#1c1b1b] border border-white/5">
            <label class="block text-xs uppercase font-mono text-[#048CD6] font-semibold">Upload Foto Tim</label>
            <input type="file" name="image" accept="image/*" class="text-xs text-white/70 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-[#048CD6] file:text-white hover:file:bg-[#0374b3] cursor-pointer">
            <p class="text-[11px] text-white/40">Format: JPG, PNG, WEBP. Maksimal 4MB. Rekomendasi rasio 4:5.</p>
            
            <div class="pt-2 border-t border-white/5">
                <label class="block text-[11px] text-white/50 mb-1">Atau gunakan URL Foto Eksternal:</label>
                <input type="url" name="image_url" value="{{ old('image_url') }}" class="form-input text-xs" placeholder="https://images.unsplash.com/...">
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-xs uppercase font-mono text-white/60 mb-2">Urutan Tampilan</label>
                <input type="number" name="order" value="{{ old('order', 1) }}" class="form-input">
            </div>

            <div class="flex items-center pt-6">
                <label class="flex items-center gap-3 cursor-pointer">
                    <input type="checkbox" name="is_active" value="1" checked class="w-4 h-4 rounded bg-[#1c1b1b] border-white/20 text-[#048CD6] focus:ring-0">
                    <span class="text-xs font-semibold text-white">Tampilkan di Website (Aktif)</span>
                </label>
            </div>
        </div>

        <div class="pt-4 border-t border-white/10 flex justify-end gap-3">
            <a href="{{ route('admin.team.index') }}" class="btn-admin btn-admin-secondary">Batal</a>
            <button type="submit" class="btn-admin">
                <span class="material-symbols-outlined">save</span> Simpan Anggota Tim
            </button>
        </div>
    </form>
</div>

@endsection
