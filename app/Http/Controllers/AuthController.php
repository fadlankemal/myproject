<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function authenticate(Request $request) {
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)) {
            return redirect('index');
        }
        return redirect('login')->with('error_message', 'Failed to login! Wrong email or pass');
    }

    public function logout() {
        Session::flush();
        Auth::logout();

        return redirect('login');
    }

    public function register_form() {

        return view('auth.register');
    }

    public function register(request $request) {
        $request->validate ([
            'name'      => 'required',
            'email'     => 'required|unique:users',
            'password'  => 'required|min:6|confirmed',
        ], [
            'email.required' => 'ID karyawan harus diisi'
        ]);

        User::create([
            'name'      => $request->input('name'),
            'email'     => $request->input('email'),
            'password'  => Hash::make($request->input('password'))
        ]);

        return redirect('login');
    }
}
