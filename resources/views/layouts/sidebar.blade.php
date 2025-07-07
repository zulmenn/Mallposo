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
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ url('dashboard') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Data Kunjungan -->
                <li class="nav-item">
                    <a href="{{ route('admin.kunjungan') }}" class="nav-link {{ request()->is('admin/kunjungan') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Data Kunjungan</p>
                    </a>
                </li>

                <!-- Grafik Kunjungan (Opsional) -->
                {{-- 
                <li class="nav-item">
                    <a href="{{ route('admin.kunjungan.grafik') }}" class="nav-link">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        <p>Grafik Kunjungan</p>
                    </a>
                </li>
                --}}

                <!-- Akun (statis saja tanpa login) -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-shield"></i>
                        <p></p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
