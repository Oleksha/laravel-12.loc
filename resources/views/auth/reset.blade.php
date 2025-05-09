@extends('layouts.app')
@section('content')
    <div class="container">
        <span style="color: red;">{{ $errors->first('password') }}<br></span>
        <span style="color: red;">{{ $errors->first('confirm_password') }}<br></span>
        @include('_message')
        <div class="wrapper">
            <div class="title"><span>Reset Password Page</span></div>
            <form action="{{ url('reset_post/' . $token) }}" method="post">
                @csrf
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                </div>
                <div class="row button">
                    <input type="submit" value="Reset Password">
                </div>
                {{--<div class="signup-link">Sign In? <a href="{{ url('login') }}">Login</a></div>
                <div class="signup-link">Join Now? <a href="{{ url('registration') }}">Registration</a></div>
                <div class="signup-link">Welcome Page? <a href="{{ url('/') }}">Welcome Page</a></div>--}}
            </form>
        </div>
    </div>
@endsection
