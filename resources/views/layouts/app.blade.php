<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,  user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#fff">
    <link rel="icon" href="{{asset('assets/img/logo.jpg')}}" type="photo/icon type">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <script src="{{asset('assets/lib/SPA/turbolinks.min.js')}}" defer data-turbolinks-track="reload"></script>
    <script src="{{asset('assets/lib/SPA/turbolinks.js')}}" defer data-turbolinks-track="reload"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

    <!-- Primary Meta Tags -->
    <title>URL Shortener - Short URLs Free Link Shortener | Donunk</title>
    <meta name="title" content="URL Shortener - Short URLs Free Link Shortener | Donunk">
    <meta name="description" content="Free URL shortener to create perfect URLs for your business. Donunk helps you create and share branded links">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://donunk.com/">
    <meta property="og:title" content="URL Shortener - Short URLs Free Link Shortener | Donunk">
    <meta property="og:description" content="Free URL shortener to create perfect URLs for your business. Donunk helps you create and share branded links">
    <meta property="og:image" content="{{ asset('assets/img/meta.jpg') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://donunk.com/">
    <meta property="twitter:title" content="URL Shortener - Short URLs Free Link Shortener | Donunk">
    <meta property="twitter:description" content="Free URL shortener to create perfect URLs for your business. Donunk helps you create and share branded links">
    <meta property="twitter:image" content="{{ asset('assets/img/meta.jpg') }}">
    <title>Donunk - URL Shortener</title>
    @livewireStyles
</head>

<body>
    <div class="centered col-12 container">
        <div class="glass py-2">
            <nav class="navbar navbar-light bg-transparent p-3">
                <div class="container-fluid">
                    <a class="navbar-brand text-white"> Donunk</a>
                    <div class="d-flex align-items-center">
                        <a href="https://www.paypal.me/codenashwan" target="_blank"
                            class="text-decoration-none mx-2 text-white"><i class="bi bi-cup-straw"></i> Buy Me a
                            Coffee</a>
                    </div>
                </div>
            </nav>

            @yield('content')
            <footer class="text-center text-white my-3">
                <a href="https://www.github.com/codenashwan/donunk" target="_blank" class="text-white text-decoration-none"><i class="bi bi-github mx-2"></i>Fork Me on Github</a>
                <br>
                Made with ❤️ from <a href="https://www.youtube.com/rstacode" target="_blank" class="text-white text-decoration-none">Rstacode</a>
            </footer>
        </div>
    </div>
    <script src="{{ asset('assets/lib/app.js') }}"></script>
    @livewireScripts
</body>

</html>
