<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(request $request)
    {
        $credential = $request->validate(['email' => 'required|email', 'password' => 'required|min:8']);

        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            return redirect()->intended('/catalogo');
        }

        return back()->withErrors([
            'auth_error' => 'Email ou senha incorretos!!'])->onlyInput('email');
    }



    public function logout(Request $request)



    
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('showlogin');
    }

    public function showLogin()
    {
        return view('paginainicial');
    }

}
