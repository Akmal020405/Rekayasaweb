@extends('layouts.app')

@section('content')

{{-- MU Theme Styles (Defined here to ensure consistency and modularity) --}}
<style>
    :root {
        --mu-red-primary: #DA291C;
        --mu-black: #000000;
        --mu-white: #FFFFFF;
        --mu-dark-grey: #111111;
        --mu-gold-accent: #FFD700;
        --mu-dark-bg: #1a0000;
    }

    .mu-input:focus {
        border-color: var(--mu-red-primary) !important;
        box-shadow: 0 0 8px rgba(218, 41, 28, 0.5);
    }

    .btn-mu-cancel {
        padding:10px 18px; 
        background:linear-gradient(135deg, #555, #333);
        color:white; 
        border-radius:8px; 
        text-decoration:none; 
        margin-right:8px;
        font-size:14px;
        font-weight:600;
        transition:0.3s;
        display:inline-block;
        box-shadow: 0 4px 0 #111;
        text-transform: uppercase;
    }

    .btn-mu-cancel:hover {
        opacity:0.85;
        transform: translateY(-2px);
        box-shadow: 0 6px 0 #111;
    }

    .btn-mu-update {
        padding:10px 22px; 
        background:linear-gradient(135deg, var(--mu-red-primary), #FF4D4D);
        color:white; 
        border:none; 
        border-radius:8px; 
        font-size:14px; 
        font-weight:700;
        cursor:pointer;
        transition:0.3s;
        box-shadow: 0 4px 0 #8B0000;
        text-transform: uppercase;
    }

    .btn-mu-update:hover {
        opacity:0.9;
        transform: translateY(-2px);
        box-shadow: 0 6px 0 #8B0000;
    }
</style>

<div style="
    max-width:850px; 
    margin:30px auto; 
    background:var(--mu-dark-grey);
    padding:30px; 
    border-radius:14px; 
    box-shadow:0 6px 20px rgba(218, 41, 28, 0.4);
    border-left:8px solid var(--mu-red-primary);
">

    <h1 style="
        font-size:28px; 
        font-weight:800; 
        margin-bottom:25px; 
        text-align:center; 
        color:var(--mu-white);
        letter-spacing:0.5px;
    ">
        ✨ Edit Post 
        <span style="color:var(--mu-red-primary); text-shadow: 0 0 5px rgba(218, 41, 28, 0.5);">{{ $post->title }}</span>
    </h1>

    @if ($errors->any())
        <div style="
            background:linear-gradient(135deg, #3d0000, #4c0000); 
            color:var(--mu-white); 
            padding:14px 16px; 
            border-radius:10px; 
            margin-bottom:18px; 
            border-left:6px solid var(--mu-gold-accent); /* Gold warning */
            font-size:15px;
        ">
            <strong>Terjadi kesalahan:</strong>
            <ul style="margin:10px 0 0 18px; padding:0;">
                @foreach ($errors->all() as $error)
                    <li style="margin-bottom:4px;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- INPUT JUDUL -->
        <div style="margin-bottom:22px;">
            <label for="title" style="
                display:block; 
                font-weight:700; 
                margin-bottom:8px; 
                color:var(--mu-red-primary);
            ">Judul Post</label>

            <input type="text" id="title" name="title" 
                value="{{ old('title', $post->title) }}" required
                class="mu-input"
                style="
                    width:100%; 
                    padding:12px; 
                    border:2px solid #333; 
                    border-radius:10px; 
                    font-size:16px;
                    background-color:#222;
                    color:var(--mu-white);
                    transition:0.3s;
                "
                onfocus="this.style.borderColor=getComputedStyle(document.documentElement).getPropertyValue('--mu-red-primary').trim()">
        </div>

        <!-- INPUT KONTEN -->
        <div style="margin-bottom:22px;">
            <label for="content" style="
                display:block; 
                font-weight:700; 
                margin-bottom:8px; 
                color:var(--mu-red-primary);
            ">Isi Konten</label>

            <textarea id="content" name="content" rows="8" required
                class="mu-input"
                style="
                    width:100%; 
                    padding:12px; 
                    border:2px solid #333; 
                    border-radius:10px; 
                    font-size:16px; 
                    background-color:#222;
                    color:var(--mu-white);
                    transition:0.3s;
                "
                onfocus="this.style.borderColor=getComputedStyle(document.documentElement).getPropertyValue('--mu-red-primary').trim()">{{ old('content', $post->content) }}</textarea>
        </div>

        <div style="text-align:right; margin-top:25px;">

            <!-- BUTTON BATAL -->
            <a href="{{ route('posts.index') }}"
                class="btn-mu-cancel"
                onmouseover="this.className='btn-mu-cancel'"
                onmouseout="this.className='btn-mu-cancel'">
                Batal
            </a>

            <!-- BUTTON UPDATE -->
            <button type="submit"
                class="btn-mu-update"
                onmouseover="this.className='btn-mu-update'"
                onmouseout="this.className='btn-mu-update'">
                Perbarui Post
            </button>
        </div>
    </form>
</div>
@endsection