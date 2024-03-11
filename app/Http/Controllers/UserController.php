<?php

namespace App\Http\Controllers;

use App\Models\User;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function loginAction(Request $request) {

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $authData = User::where('email', $request->email)->first();
        
        if($authData){
            if (Hash::check($request->password, $authData->password)) {
                return view('/welcome', compact('authData'));

            } 
            return back()->withErrors('Email or Password Incorrect', 'password');
        } else {
            return back()->withErrors('Email or Password Incorrect', 'password');
        }
    }
}
