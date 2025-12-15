@extends('layouts.app')

@section('content')

<style>
    /* Manchester United Theme Colors */
    :root {
        --mu-red-primary: #DA291C;
        --mu-black: #000000;
        --mu-white: #FFFFFF;
        --mu-dark-grey: #111111;
        --mu-gold-accent: #FFD700;
    }

    .card-modern {
        background: var(--mu-dark-grey);
        backdrop-filter: blur(12px);
        padding: 30px;
        max-width: 900px;
        margin: 25px auto;
        border-radius: 18px;
        box-shadow: 0 10px 30px rgba(218, 41, 28, 0.3);
        border: 2px solid var(--mu-red-primary);
        color: var(--mu-white); /* White text for readability */
    }

    .title-modern {
        font-size: 28px;
        font-weight: 800;
        margin-bottom: 20px;
        background: linear-gradient(90deg, var(--mu-red-primary), var(--mu-gold-accent));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .input-modern {
        width: 100%;
        padding: 12px;
        border-radius: 10px;
        border: 1px solid #444; /* Darker border */
        background-color: #222;
        color: var(--mu-white);
        transition: all 0.3s ease;
    }

    .input-modern:focus {
        border-color: var(--mu-red-primary);
        box-shadow: 0 0 8px rgba(218, 41, 28, 0.5);
        outline: none;
    }

    .btn-modern {
        padding: 10px 18px;
        border-radius: 10px;
        border: none;
        cursor: pointer;
        font-weight: bold;
        transition: 0.3s;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .btn-cancel {
        background-color: #555;
        color: white;
        margin-right: 8px;
        box-shadow: 0 4px 0 #333;
    }

    .btn-cancel:hover {
        background-color: #777;
        transform: translateY(-2px);
        box-shadow: 0 6px 0 #333;
    }

    .btn-save {
        /* Primary MU Red Button */
        background: linear-gradient(90deg, var(--mu-red-primary), #FF4D4D);
        color: var(--mu-white);
        box-shadow: 0 4px 0 #8B0000;
    }

    .btn-save:hover {
        opacity: 0.9;
        transform: translateY(-2px);
        box-shadow: 0 6px 0 #8B0000;
    }

    .alert-modern {
        background-color: #3d0000; /* Darker alert background */
        color: var(--mu-red-primary);
        padding: 12px;
        border-radius: 10px;
        margin-bottom: 15px;
        border-left: 5px solid var(--mu-red-primary);
    }
</style>

<div class="card-modern">

    <h1 class="title-modern">📝 Buat Post Baru</h1>

    @if ($errors->any())
        <div class="alert-modern">
            <ul style="margin:0; padding-left:20px;">
                @foreach ($errors->all() as $error)
                    <li style="margin-bottom:3px;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <div style="margin-bottom:15px;">
            <label for="title" style="display:block; font-weight:600; margin-bottom:6px; color: var(--mu-red-primary);">Judul Post</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required
                    class="input-modern">
        </div>

        <div style="margin-bottom:15px;">
            <label for="content" style="display:block; font-weight:600; margin-bottom:6px; color: var(--mu-red-primary);">Isi Konten</label>
            <textarea id="content" name="content" rows="8" required class="input-modern">{{ old('content') }}</textarea>
        </div>

        <a href="{{ route('posts.index') }}" class="btn-modern btn-cancel">Batal</a>

        <button type="submit" class="btn-modern btn-save">Simpan Post</button>

    </form>
</div>

@endsection