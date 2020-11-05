<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/9a99710b3e.js" crossorigin="anonymous"></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')

</head>

<body>

    <div class="container-fluid  p-0 m-0">
        @include('partials.nav')
        <div class="row min-vh-100 d-flex justify-content-between p-0 m-0">

            {{-- Left Side --}}
            <div class="col-12 col-sm-12 col-md-2 p-0">
                @include('partials.left_menu')
            </div>
            {{-- Right Side --}}
            <div class="col-12 col-md-10 p-0 m-0">
                {{-- Alerts --}}
                <div class="alerts text-center">
                    @include('partials.alerts')
                </div>
                @yield('content')
            </div>
        </div>
    </div>



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- Charting library -->
    <script src="https://unpkg.com/chart.js@2.9.3/dist/Chart.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/chartjs@^2.1.0/dist/chartisan_chartjs.umd.js"></script>

    {{-- <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script> --}}
    @yield('scripts')
</body>

</html>
