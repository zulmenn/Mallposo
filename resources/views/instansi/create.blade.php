@extends('layouts.master')

@section('content')
<div class="container-fluid mt-3">
    <h4>Tambah Data Instansi</h4>

    <form action="{{ route('admin.instansi.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_instansi">Nama Instansi</label>
            <input type="text" class="form-control" id="nama_instansi" name="nama_instansi" placeholder="Masukkan nama instansi">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.instansi.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
