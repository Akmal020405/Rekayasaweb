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
    
    .mu-card-detail {
        max-width:800px; 
        margin:20px auto; 
        background-color:var(--mu-white); 
        padding:30px; 
        border-radius:10px; 
        box-shadow:0 4px 15px rgba(218, 41, 28, 0.3);
        border: 2px solid var(--mu-red-primary);
    }
    .mu-title-detail {
        font-size:28px; 
        font-weight:900; 
        margin-bottom:15px;
        color: var(--mu-black);
    }
    .mu-content-text {
        margin-bottom:20px;
        line-height: 1.7;
        color: #333;
    }
    .mu-author-text {
        color:var(--mu-red-primary); 
        margin-bottom:15px;
        font-weight: 700;
        font-size: 0.9em;
        border-bottom: 2px dashed #eee;
        padding-bottom: 10px;
    }

    .mu-btn-back {
        padding:8px 15px; 
        background-color: var(--mu-black); 
        color:white; 
        border-radius:6px; 
        text-decoration:none; 
        display:inline-block; 
        margin-right:8px;
        font-weight: 600;
        transition: 0.2s;
    }
    .mu-btn-back:hover {
        background-color: #333;
    }

    .mu-btn-edit {
        padding:8px 15px; 
        background-color: var(--mu-gold-accent); 
        color:var(--mu-black); 
        border-radius:6px; 
        text-decoration:none; 
        display:inline-block; 
        margin-right:8px;
        font-weight: 600;
        transition: 0.2s;
    }
    .mu-btn-edit:hover {
        background-color: #f0c000;
    }

    .mu-btn-delete {
        padding:8px 15px; 
        background-color: var(--mu-red-primary); 
        color:white; 
        border:none; 
        border-radius:6px; 
        cursor:pointer;
        font-weight: 600;
        transition: 0.2s;
    }
    .mu-btn-delete:hover {
        background-color: #a51d15;
    }
</style>

<div class="mu-card-detail">
    <h1 class="mu-title-detail">{{ $post->title }}</h1>
    <p class="mu-content-text">{{ $post->content }}</p>

    <p class="mu-author-text">
        Ditulis oleh: {{ $post->user->name ?? 'Tidak diketahui' }}
    </p>

    <a href="{{ route('posts.index') }}" class="mu-btn-back">
        Kembali ke Daftar Post
    </a>

    @auth
        @if(Auth::id() == $post->user_id || Auth::user()->is_admin)
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
    @endauth
</div>
@endsection