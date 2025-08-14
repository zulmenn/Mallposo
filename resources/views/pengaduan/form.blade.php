<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Mal Pelayanan Publik Kab. Poso</title>
    <link rel="icon" href="{{ asset('assets/img/Lambang_Kabupaten_Poso.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('{{ asset('assets/img/Portal_Pengaduan.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .overlay {
            background-color: rgba(0, 0, 0, 0);
            /* gelapkan latar agar form tetap jelas */
            min-height: 100vh;
            padding: 0;
        }

        .left-section {
            color: white;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px;
        }

        .left-section img {
            width: contain;
            height: auto;
            margin-bottom: 30px;
        }

        .left-section h1 {
            font-size: 36px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .left-section h5 {
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }

        .right-section {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-box {
            width: 90%;
            max-width: 400px;
            background-color: rgba(0, 0, 0, 0.47);
            /* hitam transparan */
            padding: 30px;
            border-radius: 10px;
            color: white;
            backdrop-filter: blur(5px);
        }

        .form-box label {
            color: #ddd;
        }

        .form-box input,
        .form-box textarea,
        .form-box select {
            background-color: #ffff;
            border: none;
            color: black;
        }

        .form-box .form-check-label {
            color: #ccc;
        }

        .btn-submit {
            background-color: rgb(23, 163, 184);
            border: none;
        }

        .btn-submit:hover {
            background-color: rgb(19, 132, 150);
        }
    </style>
</head>

<body>
    <div class="container-fluid overlay">
        <div class="row">
            <!-- Kiri -->
            <div class="col-md-6 left-section">
                <!-- <img src="{{ asset('assets/img/Logo DPMPTSP.png') }}" alt="Lambang Kota Poso">
                <h1>Mal Pelayanan Publik Kabupaten Poso</h1> -->
            </div>

            <!-- Kanan -->
            <div class="col-md-6 right-section">
                <div class="form-box">
                    @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <h4 class="mb-4 text-center ">SITAMU</h4>

                    <form action="{{ route('pengaduan.store') }}" method="POST">
                        @csrf
                        <div class="row g-3">

                            <div class="col-md-6">
                                <label class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">No. KTP</label>
                                <input type="text" name="ktp" class="form-control" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Tempat, Tanggal Lahir</label>
                                <input type="text" name="ttl" placeholder="Contoh: Poso, 1 Januari 1990" class="form-control" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Pekerjaan</label>
                                <input type="text" name="pekerjaan" class="form-control" required>
                            </div>

                            <div class="col-md-12">
                                <label class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">No. HP</label>
                                <input type="text" name="no_hp" class="form-control" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Jenis Aduan</label>
                                <select name="jenis" class="form-control" required>
                                    <option value="">-- Pilih Aduan --</option>
                                    <option value="aduan">Aduan</option>
                                    <option value="saran">Saran</option>
                                    <option value="pertanyaan">Pertanyaan</option>
                                </select>
                            </div>

                            <div class="col-md-12">
                                <label class="form-label">Isi Pengaduan</label>
                                <textarea name="isi_pengaduan" class="form-control" rows="3" required></textarea>
                            </div>

                            <div class="col-md-12">
                                <label class="form-label">Nama Instansi</label>
                                <select name="id_instansi" class="form-control" required>
                                    <option value="">-- Pilih Instansi --</option>
                                    @foreach($instansis as $instansi)
                                    <option value="{{ $instansi->id }}">{{ $instansi->nama_instansi }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-submit w-100">+ Kirim Pengaduan</button>
                            </div>

                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</body>

</html>