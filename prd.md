# Product Requirements Document (PRD)
## Website Nusantara Tax, Finance, and Consulting (NTFC)

---

## 1. Overview

| Item | Detail |
|---|---|
| Nama Proyek | Website NTFC (Nusantara Tax, Finance, and Consulting) |
| Jenis Produk | Website profil perusahaan (company profile) untuk firma konsultan pajak, keuangan, dan bisnis |
| Gaya Desain | Swiss Design (International Typographic Style) — Black Theme dengan aksen biru `#048CD6` |
| Target Rilis | TBD |
| Dokumen Disiapkan Oleh | TBD |
| Versi Dokumen | 1.0 |

### 1.1 Latar Belakang
NTFC membutuhkan website resmi yang mencerminkan kredibilitas, presisi, dan profesionalisme sebagai firma konsultan pajak, keuangan, dan bisnis. Website ini akan menjadi kanal utama untuk memperkenalkan layanan, membangun kepercayaan calon klien, menampilkan portofolio kerja, serta menjadi media edukasi melalui blog.

### 1.2 Tujuan Produk
- Membangun citra profesional dan modern melalui pendekatan desain Swiss Design.
- Menyampaikan informasi layanan pajak, keuangan, dan konsultasi secara jelas dan terstruktur.
- Menjadi media akuisisi klien baru melalui call-to-action konsultasi yang jelas.
- Menampilkan portofolio/kredibilitas melalui studi kasus dan daftar klien.
- Membangun otoritas (authority) di bidang pajak dan keuangan melalui konten blog.

---

## 2. Target Pengguna

| Persona | Deskripsi | Kebutuhan Utama |
|---|---|---|
| Pemilik UMKM/Bisnis | Membutuhkan jasa konsultasi pajak & keuangan | Informasi layanan yang jelas, kontak mudah |
| Manajer Keuangan Perusahaan | Mencari partner konsultan pajak korporat | Kredibilitas, portofolio, studi kasus |
| Calon Klien Korporat | Membandingkan beberapa firma konsultan | Profil tim, nilai perusahaan, kepercayaan |
| Pembaca Umum/Awam Pajak | Mencari informasi edukatif seputar pajak & keuangan | Artikel blog yang informatif |

---

## 3. Prinsip & Arahan Desain (Design Direction)

### 3.1 Gaya Visual
- **Swiss Design / International Typographic Style**: grid system tegas, clarity, precision, objectivity.
- **Tema warna**: Black theme (dominan hitam/dark) dengan aksen biru `#048CD6`.
- **Tipografi**: sans-serif besar dan hierarkis (contoh: Helvetica, Inter, Neue Haas Grotesk).
- **Layout**: asimetris namun tetap terstruktur, grid-based, whitespace luas.
- **Elemen pendukung**: garis/divider tipis sebagai pemisah antar section, ikon garis tipis (line icons), hover effect minimalis.

### 3.2 Palet Warna
| Warna | Kode | Penggunaan |
|---|---|---|
| Hitam (Base) | `#0A0A0A` – `#111111` | Background utama |
| Putih/Off-white | `#F5F5F5` – `#FFFFFF` | Teks utama di atas background gelap |
| Biru Aksen | `#048CD6` | CTA, highlight, link, elemen interaktif |
| Abu-abu | `#333333` – `#666666` | Divider, teks sekunder, border |

### 3.3 Tipografi
- Font utama: sans-serif grotesque (Inter / Helvetica Neue / Neue Haas Grotesk).
- Skala tipografi hierarkis: heading besar (hero statement), subheading, body text konsisten menggunakan grid modular.

---

## 4. Struktur Situs (Sitemap)

```
Beranda
├── Tentang Kami
├── Layanan
├── Portofolio
└── Blog
    └── Detail Artikel
```

---

## 5. Fitur & Halaman

### 5.1 Beranda
**Tujuan**: Memberikan kesan pertama yang kuat dan mengarahkan pengunjung ke layanan/konsultasi.

| Fitur | Deskripsi |
|---|---|
| Hero Statement | Headline besar (tipografi Swiss, bold) yang menjelaskan value proposition NTFC |
| Ringkasan Layanan | Grid modular menampilkan kategori layanan unggulan (pajak, keuangan, konsultasi bisnis) |
| Call-to-Action (CTA) | Tombol/section ajakan konsultasi (mis. "Jadwalkan Konsultasi") |
| Statistik/Kredibilitas | Angka pencapaian (jumlah klien, tahun pengalaman, dsb) — opsional |
| Preview Portofolio/Blog | Cuplikan studi kasus atau artikel terbaru |

### 5.2 Tentang Kami
**Tujuan**: Membangun kepercayaan melalui visi, misi, nilai, dan tim.

