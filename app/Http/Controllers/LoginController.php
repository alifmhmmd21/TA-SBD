<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function viewLogin()
    {
        return view('login.login');
    }

    public function auth(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Langsung jalankan query untuk admin
        $admin = DB::table('admin')->where('username', $request->username)->first();

        if (!$admin) {
            return view('login.login')->with(['fail'=> 'Admin not found']);
        }

        if ($admin->password !== $request->password) {
            return view('login.login')->with(['fail'=> 'Wrong Password']);
        }

        session(['user' => $admin]);

        return redirect('/barang');
    }

}

