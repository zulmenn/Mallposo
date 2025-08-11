@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <h3>Edit Data Kunjungan</h3>

    {{-- Tampilkan error validasi --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Perhatian!</strong> Ada kesalahan input.<br><br>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.kunjungan.update', $kunjungan->id) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- Pilih Instansi --}}
        <div class="mb-3">
            <label>Tujuan Instansi</label>
            <select name="id_instansi" class="form-control" required>
                <option value="">-- Pilih Instansi --</option>
                @foreach($instansis as $instansi)
                    <option value="{{ $instansi->id }}"
                        {{ $kunjungan->id_instansi == $instansi->id ? 'selected' : '' }}>
                        {{ $instansi->nama_instansi }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Nama Lengkap --}}
        <div class="mb-3">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form-control"
                value="{{ old('nama_lengkap', $kunjungan->nama_lengkap) }}" required>
        </div>

        {{-- Jenis Kelamin --}}
        <div class="mb-3">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" required>
                <option value="Laki-laki" {{ $kunjungan->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ $kunjungan->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        {{-- No HP --}}
        <div class="mb-3">
            <label>No HP</label>
            <input type="text" name="no_hp" class="form-control"
                value="{{ old('no_hp', $kunjungan->no_hp) }}" required>
        </div>

        {{-- Maksud & Tujuan --}}
        <div class="mb-3">
            <label>Maksud & Tujuan</label>
            <textarea name="maksud_tujuan" class="form-control" required>{{ old('maksud_tujuan', $kunjungan->maksud_tujuan) }}</textarea>
        </div>

        {{-- Alamat --}}
        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required>{{ old('alamat', $kunjungan->alamat) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.kunjungan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
