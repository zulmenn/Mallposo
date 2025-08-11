@extends('layouts.master')

@section('content')
<div class="container">
    <h2>Edit Penghargaan</h2>
    <form action="{{ route('admin.penghargaan.update', $penghargaan->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" value="{{ $penghargaan->judul }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control">
            <small>Biarkan kosong jika tidak ingin mengganti</small>
            <br>
            <img src="{{ asset('storage/'.$penghargaan->gambar) }}" width="150">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('admin.penghargaan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
