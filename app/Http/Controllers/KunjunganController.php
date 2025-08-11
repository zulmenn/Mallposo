<?php

namespace App\Http\Controllers;

use App\Models\Kunjungan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\KunjunganExport;
use App\Models\InstansiModel;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

class KunjunganController extends Controller
{
    public function create()
    {
        $instansis = InstansiModel::all();
        return view('kunjungan.form', compact('instansis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_instansi'     => 'required|exists:tb_instansi,id',
            'nama_lengkap'    => 'required|string|max:100',
            'jenis_kelamin'   => 'required|in:Laki-laki,Perempuan',
            'no_hp'           => 'required|string|max:20',
            'maksud_tujuan'   => 'required|string|max:255',
            'alamat'          => 'required|string|max:255',
        ]);

        Kunjungan::create($request->all());

        return redirect()->back()->with('success', 'Data kunjungan berhasil dikirim.');
    }

    public function index()
    {
        $data = Kunjungan::with('instansi')->latest()->get();
        return view('admin.kunjungan.index', compact('data'));
    }

    public function show($id)
    {
        $kunjungan = Kunjungan::findOrFail($id);
        return view('admin.kunjungan.show', compact('kunjungan'));
    }

    public function edit($id)
    {
        $kunjungan = Kunjungan::findOrFail($id);
        $instansis = InstansiModel::all();
        return view('admin.kunjungan.edit', compact('kunjungan', 'instansis'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_instansi'     => 'required|exists:tb_instansi,id',
            'nama_lengkap'    => 'required|string|max:100',
            'jenis_kelamin'   => 'required|in:Laki-laki,Perempuan',
            'no_hp'           => 'required|string|max:20',
            'maksud_tujuan'   => 'required|string|max:255',
            'alamat'          => 'required|string|max:255',
        ]);

        $kunjungan = Kunjungan::findOrFail($id);
        $kunjungan->update([
            'id_instansi'   => $request->id_instansi,
            'nama_lengkap'  => $request->nama_lengkap,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_hp'         => $request->no_hp,
            'maksud_tujuan' => $request->maksud_tujuan,
            'alamat'        => $request->alamat,
        ]);

        return redirect()->route('admin.kunjungan.index')
            ->with('success', 'Data kunjungan berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $kunjungan = Kunjungan::findOrFail($id);
        $kunjungan->delete();

        return redirect()->route('admin.kunjungan.index')->with('success', 'Data kunjungan berhasil dihapus.');
    }

    public function dashboard()
    {
        $jumlahPengunjung = Kunjungan::count();
        $kunjunganHariIni = Kunjungan::whereDate('created_at', Carbon::today())->count();
        $jumlahInstansi   = Kunjungan::distinct('id_instansi')->count('id_instansi');

        $dataPerBulan = Kunjungan::selectRaw('MONTH(created_at) as bulan, COUNT(*) as jumlah')
            ->whereYear('created_at', date('Y'))
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->get();

        $bulan = [];
        $jumlahPerBulan = [];

        for ($i = 1; $i <= 12; $i++) {
            $bulan[] = Carbon::create()->month($i)->translatedFormat('F');
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

    public function export()
    {
        $data = Kunjungan::with('instansi')->latest()->get();
        $pdf = Pdf::loadView('admin.kunjungan.export-pdf', compact('data'));
        return $pdf->download('data_kunjungan.pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new KunjunganExport, 'data_kunjungan.xlsx');
    }
}
