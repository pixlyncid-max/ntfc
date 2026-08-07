@extends('admin.layouts.app')

@section('title', 'Edit Portofolio')

@section('content')

<div class="max-w-3xl">
    <form action="{{ route('admin.portofolio.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data" class="admin-card space-y-6">
        @csrf
        @method('PUT')

        <div class="flex items-center justify-between border-b border-white/10 pb-4">
            <h2 class="text-base font-semibold text-white flex items-center gap-2">
                <span class="material-symbols-outlined text-[#048CD6]">edit</span>
                Edit Portofolio: {{ $portfolio->title }}
            </h2>
            <a href="{{ route('admin.portofolio.index') }}" class="text-xs text-white/50 hover:text-white flex items-center gap-1">
                <span class="material-symbols-outlined text-sm">arrow_back</span> Kembali
            </a>
        </div>

        <div>
            <label class="block text-xs uppercase font-mono text-white/60 mb-2">Judul Projek / Studi Kasus *</label>
            <input type="text" name="title" value="{{ old('title', $portfolio->title) }}" required class="form-input">
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-xs uppercase font-mono text-white/60 mb-2">Nama Klien</label>
                <input type="text" name="client" value="{{ old('client', $portfolio->client) }}" class="form-input">
            </div>

            <div>
                <label class="block text-xs uppercase font-mono text-white/60 mb-2">Kategori Projek</label>
                <input type="text" name="category" value="{{ old('category', $portfolio->category) }}" class="form-input">
            </div>
        </div>

        <!-- Image Upload -->
        <div class="space-y-3 p-4 rounded-lg bg-[#1c1b1b] border border-white/5">
            <label class="block text-xs uppercase font-mono text-[#048CD6] font-semibold">Gambar Header Projek</label>
            @if($portfolio->image)
                <div class="w-full h-36 rounded overflow-hidden mb-2">
                    <img src="{{ $portfolio->image }}" alt="{{ $portfolio->title }}" class="w-full h-full object-cover">
                </div>
            @endif
            <input type="file" name="image" accept="image/*" class="text-xs text-white/70 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-[#048CD6] file:text-white cursor-pointer">
            
            <div class="pt-2 border-t border-white/5">
                <label class="block text-[11px] text-white/50 mb-1">Atau Ubah URL Gambar Eksternal:</label>
                <input type="url" name="image_url" value="{{ old('image_url', $portfolio->image) }}" class="form-input text-xs">
            </div>
        </div>

        <div>
            <label class="block text-xs uppercase font-mono text-white/60 mb-2">Ringkasan Utama</label>
            <textarea name="summary" rows="2" class="form-input">{{ old('summary', $portfolio->summary) }}</textarea>
        </div>

        <div>
            <label class="block text-xs uppercase font-mono text-white/60 mb-2">Tantangan (Challenge)</label>
            <textarea name="challenge" rows="3" class="form-input">{{ old('challenge', $portfolio->challenge) }}</textarea>
        </div>

        <div>
            <label class="block text-xs uppercase font-mono text-white/60 mb-2">Solusi NTFC (Solution)</label>
            <textarea name="solution" rows="3" class="form-input">{{ old('solution', $portfolio->solution) }}</textarea>
        </div>

        <div>
            <label class="block text-xs uppercase font-mono text-white/60 mb-2">Hasil Akhir (Result & Key Metrics)</label>
            <textarea name="result" rows="3" class="form-input">{{ old('result', $portfolio->result) }}</textarea>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-xs uppercase font-mono text-white/60 mb-2">Urutan Tampilan</label>
                <input type="number" name="order" value="{{ old('order', $portfolio->order) }}" class="form-input">
            </div>

            <div class="flex items-center pt-6">
                <label class="flex items-center gap-3 cursor-pointer">
                    <input type="checkbox" name="is_active" value="1" {{ $portfolio->is_active ? 'checked' : '' }} class="w-4 h-4 rounded bg-[#1c1b1b] border-white/20 text-[#048CD6] focus:ring-0">
                    <span class="text-xs font-semibold text-white">Status Aktif</span>
                </label>
            </div>
        </div>

        <div class="pt-4 border-t border-white/10 flex justify-end gap-3">
            <a href="{{ route('admin.portofolio.index') }}" class="btn-admin btn-admin-secondary">Batal</a>
            <button type="submit" class="btn-admin">
                <span class="material-symbols-outlined">save</span> Perbarui Portofolio
            </button>
        </div>
    </form>
</div>

@endsection
