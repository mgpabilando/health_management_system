<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    function index()
    {
        return view('auth.login');
    }

    function customlogin (Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:12',
        ]);

        
        $userinfo = Admin::where('email', '=', $request->email)->first(); 

        if (!$userinfo) {
            //return redirect()->back()->withErrors($userinfo)->withInput($request->all());
            return back()->with('fail', 'We do not recognize your email address');
        }
        else {
            if (Hash::check($request->password, $userinfo->password)) {
                $request->session()->put('LoggedUser', $userinfo->id);
                return redirect('/dashboard');
            }
            else {
                return back()->with('fail','Incorrect Password');
            }
        }
    }



    function homedashboard()
    {
        /* if(Auth::check())
        {
            return view('homedashboard');
        } */
        return view('homedashboard');
        //return redirect("login")->withSuccess('You are not allowed to access');
    }

    function signOut() 
    {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }


}
