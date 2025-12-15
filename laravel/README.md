<<<<<<< HEAD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======
# Manchester United Web App - Tugas Rekayasa Web 🔴⚽

![License](https://img.shields.io/badge/license-MIT-blue.svg)
![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=flat&logo=laravel&logoColor=white)
![React](https://img.shields.io/badge/react-%2320232a.svg?style=flat&logo=react&logoColor=%2361DAFB)

## 📝 Deskripsi Proyek

Repository ini berisi source code untuk aplikasi web bertema **Manchester United**. Aplikasi ini dibangun sebagai bagian dari tugas mata kuliah **Rekayasa Web**.

Aplikasi ini menggabungkan backend yang kuat menggunakan **Laravel** dan antarmuka frontend yang interaktif menggunakan **React** (seperti terlihat pada fitur Dashboard Post). Website ini memiliki fitur informasi profil, kontak, serta fitur CRUD (Create, Read, Update, Delete) untuk manajemen postingan blog.

## 👤 Profil Pengembang

* **Nama:** Akmal Muhammad Akbar
* **NIM:** G.211.23.0050
* **Mata Kuliah:** Rekayasa Web

## 📸 Tampilan Aplikasi (Screenshots)

Berikut adalah tampilan antarmuka dari aplikasi yang telah dibangun:

### 1. Halaman Home
![Halaman Home](sc/home.png)

### 2. Halaman About
![Halaman About](sc/about.png)

### 3. Halaman Contact
![Halaman Contact](sc/contact.png)

### 4. Halaman Blog
![Halaman Blog](sc/blog.png)

### 5. Dashboard Admin
![Dashboard Admin](sc/admin.png)

---

## 🚀 Fitur Utama

* **Authentication:** Sistem Login dan Logout.
* **CRUD System:** Kemampuan untuk Membuat, Membaca, Mengedit, dan Menghapus postingan blog.
* **Responsive Design:** Tampilan yang rapi di berbagai perangkat.
* **Modern Tech Stack:** Integrasi Laravel (Backend) dan React (Frontend/Vite).

## 🛠️ Instalasi & Cara Menjalankan

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di komputer lokal (Localhost):

### Prasyarat
* PHP >= 8.1
* Composer
* Node.js & NPM
* MySQL

### Langkah-langkah

1.  **Clone Repositori**
    ```bash
    git clone [https://github.com/username-kamu/nama-repo.git](https://github.com/username-kamu/nama-repo.git)
    cd nama-repo
    ```

2.  **Install Dependensi Backend (Laravel)**
    ```bash
    composer install
    ```

3.  **Install Dependensi Frontend (Node Modules)**
    ```bash
    npm install
    ```

4.  **Konfigurasi Environment**
    * Duplikat file `.env.example` menjadi `.env`.
    * Atur konfigurasi database di dalam file `.env`:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nama_database_kamu
    DB_USERNAME=root
    DB_PASSWORD=
    ```

5.  **Generate Key & Migrasi Database**
    ```bash
    php artisan key:generate
    php artisan migrate
    ```

6.  **Jalankan Aplikasi**
    Buka dua terminal berbeda untuk menjalankan server Laravel dan Vite (React):

    *Terminal 1 (Laravel):*
    ```bash
    php artisan serve
    ```

    *Terminal 2 (Vite):*
    ```bash
    npm run dev
    ```

7.  **Akses Aplikasi**
    Buka browser dan kunjungi `http://127.0.0.1:8000` atau `http://localhost:5173` sesuai konfigurasi port kamu.

## 📄 Lisensi

Proyek ini bersifat open-source di bawah lisensi [MIT](https://opensource.org/licenses/MIT).
>>>>>>> e7a25a723b25fc2de9d820c6a570a8cae44ca7dd
