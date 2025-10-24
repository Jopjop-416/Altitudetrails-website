# 🏔️ AltitudeTrails - Web Layanan Guide Hiking

[![Lisensi: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](https://opensource.org/licenses/MIT)
[![Tumpukan Teknologi: HTML/Tailwind/JS](https://img.shields.io/badge/Tech%20Stack-HTML%20|%20Tailwind%20|%20JS-000000.svg)](README.md)
[![API Geocoding: PositionStack](https://img.shields.io/badge/API-PositionStack-orange.svg)](https://positionstack.com/)
[![Peta Interaktif: Leaflet.js](https://img.shields.io/badge/Map%20Engine-Leaflet.js-green.svg)](https://leafletjs.com/)

## 📝 Deskripsi Proyek

**Altitude Trails** adalah *landing page* dan aplikasi web yang dirancang untuk mempromosikan layanan panduan dan petualangan pendakian gunung. Selain menyajikan informasi tentang perusahaan, testimonial, dan paket pendakian, fitur utama dari proyek ini adalah **Pencari Lokasi Interaktif** menggunakan Geocoding API dan peta interaktif.

Proyek ini dibuat menggunakan pendekatan dengan *styling* yang modern dan responsif.

## ✨ Fitur Utama

### 1. Pencari Lokasi Interaktif (Map Finder)

* **Geocoding Otomatis:** Menggunakan PositionStack API untuk mencari lokasi gunung, basecamp, atau titik pertemuan.
* **Peta Real-time:** Menampilkan lokasi yang dicari pada peta interaktif menggunakan **Leaflet.js**.
* **Detail Lokasi:** Menyajikan data Latitude, Longitude, Negara, Wilayah, dan Timezone dari hasil pencarian.
* **Tombol *Booking* Dinamis:** Tombol 'Booking Guide' muncul setelah lokasi ditemukan dan siap untuk integrasi *backend*.

### 2. Antarmuka Pengguna & Interaksi

* **Drag-Scroll:** Menerapkan *drag-to-scroll* pada bagian kategori hiking (`#cardScroll`) untuk navigasi horizontal yang intuitif, meniru pengalaman di perangkat seluler.
* **Menu Navigasi Responsif:** Menu hamburger untuk perangkat seluler dan menu *flyout* di bagian atas untuk informasi tambahan.
* **Desain Modern:** Menggunakan kerangka kerja **Tailwind CSS** untuk *styling* dan tipografi *Poppins* untuk tampilan yang bersih dan profesional.

## 🛠️ Tumpukan Teknologi

| Kategori | Teknologi | Deskripsi |
| :--- | :--- | :--- |
| **Frontend** | HTML5, CSS3, JavaScript | Struktur dasar dan logika klien. |
| **Styling** | [Tailwind CSS v4.1.14](https://tailwindcss.com/) | Kerangka kerja CSS untuk desain responsif dan utility-first. |
| **Map Engine** | [Leaflet.js v1.9.4](https://leafletjs.com/) | Library JavaScript open-source untuk peta interaktif. |
| **Geocoding** | PositionStack API | Layanan untuk mengkonversi nama lokasi menjadi koordinat Latitude dan Longitude. |

## 🚀 Instalasi dan Penggunaan

Proyek ini adalah *frontend-only* dan dapat dijalankan langsung di browser.

### Prasyarat

Untuk menjalankan fitur pencarian lokasi, Anda memerlukan Kunci API dari PositionStack.

1.  Dapatkan **Access Key** Anda dari PositionStack.
2.  Edit file `script.js` dan ganti placeholder API Key dengan milik Anda.

```javascript
  const apiKey = "KEY"; // GANTI DENGAN KUNCI ANDA
