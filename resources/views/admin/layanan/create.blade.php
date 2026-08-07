@extends('admin.layouts.app')

@section('title', 'Tambah Layanan Baru')

@section('content')

<div class="max-w-2xl">
    <form action="{{ route('admin.layanan.store') }}" method="POST" class="admin-card space-y-6">
        @csrf

        <div class="flex items-center justify-between border-b border-white/10 pb-4">
            <h2 class="text-base font-semibold text-white flex items-center gap-2">
                <span class="material-symbols-outlined text-[#048CD6]">medical_services</span>
                Form Layanan Baru
            </h2>
            <a href="{{ route('admin.layanan.index') }}" class="text-xs text-white/50 hover:text-white flex items-center gap-1">
                <span class="material-symbols-outlined text-sm">arrow_back</span> Kembali
            </a>
        </div>

        <div>
            <label class="block text-xs uppercase font-mono text-white/60 mb-2">Nama Layanan *</label>
            <input type="text" name="title" value="{{ old('title') }}" required class="form-input" placeholder="Contoh: Perpajakan Korporat">
        </div>

        <div>
            <label class="block text-xs uppercase font-mono text-white/60 mb-2">Nama Ikon Material Symbol *</label>
            <input type="text" name="icon" value="{{ old('icon', 'account_balance') }}" required class="form-input" placeholder="account_balance / monitoring / business_center / security">
            <p class="text-[11px] text-white/40 mt-1">Nama ikon Google Material Symbols (misal: account_balance, monitoring, security, business_center, gavel).</p>
        </div>

        <div>
            <label class="block text-xs uppercase font-mono text-white/60 mb-2">Deskripsi Singkat *</label>
            <textarea name="short_description" rows="2" required class="form-input">{{ old('short_description') }}</textarea>
        </div>

        <div>
            <label class="block text-xs uppercase font-mono text-white/60 mb-2">Deskripsi Lengkap Detail</label>
            <textarea name="description" rows="4" class="form-input">{{ old('description') }}</textarea>
        </div>

        <div>
            <label class="block text-xs uppercase font-mono text-white/60 mb-2">Fitur-fitur Unggulan (Satu per baris)</label>
            <textarea name="features" rows="3" class="form-input" placeholder="Transfer Pricing Documentation&#10;International Tax Structuring&#10;Tax Audit Representation">{{ old('features') }}</textarea>
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
            <a href="{{ route('admin.layanan.index') }}" class="btn-admin btn-admin-secondary">Batal</a>
            <button type="submit" class="btn-admin">
                <span class="material-symbols-outlined">save</span> Simpan Layanan
            </button>
        </div>
    </form>
</div>

@endsection
