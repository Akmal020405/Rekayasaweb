@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">
        👤 Detail Mahasiswa
    </h1>

    <ul class="space-y-2 text-gray-700">
        <li><strong>Nama:</strong> {{ $mahasiswa->nama }}</li>
        <li><strong>NIM:</strong> {{ $mahasiswa->nim }}</li>
        <li><strong>Fakultas:</strong> {{ $mahasiswa->fakultas }}</li>
        <li><strong>Dibuat:</strong> {{ $mahasiswa->created_at->format('d M Y, H:i') }}</li>
        <li><strong>Diubah:</strong> {{ $mahasiswa->updated_at->format('d M Y, H:i') }}</li>
    </ul>

    <div class="flex gap-3 mt-6">

        {{-- 🔲 Tombol Edit warna putih --}}
        <a href="{{ route('mahasiswas.edit', $mahasiswa) }}"
            class="px-4 py-2 bg-white border border-gray-400 text-gray-800 rounded-md hover:bg-gray-100">
            Edit
        </a>

        {{-- Tombol kembali tetap normal --}}
        <a href="{{ route('mahasiswas.index') }}"
            class="px-4 py-2 border rounded-md text-gray-600 hover:bg-gray-100">
            Kembali
        </a>
    </div>
</div>
@endsection
