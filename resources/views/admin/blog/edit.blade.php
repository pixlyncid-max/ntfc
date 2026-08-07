@extends('admin.layouts.app')

@section('title', 'Edit Artikel Blog')

@section('content')

<div class="max-w-3xl">
    <form action="{{ route('admin.blog.update', $post->id) }}" method="POST" enctype="multipart/form-data" class="admin-card space-y-6">
        @csrf
        @method('PUT')

        <div class="flex items-center justify-between border-b border-white/10 pb-4">
            <h2 class="text-base font-semibold text-white flex items-center gap-2">
                <span class="material-symbols-outlined text-[#048CD6]">edit</span>
                Edit Artikel: {{ $post->title }}
            </h2>
            <a href="{{ route('admin.blog.index') }}" class="text-xs text-white/50 hover:text-white flex items-center gap-1">
                <span class="material-symbols-outlined text-sm">arrow_back</span> Kembali
            </a>
        </div>

        <div>
            <label class="block text-xs uppercase font-mono text-white/60 mb-2">Judul Artikel *</label>
            <input type="text" name="title" value="{{ old('title', $post->title) }}" required class="form-input">
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-xs uppercase font-mono text-white/60 mb-2">Kategori Artikel *</label>
                <select name="category" required class="form-input">
                    <option value="TAX STRATEGY" {{ old('category', $post->category) == 'TAX STRATEGY' ? 'selected' : '' }}>TAX STRATEGY</option>
                    <option value="CORPORATE FINANCE" {{ old('category', $post->category) == 'CORPORATE FINANCE' ? 'selected' : '' }}>CORPORATE FINANCE</option>
                    <option value="MERGERS & ACQUISITIONS" {{ old('category', $post->category) == 'MERGERS & ACQUISITIONS' ? 'selected' : '' }}>MERGERS & ACQUISITIONS</option>
                    <option value="REGULATORY COMPLIANCE" {{ old('category', $post->category) == 'REGULATORY COMPLIANCE' ? 'selected' : '' }}>REGULATORY COMPLIANCE</option>
                </select>
            </div>

            <div>
                <label class="block text-xs uppercase font-mono text-white/60 mb-2">Penulis / Author *</label>
                <input type="text" name="author" value="{{ old('author', $post->author) }}" required class="form-input">
            </div>
        </div>

        <!-- Image Upload -->
        <div class="space-y-3 p-4 rounded-lg bg-[#1c1b1b] border border-white/5">
            <label class="block text-xs uppercase font-mono text-[#048CD6] font-semibold">Gambar Artikel</label>
            @if($post->image)
                <div class="w-full h-36 rounded overflow-hidden mb-2">
                    <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                </div>
            @endif
            <input type="file" name="image" accept="image/*" class="text-xs text-white/70 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-[#048CD6] file:text-white cursor-pointer">
            
            <div class="pt-2 border-t border-white/5">
                <label class="block text-[11px] text-white/50 mb-1">Atau Ubah URL Gambar Eksternal:</label>
                <input type="url" name="image_url" value="{{ old('image_url', $post->image) }}" class="form-input text-xs">
            </div>
        </div>

        <div>
            <label class="block text-xs uppercase font-mono text-white/60 mb-2">Kutipan / Excerpt (Ringkasan Singkat)</label>
            <textarea name="excerpt" rows="2" class="form-input">{{ old('excerpt', $post->excerpt) }}</textarea>
        </div>

        <div>
            <label class="block text-xs uppercase font-mono text-white/60 mb-2">Isi Konten Artikel *</label>
            <textarea name="content" rows="10" required class="form-input">{{ old('content', $post->content) }}</textarea>
        </div>

        <div class="space-y-3 pt-2">
            <label class="flex items-center gap-3 cursor-pointer">
                <input type="checkbox" name="is_published" value="1" {{ $post->is_published ? 'checked' : '' }} class="w-4 h-4 rounded bg-[#1c1b1b] border-white/20 text-[#048CD6] focus:ring-0">
                <span class="text-xs font-semibold text-white">Status Terbit (Published)</span>
            </label>

            <label class="flex items-center gap-3 cursor-pointer">
                <input type="checkbox" name="is_featured" value="1" {{ $post->is_featured ? 'checked' : '' }} class="w-4 h-4 rounded bg-[#1c1b1b] border-white/20 text-[#048CD6] focus:ring-0">
                <span class="text-xs font-bold text-[#048CD6]">Tandai sebagai Featured Insight (Artikel Utama Paling Atas)</span>
            </label>
        </div>

        <div class="pt-4 border-t border-white/10 flex justify-end gap-3">
            <a href="{{ route('admin.blog.index') }}" class="btn-admin btn-admin-secondary">Batal</a>
            <button type="submit" class="btn-admin">
                <span class="material-symbols-outlined">save</span> Perbarui Artikel
            </button>
        </div>
    </form>
</div>

@endsection
