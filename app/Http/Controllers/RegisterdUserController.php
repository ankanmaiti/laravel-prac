<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;

class RegisterdUserController extends Controller
{
    public function create(): View
    {
       return view('auth.register');
    }

    public function store(Request $request): RedirectResponse
    {
        // validation
        $attributes = $request->validate([
            'name' =>[  'required','min:5' ],
            'email' =>[  'required','email' ],
            'password'=> ['required','confirmed', Password::min(8)]
        ]);

        // create & persist
        $user = User::create($attributes);

        // login
        Auth::login($user);

        // redirect
        return redirect("/jobs");
    }
}
