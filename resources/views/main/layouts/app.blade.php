<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('main.components.styles')
</head>

<body class="app sidebar-mini">
    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->
    <!-- PAGE -->
    <div class="page">
        <div class="page-main">
            @include('main.components.left-bar')
            @yield('content')
        </div>
        @include('main.components.footer')
    </div>
    </div>

    @include('main.components.scripts')
</body>
</html>
