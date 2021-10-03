<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
        protected function redirectTo(){
            if(Auth::check() && Auth::user()->role_id == 1)
            {
                return route('admin.dashboard');
            } 
            elseif(Auth::check() && Auth::user()->role_id == 2)
            {
                return route('user.dashboard');
            }
        }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {       
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate(request, [
            'email' => 'required|email',
            'password' => 'required|min:6|max:12',
        ]);

        $userinfo = User::where('email', '=', $request->email)->first(); 

        if (!userinfo) {
            //return redirect()->back()->withErrors($userinfo)->withInput($request->all());
            return back()->with('fail', 'We do not recognize your email address');
        }
        else {
            if (Hash::check($request->password, $userinfo->password)) {
                $request->session()->put('LoggedUser', $userinfo->id);
                
                if (auth()->user() -> role_id == 1 ) {
                    return redirect()->route('homedashboard');
                }
                elseif (auth()->user() -> role_id == 2 ) {
                    return redirect()->route('homedashboard');
                }
                
            }
            else {
                return back()->with('fail','Incorrect Password');
            }
        } 
    }
}
