@extends('layouts.backend')
@section('content')
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
@endsection
