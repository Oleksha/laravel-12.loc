@extends('layouts.backend')
@section('content')
    {{--<div class="container">
        <form method="get" id="itemForm" class="d-flex align-items-center flex-wrap">
            <div class="me-2 mb-2">
                <input type="text" name="id" value="{{ Request()->id }}" id="id" class="form-control" placeholder="ID">
            </div>
            <div class="me-2 mb-2">
                <input type="text" name="student_id" value="{{ Request()->student_id }}" id="student_id" class="form-control" placeholder="Student Name">
            </div>
            <div class="me-2 mb-2">
                <input type="text" name="class_id" value="{{ Request()->class_id }}" id="class_id" class="form-control" placeholder="Class Number">
            </div>
            <div class="me-2 mb-2">
                <input type="date" name="enrollment_date" value="{{ Request()->enrollment_date }}" id="enrollment_date" class="form-control">
            </div>
            <div class="me-2 mb-2">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
            <div class="mb-2">
                <a href="{{ url('superadmin/enrollments/list') }}" class="btn btn-warning">Reset</a>
            </div>
        </form>
    </div>--}}
    <div class="col-md-12 mt-4">
        <div class="card p-4">
            @include('_message')
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">Payments List</h5>
                <a href="{{ url('superadmin/payments/add') }}" class="btn btn-success">
                    <i class="fa fa-plus"></i> Add Payments
                </a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Student Name</th>
                        <th>Amount</th>
                        <th>Payment Date</th>
                        <th>Payment Method</th>
                        <th>Notes</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($getRecord as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->student_name }}</td>
                            <td>{{ $value->amount }}</td>
                            <td>{{ date('d-m-Y', strtotime($value->payment_date)) }}</td>
                            <td>{{ $value->payment_method }}</td>
                            <td>{{ $value->notes }}</td>
                            <td style="min-width: 80px;">
                                <a href="{{ url('superadmin/payments/edit/' . $value->id) }}"
                                   class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                <a href="{{ url('superadmin/payments/delete/' . $value->id) }}"
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
