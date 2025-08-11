@extends('layouts.master')

@section('content')
<div class="container-fluid mt-3">
    <h4>Daftar Berita</h4>
    <a href="{{ route('admin.berita.create') }}" class="btn btn-primary mb-3">Tambah Berita</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($beritas as $berita)
                <tr>
                    <td>{{ $berita->judul }}</td>
                    <td>
                        @if($berita->gambar)
                            <img src="{{ asset('gambar_berita/' . $berita->gambar) }}" width="100">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.berita.edit', $berita->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.berita.delete', $berita->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus berita ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
