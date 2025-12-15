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
Halaman utama dengan logo besar Manchester United.
![Halaman Home](home.png)

### 2. Halaman About (Tentang Saya)
Menampilkan informasi profil mahasiswa pengembang aplikasi.
![Halaman About](about.png)

### 3. Halaman Contact (Hubungi Kami)
Informasi kontak yang dapat dihubungi (Email, WhatsApp, Telegram).
![Halaman Contact](contact.png)

### 4. Halaman Blog (Public View)
Daftar postingan yang dapat dilihat oleh pengunjung.
![Halaman Blog](blog.png)

### 5. Halaman Dashboard Admin (CRUD)
Fitur manajemen postingan (Edit & Hapus) yang dibangun dengan React.
![Dashboard Admin](admin.png)

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
