<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Detail destinasi</title>
    @vite(['resources/sass/app.scss', 'resources/sass/themes/dark/app-dark.scss'])
    <link rel="shortcut icon" href="{{ asset('assets/static/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/static/images/logo/favicon.png') }}" type="image/png">
</head>

<body>
    @vite('resources/js/initTheme.js')
    
    <div class="container">
        <div class="card mt-4" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('assets/static/images/samples/motorcycle.jpg') }}" class="img-fluid rounded-start" style="height: 100%;object-fit: cover;" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">nama wisata</h5>
                        <p class="card-text">Deskripsi wisata, This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text">Alamat jl salabintana sukabumi</p>
                        <a href="#" class="btn btn-primary"><i class="bi bi-map-fill"></i> Open Maps</a>
                        <p class="card-text"><small class="text-body-secondary"><span class="badge text-bg-secondary">category</span></small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @vite(['resources/js/app.js', 'resources/js/components/dark.js'])
</body>

</html>
