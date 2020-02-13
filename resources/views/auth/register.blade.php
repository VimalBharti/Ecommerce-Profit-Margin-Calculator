@extends('layouts.authLayout')

@section('content')
<div class="container-login100" style="background-image: url('{{asset('images/home-banner.jpg')}}');background-size: cover">
    <div class="wrap-login100 p-l-55 pr-55 p-t-80 p-b-30">
        <form class="login100-form validate-form" action="{{ route('register') }}" method="POST">
            @csrf
            <span class="login100-form-title p-b-37 mb-5">
                Create new account
            </span>

            <div class="wrap-input100 validate-input m-b-20" data-validate="Enter your name">
                <input class="input100 @error('name') is-invalid @enderror" type="text" name="name" placeholder="Enter Your Name" required autocomplete="name" autofocus>
                <span class="focus-input100"></span>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="wrap-input100 validate-input m-b-20" data-validate="Enter email">
                <input class="input100 @error('email') is-invalid @enderror" type="text" name="email" placeholder="Enter Your Email" required>
                <span class="focus-input100"></span>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
                <input class="input100 @error('password') is-invalid @enderror" type="password" name="password" required placeholder="Enter Password">
                <span class="focus-input100"></span>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="wrap-input100 validate-input m-b-25" data-validate = "Confirm Password">
                <input class="input100" type="password" name="password_confirmation" required placeholder="Confirm Password">
                <span class="focus-input100"></span>
            </div>

            <div class="container-login100-form-btn mt-5 mb-4">
                <button class="login100-form-btn" type="submit">
                    Sign In
                </button>
            </div>

            <div class="text-center">
                <a href="{{route('register')}}" class="register-text">
                    Create new account
                </a>
            </div>
        </form>

        
    </div>
</div>
@endsection
