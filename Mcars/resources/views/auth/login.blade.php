@extends('layouts.app')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}" >
<link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Lora|Nanum+Brush+Script|Patua+One" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Lora|Nanum+Brush+Script|Patua+One" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}" >
<div class="container">
    <div class="col-md-12">
        <div class="col-md-5">
            <div id="side-panel">
                <p>One Stop Solution for all <span>Self-Driven Car</span> Rentals <i class="fas fa-arrow-right"></i></p>
            </div>

        </div>
        <div class="col-md-4 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    <div class="container col-md-12" id="login-form">
                        <h1>Login</h1>
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="col-md-12">
                                    <label for="email" class="control-label">E-Mail Address</label>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="col-md-12">

                                    <label for="password">Password</label>
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="col-md-12 btn btn-primary">
                                        Login
                                    </button>
                                </div>
                                <div class="col-md-12">

                                    <a class="btn btn-link col-md-6" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">

    </div>
</div>
@endsection
