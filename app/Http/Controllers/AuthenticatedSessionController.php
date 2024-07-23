<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{

    public function create(): View
    {
        return view('auth.login');
    }

    public function store(Request $request): RedirectResponse
    {
        // validation
        $attributes = $request->validate([
            'email' =>[  'required','email' ],
            'password'=> ['required', Password::min(8)]
        ]);

        // attempt to login
        if (!Auth::attempt($attributes))
        {
            // auto redirect to auth.login
            throw ValidationException::withMessages([
                'email' => "sorry! credential don't match",
                'password' => "sorry! credential don't match"
            ]);
        }

        // regenerate the session token
        $request->session()->regenerate();

        return redirect("/jobs");
    }

    public function destroy(): RedirectResponse
    {
        Auth::logout();

        return redirect('/login');
    }
}
