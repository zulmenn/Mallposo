<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Profils;
use App\Models\Penghargaan;
use Illuminate\Http\Request;
use App\Models\Infografis;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->get();
        return view('admin.berita.index', compact('beritas'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $gambar = null;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $gambar = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('gambar_berita'), $gambar);
        }

        Berita::create([
            'judul' => $request->judul,
            'konten' => $request->konten,
            'gambar' => $gambar,
        ]);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $berita = Berita::findOrFail($id);
        $berita->judul = $request->judul;
        $berita->konten = $request->konten;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('gambar_berita'), $filename);
            $berita->gambar = $filename;
        }

        $berita->save();

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        if ($berita->gambar && file_exists(public_path('gambar_berita/' . $berita->gambar))) {
            unlink(public_path('gambar_berita/' . $berita->gambar));
        }
        $berita->delete();

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dihapus.');
    }

    public function news(Request $request)
    {
        $news = Berita::latest()->get();
        $hero = Profils::all();
        $penghargaan = Penghargaan::latest()->get();
        $infografis = Infografis::latest()->get();

        // 🔹 Ambil daftar tahun untuk tombol filter
        $tahunList = \App\Models\InformasiPublik::select('tahun')
            ->distinct()
            ->orderBy('tahun', 'desc')
            ->pluck('tahun');

        // 🔹 Ambil data informasi publik (filter tahun jika ada)
        $informasiQuery = \App\Models\InformasiPublik::query();

        if ($request->has('tahun')) {
            $informasiQuery->where('tahun', $request->tahun);
        }

        $informasi = $informasiQuery->orderBy('created_at', 'desc')->get();

        // 🔹 Daftar kategori seperti di DPMPTSP Sulteng
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

        // 🔹 Group data berdasarkan kategori
        $dataKategori = [];
        foreach ($kategoriList as $kategori) {
            $dataKategori[$kategori] = $informasi->where('kategori', $kategori);
        }

        return view('frontend', compact(
            'news',
            'hero',
            'penghargaan',
            'infografis',
            'informasi',     // tetap kirim untuk jaga-jaga
            'tahunList',
            'dataKategori'   // 🔹 ini yang kemarin hilang
        ));
    }



    public function show($id)
    {
        $berita = \App\Models\Berita::findOrFail($id);
        $terkini = \App\Models\Berita::latest()->take(5)->get();

        return view('frontend.berita_detail', compact('berita', 'terkini'));
    }
}
