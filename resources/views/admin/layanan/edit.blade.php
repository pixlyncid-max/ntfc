@extends('admin.layouts.app')

@section('title', 'Edit Layanan')

@section('content')

<div class="max-w-2xl">
    <form action="{{ route('admin.layanan.update', $service->id) }}" method="POST" class="admin-card space-y-6">
        @csrf
        @method('PUT')

        <div class="flex items-center justify-between border-b border-white/10 pb-4">
            <h2 class="text-base font-semibold text-white flex items-center gap-2">
                <span class="material-symbols-outlined text-[#048CD6]">edit</span>
                Edit Layanan: {{ $service->title }}
            </h2>
            <a href="{{ route('admin.layanan.index') }}" class="text-xs text-white/50 hover:text-white flex items-center gap-1">
                <span class="material-symbols-outlined text-sm">arrow_back</span> Kembali
            </a>
        </div>

        <div>
            <label class="block text-xs uppercase font-mono text-white/60 mb-2">Nama Layanan *</label>
            <input type="text" name="title" value="{{ old('title', $service->title) }}" required class="form-input">
        </div>

        <div>
            <label class="block text-xs uppercase font-mono text-white/60 mb-2">Nama Ikon Material Symbol *</label>
            <input type="text" name="icon" value="{{ old('icon', $service->icon) }}" required class="form-input">
        </div>

        <div>
            <label class="block text-xs uppercase font-mono text-white/60 mb-2">Deskripsi Singkat *</label>
            <textarea name="short_description" rows="2" required class="form-input">{{ old('short_description', $service->short_description) }}</textarea>
        </div>

        <div>
            <label class="block text-xs uppercase font-mono text-white/60 mb-2">Deskripsi Lengkap Detail</label>
            <textarea name="description" rows="4" class="form-input">{{ old('description', $service->description) }}</textarea>
        </div>

        <div>
            <label class="block text-xs uppercase font-mono text-white/60 mb-2">Fitur-fitur Unggulan (Satu per baris)</label>
            <textarea name="features" rows="3" class="form-input">{{ old('features', is_array($service->features) ? implode("\n", $service->features) : '') }}</textarea>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-xs uppercase font-mono text-white/60 mb-2">Urutan Tampilan</label>
                <input type="number" name="order" value="{{ old('order', $service->order) }}" class="form-input">
            </div>

            <div class="flex items-center pt-6">
                <label class="flex items-center gap-3 cursor-pointer">
                    <input type="checkbox" name="is_active" value="1" {{ $service->is_active ? 'checked' : '' }} class="w-4 h-4 rounded bg-[#1c1b1b] border-white/20 text-[#048CD6] focus:ring-0">
                    <span class="text-xs font-semibold text-white">Status Aktif</span>
                </label>
            </div>
        </div>

        <div class="pt-4 border-t border-white/10 flex justify-end gap-3">
            <a href="{{ route('admin.layanan.index') }}" class="btn-admin btn-admin-secondary">Batal</a>
            <button type="submit" class="btn-admin">
                <span class="material-symbols-outlined">save</span> Perbarui Layanan
            </button>
        </div>
    </form>
</div>

@endsection
