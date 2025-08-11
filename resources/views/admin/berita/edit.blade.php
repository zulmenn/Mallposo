@extends('layouts.master')

@section('content')
<div class="container-fluid mt-3">
    <h4>Edit Berita</h4>

    <form action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.berita.form')
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
