<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// User Model
use App\Models\User;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $user = User::where('userEmail', $request->get('email'))->first();

        if ($user->count() == 0) {
            return back()->withErrors([
                'email' => 'Usuario incorrecto',
            ]);
        }

        if ((int)$user->userPasword === (int)$request->get('password')) {
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'Contraseña incorrecta',
        ]);
    }
}
