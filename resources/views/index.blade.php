<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 12 | ErrorSolutionCode</title>
    <link rel="stylesheet" href="{{ url('public/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.css">
</head>
<body>
<div class="container">
    <div class="wrapper">
        <div class="title"><span>Welcome Page</span></div>
        <form>
            <div class="signup-link">Sign In? <a href="{{ url('login') }}">Login</a></div>
            <div class="signup-link">Join Now? <a href="{{ url('registration') }}">Registration</a></div>
        </form>
    </div>
</div>
</body>
</html>
