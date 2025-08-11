@extends('layouts.master')

@section('content')
<div class="container">
    <h3>Edit Informasi Publik</h3>

    <form action="{{ route('admin.informasi_publik.update', $informasi->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Judul Dokumen</label>
            <input type="text" name="judul" class="form-control" value="{{ $informasi->judul }}" required>
        </div>
        <div class="mb-3">
            <label>Kategori</label>
            <input type="text" name="kategori" class="form-control" value="{{ $informasi->kategori }}">
        </div>
        <div class="mb-3">
            <label>Tahun</label>
            <input type="number" name="tahun" class="form-control" value="{{ $informasi->tahun }}">
        </div>
        <div class="mb-3">
            <label>File Dokumen (Biarkan kosong jika tidak diganti)</label>
            <input type="file" name="file" class="form-control">
            <small>File saat ini: {{ basename($informasi->file_path) }}</small>
        </div>
        <button class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('admin.informasi_publik.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
