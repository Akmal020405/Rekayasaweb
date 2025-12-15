@extends('layouts.app')

@section('content')

{{-- MU Theme Styles --}}
<style>
    :root {
        --mu-red-primary: #DA291C;
        --mu-black: #000000;
        --mu-white: #FFFFFF;
        --mu-gold-accent: #FFD700;
    }

    .mu-container {
        max-width:800px; 
        margin:20px auto;
        background-color: #111111; /* Dark Container */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(218, 41, 28, 0.6);
    }

    .mu-title {
        font-size:28px; 
        font-weight:900; 
        margin-bottom:20px;
        color: var(--mu-red-primary);
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .mu-create-btn {
        padding:8px 16px; 
        background:linear-gradient(90deg, var(--mu-red-primary), #FF4D4D);
        color:var(--mu-white); 
        border-radius:6px; 
        text-decoration:none; 
        display:inline-block; 
        margin-bottom:15px;
        font-weight: 700;
        transition: 0.3s;
        box-shadow: 0 4px 0 #8B0000;
    }

    .mu-create-btn:hover {
        opacity: 0.9;
        transform: translateY(-2px);
        box-shadow: 0 6px 0 #8B0000;
    }

    .mu-post-card {
        background-color:var(--mu-white); /* White card for content readability */
        padding:15px; 
        border-radius:8px; 
        box-shadow:0 4px 12px rgba(0,0,0,0.2); 
        margin-bottom:15px;
        border-left: 5px solid var(--mu-red-primary);
        transition: 0.3s;
    }

    .mu-post-card:hover {
        transform: scale(1.01);
        box-shadow:0 6px 15px rgba(218, 41, 28, 0.4);
    }

    .mu-btn-view {
        padding:6px 12px; 
        background-color: var(--mu-red-primary); 
        color:white; 
        border-radius:4px; 
        text-decoration:none; 
        display:inline-block; 
        margin-right:4px;
        font-weight: 600;
    }
    .mu-btn-edit {
        padding:6px 12px; 
        background-color: var(--mu-gold-accent); /* Gold for edit */
        color:var(--mu-black); 
        border-radius:4px; 
        text-decoration:none; 
        display:inline-block; 
        margin-right:4px;
        font-weight: 600;
    }
    .mu-btn-delete {
        padding:6px 12px; 
        background-color: var(--mu-black); 
        color:var(--mu-red-primary); 
        border:1px solid var(--mu-red-primary);
        border-radius:4px; 
        cursor:pointer;
        font-weight: 600;
    }
</style>

<div class="mu-container">

    <h1 class="mu-title">Daftar Post Blog</h1>

    @auth
        <a href="{{ route('posts.create') }}" class="mu-create-btn">
             + Buat Post Baru
        </a>
    @endauth

    @foreach ($posts as $post)
        <div class="mu-post-card">
            <h3 style="font-size:20px; font-weight:bold; margin-bottom:5px; color:var(--mu-black);">{{ $post->title }}</h3>
            <p style="margin-bottom:5px; color:#444;">{{ Str::limit($post->content, 150) }}</p>
            <small style="color:var(--mu-red-primary); font-weight: 600;">Ditulis oleh: {{ $post->user->name ?? 'Tidak diketahui' }}</small>
            <div style="margin-top:10px;">
                <a href="{{ route('posts.show', $post) }}" class="mu-btn-view">
                    Lihat
                </a>

                @if (Auth::check() && (Auth::id() == $post->user_id || Auth::user()?->is_admin))
                    <a href="{{ route('posts.edit', $post) }}" class="mu-btn-edit">
                        Edit
                    </a>

                    <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="mu-btn-delete">
                            Hapus
                        </button>
                    </form>
                @endif
            </div>
        </div>
    @endforeach
</div>
@endsection