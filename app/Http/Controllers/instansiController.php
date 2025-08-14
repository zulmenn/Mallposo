<?php

namespace App\Http\Controllers;

use App\Models\instansiModel;
use Illuminate\Http\Request;

class InstansiController extends Controller
{
    
    public function index()
    {
        $instansi = InstansiModel::all();
        return view('instansi.index', compact('instansi'));
    }

    
    public function create()
    {
        return view('instansi.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nama_instansi' => 'required|string|max:255',
        ]);

        instansiModel::create($request->all());

        return redirect()->route('admin.instansi.index')->with('success', 'Data instansi berhasil ditambahkan.');
    }

    
    public function show($id)
    {
        $instansi = instansiModel::findOrFail($id);
        return view('instansi.show', compact('instansi'));
    }

    
    public function edit($id)
    {
        $instansi = instansiModel::findOrFail($id);
        return view('instansi.edit', compact('instansi'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_instansi' => 'required|string|max:255',
        ]);

        $instansi = instansiModel::findOrFail($id);
        $instansi->update($request->all());

        return redirect()->route('admin.instansi.index')->with('success', 'Data instansi berhasil diperbarui.');
    }

    // Menghapus data instansi
    public function destroy($id)
    {
        $instansi = instansiModel::findOrFail($id);
        $instansi->delete();

        return redirect()->route('admin.instansi.index')->with('success', 'Data instansi berhasil dihapus.');
    }
}
