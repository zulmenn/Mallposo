<div class="mb-3">
    <label for="judul" class="form-label">Judul</label>
    <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul', $berita->judul ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="konten" class="form-label">Konten</label>
    <textarea name="konten" id="konten" class="form-control" rows="5" required>{{ old('konten', $berita->konten ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label for="gambar" class="form-label">Gambar</label>
    <input type="file" name="gambar" id="gambar" class="form-control">
    @if(!empty($berita->gambar))
        <p class="mt-2">Gambar saat ini:</p>
        <img src="{{ asset('gambar_berita/' . $berita->gambar) }}" width="150">
    @endif
</div>
