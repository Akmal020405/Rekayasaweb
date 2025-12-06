@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6 text-gray-800">
        ➕ Tambah Mahasiswa Baru
    </h1>

    <form action="{{ route('mahasiswas.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="nama" class="block font-semibold text-gray-700 mb-1">
                Nama
            </label>
            <input type="text" id="nama" name="nama" required
                class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
        </div>

        <div>
            <label for="nim" class="block font-semibold text-gray-700 mb-1">
                NIM
            </label>
            <input type="text" id="nim" name="nim" required
                class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
        </div>

        <div>
            <label for="fakultas" class="block font-semibold text-gray-700 mb-1">
                Fakultas
            </label>
            <input type="text" id="fakultas" name="fakultas" required
                class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
        </div>

        <div class="flex justify-between mt-6">
            <a href="{{ route('mahasiswas.index') }}"
                class="px-4 py-2 border rounded-md text-gray-600 hover:bg-gray-100">
                Batal
            </a>

            <button type="submit"
                class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                Simpan Data
            </button>
        </div>
    </form>
</div>
@endsection
