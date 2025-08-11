<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Mal Pelayanan Publik Kab. Poso</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <!-- <link href="{{asset('assets/assets/img/favicon.png')}}" rel="icon"> -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="icon" href="{{ asset('assets/img/Lambang_Kabupaten_Poso.png') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('assets/assets/css/main.css')}}" rel="stylesheet">

  <style>
    .hero {
      background-image: url('../assets/img/Portal Website.jpg');
    }
  </style>

  <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: Feb 22 2025 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <img src="{{ asset('assets/img/mpp.png') }}"
          alt=""
          class="img-fluid me-1" {{-- margin end kecil --}}
          style="max-height: 60px;">
        <img src="{{ asset('assets/img/lindu.png') }}"
          alt=""
          class="img-fluid"
          style="max-height: 60px;">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <!-- Menu Home dengan Dropdown -->
          <li class="dropdown"><a href="#hero" class="active"><span>Home</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ url('/frontend#penghargaan') }}">Penghargaan</a></li>
              <li><a href="#about">Visi Misi</a></li>
              <li><a href="#informasi">Informasi Publik</a></li>
            </ul>
          </li>
          <li><a href="#services">Berita</a></li>
          <li><a href="#infografis">Infografis</a></li>
          <li><a href="/pengaduan/create">Pengaduan</a></li>
          <li><a href="/">Kunjungan</a></li>
          <li class="dropdown"><a href="#"><span>Perizinan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="https://oss.go.id/">Perizinan Berusaha</a></li>
              <li class="dropdown"><a href="#"><span>Perizinan Non Berusaha</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="https://admin.mppdigital.go.id/">LKP</a></li>
                  <li><a href="https://sicantik.go.id/">PKKPR</a></li>
                  <li><a href="https://simbg.pu.go.id/">PBG</a></li>
                  <li><a href="https://admin.mppdigital.go.id./mpp.apk">SKPD</a></li>
                </ul>
              </li>
              <li><a href="https://sicantik.go.id/">Layanan Non Perizinan</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="/login">Login</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-white" data-aos="zoom-out">
            <h1></h1>
            <p></p>
            <div class="d-flex" style="margin-top: 200px;">
              <!-- <a href="#about" class="btn-get-started">Get Started</a> -->
              <a href="https://youtu.be/hZu-NRWKfdI?si=Z0dCvP6DN4BKyFlO" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <!-- Home Foto -->
            <img src="{{asset('assets/img/BUPATI WABUP.png')}}" class="img-fluid animated" alt="" style="height: 350px; width: 500px; margin-left: 100px;">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

      <div class="container" data-aos="zoom-in">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 5,
                  "spaceBetween": 120
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/clients-1.webp" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/clients-2.webp" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/clients-3.webp" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/clients-4.webp" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/clients-5.webp" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/clients-6.webp" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/clients-7.webp" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/clients-8.webp" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>

    </section><!-- /Clients Section -->


    <!-- Testimonials Section -->
    <section id="penghargaan" class="testimonials section">
      <div class="container section-title" data-aos="fade-up">
        <h2>PENGHARGAAN</h2>
        <p>Kami persembahkan penghargaan ini untuk seluruh masyarakat Kabupaten Poso. Keberhasilan ini bukanlah akhir, tetapi awal dari semangat baru kami untuk memberikan pelayanan yang lebih baik.</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">
            @foreach($penghargaan as $item)
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('storage/'.$item->gambar) }}"
                  alt="{{ $item->judul }}"
                  class="penghargaan-img">
                @if($item->judul)
                <h3>{{ $item->judul }}</h3>
                @endif
              </div>
            </div>
            @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">

          <div class="col-lg-6 d-flex align-items-center">
            <img src="{{asset('assets/img/jpelayanan.jpg')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 pt-4 pt-lg-0 content">

            <h3>Pelayanan di DPMPTSP Kabupaten Poso</h3>
            <p class="fst-italic">
              Kami berkomitmen memberikan pelayanan publik yang profesional, transparan, cepat, dan akuntabel dalam bidang perizinan, non-perizinan, serta fasilitasi investasi. Setiap pemohon akan dilayani sesuai standar operasional prosedur yang berlaku, dengan mengutamakan kemudahan, kepastian hukum, dan kepuasan masyarakat.
            </p>

            <div class="d-flex justify-content-end">

              <div class="col-lg-6 d-flex justify-content-end">
                <img src="{{asset('assets/img/kerjaku.avif')}}" class="img-fluid" alt="">
              </div>
            </div><!-- End Skills Item -->
          </div>

        </div>
      </div>

      </div>

      <!-- Visi & Misi Section -->
      <section id="about" class="about section py-5 bg-light">
        <div class="container section-title text-center mb-5" data-aos="fade-up">
          <h2 class="fw-bold display-5">Visi & Misi</h2>
          <p class="text-muted">Membangun Poso yang lebih baik melalui visi dan misi yang jelas dan terarah</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row justify-content-center">
            <div class="col-lg-10">

              @foreach($hero as $profil)
              {{-- Gambar Visi --}}
              @if(!empty($profil->gambar_visi))
              <div class="text-center mb-4">
                <img src="{{ asset($profil->gambar_visi) }}"
                  alt="Visi dan Misi"
                  class="img-fluid rounded shadow">
              </div>
              @endif

              <div class="row g-4">
                <!-- Visi -->
                <div class="col-md-6" data-aos="fade-right">
                  <div class="bg-white rounded-4 shadow-sm p-4 h-100">
                    <div class="d-flex align-items-center mb-3">
                      <div class="flex-shrink-0 rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                        <i class="fas fa-lightbulb fa-lg"></i>
                      </div>
                      <h4 class="ms-3 fw-bold text-primary mb-0 fs-3">Visi</h4>
                    </div>
                    <p class="fs-5 fw-semibold text-dark">
                      {{ $profil->visi }}
                    </p>
                  </div>
                </div>

                <!-- Misi -->
                <div class="col-md-6" data-aos="fade-left">
                  <div class="bg-white rounded-4 shadow-sm p-4 h-100">
                    <div class="d-flex align-items-center mb-3">
                      <div class="flex-shrink-0 rounded-circle bg-success text-white d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                        <i class="fas fa-bullseye fa-lg"></i>
                      </div>
                      <h4 class="ms-3 fw-bold text-success mb-0 fs-3">Misi</h4>
                    </div>

                    @php
                    // Pecah misi berdasarkan angka atau titik
                    $misiList = preg_split('/\d+\.\s*|\.\s+/', trim($profil->misi), -1, PREG_SPLIT_NO_EMPTY);
                    @endphp

                    <ol class="list-unstyled">
                      @foreach($misiList as $i => $misi)
                      @if(!empty(trim($misi)))
                      <li class="d-flex mb-3">
                        <div class="flex-shrink-0 rounded-circle bg-success text-white d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                          {{ $i + 1 }}
                        </div>
                        <div class="fs-6 fw-semibold text-dark">
                          {{ trim($misi) }}
                        </div>
                      </li>
                      @endif
                      @endforeach
                    </ol>
                  </div>
                </div>
              </div>
              @endforeach

            </div>
          </div>
        </div>
      </section>



      <div class="container my-5" id="informasi"> {{-- Tambahkan id di sini --}}
        @foreach($dataKategori as $kategori => $dokumenList)
        <h5 class="mt-4 mb-3 p-2 text-white" style="background-color:#223C7E;">
          {{ strtoupper($kategori) }}
        </h5>
        <div class="table-responsive">
          <table class="table table-bordered align-middle">
            <thead class="table-dark">
              <tr>
                <th style="width: 50px;">No</th>
                <th>Judul Dokumen</th>
                <th style="width: 80px;">Tahun</th>
                <th class="text-center" style="width: 120px;">Unduh</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($dokumenList as $index => $item)
              <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->tahun }}</td>
                <td class="text-center">
                  <a href="{{ route('informasi.download', $item->id) }}" class="btn btn-sm btn-primary">
                    <i class="bi bi-download"></i> Download
                  </a>
                </td>
              </tr>
              @empty
              <tr>
                <td colspan="4" class="text-center">Belum ada dokumen.</td>
              </tr>
              @endforelse
            </tbody>
          </table>
        </div>
        @endforeach
      </div>


    </section><!-- /Why Us Section -->


    <section id="services" class="services section light-background">
      <div class="container section-title" data-aos="fade-up">
        <h2>Berita</h2>
        <p>Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kab. Poso</p>
      </div>

      <div class="container">
        <div class="row">
          {{-- Kolom Kiri: Timeline --}}
          <div class="col-lg-3">
            @php
            $grouped = $news->groupBy(function($b) {
            return \Carbon\Carbon::parse($b->created_at)->format('Y F');
            });
            @endphp
            <div class="timeline position-relative ps-4">
              @foreach($grouped as $period => $items)
              @php [$year,$month] = explode(' ', $period); @endphp
              <div class="mb-4">
                <h5 class="fw-bold text-success">{{ $year }}</h5>
                <h6 class="text-muted">{{ $month }}</h6>
              </div>
              @foreach($items as $b)
              <div class="timeline-dot mb-3"></div>
              @endforeach
              @endforeach
            </div>
          </div>

          {{-- Kolom Tengah: Kartu Berita --}}
          <div class="col-lg-6">
            <div class="row gy-4">
              @foreach($news as $b)
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
                <div class="card h-100 shadow-sm border-0">
                  @if($b->gambar)
                  <img src="{{ asset('gambar_berita/'.$b->gambar) }}"
                    class="card-img-top" alt="{{ $b->judul }}"
                    style="height:180px; object-fit:cover;">
                  @endif
                  <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold text-success">{{ $b->judul }}</h5>
                    <p class="text-muted mb-1">
                      <small><i class="bi bi-calendar"></i>
                        {{ \Carbon\Carbon::parse($b->created_at)->translatedFormat('d F Y') }}
                      </small>
                    </p>
                    <p class="flex-grow-1">{{ Str::limit(strip_tags($b->konten), 80, '...') }}</p>
                    <a href="{{ route('admin.berita.berita.show', $b->id) }}" class="btn btn-outline-success btn-sm mt-auto">
                      Baca Selengkapnya
                    </a>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>

          {{-- Kolom Kanan: Berita Terkini --}}
          <div class="col-lg-3">
            <div class="p-3 bg-success text-white rounded-top">
              <h5 class="mb-0">Terkini</h5>
            </div>
            <div class="border rounded-bottom p-3" style="max-height:500px; overflow-y:auto;">
              @foreach($news->take(5) as $b)
              <div class="d-flex mb-3">
                @if($b->gambar)
                <img src="{{ asset('gambar_berita/'.$b->gambar) }}"
                  class="me-3 rounded" width="60" height="60"
                  style="object-fit:cover;">
                @endif
                <div>
                  <a href="#" class="fw-bold text-success">{{ Str::limit($b->judul, 40) }}</a>
                  <br>
                  <small class="text-muted">
                    {{ \Carbon\Carbon::parse($b->created_at)->translatedFormat('d M Y') }}
                  </small>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>

      {{-- CSS internal --}}
      <style>
        .timeline::before {
          content: '';
          position: absolute;
          left: 0.8rem;
          top: 0;
          bottom: 0;
          width: 3px;
          background: #198754;
        }

        .timeline-dot {
          position: absolute;
          left: 0;
          top: auto;
          width: 12px;
          height: 12px;
          background: #198754;
          border-radius: 50%;
          margin-top: 4px;
        }

        @media(max-width:768px) {

          .timeline,
          .timeline-dot {
            display: none;
          }
        }
      </style>
    </section>


    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

      <img src="assets/img/bg/bg-8.webp" alt="">

      <div class="container">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-9 text-center text-xl-start">
            <h3>Berita</h3>
            <p>Demikian informasi yang dapat kami sampaikan pada kesempatan ini. Semoga berita ini dapat memberikan manfaat, wawasan, serta menjadi sumber informasi yang berguna bagi seluruh pembaca. Kami berharap dukungan dan partisipasi semua pihak dalam mewujudkan pelayanan yang semakin baik dan bermanfaat bagi masyarakat.</p>
          </div>
          <div class="col-xl-3 cta-btn-container text-center">
          </div>
        </div>

      </div>

    </section><!-- /Call To Action Section -->


    <!-- Infografis Section -->
    <section id="infografis" class="py-5">
      <div class="container">
        <h2 class="text-center mb-4 fw-bold">Infografis</h2>

        <div id="infografisCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            @foreach($infografis as $key => $info)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }} text-center">
              <img src="{{ asset('gambar_infografis/'.$info->gambar) }}"
                class="rounded shadow"
                style="max-height: 350px;"
                alt="{{ $info->judul }}">
            </div>
            <div class="carousel-caption d-none d-md-block">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Detail info
              </button>
            </div>
            @endforeach
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#infografisCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark rounded-circle p-3"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#infografisCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark rounded-circle p-3"></span>
          </button>
        </div>
      </div>
    </section>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Infografis</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          @foreach($infografis as $key => $info)
          <div class="modal-body">
            <img src="{{ asset('gambar_infografis/'.$info->gambar) }}"
              class="img-fluid rounded shadow"
              style="max-height: 350px;"
              alt="{{ $info->judul }}">
            <p class="fs-3 fw-bold mt-3">Deskripsi</p>
            <p class="mt-3">{{ $info->deskripsi }}</p>
          </div>
          @endforeach
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Call To Action + Contact -->
      <section id="call-to-action" class="call-to-action section dark-background">
        <img src="assets/img/bg/bg-8.webp" alt="">
        <div class="container">
          <div class="row gy-4" data-aos="zoom-in" data-aos-delay="100">

            <!-- Kolom Kiri: Call To Action -->
            <div class="col-lg-6 text-center text-lg-start">
              <h3>DPMPTSP POSO</h3>
              <p>Berbagai data dan informasi visual yang membantu masyarakat memahami pelayanan publik di Kabupaten Poso.</p>
              <hr class="border-light">
              <p class="mb-1">
                <i class="bi bi-geo-alt-fill me-2"></i>
                <strong>Alamat:</strong> Mal Pelayanan Publik Kabupaten Poso,
                Jl. Pulau Kalimantan, Kelurahan Gebangrejo, Kecamatan Poso Kota, Kabupaten Poso, Sulawesi Tengah.
              </p>
              <p class="mb-1">
                <i class="bi bi-telephone-fill me-2"></i>
                <strong>Telepon:</strong> +62 822-9135-1943
              </p>
              <p class="mb-0">
                <i class="bi bi-envelope-fill me-2"></i>
                <strong>Email:</strong> mpp@posokab.go.id
              </p>
            </div>

            <!-- Kolom Kanan: Contact Info + Map -->
            <div class="col-lg-6">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63796.86299100442!2d120.74259389282733!3d-1.3933818999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d8bb5f9f38b8cf9%3A0x4f7b95c8a55b1de6!2sDinas%20Penanaman%20Modal%20dan%20PTSP%20Kabupaten%20Poso!5e0!3m2!1sid!2sid!4v1691229175678!5m2!1sid!2sid"
                frameborder="0"
                style="border:0; width: 90%; height:300px;"
                allowfullscreen=""
                loading="lazy">
              </iframe>
            </div>

          </div>
        </div>
      </section>

    </section>


    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Zulfikar</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a> -->
      </div>
    </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{asset('assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('assets/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('assets/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
    <script src="{{asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>

    <!-- Main JS File -->
    <script src="{{asset('assets/assets/js/main.js')}}"></script>

</body>

</html>