<!DOCTYPE html>
<html>
<head>
    <title>Data Kunjungan</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #444;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h3>Data Kunjungan Tamu</h3>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>JK</th>
                <th>No HP</th>
                <th>Instansi</th>
                <th>Tujuan</th>
                <th>Alamat</th>
                <th>Waktu</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $i => $d)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $d->nama_lengkap }}</td>
                <td>{{ $d->jenis_kelamin }}</td>
                <td>{{ $d->no_hp }}</td>
                <td>{{ $d->tujuan_instansi }}</td>
                <td>{{ $d->maksud_tujuan }}</td>
                <td>{{ $d->alamat }}</td>
                <td>{{ $d->created_at->format('d-m-Y H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
