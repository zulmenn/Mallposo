@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <h3 class="mb-4">Dashboard</h3>

    <!-- Statistik -->
    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-info mb-3 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Pengunjung</h5>
                    <p class="card-text display-4">{{ $jumlahPengunjung }}</p>
                    <p class="card-text"><small class="text-white-50">Total seluruh kunjungan</small></p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-success mb-3 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Kunjungan Hari Ini</h5>
                    <p class="card-text display-4">{{ $kunjunganHariIni ?? '-' }}</p>
                    <p class="card-text"><small class="text-white-50">Tanggal {{ now()->format('d M Y') }}</small></p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-warning mb-3 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Instansi</h5>
                    <p class="card-text display-4">{{ $jumlahInstansi ?? '-' }}</p>
                    <p class="card-text"><small class="text-white-50">Instansi yang tersedia</small></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Welcome Section -->
    <div class="d-flex justify-content-between align-items-start mt-4">
        <div>
            <h2 class="fw-bold" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Selamat datang di Website DPMPTSP Kab. Poso</h2>
            <p style="font-size: large;">Aplikasi ini digunakan untuk mencatat dan memantau kunjungan masyarakat ke instansi-instansi yang tergabung dalam Mal Pelayanan Publik Kabupaten Poso.</p>
        </div>
        <div class="ml-3">
            <img src="{{ asset('assets/dist/img/asset.svg') }}" alt="Ilustrasi" height="300" width="300">
        </div>
    </div>

    <!-- Grafik -->
    <div class="card mt-5 shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Grafik Kunjungan Bulanan</h5>
        </div>
        <div class="card-body">
            <canvas id="kunjunganChart" height="100"></canvas>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endpush
