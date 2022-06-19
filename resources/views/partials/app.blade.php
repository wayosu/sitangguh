<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITANGGUH - Administartor {{ $title ?? '' }}</title>

    <link rel="stylesheet" href={{ asset('be/assets/css/bootstrap.css') }}>

    <link rel="stylesheet" href={{ asset('be/assets/vendors/chartjs/Chart.min.css') }}>
    <link rel="stylesheet" href={{ asset('be/assets/vendors/simple-datatables/style.css') }}>
    <link rel="stylesheet" href={{ asset('be/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}>
    <link rel="stylesheet" href={{ asset('be/assets/css/app.css') }}>
    <link rel="shortcut icon" href={{ asset('be/assets/images/bpbdlogo.png') }} type="image/x-icon">
</head>

<body>
    <div id="app">
        @include('partials.sidebar')
        <div id="main">
            @include('partials.navbar')

            <div class="main-content container-fluid">
                <div class="page-title">
                    @yield('section')
                </div>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2022 &copy; <small>SITAGGGUH</small></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src={{ asset('be/assets/js/feather-icons/feather.min.js') }}></script>
    <script src={{ asset('be/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}></script>
    <script src={{ asset('be/assets/js/app.js') }}></script>

    <script src={{ asset('be/assets/vendors/chartjs/Chart.min.js') }}></script>
    <script src={{ asset('be/assets/vendors/apexcharts/apexcharts.min.js') }}></script>
    <script src={{ asset('be/assets/js/pages/dashboard.js') }}></script>

    <script src={{ asset('be/assets/js/main.js') }}></script>
       
    <script src={{ asset('be/assets/vendors/simple-datatables/simple-datatables.js') }}></script>
    <script src={{ asset('be/assets/js/vendors.js') }}></script>
</body>

</html>