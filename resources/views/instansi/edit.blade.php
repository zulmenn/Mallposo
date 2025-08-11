@extends('layouts.master')

@section('content')
<div class="container-fluid mt-3">
    <h4>Edit Data Instansi</h4>

    <form action="{{ route('admin.instansi.update', $instansi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_instansi">Email address</label>
            <input type="text" class="form-control" id="nama_instansi" name="nama_instansi" placeholder="name@example.com" value="{{ $instansi->nama_instansi }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('admin.instansi.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection