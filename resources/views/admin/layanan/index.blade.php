@extends('admin.layouts.app')

@section('title', 'Manajemen Layanan')

@section('content')

<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-lg font-bold text-white">Daftar Layanan NTFC</h2>
            <p class="text-xs text-white/50">Kelola daftar layanan perpajakan, keuangan, dan konsultasi bisnis.</p>
        </div>
        <a href="{{ route('admin.layanan.create') }}" class="btn-admin">
            <span class="material-symbols-outlined">add</span> Tambah Layanan Baru
        </a>
    </div>

    <div class="admin-card overflow-x-auto">
        <table class="w-full text-left text-xs">
            <thead class="uppercase font-mono text-white/40 border-b border-white/10 pb-2">
                <tr>
                    <th class="py-3 px-4">Urutan</th>
                    <th class="py-3 px-4">Ikon</th>
                    <th class="py-3 px-4">Nama Layanan</th>
                    <th class="py-3 px-4">Ringkasan</th>
                    <th class="py-3 px-4">Status</th>
                    <th class="py-3 px-4 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-white/5">
                @forelse($services as $service)
                    <tr class="hover:bg-white/5 transition-colors">
                        <td class="py-3 px-4 font-mono text-white/60">{{ $service->order }}</td>
                        <td class="py-3 px-4">
                            <span class="material-symbols-outlined text-[#048CD6]">{{ $service->icon }}</span>
                        </td>
                        <td class="py-3 px-4 font-semibold text-white">{{ $service->title }}</td>
                        <td class="py-3 px-4 text-white/60 max-w-xs truncate">{{ $service->short_description }}</td>
                        <td class="py-3 px-4">
                            @if($service->is_active)
                                <span class="px-2 py-0.5 rounded bg-emerald-500/20 text-emerald-400 font-semibold uppercase text-[10px]">Aktif</span>
                            @else
                                <span class="px-2 py-0.5 rounded bg-red-500/20 text-red-400 font-semibold uppercase text-[10px]">Non-Aktif</span>
                            @endif
                        </td>
                        <td class="py-3 px-4 text-right">
                            <div class="flex items-center justify-end gap-2">
                                <a href="{{ route('admin.layanan.edit', $service->id) }}" class="p-1 text-white/60 hover:text-white" title="Edit">
                                    <span class="material-symbols-outlined text-sm">edit</span>
                                </a>
                                <form action="{{ route('admin.layanan.destroy', $service->id) }}" method="POST" onsubmit="return confirm('Hapus layanan ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-1 text-red-400 hover:text-red-300" title="Hapus">
                                        <span class="material-symbols-outlined text-sm">delete</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="py-8 text-center text-white/40 italic">Belum ada data layanan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
