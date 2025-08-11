<?php

namespace App\Exports;

use App\Models\Kunjungan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KunjunganExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Kunjungan::with('instansi')
            ->get()
            ->map(function ($item) {
                return [
                    'nama_lengkap'   => $item->nama_lengkap,
                    'jenis_kelamin'  => $item->jenis_kelamin,
                    'no_hp'          => $item->no_hp,
                    'instansi'       => $item->instansi->nama_instansi ?? '-',
                    'maksud_tujuan'  => $item->maksud_tujuan,
                    'alamat'         => $item->alamat,
                    'tanggal'        => $item->created_at->format('d-m-Y H:i'),
                ];
            });
    }

    public function headings(): array
    {
        return [
            'Nama Lengkap',
            'Jenis Kelamin',
            'No HP',
            'Instansi Tujuan',
            'Maksud Tujuan',
            'Alamat',
            'Tanggal Kunjungan'
        ];
    }
}
