<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'naam' => ['required', 'string', 'max:255'],
            'telnummer' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'adres' => ['required', 'string', 'max:255'],
            'land' => ['required', 'string', 'max:255'],
            'postcode' => ['required', 'string', 'max:255'],
            'woonplaats' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'geboortedatum' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'naam' => $request->naam,
            'telnummer' => $request->telnummer,
            'email' => $request->email,
            'adres' => $request->adres,
            'land' => $request->land,
            'postcode' => $request->land,
            'woonplaats' => $request->woonplaats,
            'gender' => $request->gender,
            'geboortedatum' => $request->geboortedatum,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
