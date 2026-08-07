@extends('admin.layouts.app')

@section('title', 'Tambah Portofolio')

@section('content')

<div class="max-w-3xl">
    <form action="{{ route('admin.portofolio.store') }}" method="POST" enctype="multipart/form-data" class="admin-card space-y-6">
        @csrf

        <div class="flex items-center justify-between border-b border-white/10 pb-4">
            <h2 class="text-base font-semibold text-white flex items-center gap-2">
                <span class="material-symbols-outlined text-[#048CD6]">work</span>
                Form Studi Kasus Portofolio
            </h2>
            <a href="{{ route('admin.portofolio.index') }}" class="text-xs text-white/50 hover:text-white flex items-center gap-1">
                <span class="material-symbols-outlined text-sm">arrow_back</span> Kembali
            </a>
        </div>

        <div>
            <label class="block text-xs uppercase font-mono text-white/60 mb-2">Judul Projek / Studi Kasus *</label>
            <input type="text" name="title" value="{{ old('title') }}" required class="form-input">
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-xs uppercase font-mono text-white/60 mb-2">Nama Klien</label>
                <input type="text" name="client" value="{{ old('client') }}" class="form-input">
            </div>

            <div>
                <label class="block text-xs uppercase font-mono text-white/60 mb-2">Kategori Projek</label>
                <input type="text" name="category" value="{{ old('category') }}" class="form-input" placeholder="PAJAK KORPORAT / RESTRUKTURISASI">
            </div>
        </div>

        <!-- Image Upload -->
        <div class="space-y-3 p-4 rounded-lg bg-[#1c1b1b] border border-white/5">
            <label class="block text-xs uppercase font-mono text-[#048CD6] font-semibold">Upload Gambar Header Projek</label>
            <input type="file" name="image" accept="image/*" class="text-xs text-white/70 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-[#048CD6] file:text-white cursor-pointer">
            
            <div class="pt-2 border-t border-white/5">
                <label class="block text-[11px] text-white/50 mb-1">Atau gunakan URL Gambar Eksternal:</label>
                <input type="url" name="image_url" value="{{ old('image_url') }}" class="form-input text-xs" placeholder="https://images.unsplash.com/...">
            </div>
        </div>

        <div>
            <label class="block text-xs uppercase font-mono text-white/60 mb-2">Ringkasan Utama</label>
            <textarea name="summary" rows="2" class="form-input">{{ old('summary') }}</textarea>
        </div>

        <div>
            <label class="block text-xs uppercase font-mono text-white/60 mb-2">Tantangan (Challenge)</label>
            <textarea name="challenge" rows="3" class="form-input">{{ old('challenge') }}</textarea>
        </div>

        <div>
            <label class="block text-xs uppercase font-mono text-white/60 mb-2">Solusi NTFC (Solution)</label>
            <textarea name="solution" rows="3" class="form-input">{{ old('solution') }}</textarea>
        </div>

        <div>
            <label class="block text-xs uppercase font-mono text-white/60 mb-2">Hasil Akhir (Result & Key Metrics)</label>
            <textarea name="result" rows="3" class="form-input">{{ old('result') }}</textarea>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-xs uppercase font-mono text-white/60 mb-2">Urutan Tampilan</label>
                <input type="number" name="order" value="{{ old('order', 1) }}" class="form-input">
            </div>

            <div class="flex items-center pt-6">
                <label class="flex items-center gap-3 cursor-pointer">
                    <input type="checkbox" name="is_active" value="1" checked class="w-4 h-4 rounded bg-[#1c1b1b] border-white/20 text-[#048CD6] focus:ring-0">
                    <span class="text-xs font-semibold text-white">Status Aktif</span>
                </label>
            </div>
        </div>

        <div class="pt-4 border-t border-white/10 flex justify-end gap-3">
            <a href="{{ route('admin.portofolio.index') }}" class="btn-admin btn-admin-secondary">Batal</a>
            <button type="submit" class="btn-admin">
                <span class="material-symbols-outlined">save</span> Simpan Portofolio
            </button>
        </div>
    </form>
</div>

@endsection
