<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;

class loginController extends Controller
{

    public function showLoginForm()
    {
        return view('login'); // Asegúrate que esta vista existe
    }

    public function guardalogin(Request $request)
    {
        // Validación básica
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Throttle key personalizado
        $throttleKey = Str::lower($request->email) . '|' . $request->ip();

        // Verificar intentos
        if (RateLimiter::tooManyAttempts($throttleKey, 3)) {
            $seconds = RateLimiter::availableIn($throttleKey);
            return back()->withErrors(['credenciales' => "Demasiados intentos. Espere $seconds segundos."]);
        }

        // Buscar usuario manualmente
        $user = \App\Models\usuarios::where('email', $request->email)->first();

        // Verificar existencia y contraseña
        if (!$user) {
            RateLimiter::hit($throttleKey);
            return back()->withErrors(['credenciales' => 'Credenciales incorrectas.']);
        }

        // Autenticación manual
        Auth::login($user, $request->filled('remember'));

        // Regenerar sesión y limpiar intentos
        $request->session()->regenerate();
        RateLimiter::clear($throttleKey);

        return redirect()->intended(route('hpView'));
    }

    private function throttleKey(Request $request): string
    {
        return Str::transliterate(
            Str::lower($request->email) . '|' . $request->ip()
        );
    }
}
