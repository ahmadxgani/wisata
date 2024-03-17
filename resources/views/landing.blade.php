<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/sass/app.scss', 'resources/sass/themes/dark/app-dark.scss'])
    <link rel="shortcut icon" href="{{ asset('assets/static/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/static/images/logo/favicon.png') }}" type="image/png">
</head>

<body>
    @vite('resources/js/initTheme.js')
    <div id="app">
       <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <h1>Welcome to Home page</h1>
        </div>
    </div>

    @vite(['resources/js/app.js', 'resources/js/components/dark.js'])
    {{-- <script src="assets/js/app.js" type="module"></script> --}}

</body>

</html>
