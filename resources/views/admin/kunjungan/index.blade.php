@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <h3 class="mb-4">Data Kunjungan Tamu</h3>

    {{-- Tombol Export PDF & Excel --}}
    <div class="mb-3">
        <a href="{{ route('admin.kunjungan.export.pdf') }}" class="btn btn-danger">Export PDF</a>
        <a href="{{ route('admin.kunjungan.export.excel') }}" class="btn btn-success">Export Excel</a>
    </div>

    {{-- Notifikasi sukses --}}
    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Tabel Data Kunjungan --}}
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>No HP</th>
                    <th>Tujuan Instansi</th>
                    <th>Maksud & Tujuan</th>
                    <th>Alamat</th>
                    <th>Aksi</th> {{-- Kolom untuk aksi edit & hapus --}}
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $i => $k)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $k->nama_lengkap }}</td>
                    <td>{{ $k->jenis_kelamin }}</td>
                    <td>{{ $k->no_hp }}</td>
                    <td>{{ $k->instansi->nama_instansi }}</td>
                    <td>{{ $k->maksud_tujuan }}</td>
                    <td>{{ $k->alamat }}</td>
                    <td>
                        {{-- Tombol Edit --}}
                        <a href="{{ route('admin.kunjungan.edit', $k->id) }}" class="btn btn-sm btn-warning">Edit</a>

                        {{-- Tombol Hapus --}}
                        <form action="{{ route('admin.kunjungan.delete', $k->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="9" class="text-center">Belum ada data kunjungan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection