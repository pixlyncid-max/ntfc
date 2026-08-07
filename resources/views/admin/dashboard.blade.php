@extends('admin.layouts.app')

@section('title', 'Dashboard Overview')

@section('content')

<div class="space-y-8">
    <!-- Stat Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="admin-card flex items-center justify-between border-l-4 border-l-[#048CD6]">
            <div>
                <p class="text-xs uppercase font-mono tracking-wider text-white/50 mb-1">Anggota & Foto Tim</p>
                <h3 class="text-3xl font-bold text-white">{{ $stats['team_count'] }}</h3>
            </div>
            <span class="material-symbols-outlined text-4xl text-[#048CD6]/40">groups</span>
        </div>

        <div class="admin-card flex items-center justify-between border-l-4 border-l-emerald-500">
            <div>
                <p class="text-xs uppercase font-mono tracking-wider text-white/50 mb-1">Total Layanan</p>
                <h3 class="text-3xl font-bold text-white">{{ $stats['service_count'] }}</h3>
            </div>
            <span class="material-symbols-outlined text-4xl text-emerald-500/40">medical_services</span>
        </div>

        <div class="admin-card flex items-center justify-between border-l-4 border-l-amber-500">
            <div>
                <p class="text-xs uppercase font-mono tracking-wider text-white/50 mb-1">Studi Kasus Portofolio</p>
                <h3 class="text-3xl font-bold text-white">{{ $stats['portfolio_count'] }}</h3>
            </div>
            <span class="material-symbols-outlined text-4xl text-amber-500/40">work</span>
        </div>

        <div class="admin-card flex items-center justify-between border-l-4 border-l-purple-500">
            <div>
                <p class="text-xs uppercase font-mono tracking-wider text-white/50 mb-1">Artikel Blog</p>
                <h3 class="text-3xl font-bold text-white">{{ $stats['blog_count'] }}</h3>
            </div>
            <span class="material-symbols-outlined text-4xl text-purple-500/40">article</span>
        </div>
    </div>

    <!-- Team Members Quick Overview & Actions -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="admin-card space-y-4">
            <div class="flex items-center justify-between border-b border-white/10 pb-4">
                <h2 class="text-base font-semibold text-white flex items-center gap-2">
                    <span class="material-symbols-outlined text-[#048CD6]">groups</span>
                    Foto & Anggota Tim Terdaftar
                </h2>
                <a href="{{ route('admin.team.create') }}" class="btn-admin text-xs py-1.5 px-3">
                    <span class="material-symbols-outlined text-sm">add</span> Tambah Tim
                </a>
            </div>

            <div class="space-y-3">
                @forelse($team_members as $member)
                    <div class="flex items-center justify-between p-3 rounded-lg bg-[#1c1b1b] border border-white/5">
                        <div class="flex items-center gap-3">
                            <img src="{{ $member->image ?? 'https://images.unsplash.com/photo-1560250097-0b93528c311a' }}" alt="{{ $member->name }}" class="w-10 h-10 rounded-full object-cover border border-white/10">
                            <div>
                                <h4 class="text-sm font-semibold text-white">{{ $member->name }}</h4>
                                <p class="text-xs font-mono text-[#048CD6] uppercase">{{ $member->position }}</p>
                            </div>
                        </div>
                        <a href="{{ route('admin.team.edit', $member->id) }}" class="text-xs text-white/60 hover:text-white flex items-center gap-1">
                            <span class="material-symbols-outlined text-sm">edit</span> Edit
                        </a>
                    </div>
                @empty
                    <p class="text-xs text-white/40 italic py-4 text-center">Belum ada anggota tim terdaftar.</p>
                @endforelse
            </div>
        </div>

        <!-- Latest Articles -->
        <div class="admin-card space-y-4">
            <div class="flex items-center justify-between border-b border-white/10 pb-4">
                <h2 class="text-base font-semibold text-white flex items-center gap-2">
                    <span class="material-symbols-outlined text-purple-400">article</span>
                    Artikel Blog Terbaru
                </h2>
                <a href="{{ route('admin.blog.create') }}" class="btn-admin text-xs py-1.5 px-3">
                    <span class="material-symbols-outlined text-sm">add</span> Tulis Artikel
                </a>
            </div>

            <div class="space-y-3">
                @forelse($latest_posts as $post)
                    <div class="flex items-center justify-between p-3 rounded-lg bg-[#1c1b1b] border border-white/5">
                        <div class="truncate max-w-[70%]">
                            <h4 class="text-sm font-semibold text-white truncate">{{ $post->title }}</h4>
                            <p class="text-xs text-white/40">{{ $post->category }} • {{ $post->author }}</p>
                        </div>
                        <a href="{{ route('admin.blog.edit', $post->id) }}" class="text-xs text-white/60 hover:text-white flex items-center gap-1">
                            <span class="material-symbols-outlined text-sm">edit</span> Edit
                        </a>
                    </div>
                @empty
                    <p class="text-xs text-white/40 italic py-4 text-center">Belum ada artikel blog.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>

@endsection
