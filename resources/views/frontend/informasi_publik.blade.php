@extends('layouts.frontend')

@section('content')
<div class="container my-5">
    <h2 class="mb-4">Informasi Publik</h2>

    @php
        $kategoriBaru = [
            'DOKUMEN INVESTASI',
            'DOKUMEN INDEX KEPUASAN MASYARAKAT',
            'DOKUMEN LAPORAN KINERJA',
            'DOKUMEN PERENCANAAN',
            'DOKUMEN POTENSI INVESTASI',
            'DOKUMEN PRODUK HUKUM',
            'DOKUMEN SOP DAN SP',
            'DOKUMEN LAINNYA'
        ];
    @endphp

    @foreach($kategoriBaru as $kategori)
        <div class="mb-4">
            <h5 class="text-primary">{{ $kategori }}</h5>
            <ul>
                @foreach($informasi->where('kategori', $kategori) as $item)
                    <li>
                        <a href="{{ asset('storage/' . $item->file_path) }}" target="_blank">
                            📄 {{ $item->judul }}
                        </a>
                    </li>
                @endforeach

                @if($informasi->where('kategori', $kategori)->isEmpty())
                    <li><i>Belum ada dokumen</i></li>
                @endif
            </ul>
        </div>
    @endforeach
</div>
@endsection
