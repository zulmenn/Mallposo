@extends('layouts.master')

@section('content')
<div class="container">
    <h3>Kelola Informasi Publik</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('admin.informasi_publik.create') }}" class="btn btn-primary mb-3">Tambah Dokumen</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Tahun</th>
                <th>File</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($informasi as $d)
            <tr>
                <td>{{ $d->judul }}</td>
                <td>{{ $d->kategori }}</td>
                <td>{{ $d->tahun }}</td>
                <td><a href="{{ route('informasi.download', $d->id) }}" class="btn btn-success btn-sm">Download</a></td>
                <td>
                    <a href="{{ route('admin.informasi_publik.edit', $d->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.informasi_publik.destroy', $d->id) }}" method="POST" style="display:inline-block">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus dokumen ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
