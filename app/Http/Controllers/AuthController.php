<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        // cek apakah login valid
        if(Auth::attempt($credentials)){
            // cek apakah user status nya aktive
            if (Auth::user()->status != 'active'){
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                Session::flash('status', 'failed');
                Session::flash('message', 'Your Account is not activated. Please Contact Admin!');
                return redirect('/login');
            }

            $request->session()->regenerate();
            if (Auth::user()->role_id == 1){
                return redirect('/dashboard');
            }
            if (Auth::user()->role_id == 2){
                return redirect('profile/'.Auth::user()->username);
            }
        }

        Session::flash('status', 'failed');
        Session::flash('message', 'Username or Password is Invalid');
        return redirect('/login');

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');

    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerProcess(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|unique:users|max:255',
            'password' => 'required|max:255',
        ]);

        $request['password'] = Hash::make($request->password);
        $user = User::create($request->all());


        Session::flash('status', 'success');
        Session::flash('message', 'berhasil mendaftar. Hubungi Admin untuk aktivasi Akun');
        return redirect('/register');
    }
}
