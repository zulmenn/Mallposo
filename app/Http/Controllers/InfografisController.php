<?php

namespace App\Http\Controllers;

use App\Models\Infografis;
use Illuminate\Http\Request;

class InfografisController extends Controller
{
    public function index()
    {
        $infografis = Infografis::latest()->get();
        return view('admin.infografis.index', compact('infografis'));
    }

    public function create()
    {
        return view('admin.infografis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'deskripsi' => 'nullable|string',
        ]);

        $fileName = time().'_'.$request->file('gambar')->getClientOriginalName();
        $request->file('gambar')->move(public_path('gambar_infografis'), $fileName);

        Infografis::create([
            'gambar' => $fileName,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.infografis.index')->with('success', 'Infografis berhasil ditambahkan');
    }

    public function edit($id)
    {
        $infografis = Infografis::findOrFail($id);
        return view('admin.infografis.edit', compact('infografis'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'deskripsi' => 'nullable|string',
        ]);

        $infografis = Infografis::findOrFail($id);
        if ($request->hasFile('gambar')) {
            if (file_exists(public_path('gambar_infografis/'.$infografis->gambar))) {
                unlink(public_path('gambar_infografis/'.$infografis->gambar));
            }
            $fileName = time().'_'.$request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move(public_path('gambar_infografis'), $fileName);
            $infografis->gambar = $fileName;
        }

        $infografis->deskripsi = $request->deskripsi;
        $infografis->save();

        return redirect()->route('admin.infografis.index')->with('success', 'Infografis berhasil diperbarui');
    }

    public function destroy($id)
    {
        $data = Infografis::findOrFail($id);
        if (file_exists(public_path('gambar_infografis/'.$data->gambar))) {
            unlink(public_path('gambar_infografis/'.$data->gambar));
        }
        $data->delete();
        return redirect()->route('admin.infografis.index')->with('success', 'Infografis berhasil dihapus');
    }
}

