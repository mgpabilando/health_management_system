<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('Auth.login');
    }

    public function customlogin (Request $request)
    {
        $request->validate
        ([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) 
        {
            return redirect()->intended('homedashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function homedashboard()
    {
        if(Auth::check())
        {
            return view('Auth.homedashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function signOut() 
    {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }


}
