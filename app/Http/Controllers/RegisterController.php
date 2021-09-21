<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class RegisterController extends Controller
{
    public function registration()
    {
        return view('Auth.register');
    }

    public function customRegistration(Request $request)
    {  
       
        $request->validate
        ([
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:6|max:12', 
            'password-confirm' => 'required',
        ]);
        
        //Insert data into database
        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = $request->password;
        $save = $admin->save();

        if($save)
        {
            return back() -> with('successful', 'New user has been successfully added');
        }
        else
        {
            return back() -> with('fail', 'Something went wrong, try again later');
        }


        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("Auth.homedashboard")->withSuccess('You have signed-in');
    }
}
