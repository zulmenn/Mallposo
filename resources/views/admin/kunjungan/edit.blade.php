@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <h3>Edit Data Kunjungan</h3>

    <form action="{{ route('admin.kunjungan.update', $kunjungan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form-control" value="{{ $kunjungan->nama_lengkap }}">
        </div>

        <div class="mb-3">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control">
                <option value="Laki-laki" {{ $kunjungan->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ $kunjungan->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label>No HP</label>
            <input type="text" name="no_hp" class="form-control" value="{{ $kunjungan->no_hp }}">
        </div>

        <div class="mb-3">
            <label>Tujuan Instansi</label>
            <input type="text" name="tujuan_instansi" class="form-control" value="{{ $kunjungan->tujuan_instansi }}">
        </div>

        <div class="mb-3">
            <label>Maksud & Tujuan</label>
            <textarea name="maksud_tujuan" class="form-control">{{ $kunjungan->maksud_tujuan }}</textarea>
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control">{{ $kunjungan->alamat }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.kunjungan') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
