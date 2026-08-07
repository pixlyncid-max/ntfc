@extends('admin.layouts.app')

@section('title', 'Manajemen Navbar & Footer')

@section('content')

<div class="max-w-4xl space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-lg font-bold text-white">Manajemen Navbar, Footer & Media Sosial</h2>
            <p class="text-xs text-white/50">Kelola logo, WhatsApp Konsultasi, tautan media sosial (TikTok, Instagram, Facebook), dan konten footer.</p>
        </div>
    </div>

    <form action="{{ route('admin.nav-footer.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <!-- SECTION 1: WHATSAPP KONSULTASI -->
        <div class="admin-card space-y-6 border border-[#048CD6]/30 bg-[#131313]">
            <h3 class="text-sm font-semibold text-white flex items-center gap-2 border-b border-white/10 pb-3">
                <span class="material-symbols-outlined text-emerald-400">chat</span>
                Integrasi WhatsApp &amp; Tombol Konsultasi
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs uppercase font-mono text-white/60 mb-2">Nomor WhatsApp *</label>
                    <input type="text" name="whatsapp_number" value="{{ old('whatsapp_number', $settings['whatsapp_number'] ?? '6281234567890') }}" class="form-input" placeholder="Contoh: 6281234567890">
                    <span class="text-[11px] text-white/40 mt-1 block">Format nomor internasional tanpa +, contoh: 6281234567890</span>
                </div>

                <div>
                    <label class="block text-xs uppercase font-mono text-white/60 mb-2">Pesan Otomatis WhatsApp</label>
                    <input type="text" name="whatsapp_message" value="{{ old('whatsapp_message', $settings['whatsapp_message'] ?? 'Halo NTFC, saya ingin berkonsultasi mengenai layanan pajak & keuangan.') }}" class="form-input" placeholder="Halo NTFC, saya ingin berkonsultasi...">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 pt-2">
                <div>
                    <label class="block text-xs uppercase font-mono text-white/60 mb-2">Teks Tombol CTA Navbar</label>
                    <input type="text" name="nav_cta_text" value="{{ old('nav_cta_text', $settings['nav_cta_text'] ?? 'Konsultasi Sekarang') }}" class="form-input">
                </div>
                <div>
                    <label class="block text-xs uppercase font-mono text-white/60 mb-2">Link Kustom CTA (Kosongkan jika pakai WhatsApp)</label>
                    <input type="text" name="nav_cta_link" value="{{ old('nav_cta_link', $settings['nav_cta_link'] ?? '') }}" class="form-input" placeholder="Otomatis WhatsApp jika dikosongkan">
                </div>
            </div>
        </div>

        <!-- SECTION 2: MEDIA SOSIAL -->
        <div class="admin-card space-y-6">
            <h3 class="text-sm font-semibold text-white flex items-center gap-2 border-b border-white/10 pb-3">
                <span class="material-symbols-outlined text-[#048CD6]">share</span>
                Media Sosial Perusahaan (Footer &amp; Kontak)
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label class="block text-xs uppercase font-mono text-white/60 mb-2 flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-sm text-pink-400">brand_family</span> TikTok URL
                    </label>
                    <input type="url" name="social_tiktok" value="{{ old('social_tiktok', $settings['social_tiktok'] ?? 'https://tiktok.com/@ntfc_consulting') }}" class="form-input text-xs" placeholder="https://tiktok.com/@...">
                </div>

                <div>
                    <label class="block text-xs uppercase font-mono text-white/60 mb-2 flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-sm text-purple-400">photo_camera</span> Instagram URL
                    </label>
                    <input type="url" name="social_instagram" value="{{ old('social_instagram', $settings['social_instagram'] ?? 'https://instagram.com/ntfc_consulting') }}" class="form-input text-xs" placeholder="https://instagram.com/...">
                </div>

                <div>
                    <label class="block text-xs uppercase font-mono text-white/60 mb-2 flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-sm text-blue-400">public</span> Facebook URL
                    </label>
                    <input type="url" name="social_facebook" value="{{ old('social_facebook', $settings['social_facebook'] ?? 'https://facebook.com/ntfc.consulting') }}" class="form-input text-xs" placeholder="https://facebook.com/...">
                </div>
            </div>
        </div>

        <!-- SECTION 3: LOGO & BRANDING -->
        <div class="admin-card space-y-6">
            <h3 class="text-sm font-semibold text-white flex items-center gap-2 border-b border-white/10 pb-3">
                <span class="material-symbols-outlined text-[#048CD6]">badge</span>
                Branding &amp; Logo Situs
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Logo Nav & Footer -->
                <div class="space-y-3 p-4 rounded-lg bg-[#1c1b1b] border border-white/5">
                    <label class="block text-xs uppercase font-mono text-[#048CD6] font-semibold">Logo Utama (Navbar &amp; Footer)</label>
                    <div class="w-full h-16 rounded bg-[#0e0e0e] border border-white/10 p-2 flex items-center justify-center">
                        <img src="{{ $settings['site_logo'] ?? asset('images/logo biru.png') }}" alt="Site Logo" class="max-h-12 w-auto object-contain">
                    </div>
                    <label class="block text-[11px] text-white/50">Upload Logo Baru (PNG/SVG/WEBP):</label>
                    <input type="file" name="site_logo_file" accept="image/*" class="text-xs text-white/70 file:mr-4 file:py-1.5 file:px-3 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-[#048CD6] file:text-white cursor-pointer">
                    
                    <div class="pt-2 border-t border-white/5">
                        <label class="block text-[11px] text-white/50 mb-1">Atau Gunakan URL Logo:</label>
                        <input type="text" name="site_logo" value="{{ old('site_logo', $settings['site_logo'] ?? '') }}" class="form-input text-xs" placeholder="{{ asset('images/logo biru.png') }}">
                    </div>
                </div>

                <!-- Favicon -->
                <div class="space-y-3 p-4 rounded-lg bg-[#1c1b1b] border border-white/5">
                    <label class="block text-xs uppercase font-mono text-[#048CD6] font-semibold">Favicon Icon Browser Tab</label>
                    <div class="w-full h-16 rounded bg-[#0e0e0e] border border-white/10 p-2 flex items-center justify-center gap-3">
                        <img src="{{ $settings['site_favicon'] ?? asset('images/icon.png') }}" alt="Favicon" class="w-8 h-8 object-contain">
                        <span class="text-xs text-white/60 font-mono">32 x 32 px</span>
                    </div>
                    <label class="block text-[11px] text-white/50">Upload Favicon Baru (PNG/ICO):</label>
                    <input type="file" name="site_favicon_file" accept="image/*" class="text-xs text-white/70 file:mr-4 file:py-1.5 file:px-3 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-[#048CD6] file:text-white cursor-pointer">
                    
                    <div class="pt-2 border-t border-white/5">
                        <label class="block text-[11px] text-white/50 mb-1">Atau Gunakan URL Favicon:</label>
                        <input type="text" name="site_favicon" value="{{ old('site_favicon', $settings['site_favicon'] ?? '') }}" class="form-input text-xs" placeholder="{{ asset('images/icon.png') }}">
                    </div>
                </div>
            </div>
        </div>

        <!-- SECTION 4: FOOTER CMS -->
        <div class="admin-card space-y-6">
            <h3 class="text-sm font-semibold text-white flex items-center gap-2 border-b border-white/10 pb-3">
                <span class="material-symbols-outlined text-[#048CD6]">dock</span>
                Pengaturan Footer Website
            </h3>

            <div>
                <label class="block text-xs uppercase font-mono text-white/60 mb-2">Teks Hak Cipta (Copyright Text)</label>
                <textarea name="footer_copyright" rows="2" class="form-input">{{ old('footer_copyright', $settings['footer_copyright'] ?? '© ' . date('Y') . ' Nusantara Tax, Finance, and Consulting. Hak cipta dilindungi undang-undang.') }}</textarea>
            </div>

            <div>
                <label class="block text-xs uppercase font-mono text-white/60 mb-2">Subtext / Tagline Footer</label>
                <input type="text" name="footer_tagline" value="{{ old('footer_tagline', $settings['footer_tagline'] ?? 'Rekayasa keuangan presisi untuk korporasi modern.') }}" class="form-input">
            </div>

            <div class="border-t border-white/10 pt-4">
                <h4 class="text-xs uppercase font-mono text-[#048CD6] font-semibold mb-3">Link Navigasi Legal Footer</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-[11px] text-white/60 mb-1">Link Kebijakan Privasi</label>
                        <input type="text" name="footer_privacy_link" value="{{ old('footer_privacy_link', $settings['footer_privacy_link'] ?? '#') }}" class="form-input text-xs">
                    </div>
                    <div>
                        <label class="block text-[11px] text-white/60 mb-1">Link Syarat &amp; Ketentuan</label>
                        <input type="text" name="footer_terms_link" value="{{ old('footer_terms_link', $settings['footer_terms_link'] ?? '#') }}" class="form-input text-xs">
                    </div>
                    <div>
                        <label class="block text-[11px] text-white/60 mb-1">Link Karier</label>
                        <input type="text" name="footer_career_link" value="{{ old('footer_career_link', $settings['footer_career_link'] ?? '#') }}" class="form-input text-xs">
                    </div>
                    <div>
                        <label class="block text-[11px] text-white/60 mb-1">Link Kontak / Hubungi Kami</label>
                        <input type="text" name="footer_contact_link" value="{{ old('footer_contact_link', $settings['footer_contact_link'] ?? '#') }}" class="form-input text-xs">
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="btn-admin">
                <span class="material-symbols-outlined">save</span> Simpan Pengaturan
            </button>
        </div>
    </form>
</div>

@endsection
