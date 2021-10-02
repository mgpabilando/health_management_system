@extends('layouts.app')
<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="registerModal" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="registerModal">{{ __('CREATE ACCOUNT') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form method="POST" action="/user">
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                        Session::forget('success');
                    @endphp
                </div>
                @endif
                @csrf
                <div class="modal-body">
                    <div class="personal-info">
                        <p class="info-head text-center fw-bold">Personal Information</p>

                        <div class="row row-space">               
                            <div class="form-group col-6">
                                <label class="control-label" for="fname">First Name:</label>
                                <input type="text" class="form-control" name="fname" value="{{ old('fname') }}">
                                <span class="text-danger">@error('fname'){{ $message }} @enderror</span>
                            </div>

                            <div class="form-group col-6">
                                <label class="control-label" for="lname">Last Name:</label>
                                <input type="text" class="form-control" name="lname" value="{{ old('lname') }}">
                                <span class="text-danger">@error('lname'){{ $message }} @enderror</span>
                            </div>
                        </div>

                        <div class="row row-space"> 
                            <div class="form-group col-6">
                                <label class="control-label" for="address">Address:</label>
                                <input type="text" class="form-control" id="address">
                                <span class="text-danger">@error('address'){{ $message }} @enderror</span>
                            </div>

                            <div class="form-group col-6">
                                <label class="control-label" for="contact">Contact Number:</label>
                                <input type="text" class="form-control" id="contact">
                                <span class="text-danger">@error('contact'){{ $message }} @enderror</span>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="form-group col-6">
                                <label class="control-label" for="bdate">Birthdate:</label>
                                <input type="date" class="form-control" id="bdate">
                                <span class="text-danger">@error('bdate'){{ $message }} @enderror</span>
                            </div>
                            
                            <div class="form-group col-6">
                                <label class="control-label" for="age">Age:</label>
                                <input type="text" class="form-control" id="age">
                                <span class="text-danger">@error('age'){{ $message }} @enderror</span>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="account-info">
                        <p class="info-head text-center fw-bold">Account Information</p>
                        <div class="form-group">
                            <label class="control-label" for="email">Email Address:</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                        </div>

                        <div class="row row-space">
                            <div class="form-group col-6">
                                <label class="control-label" for="password">Password:</label>
                                <input type="password" class="form-control" id="password">
                                <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                            </div>
                            <div class="form-group col-6">
                                <label class="control-label" for="password_confirmation">Confirm Password:</label>
                                <input type="password" class="form-control" id="password_confirmation">
                                <span class="text-danger">@error('password_confirmation'){{ $message }} @enderror</span>
                            </div> 

                            <div class="registrationFormAlert d-flex justify-content-center" id="CheckPasswordMatch"></div>
                        </div>

                        

                        <div class="form-group">
                            <label class="control-label" for="role-id">Register as:</label>
                            <select name="role-id">
                                <option selected>Choose...</option>
                                <option value="1">Nurse</option>
                                <option value="2">Barangay Health Worker</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-block">SIGN UP</button>
                </div>
            </form>
                  
        </div>
    </div>
</div>
@section ('scripts')
    <script>
    function CheckPasswordMatch() {
        var password = $("#password").val();
        var confirmPassword = $("#password_confirmation").val();
        if (password != confirmPassword)
            $("#CheckPasswordMatch").html("Passwords does not match!").css('color', 'red');
        else
            $("#CheckPasswordMatch").html("Passwords match.").css('color', 'green');
    }
    $(document).ready(function () {
       $("#password_confirmation").keyup(CheckPasswordMatch);
    });
    </script>
@endsection