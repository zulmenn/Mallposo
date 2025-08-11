@extends('layouts.master')

@section('title', 'Kelola Infografis')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <!-- <h3 class="card-title">Kelola Infografis</h3> -->
            <a href="{{ route('admin.infografis.create') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Tambah Infografis
            </a>
        </div>

        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="15%">Gambar</th>
                        <th>Deskripsi</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($infografis as $item)
                    <tr>
                        <td>
                            @if($item->gambar)
                            <img src="{{ asset('gambar_infografis/'.$item->gambar) }}"
                                alt="Infografis" class="img-fluid" style="max-height:80px;">
                            @else
                            <span class="text-muted">Tidak ada gambar</span>
                            @endif
                        </td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>
                            <a href="{{ route('admin.infografis.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit">Edit</i>
                            </a>
                            <form action="{{ route('admin.infografis.destroy', $item->id) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash">Hapus</i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection