@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Mahasiswa</h1>
    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('mahasiswa.form')
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
