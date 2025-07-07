<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mall Pelayanan Publik</title>
    <link rel="icon" href="{{asset ('assets/img/Lambang_Kabupaten_Poso.png')}}">
    {{-- <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' /> --}}
    @include('layouts.style')
</head>

<body>
    <div class="wrapper d-flex flex-column min-vh-100">
        {{-- navbar --}}
        @include('layouts.navbar')
        {{-- end navbar --}}

        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- End Sidebar -->
        
        <!-- Main Content -->
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    {{-- @include('sweetalert::alert') --}}
                    @yield('content')
                </div>
            </section>
        </div>
        
        <!-- Footer -->
        @include('layouts.footer')
    </div>

    @include('layouts.script')
    @yield('script')

</body>

</html>  