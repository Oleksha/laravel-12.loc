@extends('layouts.backend')
@section('content')
    <div class="container">
        <form method="get" id="itemForm" class="d-flex align-items-center flex-wrap">
            <div class="me-2 mb-2">
                <input type="text" name="id" value="{{ Request()->id }}" id="id" class="form-control" placeholder="ID">
            </div>
            <div class="me-2 mb-2">
                <input type="text" name="subject_id" value="{{ Request()->subject_id }}" id="subject_id" class="form-control" placeholder="Subject Name">
            </div>
            <div class="me-2 mb-2">
                <input type="text" name="teacher_id" value="{{ Request()->teacher_id }}" id="teacher_id" class="form-control" placeholder="Teacher Name">
            </div>
            <div class="me-2 mb-2">
                <input type="time" name="start_time" value="{{ Request()->start_time }}" id="start_time" class="form-control">
            </div>
            <div class="me-2 mb-2">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
            <div class="mb-2">
                <a href="{{ url('superadmin/classes/list') }}" class="btn btn-warning">Reset</a>
            </div>
        </form>
    </div>
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
                            <td>{{ $value->subject_name }}</td>
                            <td>{{ $value->teacher_name }}</td>
                            <td>{{ date('H:i', strtotime($value->start_time)) }}</td>
                            <td>{{ date('H:i', strtotime($value->end_time)) }}</td>
                            <td>{{ $value->room_number }}</td>
                            <td>{{ date('d-m-Y', strtotime($value->created_at)) }}</td>
                            <td>{{ date('d-m-Y', strtotime($value->updated_at)) }}</td>
                            <td style="min-width: 80px;">
                                <a href="{{ url('superadmin/classes/edit/' . $value->id) }}"
                                   class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                <a href="{{ url('superadmin/classes/delete/' . $value->id) }}"
                                   onclick="return confirm('Are you sure you want to delete?')"
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
