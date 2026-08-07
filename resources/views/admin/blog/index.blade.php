@extends('admin.layouts.app')

@section('title', 'Manajemen Blog & Insight')

@section('content')

<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-lg font-bold text-white">Artikel Blog & Analysis</h2>
            <p class="text-xs text-white/50">Kelola artikel publikasi, wawasan perpajakan, dan analisis keuangan.</p>
        </div>
        <a href="{{ route('admin.blog.create') }}" class="btn-admin">
            <span class="material-symbols-outlined">edit_note</span> Tulis Artikel Baru
        </a>
    </div>

    <div class="admin-card overflow-x-auto">
        <table class="w-full text-left text-xs">
            <thead class="uppercase font-mono text-white/40 border-b border-white/10 pb-2">
                <tr>
                    <th class="py-3 px-4">Gambar</th>
                    <th class="py-3 px-4">Judul Artikel</th>
                    <th class="py-3 px-4">Kategori</th>
                    <th class="py-3 px-4">Penulis</th>
                    <th class="py-3 px-4">Featured</th>
                    <th class="py-3 px-4">Status</th>
                    <th class="py-3 px-4 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-white/5">
                @forelse($posts as $post)
                    <tr class="hover:bg-white/5 transition-colors">
                        <td class="py-3 px-4">
                            <img src="{{ $post->image ?? 'https://images.unsplash.com/photo-1450133064473-71024230f91b' }}" alt="{{ $post->title }}" class="w-12 h-10 object-cover rounded border border-white/10">
                        </td>
                        <td class="py-3 px-4 font-semibold text-white max-w-xs truncate">{{ $post->title }}</td>
                        <td class="py-3 px-4 font-mono text-[#048CD6] uppercase">{{ $post->category }}</td>
                        <td class="py-3 px-4 text-white/70">{{ $post->author }}</td>
                        <td class="py-3 px-4">
                            @if($post->is_featured)
                                <span class="px-2 py-0.5 rounded bg-[#048CD6]/20 text-[#048CD6] font-bold uppercase text-[10px] border border-[#048CD6]/40">Featured</span>
                            @else
                                <span class="text-white/30 text-[10px]">-</span>
                            @endif
                        </td>
                        <td class="py-3 px-4">
                            @if($post->is_published)
                                <span class="px-2 py-0.5 rounded bg-emerald-500/20 text-emerald-400 font-semibold uppercase text-[10px]">Terbit</span>
                            @else
                                <span class="px-2 py-0.5 rounded bg-amber-500/20 text-amber-400 font-semibold uppercase text-[10px]">Draft</span>
                            @endif
                        </td>
                        <td class="py-3 px-4 text-right">
                            <div class="flex items-center justify-end gap-2">
                                <a href="{{ route('admin.blog.edit', $post->id) }}" class="p-1 text-white/60 hover:text-white" title="Edit">
                                    <span class="material-symbols-outlined text-sm">edit</span>
                                </a>
                                <form action="{{ route('admin.blog.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Hapus artikel blog ini?');">
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
                        <td colspan="7" class="py-8 text-center text-white/40 italic">Belum ada artikel blog terdaftar.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
