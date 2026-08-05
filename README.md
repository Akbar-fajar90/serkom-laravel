# Proyek Buku Tamu Website Sekolah

![Laravel Logo](https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg)

## Deskripsi Proyek

Proyek ini adalah implementasi sistem buku tamu untuk website sekolah, dibangun sebagai bagian dari pembelajaran dan persiapan untuk uji sertifikasi kompetensi junior web coding. Fokus utama proyek ini adalah:

*   **Form Komentar Tamu:** Pengunjung dapat mengisi form untuk meninggalkan komentar atau pesan.
*   **Tampilan Komentar:** Komentar yang masuk akan ditampilkan di halaman website.
*   **Admin CRUD:** Administrator memiliki kontrol penuh (Create, Read, Update, Delete) atas komentar-komentar yang masuk melalui panel admin.

Proyek ini menunjukkan pemahaman dasar dalam pengembangan web menggunakan framework Laravel, termasuk pengelolaan database, routing, tampilan, dan otentikasi sederhana untuk admin.

## Fitur Utama

*   **Pengisian Buku Tamu:** Pengunjung dapat mengisi nama, email, dan pesan.
*   **Daftar Komentar:** Menampilkan semua komentar yang telah disubmit.
*   **Login Admin:** Halaman login khusus untuk administrator.
*   **Dashboard Admin:** Area admin untuk mengelola komentar.
*   **CRUD Komentar:** Admin dapat melihat, mengedit, dan menghapus komentar.

## Teknologi Digunakan

*   **Framework:** Laravel
*   **Database:** MySQL (atau SQLite untuk pengembangan lokal)
*   **Frontend:** HTML, CSS, JavaScript (dengan Vite dan Tailwind CSS)
*   **Admin Panel:** Filament (jika digunakan)

## Instalasi dan Penggunaan

1.  **Clone Repositori:**
    ```bash
    git clone [URL_REPOSITORI_ANDA]
    cd buku-tamu
    ```
2.  **Instal Dependensi Composer:**
    ```bash
    composer install
    ```
3.  **Konfigurasi Environment:**
    Salin file `.env.example` menjadi `.env` dan sesuaikan konfigurasi database.
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
    Pastikan `DB_DATABASE`, `DB_USERNAME`, dan `DB_PASSWORD` di `.env` sesuai dengan setup database Anda.
4.  **Migrasi Database:**
    ```bash
    php artisan migrate
    ```
5.  **Jalankan Server Pengembangan:**
    ```bash
    php artisan serve
    npm run dev
    ```
    Aplikasi akan tersedia di `http://localhost:8000` (atau port lain yang ditentukan).

## Kontribusi

Saran dan kontribusi sangat dihargai untuk meningkatkan proyek pembelajaran ini.

## Lisensi

Proyek ini dilisensikan di bawah Lisensi MIT.