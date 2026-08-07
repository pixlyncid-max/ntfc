@extends('admin.layouts.app')

@section('title', 'Manajemen Foto & Anggota Tim')

@section('content')

<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-lg font-bold text-white">Daftar Foto & Profil Tim</h2>
            <p class="text-xs text-white/50">Foto dan profil tim yang akan ditampilkan di halaman Tentang Kami.</p>
        </div>
        <a href="{{ route('admin.team.create') }}" class="btn-admin">
            <span class="material-symbols-outlined">add_a_photo</span> Tambah Anggota Tim
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @forelse($team as $member)
            <div class="admin-card space-y-4 relative group flex flex-col justify-between">
                <div>
                    <!-- Photo Display -->
                    <div class="w-full aspect-[4/5] overflow-hidden rounded-lg bg-[#1c1b1b] relative mb-4 border border-white/10">
                        <img src="{{ $member->image ?? 'https://images.unsplash.com/photo-1560250097-0b93528c311a' }}" 
                             alt="{{ $member->name }}" 
                             class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105">
                        
                        <div class="absolute top-3 right-3 bg-black/70 backdrop-blur-md px-2.5 py-1 rounded text-[10px] font-mono uppercase text-white font-semibold">
                            Urutan: {{ $member->order }}
                        </div>

                        @if(!$member->is_active)
                            <div class="absolute inset-0 bg-black/70 flex items-center justify-center">
                                <span class="px-3 py-1 rounded bg-red-500/20 border border-red-500/40 text-red-400 text-xs font-semibold uppercase">Non-Aktif</span>
                            </div>
                        @endif
                    </div>

                    <!-- Details -->
                    <h3 class="text-lg font-bold text-white">{{ $member->name }}</h3>
                    <p class="text-xs font-mono text-[#048CD6] uppercase tracking-wider mb-2 font-semibold">{{ $member->position }}</p>
                    <p class="text-xs text-white/60 line-clamp-3 leading-relaxed">{{ $member->bio }}</p>
                </div>

                <!-- Actions -->
                <div class="pt-4 border-t border-white/10 flex items-center justify-between">
                    <a href="{{ route('admin.team.edit', $member->id) }}" class="btn-admin btn-admin-secondary text-xs py-1.5 px-3">
                        <span class="material-symbols-outlined text-sm">edit</span> Edit
                    </a>

                    <form action="{{ route('admin.team.destroy', $member->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus foto dan profil tim ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-admin btn-admin-danger text-xs py-1.5 px-3">
                            <span class="material-symbols-outlined text-sm">delete</span> Hapus
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <div class="col-span-3 admin-card text-center py-12">
                <span class="material-symbols-outlined text-5xl text-white/20 mb-3">group_off</span>
                <p class="text-sm text-white/50 italic">Belum ada anggota tim. Klik tombol di atas untuk menambahkan foto tim baru.</p>
            </div>
        @endforelse
    </div>
</div>

@endsection
