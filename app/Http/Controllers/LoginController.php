<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title'=>'Login'
        ]);
    }

    public function auth(Request $request)
    {
        $data = $request->validate([
            'username'=>'required|min:5|max:100',
            'password'=>'required'
        ]);

        if(Auth::attempt($data)){
            $request->session()->regenerate();
                if(auth()->user()->role == "admin"){
                    return redirect()->intended('/admin');
                }elseif(auth()->user()->role == "manajer"){
                    return redirect()->intended('/manajer');
                }else{
                    return redirect('/kasir');
                }
        }

        return back()->with('failed', 'Login Gagal !');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
