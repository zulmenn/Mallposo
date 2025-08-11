<?php

namespace App\Http\Controllers;

use App\Models\InformasiPublik;
use Illuminate\Http\Request;

class InformasiPublikController extends Controller
{
    public function index()
    {
        $informasi = InformasiPublik::latest()->get();
        return view('admin.informasi_publik.index', compact('informasi'));
    }

    public function create()
    {
        return view('admin.informasi_publik.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'nullable|string|max:255',
            'tahun' => 'nullable|integer',
            'file' => 'required|mimes:pdf,doc,docx,xls,xlsx|max:2048'
        ]);

        $path = $request->file('file')->store('uploads/informasi', 'public');

        InformasiPublik::create([
            'judul' => $request->judul,
            'kategori' => $request->kategori ?? 'DOKUMEN LAINNYA',
            'tahun' => $request->tahun ?? date('Y'),
            'file_path' => $path
        ]);

        return redirect()->route('admin.informasi_publik.index')->with('success', 'Dokumen berhasil diupload.');
    }

    public function edit($id)
    {
        $informasi = InformasiPublik::findOrFail($id);
        return view('admin.informasi_publik.edit', compact('informasi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'nullable|string|max:255',
            'tahun' => 'nullable|integer',
            'file' => 'nullable|mimes:pdf,doc,docx,xls,xlsx|max:2048'
        ]);

        $informasi = InformasiPublik::findOrFail($id);

        if ($request->hasFile('file')) {
            if (file_exists(storage_path('app/public/' . $informasi->file_path))) {
                unlink(storage_path('app/public/' . $informasi->file_path));
            }
            $path = $request->file('file')->store('uploads/informasi', 'public');
            $informasi->file_path = $path;
        }

        $informasi->update([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'tahun' => $request->tahun
        ]);

        return redirect()->route('admin.informasi_publik.index')->with('success', 'Dokumen berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $informasi = InformasiPublik::findOrFail($id);

        if (file_exists(storage_path('app/public/' . $informasi->file_path))) {
            unlink(storage_path('app/public/' . $informasi->file_path));
        }

        $informasi->delete();
        return back()->with('success', 'Dokumen berhasil dihapus.');
    }

    public function download($id)
    {
        $informasi = InformasiPublik::findOrFail($id);
        $filePath = storage_path('app/public/' . $informasi->file_path);

        if (!file_exists($filePath)) {
            abort(404, 'File tidak ditemukan.');
        }

        return response()->download($filePath);
    }

    public function informasiPublik()
    {
        $informasi = InformasiPublik::orderBy('tahun', 'desc')->get();

        $tahunList = InformasiPublik::select('tahun')
            ->distinct()
            ->orderBy('tahun', 'desc')
            ->pluck('tahun');

        $kategoriList = [
            'DOKUMEN INVESTASI',
            'DOKUMEN INDEX KEPUASAN MASYARAKAT',
            'DOKUMEN LAPORAN KINERJA',
            'DOKUMEN PERENCANAAN',
            'DOKUMEN POTENSI INVESTASI',
            'DOKUMEN PRODUK HUKUM',
            'DOKUMEN SOP DAN SP',
            'DOKUMEN LAINNYA'
        ];

        $dataKategori = [];
        foreach ($kategoriList as $kategori) {
            $dataKategori[$kategori] = $informasi->where('kategori', $kategori);
        }

        return view('frontend.informasi_publik', compact('tahunList', 'dataKategori'));
    }
}
