<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        try {

            $request->validate([
                'nombre_usuario' => 'required|string|min:2',
                'correo_usuario' => 'required|email',
                'contraseña_usuario' => 'required|min:8|max:50',
                'rol' => 'required|string',
            ]);

            $usuario = new User();
            $usuario->name = $request->input('nombre_usuario');
            $usuario->email = $request->input('correo_usuario');
            $usuario->password = $request->input('contraseña_usuario');
            $usuario->rol = $request->input('rol');
            $usuario->save();

            return redirect()->route('users.create')->with('exito', 'El usuario se ha guardado correctamente');
        } catch (\Illuminate\Database\QueryException $ex) {

            $errorCode = $ex->getCode();

            switch ($errorCode) {
                case 23000:
                    $mensajeError = 'El correo proporcionado ya está en uso.';
                    break;
                default:
                    $mensajeError = 'Ocurrió un error durante la insercion.';
                    break;
            }

            $errors = ['base_de_datos' => $mensajeError];
            return redirect()->route('users.create')->withErrors($errors);
        }
    }

    public function index()
    {
        $users = User::paginate(5);
        $listaNoFilas = [5, 10, 25, 50, 100];
        $noFilas = 5;
        return view('users.index', compact('users', 'listaNoFilas', 'noFilas'));
    }


    public function create()
    {
        $usuarios = User::all();
        return view('users.create', compact('usuarios'));
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }


    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('exito', 'El usuario se ha eliminado correctamente');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        try {

            $request->validate([
                'nombre_usuario' => 'required|string|min:2',
                'correo_usuario' => 'required|email',
                'rol' => 'required|string',

            ]);

            $user->update([
                'name' => $request->input('nombre_usuario'),
                'email' => $request->input('correo_usuario'),
                'rol' => $request->input('rol'),
            ]);

            return redirect()->route('users.index')->with('exito', 'El usuario se ha correctamente');
        } catch (\Illuminate\Database\QueryException $ex) {

            $errorCode = $ex->getCode();

            switch ($errorCode) {
                case 23000:
                    $mensajeError = 'El correo proporcionado ya está en uso.';
                    break;
                default:
                    $mensajeError = 'Ocurrió un error durante la actualización.';
                    break;
            }

            $errors = ['base_de_datos' => $mensajeError];
            return redirect()->route('users.edit', compact('user', 'request'))->withErrors($errors);
        }
    }
}
