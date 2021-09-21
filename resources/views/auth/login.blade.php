@extends('layouts.app')
{{------CUSTOM LOGIN------}}
@section('content')     
        {{-- @if (Session::get('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

        @if (Session::get('fail'))
            <div class="alert alert-danger">
                {{Session::get('fail')}}
            </div>
        @endif  --}}

    <section class="Login_Section">
        <div class="container log_content">
            <div class="row">           
                <div class="hms-display col-md-6 d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center" id="overlay">
                        <h3 style="text-align:center">Barangay Macawayan Health Management System</h3>  
                    </div>   
                </div>
                
                <div class="hms-login col-md-6 d-flex align-items-center">
                    <div class="form-login p-2 d-flex justify-content-center">

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>
                                        {{$error}}
                                    </li>
                                    @endforeach
                                </ul>      
                            </div>
                        @endif  

                        @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <p>{{\Session::get('Success')}}</p>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            
                            <div class="brgy-logo d-flex align-items-start justify-content-center">
                                <img class="login-user-logo" src="images/macawayan logo.png" alt="Login" width="150" height="150">
                            </div>
                            
                            <div class= "input-group">
                                <i class="fa fa-user icon"></i>
                                <input type="email" class= "form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Username" value="{{ old('email') }}" autocomplete="email" autofocus required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class= "input-group">
                                <i class="fa fa-lock icon"></i>
                                <input type="password" class= "form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Password" required autocomplete="password" autofocus>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            {{-- <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div> --}}
                            
                                <div class="log-forpass d-flex justify-content-end pe-5">
                                    <span class="forgotpass">
                                        <a href="#">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    </span>
                                </div>                        

                            <button type="submit" class="btn">
                                LOGIN
                            </button>

                            <p>Not a Member? 
                                <a class="form-signup"
                                    style="cursor: pointer"
                                    data-bs-toggle="modal" 
                                    data-bs-target="#registerModal">{{ __('Register') }}
                                </a>                            
                            </p>
                        </form>
                    </div>                   
                </div>
            </div>   
    </section>

<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="registerModal" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModal">{{ __('Create Account') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>

                <form method="POST" action="{{action('\App\Http\Controllers\UsersController@store')}}">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group row">
                            <label for="nameInput" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
    
                            <div class="col-md-6">
                                <input id="nameInput" type="text" class="form-control" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>
    
                                <span class="invalid-feedback" role="alert" id="nameError">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
    
                        <div class="form-group row">
                            <label for="emailInput" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
    
                            <div class="col-md-6">
                                <input id="emailInput" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                <span class="invalid-feedback" role="alert" id="emailError">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
    
                        <div class="form-group row">
                            <label for="passwordInput" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
    
                            <div class="col-md-6">
                                <input id="passwordInput" type="password" class="form-control" name="password" required autocomplete="new-password">
    
                                <span class="invalid-feedback" role="alert" id="passwordError">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
    
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
    
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                        </div>
                    </div>  
                </form>  
        </div>
    </div>
@endsection