| Fitur | Deskripsi |
|---|---|
| Visi & Misi | Pernyataan visi-misi perusahaan dengan tipografi besar |
| Nilai Perusahaan | Daftar nilai/prinsip kerja dalam grid modular |
| Profil Tim | Grid foto tim yang konsisten (foto, nama, jabatan) |
| Sejarah/Milestone | Opsional: timeline singkat perjalanan perusahaan |

### 5.3 Layanan
**Tujuan**: Menjabarkan seluruh layanan secara jelas dan mudah dipindai (scannable).

| Fitur | Deskripsi |
|---|---|
| Kategori Layanan | Pajak, Keuangan, Konsultasi Bisnis (dan sub-kategori jika ada) |
| Format Grid/List Modular | Setiap layanan ditampilkan dengan ikon garis tipis, judul, dan deskripsi singkat |
| Detail Layanan | Opsional: halaman/section detail per layanan dengan penjelasan lebih dalam |
| CTA per Layanan | Tombol konsultasi/hubungi kami di tiap kategori layanan |

### 5.4 Portofolio
**Tujuan**: Menampilkan bukti kredibilitas melalui studi kasus dan klien.

| Fitur | Deskripsi |
|---|---|
| Grid Galeri | Studi kasus/klien ditampilkan dalam grid galeri minimalis |
| Hover Effect | Efek hover minimalis (overlay info singkat) saat kursor diarahkan ke item |
| Filter Kategori | Opsional: filter berdasarkan jenis layanan/industri klien |
| Detail Studi Kasus | Opsional: halaman detail per studi kasus (tantangan, solusi, hasil) |

### 5.5 Blog
**Tujuan**: Media edukasi dan membangun otoritas di bidang pajak & keuangan.

| Fitur | Deskripsi |
|---|---|
| Daftar Artikel | Layout kolom klasik Swiss Design, menampilkan thumbnail, judul, kategori, tanggal publikasi |
| Kategori/Tag | Filter artikel berdasarkan kategori (pajak, keuangan, bisnis, dsb) |
| Halaman Detail Artikel | Tampilan artikel lengkap dengan tipografi yang nyaman dibaca (readability-focused) |
| Search (opsional) | Pencarian artikel |
| Related Articles | Rekomendasi artikel terkait di akhir halaman detail |

---

## 6. Kebutuhan Non-Fungsional

| Aspek | Kebutuhan |
|---|---|
| Responsivitas | Fully responsive (desktop, tablet, mobile) dengan grid Swiss yang tetap terjaga di semua breakpoint |
| Performa | Waktu muat halaman cepat, optimasi gambar dan aset |
| Aksesibilitas | Kontras warna memadai (teks putih di atas hitam, aksen biru untuk elemen interaktif), navigasi keyboard-friendly |
| SEO | Struktur heading semantik, meta title/description per halaman, URL bersih terutama untuk halaman blog |
| Konsistensi Desain | Seluruh halaman mengikuti grid system, tipografi, dan palet warna yang sama secara konsisten |

---

## 7. Struktur Navigasi

- **Header/Navbar**: Logo NTFC, menu (Beranda, Tentang Kami, Layanan, Portofolio, Blog), CTA button ("Konsultasi Sekarang")
- **Footer**: Informasi kontak, tautan sosial media, tautan cepat ke halaman utama, copyright

---

## 8. Metrik Keberhasilan (Success Metrics)

| Metrik | Target Indikatif |
|---|---|
| Jumlah pengunjung unik per bulan | TBD |
| Conversion rate CTA konsultasi | TBD |
| Rata-rata waktu di halaman blog | TBD |
| Bounce rate | TBD |

---

## 9. Batasan & Asumsi (Out of Scope / Assumptions)

- Dokumen ini berfokus pada kebutuhan tampilan (front-end) dan struktur konten; kebutuhan backend/CMS dapat dijabarkan pada dokumen teknis terpisah.
- Konten teks (copywriting) final akan disiapkan terpisah dan disesuaikan dengan struktur halaman di atas.
- Integrasi sistem pembayaran atau portal klien tidak termasuk dalam scope awal, kecuali ditentukan lain.

---

## 10. Lampiran: Ringkasan Prompt Desain

> Desain website untuk Nusantara Tax, Finance, and Consulting (NTFC), sebuah firma konsultan pajak dan keuangan profesional, dengan gaya Swiss Design (International Typographic Style) bertema black dengan aksen warna biru #048CD6, mengutamakan grid system yang tegas, tipografi sans-serif besar dan hierarkis, whitespace luas, elemen garis/divider tipis sebagai pemisah section, serta layout asimetris namun tetap terstruktur dan minimalis. Terdiri dari lima halaman utama: Beranda, Tentang Kami, Layanan, Portofolio, dan Blog — dengan seluruh elemen visual konsisten pada prinsip clarity, precision, dan objectivity khas Swiss Design.
