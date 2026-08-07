@extends('admin.layouts.app')

@section('title', 'Edit Anggota Tim')

@section('content')

<div class="max-w-2xl">
    <form action="{{ route('admin.team.update', $team->id) }}" method="POST" enctype="multipart/form-data" class="admin-card space-y-6">
        @csrf
        @method('PUT')

        <div class="flex items-center justify-between border-b border-white/10 pb-4">
            <h2 class="text-base font-semibold text-white flex items-center gap-2">
                <span class="material-symbols-outlined text-[#048CD6]">edit</span>
                Edit Anggota & Foto Tim: {{ $team->name }}
            </h2>
            <a href="{{ route('admin.team.index') }}" class="text-xs text-white/50 hover:text-white flex items-center gap-1">
                <span class="material-symbols-outlined text-sm">arrow_back</span> Kembali
            </a>
        </div>

        <div>
            <label class="block text-xs uppercase font-mono text-white/60 mb-2">Nama Lengkap & Gelar *</label>
            <input type="text" name="name" value="{{ old('name', $team->name) }}" required class="form-input">
        </div>

        <div>
            <label class="block text-xs uppercase font-mono text-white/60 mb-2">Jabatan / Posisi *</label>
            <input type="text" name="position" value="{{ old('position', $team->position) }}" required class="form-input">
        </div>

        <div>
            <label class="block text-xs uppercase font-mono text-white/60 mb-2">Bio / Profil Singkat</label>
            <textarea name="bio" rows="3" class="form-input">{{ old('bio', $team->bio) }}</textarea>
        </div>

        <!-- Current & New Photo -->
        <div class="space-y-4 p-4 rounded-lg bg-[#1c1b1b] border border-white/5">
            <span class="block text-xs uppercase font-mono text-[#048CD6] font-semibold">Foto Tim Saat Ini</span>
            
            @if($team->image)
                <div class="w-32 aspect-[4/5] rounded overflow-hidden border border-white/10">
                    <img src="{{ $team->image }}" alt="{{ $team->name }}" class="w-full h-full object-cover">
                </div>
            @endif

            <div>
                <label class="block text-xs text-white/60 mb-2">Ganti Foto (Upload Baru):</label>
                <input type="file" name="image" accept="image/*" class="text-xs text-white/70 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-[#048CD6] file:text-white hover:file:bg-[#0374b3] cursor-pointer">
            </div>

            <div class="pt-2 border-t border-white/5">
                <label class="block text-[11px] text-white/50 mb-1">Atau Ubah URL Foto Eksternal:</label>
                <input type="url" name="image_url" value="{{ old('image_url', $team->image) }}" class="form-input text-xs">
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-xs uppercase font-mono text-white/60 mb-2">Urutan Tampilan</label>
                <input type="number" name="order" value="{{ old('order', $team->order) }}" class="form-input">
            </div>

            <div class="flex items-center pt-6">
                <label class="flex items-center gap-3 cursor-pointer">
                    <input type="checkbox" name="is_active" value="1" {{ $team->is_active ? 'checked' : '' }} class="w-4 h-4 rounded bg-[#1c1b1b] border-white/20 text-[#048CD6] focus:ring-0">
                    <span class="text-xs font-semibold text-white">Tampilkan di Website (Aktif)</span>
                </label>
            </div>
        </div>

        <div class="pt-4 border-t border-white/10 flex justify-end gap-3">
            <a href="{{ route('admin.team.index') }}" class="btn-admin btn-admin-secondary">Batal</a>
            <button type="submit" class="btn-admin">
                <span class="material-symbols-outlined">save</span> Perbarui Data Tim
            </button>
        </div>
    </form>
</div>

@endsection
