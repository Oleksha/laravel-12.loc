@extends('layouts.backend')
@section('content')
    <div class="container">
        <form method="get" id="itemForm" class="d-flex align-items-center flex-wrap">
            <div class="me-2 mb-2">
                <input type="text" name="id" value="{{ Request()->id }}" id="id" class="form-control" placeholder="ID">
            </div>
            <div class="me-2 mb-2">
                <input type="text" name="name" value="{{ Request()->name }}" id="name" class="form-control" placeholder="Name">
            </div>
            <div class="me-2 mb-2">
                <input type="text" name="email" value="{{ Request()->email }}" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="me-2 mb-2">
                <input type="date" name="created_at" value="{{ Request()->created_at }}" id="created_at" class="form-control" placeholder="Created At">
            </div>
            <div class="me-2 mb-2">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
            <div class="mb-2">
                <a href="{{ url('superadmin/user/list') }}" class="btn btn-warning">Reset</a>
            </div>
        </form>
    </div>
    <div class="col-md-12 mt-4">
        <div class="card p-4">
            @include('_message')
            <h5 class="mb-3">Users List</h5>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($getRecord as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->email }}</td>
                            <td>{{ date('d-m-Y', strtotime($value->created_at)) }}</td>
                            <td>
                                {{--<button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>--}}
                                <a href="{{ url('superadmin/user/delete/' . $value->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="100%">No Record Found ...</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
