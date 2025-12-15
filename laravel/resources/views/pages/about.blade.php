@extends('layouts.app')

@section('content')
<div style="
    max-width:1000px; 
    margin:50px auto; 
    padding:40px; 
    background:linear-gradient(135deg,#000000,#1a0000);
    border-radius:25px; 
    box-shadow:0 15px 45px rgba(255,0,0,0.25);
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    border:1px solid #660000;
">

    <!-- Header -->
    <h1 style="
        font-size:42px;
        text-align:center;
        margin-bottom:40px;
        color:#ff1a1a;
        text-shadow:0 0 12px rgba(255,0,0,0.7);
        letter-spacing:2px;
        font-weight:700;
    ">
        Tentang Saya
    </h1>

    <!-- Grid Container -->
    <div style="
        display:grid;
        grid-template-columns:1fr 1fr;
        gap:30px;
    ">

        <!-- Card Profil -->
        <div style="
            background:#1a1a1a;
            padding:30px;
            border-radius:18px;
            box-shadow:0 10px 30px rgba(255,0,0,0.15);
            border:1px solid #550000;
            color:#e5e5e5;
            line-height:1.8;
        ">
            <h2 style="color:#ff3333; margin-bottom:20px; text-shadow:0 0 6px rgba(255,0,0,0.6);">
                Profil Mahasiswa
            </h2>

            <p><strong>Nama:</strong> <span style="color:#ff4d4d;">Akmal Muhammad Akbar</span></p>
            <p><strong>NIM:</strong> <span style="color:#ff4d4d;">G.211.23.0050</span></p>
            <p><strong>Mata Kuliah:</strong> <span style="color:#ff3333;">Rekayasa Web</span></p>
        </div>

        <!-- Card Foto / Empty Space jika butuh -->
        <div style="
            background:#0d0d0d;
            padding:30px;
            border-radius:18px;
            border:1px solid #550000;
            box-shadow:0 10px 30px rgba(255,0,0,0.15);
            display:flex;
            justify-content:center;
            align-items:center;
            color:#ff9999;
            font-size:20px;
            text-align:center;
        ">
            <img src="{{ asset('img/580b57fcd9996e24bc43c4e7.png') }}" 
         alt="Foto"
         style="width:100%; max-width:280px; border-radius:14px; box-shadow:0 0 15px rgba(255,0,0,0.4);">
        </div>

    </div>

    <!-- Materi Section -->
    <h2 style="
        font-size:30px; 
        margin-top:50px; 
        margin-bottom:25px; 
        color:#ff1a1a;
        text-shadow:0 0 10px rgba(255,0,0,0.6);
        text-align:center;
    ">
        Materi Praktikum
    </h2>

    <!-- Cards List -->
    <div style="
        display:grid;
        grid-template-columns:1fr 1fr;
        gap:20px;
    ">

        <div style="
            padding:18px;
            background:#330000;
            border-radius:12px;
            border:1px solid #660000;
            color:#f5f5f5;
            box-shadow:0 6px 15px rgba(255,0,0,0.18);
            display:flex;
            align-items:center;
            font-size:18px;
        ">
            <span style="margin-right:12px; font-size:25px; color:#ff3333;">📥</span>
            Installasi Laravel
        </div>

        <div style="
            padding:18px;
            background:#400000;
            border-radius:12px;
            border:1px solid #730000;
            color:#f5f5f5;
            box-shadow:0 6px 15px rgba(255,0,0,0.18);
            display:flex;
            align-items:center;
            font-size:18px;
        ">
            <span style="margin-right:12px; font-size:25px; color:#ff1a1a;">📝</span>
            Laravel CRUD
        </div>

        <div style="
            padding:18px;
            background:#4d0000;
            border-radius:12px;
            border:1px solid #800000;
            color:#f5f5f5;
            box-shadow:0 6px 15px rgba(255,0,0,0.18);
            display:flex;
            align-items:center;
            font-size:18px;
        ">
            <span style="margin-right:12px; font-size:25px; color:#ff4d4d;">⚡</span>
            Laravel API CRUD
        </div>

        <div style="
            padding:18px;
            background:#590000;
            border-radius:12px;
            border:1px solid #990000;
            color:#f5f5f5;
            box-shadow:0 6px 15px rgba(255,0,0,0.18);
            display:flex;
            align-items:center;
            font-size:18px;
        ">
            <span style="margin-right:12px; font-size:25px; color:#ff6666;">💻</span>
            ReactJS
        </div>

    </div>

</div>
@endsection
