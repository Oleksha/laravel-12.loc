@extends('layouts.backend')
@section('content')
    <div class="col-md-12 mt-4">
        <div class="card p-4">
            @include('_message')
            <h5 class="mb-3">Students List</h5>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Date of Birth</th>
                        <th>Registration Date</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($getRecord as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->email }}</td>
                            <td>{{ $value->phone }}</td>
                            <td>{{ $value->address }}</td>
                            <td>{{ date('d-m-Y', strtotime($value->date_of_birth)) }}</td>
                            <td>{{ date('d-m-Y', strtotime($value->created_at)) }}</td>
                            <td>
                                {{--<button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>--}}
                                <a href="{{ url('superadmin/student/delete/' . $value->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $getRecord->links() }}
            </div>
        </div>
    </div>
@endsection
