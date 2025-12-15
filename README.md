## ⚽ Laravel 12: Aplikasi Akademik & Blog Mahasiswa (Man. United Theme)

[![Laravel 12](https://img.shields.io/badge/Laravel-12.x-red?style=for-the-badge&logo=laravel)](https://laravel.com/)
[![PHP Version](https://img.shields.io/badge/PHP-8.2+-blue?style=for-the-badge&logo=php)](https://www.php.net/)
[![Status](https://img.shields.io/badge/Status-Completed_Practicum-success?style=for-the-badge)](https://github.com/your-username)

Proyek ini adalah hasil implementasi dari serangkaian modul praktikum Pengembangan Web menggunakan **Laravel 12**. Aplikasi ini menampilkan fitur-fitur dasar Laravel MVC, CRUD data mahasiswa, sistem Blog terproteksi, dan implementasi API, dengan tema visual **Manchester United** (sesuai logo dan desain aplikasi).

---

### 💡 Fitur Utama & Tampilan Aplikasi

| Fitur | Deskripsi | Tampilan (File) |
| :--- | :--- | :--- |
| **Home Page** | Halaman *landing* sederhana yang menampilkan identitas mahasiswa. | ![Home Page](sc/home.png) |
| **Dashboard Admin** | Halaman utama bagi pengguna dengan peran Admin. Menyediakan *link* cepat ke Manajemen Post dan CRUD Mahasiswa. | ![Dashboard Admin](sc/dashboard.png) |
| **Data Mahasiswa** | Implementasi penuh **CRUD** (Create, Read, Update, Delete) untuk data akademik (`nama`, `nim`, `fakultas`). | ![Daftar Mahasiswa](sc/daftar mahasiswa.png) |
| **Sistem Blog** | Fitur Blog sederhana dengan aksi Lihat, Edit, dan Hapus. Akses Edit/Hapus dikontrol menggunakan **Laravel Policy (Authorization)**. | ![Daftar Post Blog](sc/blog.png) |
| **Profil & About** | Menampilkan profil mahasiswa dan daftar modul praktikum yang dipelajari (termasuk `Laravel CRUD`, `Laravel API CRUD`, `ReactJS`). | ![Halaman About](sc/about.png) |
| **Kontak** | Halaman informasi kontak (`Email`, `WhatsApp`, `Telegram`). | ![Halaman Contact](sc/contact.png) |

---

### ⚙️ Persiapan & Instalasi Proyek

#### 1. Prasyarat

* **PHP** (8.2+), **Composer**
* **Database** (MySQL/MariaDB)

#### 2. Langkah Instalasi

```bash
# 1. Clone Repository
git clone [URL_REPOSITORY_ANDA]
cd [NAMA_FOLDER_PROJECT]

# 2. Instal Dependensi PHP
composer install

# 3. Konfigurasi Environment
cp .env.example .env
php artisan key:generate
# --- Edit file .env dan atur koneksi DB Anda (DB_DATABASE, DB_USERNAME, DB_PASSWORD) ---

# 4. Jalankan Migration (Membuat tabel users, posts, mahasiswas)
php artisan migrate

# 5. Jalankan Server
php artisan serve
