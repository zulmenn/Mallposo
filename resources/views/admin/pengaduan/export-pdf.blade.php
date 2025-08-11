<!DOCTYPE html>
<html>
<head>
    <title>Data Pengaduan</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 12px;
        }
        th, td {
            border: 1px solid #444;
            padding: 5px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h3>Data Pengaduan</h3>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>KTP</th>
                <th>TTL</th>
                <th>Alamat</th>
                <th>Pekerjaan</th>
                <th>No HP</th>
                <th>Jenis</th>
                <th>Isi Pengaduan</th>
                <th>Instansi</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $i => $d)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->ktp }}</td>
                <td>{{ $d->ttl }}</td>
                <td>{{ $d->alamat }}</td>
                <td>{{ $d->pekerjaan }}</td>
                <td>{{ $d->no_hp }}</td>
                <td>{{ ucfirst($d->jenis) }}</td>
                <td>{{ $d->isi_pengaduan }}</td>
                <td>{{ $d->instansi->nama_instansi ?? '-' }}</td>
                <td>{{ $d->created_at->format('d-m-Y H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
