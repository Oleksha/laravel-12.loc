@extends('layouts.app')
@section('content')
    <div class="container">
        <span style="color: yellow;">{{ $errors->first('email') }}<br></span>
        <span style="color: red;">{{ $errors->first('password') }}<br></span>
        <span style="color: red;">{{ $errors->first('confirm_password') }}<br></span>
        @include('_message')
        <div class="wrapper">
            <div class="title"><span>Registration Page</span></div>
            <form action="{{ url('registration_post') }}" method="post">
                @csrf
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="text" name="name" placeholder="Username" value="{{ old('name') }}" required>
                </div>
                <div class="row">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                </div>
                <div class="row">
                    <select name="is_role" class="select-box" required>
                        <option value="">Select Role</option>
                        <option value="2" {{ old('is_role') == '2' ? 'selected' : '' }}>Super Admin</option>
                        <option value="1" {{ old('is_role') == '1' ? 'selected' : '' }}>Admin</option>
                        <option value="0" {{ old('is_role') == '0' ? 'selected' : '' }}>User</option>
                    </select>
                </div>
                <div class="row button">
                    <input type="submit" value="Registration">
                </div>
                <div class="signup-link">Sign In? <a href="{{ url('login') }}">Login</a></div>
                <div class="signup-link">Welcome Page? <a href="{{ url('/') }}">Welcome Page</a></div>
            </form>
        </div>
    </div>
@endsection
