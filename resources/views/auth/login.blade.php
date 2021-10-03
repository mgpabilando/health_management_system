@extends('layouts.app')
{{------CUSTOM LOGIN------}}
@section('content')    
    <section class="Login_Section">
        <div class="container log_content">
            <div class="row">           
                <div class="hms-display col-md-6 d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center" id="overlay">
                        <img src="images/HMS1.png" alt="">
                        {{-- <h3 style="text-align:center">Barangay Macawayan Health Management System</h3>   --}}
                    </div>   
                </div>
                
                <div class="hms-login col-md-6 d-flex align-items-center">
                    <div class="form-login p-2 d-flex justify-content-center">
                        <form method="POST" action="{{ route('login') }}">   
                            @if (Session::get('fail'))  
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                {{Session::get('fail')}}
                                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif  

                            @csrf
                            <div class="brgy-logo d-flex align-items-start justify-content-center">
                                <img class="login-user-logo" src="images/macawayan logo.png" alt="Login" width="150" height="150">
                            </div>
                            
                            <div class= "input-group">
                                <i class="fa fa-user icon"></i>
                                <input type="email" class= "form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Email" value="{{ old('email') }}" autocomplete="email" required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class= "input-group">
                                <i class="fa fa-lock icon"></i>
                                <input type="password" class= "form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Password" required autocomplete="password">
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
    @include('Auth.register')    
    @yield('scripts')   
@endsection


