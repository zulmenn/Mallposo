<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Formulir Pendaftaran Tamu</title>
    <link rel="icon" href="{{ asset('assets/img/Lambang_Kabupaten_Poso.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('{{ asset('assets/img/Portal Buku Tamu ku.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .overlay {
            background-color: rgba(0, 0, 0, 0); /* gelapkan latar agar form tetap jelas */
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
            background-color: rgba(0, 0, 0, 0.47); /* hitam transparan */
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
            background-color:rgb(23, 163, 184);
            border: none;
        }

        .btn-submit:hover {
            background-color:rgb(19, 132, 150);
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

                    <h4 class="mb-4 text-center ">Formulir Pendaftaran</h4>

                    <form action="{{ route('kunjungan.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Jenis Kelamin</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" required>
                                <label class="form-check-label">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" required>
                                <label class="form-check-label">Perempuan</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label>No. HP</label>
                            <input type="text" name="no_hp" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Tujuan Instansi</label>
                            <select name="tujuan_instansi" class="form-control" required>
                                <option value="">-- Pilih Instansi --</option>
                                <option>Dukcapil</option>
                                <option>PTSP</option>
                                <option>Dipenda</option>
                                <option>Dinas PUPR</option>
                                <option>Dinas Nakertrans</option>
                                <option>PT. Taspen</option>
                                <option>BPOM</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label>Maksud dan Tujuan</label>
                            <textarea name="maksud_tujuan" class="form-control" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-submit w-100 text-white">+ Daftar Kunjungan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
