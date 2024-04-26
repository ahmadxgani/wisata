<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/sass/app.scss', 'resources/sass/themes/dark/app-dark.scss', 'resources/leaflet/leaflet.css'])
    <link rel="shortcut icon" href="{{ asset('assets/static/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/static/images/logo/favicon.png') }}" type="image/png">
</head>

<body>
    @vite('resources/js/initTheme.js')
     <div class="container">
        <div class="p-3 mb-4 bg-body-tertiary rounded-3">
            <div class="container-fluid py-5">
                <div class="row justify-content-between">
                    <div class="col fs-4">
                        <h1 class="display-5 fw-bold">Selamat datang di Sukabumi Trip</h1>
                        <p>Jelajahi Keindahan Alam dan Budaya di Berbagai destinasi wisata Sukabumi</p>
                        <a href="#destinations" class="btn btn-lg btn-info fw-semibold">Jelajahi sekarang!</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="map" class="mb-4" style="height: 280px;"></div>
        
        <hr id="destinations">

        <div class="row">
            @foreach($destinations as $arr)
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <img src="{{asset('storage/image/' . $arr->photo_path) }}" class="card-img-top img-fluid"
                                alt="singleminded">
                            <div class="card-body">
                                <h5 class="card-title">{{ $arr->name }}</h5>
                                <p class="card-text">
                                    {{ $arr->description }}
                                </p>
                                <div class="d-flex justify-content-between">
                                    <p>
                                        <small class="text-body-success"><span class="badge text-bg-success">{{ $arr->category->name }}</span></small>
                                    </p>
                                    <a href="{{ route('destinasi.detail', $arr->name) }}" class="btn btn-info fw-semibold btn-sm">Lihat lebih detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @vite(['resources/js/app.js', 'resources/js/components/dark.js', 'resources/leaflet/leaflet.js', 'resources/js/map.js'])
</body>

</html>
