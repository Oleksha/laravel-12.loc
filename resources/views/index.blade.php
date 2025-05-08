@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Welcome Page</span></div>
            <form>
                @if(Auth::check())
                    @if (Auth::user()->is_role ==  2)
                        <div class="signup-link">Super Admin Already Login
                            <a href="{{ url('superadmin/dashboard') }}">Dashboard</a>
                        </div>
                    @elseif (Auth::user()->is_role ==  1)
                        <div class="signup-link">Admin Already Login
                            <a href="{{ url('admin/dashboard') }}">Dashboard</a>
                        </div>
                    @elseif (Auth::user()->is_role ==  0)
                        <div class="signup-link">User Already Login
                            <a href="{{ url('user/dashboard') }}">Dashboard</a>
                        </div>
                    @endif
                @else
                    <div class="signup-link">Sign In? <a href="{{ url('login') }}">Login</a></div>
                    <div class="signup-link">Join Now? <a href="{{ url('registration') }}">Registration</a></div>
                @endif
            </form>
        </div>
    </div>
@endsection
