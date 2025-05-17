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
                <input type="date" name="joining_date" value="{{ Request()->joining_date }}" id="joining_date" class="form-control">
            </div>
            <div class="me-2 mb-2">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
            <div class="mb-2">
                <a href="{{ url('superadmin/teachers/list') }}" class="btn btn-warning">Reset</a>
            </div>
        </form>
    </div>
    <div class="col-md-12 mt-4">
        <div class="card p-4">
            @include('_message')
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">Teachers List</h5>
                <a href="{{ url('superadmin/teachers/add') }}" class="btn btn-success">
                    <i class="fa fa-plus"></i> Add Teacher
                </a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Specialization</th>
                        <th>Joining Date</th>
                        <th>Created Date</th>
                        <th>Updated Date</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($getRecord as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->email }}</td>
                            <td>{{ $value->phone }}</td>
                            <td>{{ $value->specialization }}</td>
                            <td>{{ date('d-m-Y', strtotime($value->joining_date)) }}</td>
                            <td>{{ date('d-m-Y', strtotime($value->created_at)) }}</td>
                            <td>{{ date('d-m-Y', strtotime($value->updated_at)) }}</td>
                            <td style="min-width: 80px;">
                                <a href="{{ url('superadmin/teachers/edit/' . $value->id) }}"
                                   class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                <a href="{{ url('superadmin/teachers/delete/' . $value->id) }}"
                                   class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="100%">No Record Found ...</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {{ $getRecord->links() }}
            </div>
        </div>
    </div>
@endsection
