@extends('layouts.login')
@section('title', 'Register')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="login_box_img">
                <img class="img-fluid" src="{{ asset('assets/login/login.jpg') }}" alt="">
                <div class="hover">
                    <h4>New to our website?</h4>
                    <p>There are advances being made in science and technology everyday, and a good example of
                        this is the</p>
                    <a class="primary-btn" href="{{ route('login') }}">I Am Already Member</a>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="login_form_inner pt-5">
                <h3>Register to enter</h3>
                <form class="row login_form" action="" method="post" id="input_form" novalidate="novalidate"
                    action="{{ route('register') }}">
                    @csrf
                    <div class="col-md-12 form-group">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                        <input type="text" class="form-control @error('name') border border-danger @enderror"
                            id="name" name="name" placeholder="Enter your full name" value="{{ old('name') }}" />
                        @if ($errors->has('email'))
                            <span class="text-danger float-left">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="email" class="@error('email') border border-danger @enderror form-control"
                            id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" />
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
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            placeholder="Confirm Pssword" />
                    </div>
                    <div class="col-md-12 form-group">
                        <button type="submit" value="submit" class="primary-btn">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
