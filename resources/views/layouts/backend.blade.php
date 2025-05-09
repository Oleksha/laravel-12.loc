<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel +91 99415 99815</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js"></script>
    <style>
        body {
            display: flex;
            min-height: 100vh;
            background: #f8f9fa;
        }
        .sidebar {
            width: 250px;
            background: #16a085;
            color: white;
            min-height: 100vh;
            padding-top: 20px;
            position: fixed;
        }
        .sidebar h4 {
            text-align: center;
            padding-bottom: 20px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 15px;
            display: block;
            font-size: 16px;
        }
        .sidebar a:hover, .sidebar a.active {
            background: #1abc9c;
        }
        .content {
            margin-left: 260px;
            padding: 20px;
            width: 100%;
        }
        .navbar {
            background: #1abc9c;
            color: white;
            padding: 10px;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: auto;
        }
        .card {
            box-shadow: 0 2px 4px rgba(0, 0, 0, .1);
            border-radius: 8px;
        }
        .btn-primary {
            background: #1abc9c;
            border: none;
        }
        .btn-primary:hover {
            background: #16a085;
        }
        .table thead {
            background: #16a085;
            color: white;
        }
        .table img {
            width: 50px;
            height: 50px;
            object-fit: cover;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let links = document.querySelectorAll(".sidebar a");
            links.forEach(link => {
                link.addEventListener("click", function () {
                    links.forEach(l => l.classList.remove("active"));
                    this.classList.add("active");
                });
            });
        });
    </script>
</head>
<body>
@include('layouts._sidebar')
@yield('content')
@include('layouts._footer')
</body>
</html>
