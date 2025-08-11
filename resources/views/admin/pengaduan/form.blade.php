<div class="mb-3">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control" value="{{ old('nama', $pengaduan->nama ?? '') }}" required>
</div>

<div class="mb-3">
    <label>No. KTP</label>
    <input type="text" name="ktp" class="form-control" value="{{ old('ktp', $pengaduan->ktp ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Tempat, Tanggal Lahir</label>
    <input type="text" name="ttl" class="form-control" value="{{ old('ttl', $pengaduan->ttl ?? '') }}" required placeholder="Contoh: Poso, 1 Januari 1990">
</div>

<div class="mb-3">
    <label>Alamat</label>
    <textarea name="alamat" class="form-control" rows="2" required>{{ old('alamat', $pengaduan->alamat ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label>Pekerjaan</label>
    <input type="text" name="pekerjaan" class="form-control" value="{{ old('pekerjaan', $pengaduan->pekerjaan ?? '') }}" required>
</div>

<div class="mb-3">
    <label>No HP</label>
    <input type="text" name="no_hp" class="form-control" value="{{ old('no_hp', $pengaduan->no_hp ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Jenis Pengaduan</label>
    <select name="jenis" class="form-control" required>
        <option value="">-- Pilih Jenis --</option>
        @foreach(['aduan', 'saran', 'pertanyaan'] as $jenis)
            <option value="{{ $jenis }}" {{ old('jenis', $pengaduan->jenis ?? '') == $jenis ? 'selected' : '' }}>{{ ucfirst($jenis) }}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Isi Pengaduan</label>
    <textarea name="isi_pengaduan" class="form-control" rows="4" required>{{ old('isi_pengaduan', $pengaduan->isi_pengaduan ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label>Instansi Tujuan</label>
    <select name="id_instansi" class="form-control" required>
        <option value="">-- Pilih Instansi --</option>
        @foreach($instansis as $instansi)
            <option value="{{ $instansi->id }}" {{ old('id_instansi', $pengaduan->id_instansi ?? '') == $instansi->id ? 'selected' : '' }}>
                {{ $instansi->nama_instansi }}
            </option>
        @endforeach
    </select>
</div>

@if(isset($pengaduan))
<div class="mb-3">
    <label>Status</label>
    <select name="status" class="form-control" required>
        <option value="Baru" {{ $pengaduan->status == 'Baru' ? 'selected' : '' }}>Baru</option>
        <option value="Diproses" {{ $pengaduan->status == 'Diproses' ? 'selected' : '' }}>Diproses</option>
        <option value="Selesai" {{ $pengaduan->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
    </select>
</div>
@endif
