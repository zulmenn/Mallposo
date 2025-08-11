@extends('layouts.master')

@section('content')
<div class="container-fluid mt-3">
    <h4>Edit Pengaduan</h4>

    <form action="{{ route('pengaduan.update', $pengaduan->id) }}" method="POST">
        @csrf
        @method('PUT')

        @include('admin.pengaduan.form', ['pengaduan' => $pengaduan])

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('pengaduan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
