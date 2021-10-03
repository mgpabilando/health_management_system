<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:user'],
            'password' => ['required|min:6|max:12'], 
            'confirmation_password' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'bdate' => $data['bdate'],
            'address' => $data['address'],
            'contact' => $data['contact'],
            'age' => $data['age'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['role_id'],
        ]);
    }

    function register(Request $request){
        $request->validate
        ([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:12', 
            'password_confirmation' => 'required',
        ]);
        
        //Insert data into database
        $user = new User;
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->age = $request->age;
        $user->bdate = $request->bdate;
        $user->address = $request->address;
        $user->contact = $request->contact;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role_id = $request->role_id;
        $save = $user->save();

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
