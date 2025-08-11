@extends('layouts.master')

@section('content')
<div class="container">
    <h4>Kelola Visi & Misi</h4>
    <form action="{{ route('admin.profil.update') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="visi" class="form-label">Visi</label>
            <textarea name="visi" class="form-control" rows="3">{{ old('visi', $profil->visi ?? '') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="misi" class="form-label">Misi</label>
            <textarea name="misi" class="form-control" rows="5">{{ old('misi', $profil->misi ?? '') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
