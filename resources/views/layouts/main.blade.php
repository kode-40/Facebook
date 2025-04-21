<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YUe2LzesAfftltw+PEaao2tjU/QATaW/rOitAq67e0CT0Zi2VVRL0oC4+gAaeBKu" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('index.css') }}">
    @vite(['resources/js/app.js'])
</head>

<body class="bg-light">
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3 d-flex align-items-center justify-content-center gap-3">
                    <a href="/"><i class="bi bi-facebook fs-1 text"></i></a>
                    <div class="input-group">
                        <input type="text" class="form-control rounded-5" placeholder="Cari di Facebook"
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <nav class="col-6 d-flex align-items-center justify-content-center gap-5">
                    <x-sidebar-link-kiri class="bi-house-door-fill" title="Home" link="{{ route('register') }}">
                        </x-sidebar-link-kiri>
                    <x-sidebar-link-kiri class="bi-people-fill" title="Friends" link="{{ route('login') }}">
                        </x-sidebar-link-kiri>
                    <x-sidebar-link-kiri class="bi-house-door-fill" title="Home" link="{{ route('register') }}">
                        </x-sidebar-link-kiri>
                    <x-sidebar-link-kiri class="bi-people-fill" title="Friends" link="{{ route('login') }}">
                        </x-sidebar-link-kiri>
                    <x-sidebar-link-kiri class="bi-house-door-fill" title="Home" link="{{ route('register') }}">
                        </x-sidebar-link-kiri>                
                </nav>
                <div class="col-3 d-flex align-items-center justify-content-center gap-3">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <a href="/"><i class="bi bi-person-circle fs-2 text"></i></a>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid mt-4">
        <div class="row">
            @yield('content')
        </div>
    </div>
</body>

</html>