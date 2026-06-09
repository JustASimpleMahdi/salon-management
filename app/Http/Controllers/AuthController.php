<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function loginSubmit(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (!Auth::attempt($validated, true)) {
            return back()->withInput()->withErrors(['login'=>'نام کاربری یا رمز عبور اشتباه است.']);
        }

        $request->session()->regenerate();


        return redirect()->intended(auth()->user()->redirectRoute());
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}
