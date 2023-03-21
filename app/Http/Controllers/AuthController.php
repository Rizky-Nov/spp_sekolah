<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function loginAksi(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('petugas')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home')->with('success', 'Berhasil');
        } else {
            if (Auth::guard('siswa')->attempt(['nis' => $request->username, 'password' => $request->password])) {
                $request->session()->regenerate();
                return redirect()->intended('/home')->with('success', "Berhasil");
            } else {
                return redirect('/')->with('toastify', ['danger', "login gagal"]);
            }
        }
    }

    public function logout(Request $request)
    {
        if (Auth::guard('siswa')->check()) {
            Auth::guard('siswa')->logout();
        } else {
            Auth::guard('petugas')->logout();
        }
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}