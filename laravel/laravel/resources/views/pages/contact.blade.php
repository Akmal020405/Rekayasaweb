@extends('layouts.app')

@section('content')
<div style="max-width:700px; margin:50px auto; padding:30px; 
    background:linear-gradient(135deg, #1a1a1a, #000000); 
    border-radius:14px; 
    box-shadow:0 10px 30px rgba(255,0,0,0.25); 
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    border:1px solid #b30000;">

    <h1 style="font-size:32px; color:#ff1a1a; margin-bottom:20px; text-shadow:0 0 8px rgba(255,0,0,0.6);">
        Hubungi Kami
    </h1>

    <p style="font-size:18px; color:#e5e7eb; margin-bottom:15px;">
        Jika ada pertanyaan terkait praktikum atau aplikasi ini, Anda bisa menghubungi saya melalui:
    </p>

    <ul style="list-style:none; padding-left:0; font-size:18px; color:#e5e7eb;">
        <li style="margin-bottom:12px;">
            📧 Email: 
            <a href="mailto:fahmihakim@example.com" 
               style="color:#ff4d4d; text-decoration:none; font-weight:bold;">
               akmal@gmail.com
            </a>
        </li>

        <li style="margin-bottom:12px;">
            📱 WhatsApp: 
            <a href="https://wa.me/628123456789" target="_blank" 
               style="color:#ff3333; text-decoration:none; font-weight:bold;">
               +62 812-3333333333
            </a>
        </li>

        <li style="margin-bottom:12px;">
            💬 Telegram: 
            <a href="https://t.me/fahmihakim" target="_blank" 
               style="color:#ff1a1a; text-decoration:none; font-weight:bold;">
               @akmalgantengsegenuk
            </a>
        </li>

    </ul>

    <p style="margin-top:25px; font-size:16px; color:#cccccc;">
        Saya akan membalas secepat mungkin. Terima kasih!
    </p>
</div>
@endsection
