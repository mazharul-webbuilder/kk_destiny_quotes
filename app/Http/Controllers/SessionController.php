<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function register()
    {
        return view('front.account.register');
    }

    public function createUser(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = User::create($request->all());


        Auth::login($user);

        return redirect('/');
    }

    public function login()
    {
        return view('front.account.login');
    }

    public function loginToSession(Request $request)
    {
        $request->validate([

            'email' => 'required|email|max:255',
            'password' => 'required|min:6',

        ]);

        $user = User::where('email', $request->email)->where('password', $request->password)->first();

        if (Auth::login($user))
        {
            return redirect('/');
        }

        else
        {
            return redirect()->back();
        }

    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
