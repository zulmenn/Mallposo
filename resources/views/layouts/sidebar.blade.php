<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <img src="{{ asset('assets/img/Lambang_Kabupaten_Poso.png') }}" alt="Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Mal Pelayanan Publik</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/img/user-icon.webp') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name ?? 'Admin' }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                @if(auth()->user()->role == 'superAdmin')
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ url('dashboard') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Data Kunjungan -->
                <li class="nav-item">
                    <a href="{{ route('admin.kunjungan.index') }}" class="nav-link {{ request()->is('admin/kunjungan') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Data Kunjungan</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.pengaduan.index') }}" class="nav-link {{ request()->is('admin/pengaduan') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-exclamation-triangle"></i>
                        <p>Data Pengaduan</p>
                    </a>
                </li>
                <!-- Data Informasi Publik -->
                <li class="nav-item">
                    <a href="{{ route('admin.informasi_publik.index') }}" class="nav-link {{ request()->is('admin/informasi_publik') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-info-circle"></i>
                        <p>Informasi Publik</p>
                    </a>
                </li>

                <!-- Data Instansi -->
                <li class="nav-item">
                    <a href="{{ route('admin.penghargaan.index') }}" class="nav-link {{ request()->is('admin/penghargaan') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-building"></i>
                        <p>penghargaan</p>
                    </a>
                </li>

                <!-- Data Infografis -->
                <li class="nav-item">
                    <a href="{{ route('admin.infografis.index') }}" class="nav-link {{ request()->is('admin/infografis') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-building"></i>
                        <p>infografis</p>
                    </a>
                </li>

                <!-- Data Berita -->
                <li class="nav-item">
                    <a href="{{ route('admin.berita.index') }}" class="nav-link {{ request()->is('admin/berita') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>Berita</p>
                    </a>
                </li>

                <!-- Profil -->
                <li class="nav-item">
                    <a href="{{ route('admin.profil.index') }}" class="nav-link {{ request()->is('admin/profil') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-id-card"></i>
                        <p>Profil</p>
                    </a>
                </li>
                <!-- Penghargaan -->
                <li class="nav-item">
                    <a href="{{ route('admin.instansi.index') }}" class="nav-link {{ request()->is('admin/instansi') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-trophy"></i>
                        <p>instansi</p>
                    </a>
                </li>
                @else
                <!-- Data Pengaduan -->
                <li class="nav-item">
                    <a href="{{ route('admin.pengaduan.index') }}" class="nav-link {{ request()->is('admin/pengaduan') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-exclamation-triangle"></i>
                        <p>Data Pengaduan</p>
                    </a>
                </li>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>