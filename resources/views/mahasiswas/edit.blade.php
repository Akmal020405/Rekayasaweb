@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md mt-8">
    <h1 class="text-2xl font-bold mb-6 text-gray-800">
        ✏ Edit Data Mahasiswa
    </h1>

    {{-- Menampilkan error validasi jika ada --}}
    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('mahasiswas.update', $mahasiswa->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="nama" class="block font-semibold text-gray-700 mb-1">Nama</label>
            <input type="text" id="nama" name="nama"
                value="{{ old('nama', $mahasiswa->nama) }}" required
                class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <div>
            <label for="nim" class="block font-semibold text-gray-700 mb-1">NIM</label>
            <input type="text" id="nim" name="nim"
                value="{{ old('nim', $mahasiswa->nim) }}" required
                class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <div>
            <label for="fakultas" class="block font-semibold text-gray-700 mb-1">Fakultas</label>
            <input type="text" id="fakultas" name="fakultas"
                value="{{ old('fakultas', $mahasiswa->fakultas) }}" required
                class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <div class="flex justify-between mt-6">
            <a href="{{ route('mahasiswas.index') }}"
                class="px-4 py-2 border rounded-md text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition">
                Batal
            </a>

            <button type="submit"
                    class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-md shadow hover:bg-blue-700 transition">
                Perbarui Data
            </button>
        </div>
    </form>
</div>
@endsection
