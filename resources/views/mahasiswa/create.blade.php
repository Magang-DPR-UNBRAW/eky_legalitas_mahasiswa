@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Mahasiswa</h1>
    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        @include('mahasiswa.form')
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
