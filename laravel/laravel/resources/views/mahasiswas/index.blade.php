@extends('layouts.app')

@section('content')
<div style="max-width: 900px; margin: auto; color: white;">

    <h1 style="margin-bottom: 20px; color:white;">Daftar Mahasiswa</h1>

    {{-- Flash message --}}
    @if (session('status'))
        <div style="
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 6px;
            background-color: #064e3b;
            color: #d1fae5;
            border: 1px solid #10b981;">
            {{ session('status') }}
        </div>
    @endif

    <a href="{{ route('mahasiswas.create') }}"
       style="
        display: inline-block;
        margin-bottom: 15px;
        padding: 8px 14px;
        background-color: #4f46e5;
        color: white;
        border-radius: 6px;
        text-decoration: none;">
        ➕ Tambah Mahasiswa Baru
    </a>

    <table style="width: 100%; border-collapse: collapse; color:white;">
        <thead>
            <tr style="background-color: #1f2937; color:white;">
                <th style="border: 1px solid #374151; padding: 10px;">No</th>
                <th style="border: 1px solid #374151; padding: 10px;">Nama</th>
                <th style="border: 1px solid #374151; padding: 10px;">NIM</th>
                <th style="border: 1px solid #374151; padding: 10px;">Fakultas</th>
                <th style="border: 1px solid #374151; padding: 10px;">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($mahasiswas as $mahasiswa)
            <tr style="background-color:#111827; color:white;">
                <td style="border: 1px solid #374151; padding: 8px; text-align: center;">
                    {{ $loop->iteration }}
                </td>
                <td style="border: 1px solid #374151; padding: 8px;">
                    {{ $mahasiswa->nama }}
                </td>
                <td style="border: 1px solid #374151; padding: 8px;">
                    {{ $mahasiswa->nim }}
                </td>
                <td style="border: 1px solid #374151; padding: 8px;">
                    {{ $mahasiswa->fakultas }}
                </td>

                {{-- Aksi --}}
                <td style="border: 1px solid #374151; padding: 8px;">
                    <div style="display: flex; justify-content: center; gap: 6px;">

                        <a href="{{ route('mahasiswas.show', $mahasiswa) }}"
                           style="
                            padding: 4px 10px;
                            background-color: #2563eb;
                            color: white;
                            border-radius: 4px;
                            text-decoration: none;">
                            Detail
                        </a>

                        <a href="{{ route('mahasiswas.edit', $mahasiswa) }}"
                        style="
                            padding: 4px 10px;
                            background-color: #059669;
                            color: white;
                            border-radius: 4px;
                            text-decoration: none;">
                            Edit
                        </a>

                        <form action="{{ route('mahasiswas.destroy', $mahasiswa) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                onclick="return confirm('Yakin hapus {{ $mahasiswa->nama }}?')"
                                style="
                                    padding: 4px 10px;
                                    background-color: #dc2626;
                                    color: white;
                                    border: none;
                                    border-radius: 4px;
                                    cursor: pointer;">
                                Hapus
                            </button>
                        </form>

                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
