@extends('layouts.master')

@section('title', 'Tambah Infografis')

@section('content')
<div class="container">
    <h2>Tambah Infografis</h2>
    <form action="{{ route('admin.infografis.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control"></textarea>
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.infografis.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection