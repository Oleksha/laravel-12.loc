@extends('layouts.app')
@section('content')
    <div class="container">
        @include('_message')
        <div class="wrapper">
            <div class="title"><span>Forgot Password Page</span></div>
            <form action="{{ url('forgot_post') }}" method="post">
                @csrf
                <div class="row">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" required>
                </div>
                <div class="row button">
                    <input type="submit" value="Forgot Password">
                </div>
                <div class="signup-link">Sign In? <a href="{{ url('login') }}">Login</a></div>
                <div class="signup-link">Join Now? <a href="{{ url('registration') }}">Registration</a></div>
                <div class="signup-link">Welcome Page? <a href="{{ url('/') }}">Welcome Page</a></div>
            </form>
        </div>
    </div>
@endsection
