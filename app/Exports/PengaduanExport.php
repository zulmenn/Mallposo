<?php

namespace App\Exports;

use App\Models\Pengaduan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PengaduanExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Pengaduan::with('instansi')->get()->map(function ($item) {
            return [
                'nama'           => $item->nama,
                'ktp'            => $item->ktp,
                'ttl'            => $item->ttl,
                'alamat'         => $item->alamat,
                'pekerjaan'      => $item->pekerjaan,
                'no_hp'          => $item->no_hp,
                'jenis'          => $item->jenis,
                'isi_pengaduan'  => $item->isi_pengaduan,
                'instansi'       => $item->instansi->nama_instansi ?? '-',
                'tanggal'        => $item->created_at->format('d-m-Y H:i'),
            ];
        });
    }

    public function headings(): array
    {
        return [
            'Nama',
            'KTP',
            'Tempat, Tanggal Lahir',
            'Alamat',
            'Pekerjaan',
            'No HP',
            'Jenis',
            'Isi Pengaduan',
            'Instansi Tujuan',
            'Tanggal Pengaduan'
        ];
    }
}
