@extends('layouts.app')
@section('title', 'Login')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="login_box_img">
                <img class="img-fluid" src="{{ asset('assets/login/login.jpg') }}" alt="">
                <div class="hover">
                    <h4>New to our website?</h4>
                    <p>There are advances being made in science and technology everyday, and a good example of
                        this is the</p>
                    <a class="primary-btn" href="{{ route('register') }}">Create an Account</a>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="login_form_inner">
                <h3>Log in to enter</h3>
                <form class="row login_form" action="" method="post" id="input_form" novalidate="novalidate"
                    action="{{ route('login') }}">
                    @csrf
                    <div class="col-md-12 form-group">
                        <input type="email" class="@error('email') border border-danger @enderror form-control"
                            id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}"
                            required />
                        @if ($errors->has('email'))
                            <span class="text-danger float-left">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="Password" class="@error('password') border border-danger @enderror form-control"
                            id="password" name="password" placeholder="Password" />
                        @if ($errors->has('password'))
                            <span class="text-danger float-left">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="col-md-12 form-group">
                        <div class="creat_account">
                            <input type="checkbox" id="f-option2" name="selector">
                            <label for="f-option2">Keep me logged in</label>
                        </div>
                    </div>
                    <div class="col-md-12 form-group">
                        <button type="submit" value="submit" class="primary-btn">Log In</button>
                        <a class='text-decoration-none' href="{{ route('password.request') }}">Forgot Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
