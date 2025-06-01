@extends('layouts.backend')
@section('content')
    <div class="col-md-12 mt-4">
        <div class="card p-4">
            @include('_message')
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">Edit / Update Enrollment</h5>
            </div>
            <form action="{{ url('superadmin/enrollments/edit/' . $getRecord->id) }}" id="itemForm" method="post">
                @csrf
                <div class="mb-3 row">
                    <label for="student_id" class="col-md-3 col-form-label">Student Name:</label>
                    <div class="col-md-9">
                        <select class="form-control" name="student_id" id="student_id" required>
                            <option value="">Select Student</option>
                            @foreach($getStudents as $value)
                                <option value="{{ $value->id }}" @if($value->id == $getRecord->student_id) selected @endif>{{ $value->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="class_id" class="col-md-3 col-form-label">Room Number:</label>
                    <div class="col-md-9">
                        <select class="form-control" name="class_id" id="class_id" required>
                            <option value="">Select Room Number</option>
                            @foreach($getClasses as $value)
                                <option value="{{ $value->id }}" @if($value->id == $getRecord->class_id) selected @endif>{{ $value->room_number }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="enrollment_date" class="col-md-3 col-form-label">Enrollment Date:</label>
                    <div class="col-md-9">
                        <input type="date" name="enrollment_date" id="enrollment_date"
                               class="form-control" value="{{ $getRecord->enrollment_date }}" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Update</button>
            </form>
        </div>
    </div>
@endsection
