<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            $user = Auth::user();
                
            if ($user->alumno) {
                return redirect()->route('alumnos.index');
            }
            if ($user->maestro) {
                return redirect()->route('profesores.index');
            }
            if ($user->administrador) {
                return redirect()->route('administradores.index');
            }
        }

        return redirect()->back()->with('error', 'Correo electrónico o contraseña incorrectos.');
    }
}

