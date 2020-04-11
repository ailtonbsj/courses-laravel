<?php

namespace estoque\Http\Controllers;

use estoque\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        // Used to create a login test
        // User::create([
        //     'name' => 'user',
        //     'email' => 'user@local.host',
        //     'password' => bcrypt('user')
        // ]);
        return view('login');
    }

    public function auth(Request $req)
    {
        $cred = $req->only('email', 'password');
        $remember = $req->input('lembrar') == 'true' ? true : false;
        if (Auth::attempt($cred, $remember))
            return redirect('produtos');
        return redirect('login')->withInput();
    }
}
