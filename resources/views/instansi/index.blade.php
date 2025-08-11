@extends('layouts.master')

@section('content')
<div class="container-fluid mt-3">
    <h4>Data Instansi</h4>
    <a href="{{ route('admin.instansi.create') }}" class="btn btn-primary mb-3">+ Tambah Instansi</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Instansi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($instansi as $i => $data)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $data->nama_instansi }}</td>
                    <td>
                        <a href="{{ route('admin.instansi.edit', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        
                        <form action="{{ route('admin.instansi.delete', $data->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus?')">
                                🗑️
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
