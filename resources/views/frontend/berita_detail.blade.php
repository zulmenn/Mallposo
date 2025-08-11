@if(isset($berita))
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $berita->judul }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Header sederhana -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ route('frontend.news') }}">
      DPMPTSP Kabupaten Poso
    </a>
  </div>
</nav>

<!-- Konten Berita -->
<section class="py-5">
  <div class="container">
    <div class="row g-4">
      
      <!-- Kolom kiri: isi berita -->
      <div class="col-lg-8">
        <h2 class="fw-bold">{{ $berita->judul }}</h2>
        <p class="text-muted">
          Dipublikasikan pada {{ \Carbon\Carbon::parse($berita->created_at)->translatedFormat('d F Y') }}
        </p>

        @if($berita->gambar)
          <img src="{{ asset('gambar_berita/' . $berita->gambar) }}" 
               class="img-fluid rounded mb-4" alt="">
        @endif

        <article class="lh-lg">
          {!! $berita->konten !!}
        </article>
      </div>

      <!-- Kolom kanan: berita terkini -->
      <div class="col-lg-4">
        <h5 class="fw-bold mb-3 border-bottom pb-2">Berita Terkini</h5>
        
        @foreach($terkini as $b)
          <div class="d-flex mb-3">
            @if($b->gambar)
              <img src="{{ asset('gambar_berita/' . $b->gambar) }}" 
                   class="me-3 rounded" width="80" height="60" style="object-fit:cover;">
            @endif
            <div>
              <a href="{{ route('admin.berita.berita.show', $b->id) }}" 
                 class="fw-semibold text-dark text-decoration-none">
                {{ Str::limit($b->judul, 40) }}
              </a>
              <div class="small text-muted">
                {{ \Carbon\Carbon::parse($b->created_at)->translatedFormat('d M Y') }}
              </div>
            </div>
          </div>
        @endforeach
      </div>

    </div>
  </div>
</section>

<!-- Footer sederhana -->
<footer class="bg-light py-3 mt-5 border-top">
  <div class="container text-center small">
    &copy; {{ date('Y') }} DPMPTSP Kabupaten Poso. All Rights Reserved.
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endif
