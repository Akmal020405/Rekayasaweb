<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $title ?? 'Laravel App' }}</title>

@vite(['resources/css/app.css', 'resources/js/app.js'])

<style>
    /* Background utama merah hitam */
    body {
        background: linear-gradient(180deg, #000000, #3b0000);
        min-height: 100vh;
    }

    /* Wrapper konten */
    .page-content-wrapper {
        margin-top: 20px;
        min-height: 80vh;
    }

    /* Navbar styling merah hitam */
    .custom-navbar {
        background: #1a0000;
        border-bottom: 2px solid #7a0000;
        box-shadow: 0 4px 12px rgba(0,0,0,0.45);
    }

    /* Logo */
    .logo-mu {
        width: 42px;
        height: 42px;
        margin-right: 10px;
        border-radius: 6px;
    }

    /* Footer merah gelap */
    footer {
        background: #1a0000;
        color: #c9c9c9;
        border-top: 2px solid #7a0000;
    }
</style>

</head>

<body class="font-sans antialiased">

<div class="min-h-screen">

    {{-- NAVIGATION WRAPPER --}}
    <div class="custom-navbar w-full">
        <div class="max-w-7xl mx-auto px-4 py-3 flex items-center gap-3">
            <span class="text-white 300 font-bold text-lg tracking-wide">
                Laravel Manchester United
            </span>
        </div>

        {{-- Navigasi asli Breeze --}}
        @include('layouts.navigation')
    </div>

    <main class="page-content-wrapper">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @yield('content')
        </div>
    </main>

</div>

<footer class="text-center py-4 text-sm">
    <p>&copy; {{ date('Y') }} Praktikum Laravel</p>
</footer>

</body>
</html>
