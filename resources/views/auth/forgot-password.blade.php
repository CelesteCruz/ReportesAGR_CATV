<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Reportes AGR | Home</title>

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
        }

        body {
            margin: 0;
            padding: 0;
        }

        .navbar-brand {
            margin-right: 100px;
        }

        @media (max-width: 768px) {
            .navbar-brand {
                margin-right: 0;
            }
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/forgotpass.css'])
    <title>@yield('titulo')</title>
</head>

<body class="font-sans antialiased" style="background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://productoresdeazucarhonduras.com/wp-content/uploads/2022/08/1920x1100-16.webp'); background-size: cover; background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <nav class="navbar navbar-expand-lg " data-bs-theme="dark" style="background-color: #fbac23">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02"
                aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <img src="https://productoresdeazucarhonduras.com/wp-content/uploads/elementor/thumbs/2-1-ptr6xjo4tghogauxsqkxxwrk395sc23efl66d3570w.png"
                                alt="Logo" style="height: 50px; margin-right: 20px;">
                            <a class="navbar-brand" style="color: black; font-size: 14px;" href="{{ route('home') }}">Inicio</a>
                        </li>
                    </ul>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <div class="card p-4 mx-auto my-4" style="max-width: 500px;">
        <div class="container">
            <div class="mb-4 text-muted text-sm">
                ¿Olvido su contraseña? Escriba su dirección de correo electrónico y enviaremos un enlace para
                restablecer su contraseña.
            </div>
            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <!-- Validation Errors -->
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (!session('status'))
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('Correo Electrónico') }}</label>
                        <input id="email" class="form-control" type="email" name="email"
                            value="{{ old('email') }}" required autofocus>
                    </div>

                    <div class="d-flex justify-content-end mt-4">
                        <button type="submit" id="submit">{{ __('Enviar Enlace de Restablecimiento') }}</button>
                    </div>
                </form>
            @endif
        </div>
    </div>
    <br>
    <br>
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

</body>
