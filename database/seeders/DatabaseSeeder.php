<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Setting;
use App\Models\TeamMember;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\BlogPost;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Admin User
        User::updateOrCreate(
            ['email' => 'admin@ntfc.com'],
            [
                'name' => 'Administrator NTFC',
                'password' => Hash::make('password'),
            ]
        );

        // 2. Settings (Beranda & Tentang Kami content)
        $settings = [
            // Beranda Hero
            'hero_title_1' => 'PRESISI',
            'hero_title_2' => 'DALAM PAJAK',
            'hero_title_3' => '& KEUANGAN.',
            'hero_subtext' => 'Kejernihan objektif dalam ekosistem keuangan yang kompleks. Kami menghadirkan keteraturan struktural dan konsultasi strategis untuk lingkungan berisiko tinggi.',
            'hero_cta_text' => 'Konsultasi Sekarang',
            
            // Beranda Stats
            'stat_1_val' => '15+',
            'stat_1_label' => 'Tahun Pengalaman',
            'stat_2_val' => '500+',
            'stat_2_label' => 'Klien Global',
            'stat_3_val' => '$2B+',
            'stat_3_label' => 'Aset Dikelola',
            'stat_4_val' => '24/7',
            'stat_4_label' => 'Dukungan Strategis',

            // Beranda Filosofi
            'philosophy_title' => 'Filosofi Presisi',
            'philosophy_body_1' => 'Di era kompleksitas finansial yang belum pernah ada sebelumnya, ambiguitas adalah risiko. Kami beroperasi pada prinsip fundamental: data terstruktur dan analisis rigor menghasilkan hasil optimal. Metodologi kami berakar pada prinsip Swiss Design—kejelasan, objektivitas, dan kesempurnaan fungsional—diterapkan langsung pada arsitektur pajak dan restrukturisasi keuangan.',
            'philosophy_body_2' => 'Kami tidak hanya memberi saran; kami merancang stabilitas keuangan. Dengan menghapus kebisingan yang tidak perlu, kami mengekspos realitas struktural inti bisnis Anda, memungkinkan optimasi matematis yang tegas atas kewajiban pajak dan strategi alokasi modal Anda.',

            // Tentang Kami
            'about_hero_title' => 'TENTANG KAMI',
            'about_hero_subtext' => 'Arsitektur keuangan presisi dan manajemen pajak risiko tinggi.',
            'about_intro_title' => 'Nusantara Tax, Finance, and Consulting',
            'about_intro_body' => 'Didirikan atas prinsip bahwa lanskap keuangan modern membutuhkan analisis kuantitatif rigor tanpa kompromi. Kami menggabungkan metodologi sistematis dengan pemahaman mendalam tentang peraturan hukum internasional.',
            'about_vision' => 'Menjadi standar keunggulan global dalam konsultasi perpajakan dan rekayasa keuangan korporasi.',
            'about_mission' => 'Memberikan kejernihan struktural, efisiensi pajak maksimal, dan mitigasi risiko komprehensif bagi setiap mitra bisnis.',
        ];

        foreach ($settings as $key => $value) {
            Setting::setByKey($key, $value, 'general');
        }

        // Nav & Footer Settings
        $navFooterSettings = [
            'whatsapp_number' => '6281234567890',
            'whatsapp_message' => 'Halo NTFC, saya ingin berkonsultasi mengenai layanan pajak & keuangan.',
            'social_tiktok' => 'https://tiktok.com/@ntfc_consulting',
            'social_instagram' => 'https://instagram.com/ntfc_consulting',
            'social_facebook' => 'https://facebook.com/ntfc.consulting',
            'nav_cta_text' => 'Konsultasi Sekarang',
            'footer_copyright' => '© ' . date('Y') . ' Nusantara Tax, Finance, and Consulting. Hak cipta dilindungi undang-undang.',
            'footer_tagline' => 'Rekayasa keuangan presisi untuk korporasi modern.',
        ];

        foreach ($navFooterSettings as $key => $value) {
            Setting::setByKey($key, $value, 'nav_footer');
        }

        // 3. Team Members
        $team = [
            [
                'name' => 'Adrian Sterling',
                'position' => 'MANAGING PARTNER',
                'bio' => 'Pakar dalam penataan pajak internasional dan strategi M&A lintas batas. Mantan direktur di kantor akuntan Big 4.',
                'image' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=800',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Dr. Elena Rostova',
                'position' => 'KEPALA ANALISIS KUANTITATIF',
                'bio' => 'Dr. Matematika Keuangan. Memimpin pengembangan model penilaian risiko mandiri.',
                'image' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=800',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Marcus Vance',
                'position' => 'DIREKTUR KEPATUHAN',
                'bio' => 'Mantan penyidik regulasi yang memastikan seluruh implementasi strategis sesuai dengan ketentuan hukum global.',
                'image' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&q=80&w=800',
                'order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($team as $member) {
            TeamMember::updateOrCreate(['name' => $member['name']], $member);
        }

        // 4. Services
        $services = [
            [
                'title' => 'Perpajakan Korporat',
                'slug' => 'perpajakan-korporat',
                'icon' => 'account_balance',
                'short_description' => 'Penataan struktur pajak korporasi untuk efisiensi maksimal dan kepatuhan penuh atas regulasi lokal maupun internasional.',
                'description' => 'Layanan penataan pajak menyeluruh mencakup evaluasi struktur transaksi, transfer pricing, dan kepatuhan perpajakan lintas batas.',
                'features' => ['Transfer Pricing Documentation', 'International Tax Structuring', 'Tax Audit Representation'],
                'order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Restrukturisasi Keuangan',
                'slug' => 'restrukturisasi-keuangan',
                'icon' => 'monitoring',
                'short_description' => 'Rekayasa ulang struktur utang, alokasi modal, dan ekuitas untuk mengoptimalkan kinerja neraca korporasi.',
                'description' => 'Optimasi neraca korporasi dengan analisis kuantitatif untuk meningkatkan efisiensi arus kas dan likuiditas.',
                'features' => ['Debt Refinancing & Advisory', 'Capital Structure Optimization', 'Liquidity Management'],
                'order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Konsultasi Manajemen & M&A',
                'slug' => 'konsultasi-manajemen-ma',
                'icon' => 'business_center',
                'short_description' => 'Pendampingan strategis dalam transaksi merger, akuisisi, dan evaluasi kelayakan investasi tinggi.',
                'description' => 'Uji kelayakan (due diligence) keuangan dan pajak secara mendalam untuk memastikan transaksi M&A yang aman dan menguntungkan.',
                'features' => ['Financial Due Diligence', 'Valuation & Modeling', 'Post-Merger Integration'],
                'order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Risiko & Kepatuhan',
                'slug' => 'risiko-kepatuhan',
                'icon' => 'security',
                'short_description' => 'Identifikasi, mitigasi, dan audit risiko sistematis untuk kepatuhan regulasi lingkungan berisiko tinggi.',
                'description' => 'Audit internal independen dan mitigasi risiko regulasi untuk memproteksi reputasi dan aset perusahaan.',
                'features' => ['Regulatory Audit', 'Enterprise Risk Framework', 'Anti-Money Laundering (AML) Compliance'],
                'order' => 4,
                'is_active' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(['slug' => $service['slug']], $service);
        }

        // 5. Portfolios
        $portfolios = [
            [
                'title' => 'Restrukturisasi Pajak Lintas Batas Holding Tech Multi-Nasional',
                'slug' => 'restrukturisasi-pajak-lintas-batas',
                'client' => 'Konglomerat Teknologi Asia Tenggara',
                'category' => 'PAJAK KORPORAT & M&A',
                'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=1200',
                'summary' => 'Restrukturisasi entitas induk di 4 yurisdiksi untuk mengoptimalkan pemotongan pajak deviden.',
                'challenge' => 'Sistem perpajakan multi-yurisdiksi yang kompleks dengan potensi tarif pajak ganda hingga 35%.',
                'solution' => 'Mengimplementasikan struktur holding terpusat berizin khusus dengan dokumen transfer pricing yang kokoh.',
                'result' => 'Mengurangi beban pajak efektif tahunan sebesar 24% dan mencegah risiko sanksi transfer pricing.',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Refinansiasi Utang $450M & Rekayasa Neraca Energi Sektor Korporat',
                'slug' => 'refinansiasi-utang-sektor-energi',
                'client' => 'PT Energi Nusantara Tbk',
                'category' => 'RESTRUKTURISASI KEUANGAN',
                'image' => 'https://images.unsplash.com/photo-1554469384-e58fac16e23a?auto=format&fit=crop&q=80&w=1200',
                'summary' => 'Penataan ulang profil jatuh tempo utang obligasi dan pembiayaan sindikasi bank.',
                'challenge' => 'Tekanan likuiditas akibat suku bunga tinggi dan rasio leverage yang mendekati batas covenant.',
                'solution' => 'Negosiasi ulang perjanjian kredit dan konversi sebagian liabilitas menjadi fasilitas berbasis kinerja.',
                'result' => 'Memperpanjang tenor utang sebesar 7 tahun dan menurunkan beban bunga tahunan hingga $18M.',
                'order' => 2,
                'is_active' => true,
            ],
        ];

        foreach ($portfolios as $portfolio) {
            Portfolio::updateOrCreate(['slug' => $portfolio['slug']], $portfolio);
        }

        // 6. Blog Posts
        $posts = [
            [
                'title' => 'Navigating the 2025 International Tax Framework Overhaul',
                'slug' => 'navigating-2025-international-tax-framework-overhaul',
                'category' => 'TAX STRATEGY',
                'author' => 'Adrian Sterling',
                'image' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=1200',
                'excerpt' => 'A comprehensive analysis of impending structural changes to global corporate taxation and strategic imperatives for multinational enterprises.',
                'content' => 'The global tax landscape is undergoing a fundamental transformation. With the implementation of OECD Pillar Two principles and national regulatory shifts, corporate tax directors must re-examine transfer pricing policies, holding company structures, and cross-border IP licensing agreements...',
                'published_at' => '2024-10-15 09:00:00',
                'is_published' => true,
                'is_featured' => true,
            ],
            [
                'title' => 'Valuation Multiples in High-Tech Cross-Border Transactions',
                'slug' => 'valuation-multiples-high-tech-cross-border-transactions',
                'category' => 'MERGERS & ACQUISITIONS',
                'author' => 'Dr. Elena Rostova',
                'image' => 'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&q=80&w=800',
                'excerpt' => 'Examining the divergence between traditional valuation models and current market realities in cross-border tech acquisition deals.',
                'content' => 'Valuation methodologies for high-tech entities have evolved rapidly. Discounted cash flow (DCF) models are increasingly paired with stochastic risk adjustments to evaluate IP monetization portfolios across multiple tax jurisdictions...',
                'published_at' => '2024-09-28 10:30:00',
                'is_published' => true,
                'is_featured' => false,
            ],
            [
                'title' => 'Optimizing Capital Structure in Volatile Interest Environments',
                'slug' => 'optimizing-capital-structure-volatile-interest-environments',
                'category' => 'CORPORATE FINANCE',
                'author' => 'Marcus Vance',
                'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=800',
                'excerpt' => 'Strategic approaches to debt restructuring and equity financing when macroeconomic indicators signal persistent rate volatility.',
                'content' => 'Managing corporate balance sheets in uncertain rate environments requires continuous scenario modeling. We explore interest rate swaps, hybrid mezzanine debt instruments, and dynamic debt-to-equity rebalancing strategies...',
                'published_at' => '2024-09-15 14:15:00',
                'is_published' => true,
                'is_featured' => false,
            ],
            [
                'title' => 'ESG Reporting Mandates: The Transition from Voluntary to Mandatory',
                'slug' => 'esg-reporting-mandates-transition-voluntary-mandatory',
                'category' => 'REGULATORY COMPLIANCE',
                'author' => 'Marcus Vance',
                'image' => 'https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format&fit=crop&q=80&w=800',
                'excerpt' => 'A technical review of the new compliance frameworks requiring quantitative substantiation of environmental and governance metrics.',
                'content' => 'Regulatory authorities worldwide are moving from voluntary sustainability guidelines to mandatory audit-ready ESG reporting standards. Organizations must integrate ESG data pipelines directly into financial auditing processes...',
                'published_at' => '2024-08-30 11:00:00',
                'is_published' => true,
                'is_featured' => false,
            ],
            [
                'title' => 'Transfer Pricing Implications for Intangible Assets',
                'slug' => 'transfer-pricing-implications-intangible-assets',
                'category' => 'TAX STRATEGY',
                'author' => 'Adrian Sterling',
                'image' => 'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&q=80&w=800',
                'excerpt' => 'Evaluating the OECD guidelines and their practical application for multinational corporations managing proprietary technology and patents.',
                'content' => 'Intangible assets comprise the majority of corporate valuation in modern technology-driven enterprises. Demarcating DEMPE (Development, Enhancement, Maintenance, Protection, Exploitation) functions is essential to withstand rigorous tax authority audits...',
                'published_at' => '2024-08-12 08:45:00',
                'is_published' => true,
                'is_featured' => false,
            ],
        ];

        foreach ($posts as $post) {
            BlogPost::updateOrCreate(['slug' => $post['slug']], $post);
        }
    }
}
