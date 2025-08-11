<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profils;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profil = Profils::first();
        return view('admin.profil.index', compact('profil'));
    }

    public function update(Request $request)
    {
        $profil = Profils::first() ?? new Profils();

        $profil->visi = $request->visi;
        $profil->misi = $request->misi;

        $profil->save();

        return redirect()->back()->with('success', 'Profil berhasil diperbarui.');
    }
}
