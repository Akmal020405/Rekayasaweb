@extends('layouts.app')

@section('content')
<div style="
    width:100%;
    height:100vh;
    background:#000000;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    text-align:center;
">

    <!-- Gambar -->
    <img src="{{ asset('img/580b57fcd9996e24bc43c4e7.png') }}" 
         alt="Foto"
         style="
            width:260px;
            height:auto;
            border-radius:16px;
            box-shadow:0 0 20px rgba(255,0,0,0.5);
            margin-bottom:25px;
         ">

    <!-- Informasi -->
    <div style="color:#ff4d4d;">
        <h1 style="
            font-size:38px;
            margin-bottom:10px;
            text-shadow:0 0 12px rgba(255,0,0,0.6);
        ">
            Akmal Muhammad Akbar
        </h1>

        <p style="font-size:22px; color:#ff9999; margin:4px 0;">
            NIM: <strong style="color:#ff4d4d;">G.211.23.0050</strong>
        </p>

        <p style="font-size:22px; color:#ff9999; margin:4px 0;">
            Mata Kuliah: <strong style="color:#ff4d4d;">Rekayasa Web</strong>
        </p>
    </div>

</div>
@endsection
