@extends('layouts.backend')
@section('content')
    <div class="col-md-12 mt-4">
        <div class="card p-4">
            @include('_message')
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">Add Attendance</h5>
            </div>
            <form action="{{ url('superadmin/attendance/add') }}" id="itemForm" method="post">
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
                    <label for="class_id" class="col-md-3 col-form-label">Class Number:</label>
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
                    <label for="attendance_date" class="col-md-3 col-form-label">Attendance Date:</label>
                    <div class="col-md-9">
                        <input type="date" name="attendance_date" id="attendance_date"
                               class="form-control">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="status" class="col-md-3 col-form-label">Status:</label>
                    <div class="col-md-9">
                        <select class="form-control" name="status" id="status" required>
                            <option value="">Select Class</option>
                            <option value="Present">Present</option>
                            <option value="Absent">Absent</option>
                            <option value="Late">Late</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>
@endsection
