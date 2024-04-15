<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Reportes AGR | Reportes</title>

    <style>
        footer {
            height: 60px;
            background-color: #004b23;
            color: white;
            text-align: center;
            line-height: 60px;
            position: fixed;
            bottom: 0;
            width: 100%;
            font-size: 9px;
        }

        body {
            margin: 0;
            padding: 0;
        }

        .title {
            text-align: center;
            font-size: 30px;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/reports.css'])
    <title>@yield('titulo')</title>
</head>

<body class="font-sans antialiased"style="background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://productoresdeazucarhonduras.com/wp-content/uploads/2022/08/1920x1100-16.webp'); background-size: cover;  background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <nav  class="navbar navbar-expand-lg " data-bs-theme="dark" style="background-color: #fbac23">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <img src="https://productoresdeazucarhonduras.com/wp-content/uploads/elementor/thumbs/2-1-ptr6xjo4tghogauxsqkxxwrk395sc23efl66d3570w.png"
                                alt="Logo" style="height: 50px; margin-right: 20px;">
                                <a class="navbar-brand" style="color: black; font-size:14px;" href="{{ route('menu') }}">Reportes</a>
                                <a class="navbar-brand" style="color: black; font-size:14px" href="{{ route('users.index') }}">Nuevo Reporte</a>
                        </li>
                    </ul>
                </ul>
            </div>
            
            <div class="d-flex ">
                <ul class="navbar-nav me-auto ">
                    <li class="nav-item dropdown " style="background-color: #e6e6e6; border-radius: 5px; color: black;">
                        @if (Auth::check())
                            <span class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                style="color: black; font-size: 14px" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </span>
                        @endif
                       
                        <ul class="dropdown-menu bg-black dropdown-menu-end ">
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="dropdown-item" style="color: white"
                                        onclick="event.preventDefault(); this.closest('form').submit();"
                                        href="{{ route('logout') }}">Cerrar Sesión</a>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            
            </ul>
        </div>
    </nav>
    <article class="mb-5">
        @yield('content')
    </article>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <footer>
        © 2024 Compañía Azúcarera Tres Valles-CATV
    </footer>
    <script>
        var urlParams = new URLSearchParams(window.location.search);
        var reporte = urlParams.get('reporte');
        document.getElementById('reporte' + reporte).style.display = 'block';
    </script>

</body>

</html>
