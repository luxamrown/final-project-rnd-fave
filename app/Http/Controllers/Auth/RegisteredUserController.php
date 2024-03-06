<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required,string' ,'email' ,'max:255', 'unique:users', 'ends_with:@gmail.com'],
            'phoneNumber' => ['required','string','regex:/^08[0-9]{8,11}$/'], 
            'dateOfBirth' =>['required','date_format:d-m-Y'],
            'password' => ['required', 'string', 'min:8', 'confirmed', 'regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).+$/'],
            'role' => ['required','string','in:User']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phoneNumber'=> $request->phoneNumber,
            'dateOfBirth'=> $request->dateOfBirth,
            'password' => Hash::make($request->password),
            'role' => 'User'
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
