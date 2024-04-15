<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Reportes AGR | Login</title>
</head>


@vite(['resources/css/login.css'])
<style>
    body {
        margin: 0;
        padding: 0;
    }

    .navbar-brand {
        margin-right: 100px;
    }
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
    @media (max-width: 768px) {
        .navbar-brand {
            margin-right: 0;
        }
    }
</style>

<body class="font-sans antialiased">
    <nav class="navbar navbar-expand-lg " data-bs-theme="dark" style="background-color: #fbac23">
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
                            <a class="navbar-brand" style="color: black" href="{{ route('home') }}">Inicio</a>
                        </li>
                    </ul>
            </div>
            @if (Auth::check())
                @if (Auth::user()->isAdmin())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('menu') }}">Reportes</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('menu') }}">Reportes</a>
                    </li>
                @endif
            @else
            @endif

            @if (Auth::check() && Auth::user()->name)
                {{ Auth::user()->name }}
            @else
            @endif

            </span>
            <ul class="dropdown-menu bg-primary dropdown-menu-end ">
                <li><a class="dropdown-item" style="color:rgb(255, 255, 255)"
                        href="{{ route('profile.edit') }}">Perfil</a></li>
                <li>
                    <hr class="dropdown-divider bg-white" style="color: rgb(255, 255, 255)">
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="dropdown-item" style="color: rgb(255, 255, 255);"
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
    <br>
    <div class="card p-4 mx-auto my-4" style="max-width: 500px;">
        <div class="container">
            <!-- Session Status -->
            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <!-- Errors -->
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

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('Correo') }}</label>
                    <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}"
                        required autofocus autocomplete="username">
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">{{ __('Contraseña') }}</label>
                    <input id="password" class="form-control" type="password" name="password" required
                        autocomplete="current-password">
                </div>

                <!-- Remember Me -->
                <div class="mb-3 form-check">
                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                    <label class="form-check-label" for="remember_me">{{ __('Recuerdame') }}</label>
                </div>

                <div class="d-flex justify-content-end">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-muted me-3">
                            {{ __('¿Has olvidado tu contraseña?') }}
                        </a>
                    @endif

                    <button type="submit" id="submit">{{ __('Iniciar Sesion') }}</button>
                </div>
            </form>
        </div>
    </div>
    <br>
    <article class="mb-5">
        @yield('content')
    </article>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <footer>
        © 2024 Compañía Azúcarera Tres Valles-CATV
    </footer>
</body>

</html>
