<?php

namespace App\Http\Controllers;

use App\Models\Kunjungan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\KunjunganExport;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;


class KunjunganController extends Controller
{
    /**
     * Menampilkan form pengisian kunjungan oleh user (pengunjung).
     */
    public function create()
    {
        return view('kunjungan.form');
    }

    /**
     * Menyimpan data kunjungan dari form.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap'     => 'required|string|max:100',
            'jenis_kelamin'    => 'required|in:Laki-laki,Perempuan',
            'no_hp'            => 'required|string|max:20',
            'tujuan_instansi'  => 'required|string|max:100',
            'maksud_tujuan'    => 'required|string|max:255',
            'alamat'           => 'required|string|max:255',
        ]);

        Kunjungan::create($request->all());

        return redirect()->back()->with('success', 'Data kunjungan berhasil dikirim.');
    }

    /**
     * Menampilkan seluruh data kunjungan untuk admin.
     */
    public function index()
    {
        $data = Kunjungan::latest()->get();
        return view('admin.kunjungan.index', compact('data'));
    }

    /**
     * Menampilkan detail kunjungan (jika ingin diakses 1 data saja).
     */
    public function show($id)
    {
        $kunjungan = Kunjungan::findOrFail($id);
        return view('admin.kunjungan.show', compact('kunjungan'));
    }

    /**
     * Menampilkan form edit data kunjungan.
     */
    public function edit($id)
    {
        $kunjungan = Kunjungan::findOrFail($id);
        return view('admin.kunjungan.edit', compact('kunjungan'));
    }

    /**
     * Memperbarui data kunjungan.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lengkap'     => 'required|string|max:100',
            'jenis_kelamin'    => 'required|in:Laki-laki,Perempuan',
            'no_hp'            => 'required|string|max:20',
            'tujuan_instansi'  => 'required|string|max:100',
            'maksud_tujuan'    => 'required|string|max:255',
            'alamat'           => 'required|string|max:255',
        ]);

        $kunjungan = Kunjungan::findOrFail($id);
        $kunjungan->update($request->all());

        return redirect()->route('admin.kunjungan')->with('success', 'Data kunjungan berhasil diperbarui.');
    }

    /**
     * Menghapus data kunjungan.
     */
    public function destroy($id)
    {
        $kunjungan = Kunjungan::findOrFail($id);
        $kunjungan->delete();

        return redirect()->route('admin.kunjungan')->with('success', 'Data kunjungan berhasil dihapus.');
    }

    /**
     * Menampilkan halaman dashboard admin dengan statistik.
     */
    public function dashboard()
    {
        $jumlahPengunjung = Kunjungan::count();
        $kunjunganHariIni = Kunjungan::whereDate('created_at', Carbon::today())->count();
        $jumlahInstansi   = Kunjungan::distinct('tujuan_instansi')->count('tujuan_instansi');

        // Data grafik kunjungan per bulan di tahun berjalan
        $dataPerBulan = Kunjungan::selectRaw('MONTH(created_at) as bulan, COUNT(*) as jumlah')
            ->whereYear('created_at', date('Y'))
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->get();

        $bulan = [];
        $jumlahPerBulan = [];

        // Loop 12 bulan
        for ($i = 1; $i <= 12; $i++) {
            $bulan[] = Carbon::create()->month($i)->translatedFormat('F'); // Januari, Februari, ...
            $jumlahPerBulan[] = $dataPerBulan->firstWhere('bulan', $i)->jumlah ?? 0;
        }

        return view('admin.dashboard', compact(
            'jumlahPengunjung',
            'kunjunganHariIni',
            'jumlahInstansi',
            'bulan',
            'jumlahPerBulan'
        ));
    }

    /**
     * Export semua data kunjungan ke PDF.
     */
    public function export()
    {
        $data = Kunjungan::latest()->get();
        $pdf = Pdf::loadView('admin.kunjungan.export-pdf', compact('data'));
        return $pdf->download('data_kunjungan.pdf');
    }
    public function exportExcel()
    {
        return Excel::download(new KunjunganExport, 'data_kunjungan.xlsx');
    }
}
