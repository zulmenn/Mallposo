<?php

namespace App\Exports;

use App\Models\Kunjungan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KunjunganExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Kunjungan::select('nama_lengkap', 'jenis_kelamin', 'no_hp', 'tujuan_instansi', 'maksud_tujuan', 'alamat', 'created_at')->get();
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

