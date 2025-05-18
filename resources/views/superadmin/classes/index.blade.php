@extends('layouts.backend')
@section('content')
    {{--<div class="container">
        <form method="get" id="itemForm" class="d-flex align-items-center flex-wrap">
            <div class="me-2 mb-2">
                <input type="text" name="id" value="{{ Request()->id }}" id="id" class="form-control" placeholder="ID">
            </div>
            <div class="me-2 mb-2">
                <input type="text" name="name" value="{{ Request()->name }}" id="name" class="form-control" placeholder="Name">
            </div>
            <div class="me-2 mb-2">
                <input type="text" name="email" value="{{ Request()->description }}" id="email" class="form-control" placeholder="Description">
            </div>
            <div class="me-2 mb-2">
                <input type="date" name="created_at" value="{{ Request()->created_at }}" id="created_at" class="form-control">
            </div>
            <div class="me-2 mb-2">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
            <div class="mb-2">
                <a href="{{ url('superadmin/subjects/list') }}" class="btn btn-warning">Reset</a>
            </div>
        </form>
    </div>--}}
    <div class="col-md-12 mt-4">
        <div class="card p-4">
            @include('_message')
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">Classes List</h5>
                <a href="{{ url('superadmin/classes/add') }}" class="btn btn-success">
                    <i class="fa fa-plus"></i> Add Class
                </a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Subject Name</th>
                        <th>Teacher Name</th>
                        <th>Start Time</th>
                        <th>Ent Time</th>
                        <th>Room Number</th>
                        <th>Created Date</th>
                        <th>Updated Date</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($getRecord as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->subject_id }}</td>
                            <td>{{ $value->teacher_id }}</td>
                            <td>{{ $value->start_time }}</td>
                            <td>{{ $value->end_time }}</td>
                            <td>{{ $value->room_number }}</td>
                            <td>{{ date('d-m-Y', strtotime($value->created_at)) }}</td>
                            <td>{{ date('d-m-Y', strtotime($value->updated_at)) }}</td>
                            <td style="min-width: 80px;">
                                <a href="{{ url('superadmin/classes/edit/' . $value->id) }}"
                                   class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                <a href="{{ url('superadmin/classes/delete/' . $value->id) }}"
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
