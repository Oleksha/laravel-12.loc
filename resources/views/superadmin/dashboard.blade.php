@extends('layouts.backend')
@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-md-3">
                <a href="{{ url('superadmin/user/list') }}" style="text-decoration: none;">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-header">Users</div>
                        <div class="card-body">
                            <h5 class="card-title">1</h5>
                            <p class="card-text">Total Users</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ url('superadmin/students/list') }}" style="text-decoration: none;">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-header">Students</div>
                        <div class="card-body">
                            <h5 class="card-title">1</h5>
                            <p class="card-text">Total Students</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ url('superadmin/teachers/list') }}" style="text-decoration: none;">
                    <div class="card text-black bg-warning mb-3">
                        <div class="card-header">Teachers</div>
                        <div class="card-body">
                            <h5 class="card-title">10</h5>
                            <p class="card-text">Total Teachers</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ url('superadmin/subjects/list') }}" style="text-decoration: none;">
                    <div class="card text-black bg-info mb-3">
                        <div class="card-header">Subjects</div>
                        <div class="card-body">
                            <h5 class="card-title">8</h5>
                            <p class="card-text">Total Subjects</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ url('superadmin/classes/list') }}" style="text-decoration: none;">
                    <div class="card text-white bg-danger mb-3">
                        <div class="card-header">Classes</div>
                        <div class="card-body">
                            <h5 class="card-title">20</h5>
                            <p class="card-text">Total Classes</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ url('superadmin/enrollments/list') }}" style="text-decoration: none;">
                    <div class="card text-white bg-secondary mb-3">
                        <div class="card-header">Enrollments</div>
                        <div class="card-body">
                            <h5 class="card-title">20</h5>
                            <p class="card-text">Total Enrollments</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ url('superadmin/payments/list') }}" style="text-decoration: none;">
                    <div class="card text-white bg-dark mb-3">
                        <div class="card-header">Payments</div>
                        <div class="card-body">
                            <h5 class="card-title">20</h5>
                            <p class="card-text">Total Payments</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ url('superadmin/attendance/list') }}" style="text-decoration: none;">
                    <div class="card text-black bg-light mb-3">
                        <div class="card-header">Attendance</div>
                        <div class="card-body">
                            <h5 class="card-title">20</h5>
                            <p class="card-text">Total Attendance</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    {{--
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
    </div>--}}
@endsection
