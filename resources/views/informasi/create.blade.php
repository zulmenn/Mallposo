@extends('layouts.master')

@section('content')
<div class="container">
    <h3>Upload Dokumen Informasi Publik</h3>

    <form action="{{ route('admin.informasi_publik.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Judul Dokumen</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>File Dokumen</label>
            <input type="file" name="file" class="form-control" required>
        </div>
        <input type="hidden" name="kategori" class="form-control mb-3" placeholder="Kategori (opsional)" value="-">
        <input type="hidden" name="tahun" class="form-control mb-3" placeholder="Tahun (opsional)" value="-">
        <button class="btn btn-primary">Upload</button>
    </form>
</div>
@endsection
