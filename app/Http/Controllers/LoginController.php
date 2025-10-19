<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email Wajib di isi!',
            'email.email' => 'Email harus valid!',
            'password.required' => 'Password Wajib di isi!',
        ]);

        $infologin = [
            'email'=> $request->email,
            'password'=> $request->password,
        ];

        if (Auth::attempt($infologin)) {
            return view('/');
            exit();
        } else{
            return redirect('')->withErrors('Email dan Password yang dimasukan tidak sesuai')->withinput();
        }

    }

}
