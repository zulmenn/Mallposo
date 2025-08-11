@extends('layouts.master')

@section('content')
<div class="container">
    <h3>Tambah Informasi Publik</h3>

    <form action="{{ route('admin.informasi_publik.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Judul Dokumen <span class="text-danger">*</span></label>
            <input type="text" name="judul" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Kategori</label>
            <select name="kategori" class="form-control">
                <option value="">-- Pilih Kategori --</option>
                <option>DOKUMEN INVESTASI</option>
                <option>DOKUMEN INDEX KEPUASAN MASYARAKAT</option>
                <option>DOKUMEN LAPORAN KINERJA</option>
                <option>DOKUMEN PERENCANAAN</option>
                <option>DOKUMEN POTENSI INVESTASI</option>
                <option>DOKUMEN PRODUK HUKUM</option>
                <option>DOKUMEN SOP DAN SP</option>
                <option>DOKUMEN LAINNYA</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Tahun</label>
            <input type="number" name="tahun" class="form-control" placeholder="{{ date('Y') }}">
        </div>

        <div class="mb-3">
            <label>File Dokumen <span class="text-danger">*</span></label>
            <input type="file" name="file" class="form-control" required>
            <small class="text-muted">Format: PDF, DOC, DOCX, XLS, XLSX (Max: 2MB)</small>
        </div>

        <button class="btn btn-primary">Upload</button>
        <a href="{{ route('admin.informasi_publik.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
