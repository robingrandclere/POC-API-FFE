<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request){

        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)){
            Session::regenerate();
            return response()->json(['succes' => true]);
        }

        throw ValidationException::withMessages([
            'email' => 'auth failed'
        ]);
    }
}

