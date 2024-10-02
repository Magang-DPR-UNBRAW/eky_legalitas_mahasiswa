<!-- resources/views/mahasiswa/show.blade.php -->
@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')
    <h2>Detail Mahasiswa</h2>

    <ul>
        <li><strong>NIM:</strong> {{ $mahasiswa->nim }}</li>
        <li><strong>Nama:</strong> {{ $mahasiswa->nama }}</li>
        <li><strong>Jurusan:</strong> {{ $mahasiswa->jurusan }}</li>
        <li><strong>Gender:</strong> {{ $mahasiswa->gender }}</li>
        <li><strong>Alamat:</strong> {{ $mahasiswa->alamat }}</li>
    </ul>

    <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary">Kembali</a>
@endsection
