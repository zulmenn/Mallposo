@extends('layouts.master')

@section('content')
<div class="container">
    <h2>Tambah Penghargaan</h2>
    <form action="{{ route('admin.penghargaan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.penghargaan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
