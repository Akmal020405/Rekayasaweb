@extends('layouts.app')

@section('content')

<style>
    /* Manchester United Theme Colors */
    :root {
        --mu-red-primary: #DA291C;
        --mu-black: #000000;
        --mu-white: #FFFFFF;
        --mu-gold-accent: #FFD700;
    }

    .glass-card {
        background: rgba(0, 0, 0, 0.75); /* Darker glass effect */
        backdrop-filter: blur(12px);
        border-radius: 16px;
        padding: 25px;
        box-shadow: 0 8px 25px rgba(218, 41, 28, 0.2);
        transition: 0.3s ease-in-out;
        border: 2px solid var(--mu-red-primary); /* Red border */
        color: var(--mu-white);
    }

    .glass-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 14px 35px rgba(218, 41, 28, 0.4);
    }

    .dashboard-title {
        font-size: 2.2em;
        font-weight: 900;
        margin-bottom: 10px;
        letter-spacing: 1px;
        color: white !important; /* <<< PERUBAHAN DI SINI */
    }

    .dashboard-sub {
        font-size: 1.1em;
        color: #ddd;
        margin-bottom: 30px;
    }

    .grid-cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 25px;
    }

    .card-icon {
        font-size: 48px;
        margin-bottom: 10px;
    }

    /* Icon colors matching the theme */
    .icon-mu-red { color: var(--mu-red-primary); }
    .icon-mu-gold { color: var(--mu-gold-accent); }
    .icon-mu-white { color: var(--mu-white); }
    .icon-mu-black { color: var(--mu-black); }

</style>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div style="padding: 30px; border-radius: 20px; background: linear-gradient(135deg, #1f0000, #330000); border: 4px solid var(--mu-red-primary); color: white;">

            <h1 class="dashboard-title">Selamat Datang, {{ Auth::user()->name }}!</h1>
            <p class="dashboard-sub">Glory-glory Man United</p>

            <div class="grid-cards">

                {{-- Kartu 1: Status Account --}}
                <div class="glass-card">
                    <div class="card-icon icon-mu-white">👤</div>
                    <h2 style="font-size: 1.4em; font-weight: 700; margin-bottom: 10px;">Status Akun</h2>

                    <p style="font-size: 1em; margin-bottom: 10px;">
                        Role Anda:
                        @if (Auth::user()->is_admin)
                            <span style="font-weight: 700; color: var(--mu-gold-accent); text-shadow: 0 0 5px rgba(255,255,0,0.5);">ADMIN — Akses Penuh</span>
                        @else
                            <span style="font-weight: 700; color: var(--mu-red-primary);">USER BIASA</span>
                        @endif
                    </p>

                    <p style="font-size: 0.9em; color: #aaa;">
                        Admin dapat mengelola seluruh post & data. User hanya post miliknya.
                    </p>
                </div>

                {{-- Kartu 2: Post --}}
                <div class="glass-card">
                    <div class="card-icon icon-mu-red">📝</div>
                    <h2 style="font-size: 1.4em; font-weight: 700; margin-bottom: 10px;">Manajemen Post</h2>

                    <p style="margin-bottom: 12px; color: var(--mu-white);">
                        Buat, edit, dan kelola post blog Anda.
                    </p>

                    <a href="{{ route('posts.index') }}" 
                       style="font-weight: bold; text-decoration: none; color: var(--mu-gold-accent); text-shadow: 0 0 3px rgba(255,215,0,0.3);">
                        Kelola Post →
                    </a>
                </div>

                {{-- Kartu 3: Mahasiswa --}}
                <div class="glass-card">
                    <div class="card-icon icon-mu-gold">🎓</div>
                    <h2 style="font-size: 1.4em; font-weight: 700; margin-bottom: 10px;">Data Mahasiswa</h2>

                    <p style="margin-bottom: 12px; color: var(--mu-white);">
                        Kelola data mahasiswa secara penuh (CRUD).
                    </p>

                    <a href="{{ route('mahasiswas.index') }}" 
                       style="font-weight: bold; text-decoration: none; color: var(--mu-gold-accent); text-shadow: 0 0 3px rgba(255,215,0,0.3);">
                        Kelola Mahasiswa →
                    </a>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection
