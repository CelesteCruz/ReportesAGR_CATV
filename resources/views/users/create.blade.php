@extends('layouts.visual')

@section('titulo')
    Reportes AGR | Crear Usuario
@endsection
@section('content')
    <div class="container mt-5">
        <h2>Crear Usuario</h2>
        <br>
        @if (session('exito'))
            <div class="alert alert-success alert-dismissible fade show mb-4">
                {{ session('exito') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
            </div>
        @endif
        <div class="card-body">
            <form action="{{ route('users.store') }}" method="POST">

                <div class="form-group mb-3">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="nombre_rol" class="mb-2">Nombre del Usuario:</label>
                        <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" autocomplete="off" required>
                    </div>                                                       

                    <div class="form-group mb-3">
                        <label for="correo" class="form-label">Correo del usuario</label>
                        <input class="form-control" type="email" name="correo_usuario" id="correo">
                    </div>

                    <div class="form-group mb-3">
                        <label for="contraseña_usuario" class="mb-2">Contraseña del Usuario:</label>
                        <input type="password" class="form-control" id="contraseña_usuario" name="contraseña_usuario" required>
                        <button type="button" id="togglePassword" class="btn btn-secondary btn-sm">Mostrar/Ocultar</button>
                    </div>                    

                    <div class="form-group mb-3">
                        <label for="rol" class="mb-2">Rol del Usuario:</label>
                        <select class="form-control" id="rol" name="rol">
                            <option value="Administrador">Administrador</option>
                            <option value="Empleado">Empleado</option>
                        </select>
                    </div>

                    <div class="text-left mb-3">
                        <button type="submit" class="btn" style="background-color: #1e6091;font-size: 14px">Guardar Usuario</button>
                        <a href="{{route('users.index')}}" class="btn btn-warning" style="font-size: 14px">Regresar</a>
                    </div>
                </div>
            </form>
        </div>        
    </div>
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#contraseña_usuario');
    
        togglePassword.addEventListener('click', function (e) {
            // alternar el tipo de atributo
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // alternar el texto del botón
            this.textContent = type === 'password' ? 'Mostrar' : 'Ocultar';
        });
    </script>
@endsection