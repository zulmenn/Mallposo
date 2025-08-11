@extends('layouts.master')

@section('content')
<div class="container-fluid mt-3">
    <h4>Daftar Pengaduan</h4>

    <div class="mb-3">
        <a href="{{ route('admin.pengaduan.export.pdf') }}" class="btn btn-danger btn-sm">
            <i class="fas fa-file-pdf"></i> Export PDF
        </a>
        <a href="{{ route('admin.pengaduan.export.excel') }}" class="btn btn-success btn-sm">
            <i class="fas fa-file-excel"></i> Export Excel
        </a>
    </div>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>KTP</th>
                <th>TTL</th>
                <th>Alamat</th>
                <th>Pekerjaan</th>
                <th>No HP</th>
                <th>Jenis</th>
                <th>Isi Pengaduan</th>
                <th>Instansi</th>
                <th>Waktu</th>
            </tr>
        </thead>
        <tbody>
            @forelse($pengaduans as $pengaduan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $pengaduan->nama }}</td>
                <td>{{ $pengaduan->ktp }}</td>
                <td>{{ $pengaduan->ttl }}</td>
                <td>{{ $pengaduan->alamat }}</td>
                <td>{{ $pengaduan->pekerjaan }}</td>
                <td>{{ $pengaduan->no_hp }}</td>
                <td>{{ ucfirst($pengaduan->jenis) }}</td>
                <td>{{ $pengaduan->isi_pengaduan }}</td>
                <td>{{ $pengaduan->instansi->nama_instansi ?? '-' }}</td>
                <td>{{ $pengaduan->created_at->format('d-m-Y H:i') }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="11" class="text-center">Belum ada pengaduan</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection