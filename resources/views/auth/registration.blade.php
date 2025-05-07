<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration | ErrorSolutionCode</title>
    <link rel="stylesheet" href="{{ url('public/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.css">
</head>
<body>
<div class="container">
    <div class="wrapper">
        <div class="title"><span>Registration Page</span></div>
        <form>
            <div class="row">
                <i class="fas fa-user"></i>
                <input type="text" name="" placeholder="Username" required>
            </div>
            <div class="row">
                <i class="fas fa-envelope"></i>
                <input type="email" name="" placeholder="Email" required>
            </div>
            <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" name="" placeholder="Password" required>
            </div>
            <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" name="" placeholder="Confirm Password" required>
            </div>
            <div class="row">
                <select name="" id="" class="select-box" required>
                    <option value="">Select Role</option>
                    <option value="2">Super Admin</option>
                    <option value="1">Admin</option>
                    <option value="0">User</option>
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
</body>
</html>
