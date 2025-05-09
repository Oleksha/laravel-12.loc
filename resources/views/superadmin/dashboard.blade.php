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
<div class="sidebar">
    <h4>Admin Panel</h4>
    <ul class="nav flex-column">
        <li class="nav-item"><a href="#" class="nav-link active"><i class="fa fa-tachometer-alt"></i> Dashboard</a></li>
        <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-user"></i> Profile</a></li>
        <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-list"></i> List User</a></li>
        <li class="nav-item"><a href="{{ url('logout') }}" class="nav-link"><i class="fa fa-sign-out-alt"></i> Logout</a></li>
    </ul>
</div>
<div class="content">
    <nav class="navbar">
        <span>Super Admin Dashboard</span>
        <a href="#"><i class="fa fa-user"></i> Profile</a>
    </nav>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0">Add/Edit Item</h5>
                        <button class="btn btn-success" onclick="document.getElementById('itemForm').reset();">
                            <i class="fa fa-plus"></i> New Form
                        </button>
                    </div>
                    <form action="#" id="itemForm">
                        <div class="mb-3 row">
                            <label for="name" class="col-md-3 col-form-label">Name:</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="name" placeholder="Enter Name" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="email" class="col-md-3 col-form-label">Email:</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" id="email" placeholder="Enter Email" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="role" class="col-md-3 col-form-label">Role:</label>
                            <div class="col-md-9">
                                <select name="" id="role" class="form-select">
                                    <option selected>Choose...</option>
                                    <option value="admin">Admin</option>
                                    <option value="editor">Editor</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="image" class="col-md-3 col-form-label">Image:</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" id="image">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <div class="card p-4">
                    <h5 class="mb-3">Data Table</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>john@example.com</td>
                                <td>Admin</td>
                                <td><img src="https://placehold.co/50" alt="John's Image"></td>
                                <td>
                                    <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Jane Doe</td>
                                <td>jane@example.com</td>
                                <td>User</td>
                                <td><img src="https://placehold.co/50" alt="Jane's Image"></td>
                                <td>
                                    <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
{{--
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Super Admin Dashboard</span></div>
            <form action="">
                <div class="row">
                    <p><b>Name - </b>{{ $getRecord->name }}</p>
                    <p><b>Email - </b>{{ $getRecord->email }}</p>
                </div>
                <div class="signup-link">Logout? <a href="{{ url('logout') }}">Logout</a></div>
                <div class="signup-link">Home Page? <a href="{{ url('/') }}">Welcome Page (Home)</a></div>
            </form>
        </div>
    </div>
@endsection
--}}
