<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penghargaan;
use Illuminate\Support\Facades\Storage;

class PenghargaanController extends Controller
{
    public function index()
    {
        $penghargaan = Penghargaan::latest()->get();
        return view('admin.penghargaan.index', compact('penghargaan'));
    }

    public function create()
    {
        return view('admin.penghargaan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $path = $request->file('gambar')->store('penghargaan', 'public');

        Penghargaan::create([
            'judul' => $request->judul,
            'gambar' => $path
        ]);

        return redirect()->route('admin.penghargaan.index')->with('success', 'Penghargaan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $penghargaan = Penghargaan::findOrFail($id);
        return view('admin.penghargaan.edit', compact('penghargaan'));
    }

    public function update(Request $request, $id)
    {
        $penghargaan = Penghargaan::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = ['judul' => $request->judul];

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($penghargaan->gambar && Storage::exists('public/'.$penghargaan->gambar)) {
                Storage::delete('public/'.$penghargaan->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('penghargaan', 'public');
        }

        $penghargaan->update($data);

        return redirect()->route('admin.penghargaan.index')->with('success', 'Penghargaan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $penghargaan = Penghargaan::findOrFail($id);

        if ($penghargaan->gambar && Storage::exists('public/'.$penghargaan->gambar)) {
            Storage::delete('public/'.$penghargaan->gambar);
        }

        $penghargaan->delete();

        return redirect()->route('admin.penghargaan.index')->with('success', 'Penghargaan berhasil dihapus.');
    }
}
