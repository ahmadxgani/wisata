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
                    <img src="{{ asset('storage/image/' . $destination->photo_path) }}" class="img-fluid rounded-start" style="height: 100%;object-fit: cover;" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $destination->name }}</h5>
                        <p class="card-text">{{ $destination->description }}</p>
                        <p class="card-text">{{ $destination->address }}</p>
                        <a href="{{ $destination->link }}" class="btn btn-info fw-semibold btn-sm"><i class="bi bi-map-fill"></i> Open Maps</a>
                        <p class="card-text"><small class="text-body-success"><span class="badge text-bg-success">{{ $destination->category->name }}</span></small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @vite(['resources/js/app.js', 'resources/js/components/dark.js'])
</body>

</html>
