@extends('layouts.master')

@section('content')
<div class="container">
    <h2>Daftar Penghargaan</h2>
    <a href="{{ route('admin.penghargaan.create') }}" class="btn btn-primary mb-3">+ Tambah Penghargaan</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Aksi</th>
        </tr>
        @foreach($penghargaan as $i => $p)
        <tr>
            <td>{{ $i+1 }}</td>
            <td><img src="{{ asset('storage/'.$p->gambar) }}" width="100"></td>
            <td>{{ $p->judul }}</td>
            <td>
                <a href="{{ route('admin.penghargaan.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('admin.penghargaan.destroy', $p->id) }}" method="POST" style="display:inline-block">
                    @csrf @method('DELETE')
                    <button type="submit" onclick="return confirm('Hapus data ini?')" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
