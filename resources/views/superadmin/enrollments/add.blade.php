@extends('layouts.backend')
@section('content')
    <div class="col-md-12 mt-4">
        <div class="card p-4">
            @include('_message')
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">Add Class</h5>
            </div>
            <form action="{{ url('superadmin/enrollments/add') }}" id="itemForm" method="post">
                @csrf
                <div class="mb-3 row">
                    <label for="student_id" class="col-md-3 col-form-label">Student Name:</label>
                    <div class="col-md-9">
                        <select class="form-control" name="student_id" id="student_id" required>
                            <option value="">Select Student</option>
                            @foreach($getStudents as $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="class_id" class="col-md-3 col-form-label">Class Name:</label>
                    <div class="col-md-9">
                        <select class="form-control" name="class_id" id="class_id" required>
                            <option value="">Select Class</option>
                            @foreach($getClasses as $value)
                                <option value="{{ $value->id }}">{{ $value->room_number }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="enrollment_date" class="col-md-3 col-form-label">Enrollments Date:</label>
                    <div class="col-md-9">
                        <input type="date" name="enrollment_date" id="enrollment_date"
                               class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>
@endsection
