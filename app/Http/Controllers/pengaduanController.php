<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\InstansiModel;
use Illuminate\Http\Request;
use App\Exports\PengaduanExport;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;


class PengaduanController extends Controller
{
    public function index()
    {
        $pengaduans = Pengaduan::with('instansi')->latest()->get();
        return view('admin.pengaduan.index', compact('pengaduans'));
    }

    public function create()
    {
        $instansis = InstansiModel::all();
        return view('pengaduan.form', compact('instansis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'ktp' => 'required|string|max:50',
            'ttl' => 'required|string|max:100',
            'alamat' => 'required|string',
            'pekerjaan' => 'required|string|max:100',
            'no_hp' => 'required|string|max:20',
            'jenis' => 'required|in:aduan,saran,pertanyaan',
            'isi_pengaduan' => 'required|string',
            'id_instansi' => 'required|exists:tb_instansi,id',
        ]);

        Pengaduan::create($request->all());

        return redirect()->back()->with('success', 'Data kunjungan berhasil dikirim.');
    }

    public function edit($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        $instansis = InstansiModel::all();
        return view('admin.pengaduan.edit', compact('pengaduan', 'instansis'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'ktp' => 'required|string|max:50',
            'ttl' => 'required|string|max:100',
            'alamat' => 'required|string',
            'pekerjaan' => 'required|string|max:100',
            'no_hp' => 'required|string|max:20',
            'jenis' => 'required|in:aduan,saran,pertanyaan',
            'isi_pengaduan' => 'required|string',
            'id_instansi' => 'required|exists:tb_instansi,id',
        ]);

        $pengaduan = Pengaduan::findOrFail($id);
        $pengaduan->update($request->all());

        return redirect()->route('pengaduan.index')->with('success', 'Pengaduan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        $pengaduan->delete();

        return redirect()->route('pengaduan.index')->with('success', 'Pengaduan berhasil dihapus.');
    }
    public function exportPdf()
    {
        $data = \App\Models\Pengaduan::with('instansi')->latest()->get();
        $pdf = Pdf::loadView('admin.pengaduan.export-pdf', compact('data'));
        return $pdf->download('data_pengaduan.pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new PengaduanExport, 'data_pengaduan.xlsx');
    }
}
