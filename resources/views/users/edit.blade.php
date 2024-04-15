@extends('layouts.visual')

@section('titulo')
    Reportes AGR | Editar Usuario
@endsection
@section('content')
    <div class="container mt-5">
        <h2>Editar Usuario</h2>
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
            <form action="{{ route('users.update', $user->id) }}" method="POST">

                <div class="form-group mb-3">
                    @csrf
                    @method('PUT')
                    <div class="form-group  mb-3">
                        <label for="nombre_rol" class="mb-2">Nombre del Usuario:</label>
                        <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario"
                            value="{{ $user->name }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="correo" class="form-label">Correo del usuario</label>
                        <input class="form-control" type="email" name="correo_usuario" id="correo"
                            value="{{ $user->email }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="rol" class="mb-2">Rol del Usuario:</label>
                        <select class="form-control" id="rol" name="rol">
                            <option value="Admin" {{ $user->rol == 'Admin' ? 'selected' : '' }}>Admin</option>
                            <option value="Empleado" {{ $user->rol == 'Empleado' ? 'selected' : '' }}>Empleado
                            </option>
                        </select>
                    </div>

                    <div class="text-left mb-3">
                        <button type="submit" class="btn" style="background-color: #1e6091;font-size: 14px">Actualizar Usuario</button>
                        <a href="{{ route('users.index') }}" class="btn btn-warning" style="font-size: 14px">Regresar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
@endsection
