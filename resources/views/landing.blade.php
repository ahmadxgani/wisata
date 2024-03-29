<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/sass/app.scss', 'resources/sass/themes/dark/app-dark.scss', 'resources/leaflet/leaflet.css'])
    <link rel="shortcut icon" href="{{ asset('assets/static/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/static/images/logo/favicon.png') }}" type="image/png">
</head>

<body>
    @vite('resources/js/initTheme.js')
     <div class="container">
        <div class="p-3 mb-1 bg-body-tertiary rounded-3">
            <div class="container-fluid py-5">
                <div class="row justify-content-between">
                    <div class="col-md-9 fs-4">
                <h1 class="display-5 fw-bold">Selamat datang di wisata Jepang</h1>
                        <p>Jelajahi Keindahan Alam dan Budaya di Berbagai Destinasi bersama waifu mu</p>
                        <a class="btn btn-lg btn-primary" href="{{ route('auth.register.index') }}">Jelajahi sekarang!</a>
                    </div>

                    <div class="col d-flex flex-column">
                        <img src="{{ asset('assets/static/images/megumin.png') }}" class="align-self-end" style="height: 200px;" />
                    </div>
                </div>
            </div>
        </div>
        <div id="map" class="mt-5" style="height: 280px;"></div>
    </div>

    @vite(['resources/js/app.js', 'resources/js/components/dark.js', 'resources/leaflet/leaflet.js', 'resources/js/map.js'])
</body>

</html>
