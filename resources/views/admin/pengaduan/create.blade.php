@extends('layouts.master')

@section('content')
<div class="container-fluid mt-3">
    <h4>Tambah Pengaduan</h4>

    <form action="{{ route('pengaduan.store') }}" method="POST">
        @csrf

        @include('admin.pengaduan.form', ['pengaduan' => null])

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('pengaduan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
