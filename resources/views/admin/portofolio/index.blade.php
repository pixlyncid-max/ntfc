@extends('admin.layouts.app')

@section('title', 'Manajemen Portofolio')

@section('content')

<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-lg font-bold text-white">Studi Kasus & Portofolio</h2>
            <p class="text-xs text-white/50">Kelola daftar rekam jejak studi kasus proyek NTFC.</p>
        </div>
        <a href="{{ route('admin.portofolio.create') }}" class="btn-admin">
            <span class="material-symbols-outlined">add</span> Tambah Studi Kasus
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @forelse($portfolios as $portfolio)
            <div class="admin-card space-y-4 flex flex-col justify-between">
                <div class="space-y-3">
                    @if($portfolio->image)
                        <div class="w-full h-48 rounded-lg overflow-hidden border border-white/10">
                            <img src="{{ $portfolio->image }}" alt="{{ $portfolio->title }}" class="w-full h-full object-cover">
                        </div>
                    @endif

                    <div class="flex items-center justify-between text-xs font-mono">
                        <span class="text-[#048CD6] uppercase font-bold">{{ $portfolio->category }}</span>
                        <span class="text-white/40">Klien: {{ $portfolio->client }}</span>
                    </div>

                    <h3 class="text-base font-bold text-white leading-snug">{{ $portfolio->title }}</h3>
                    <p class="text-xs text-white/60 line-clamp-2 leading-relaxed">{{ $portfolio->summary }}</p>
                </div>

                <div class="pt-4 border-t border-white/10 flex items-center justify-between">
                    <span class="text-xs font-mono text-white/40">Urutan: {{ $portfolio->order }}</span>

                    <div class="flex items-center gap-2">
                        <a href="{{ route('admin.portofolio.edit', $portfolio->id) }}" class="btn-admin btn-admin-secondary text-xs py-1.5 px-3">
                            <span class="material-symbols-outlined text-sm">edit</span> Edit
                        </a>
                        <form action="{{ route('admin.portofolio.destroy', $portfolio->id) }}" method="POST" onsubmit="return confirm('Hapus studi kasus ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-admin btn-admin-danger text-xs py-1.5 px-3">
                                <span class="material-symbols-outlined text-sm">delete</span> Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-2 admin-card text-center py-12">
                <p class="text-sm text-white/50 italic">Belum ada portofolio terdaftar.</p>
            </div>
        @endforelse
    </div>
</div>

@endsection
