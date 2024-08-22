<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
    }

    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        } else {
            return redirect()->back()->with('error', 'Email or Password is incorrect.');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // Menghapus sesi pengguna
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/'); 
    }
}
