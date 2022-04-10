<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;

class LoginAuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function postlogin(Request $request){
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(Auth::guard('admin')->attempt($validated)){
            $request->session()->regenerate();
            return redirect('/admin/dashboard');
        }else if(Auth::guard('resepsionis')->attempt($validated)){
            $request->session()->regenerate();
            return redirect('/resepsionis/dashboard');
        }

        return redirect('/login')->with('error','Email atau Password Salah');
    }

    public function logout(){
        Auth::logout();
        session()->flush();
        return redirect('/home');

        // Auth::logout();
        // request()->session()->invalidate();
        // request()->session()->regenerateToken();
        // return redirect('/home');
    }
}
