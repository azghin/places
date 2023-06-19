<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


class loginController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        $email = $request->email;
        $password = $request->password;

        $credentials = ['email' => $email , "password" => $password];
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect('/admin');
        }else{
            return back()->withErrors([
                'email'=> 'Email ou mot de passe incorrect.'
            ]);

        };
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect('/');
    }
}
