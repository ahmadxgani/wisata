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
                    <div class="col-md-9 fs-4">
                <h1 class="display-5 fw-bold">Selamat datang di wisata Jepang</h1>
                        <p>Jelajahi Keindahan Alam dan Budaya di Berbagai Destinasi bersama waifu mu</p>
                        <button class="btn btn-lg btn-primary">Jelajahi sekarang!</button>
                    </div>

                    <div class="col d-flex flex-column">
                        <img src="{{ asset('assets/static/images/megumin.png') }}" class="align-self-end" style="height: 200px;" />
                    </div>
                </div>
            </div>
        </div>
        <div id="map" class="mb-4" style="height: 280px;"></div>
        @php
        $mock = array("Be god", "Be single minded", "Be light yagami", "Be Asta", "Be yourself", "Who is yourself?", "I'm is yourself", "Or perhaps universe");
        $mock = array_chunk($mock, 3)
        @endphp
        @foreach($mock as $arr)
        <div class="row">
            @foreach($arr as $str)
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <img src="assets/static/images/samples/motorcycle.jpg" class="card-img-top img-fluid"
                                alt="singleminded">
                            <div class="card-body">
                                <h5 class="card-title">{{ $str }}</h5>
                                <p class="card-text">
                                    Chocolate sesame snaps apple pie danish cupcake sweet roll jujubes tiramisu.Gummies
                                    bonbon apple pie fruitcake icing biscuit apple pie jelly-o sweet roll.
                                </p>
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-primary block ">Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @endforeach
    </div>

    @vite(['resources/js/app.js', 'resources/js/components/dark.js', 'resources/leaflet/leaflet.js', 'resources/js/map.js'])
</body>

</html>
