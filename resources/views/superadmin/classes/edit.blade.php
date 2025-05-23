@extends('layouts.backend')
@section('content')
    <div class="col-md-12 mt-4">
        <div class="card p-4">
            @include('_message')
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">Edit / Update Class</h5>
            </div>
            <form action="{{ url('superadmin/classes/edit/' . $getRecord->id) }}" id="itemForm" method="post">
                @csrf
                <div class="mb-3 row">
                    <label for="subject_id" class="col-md-3 col-form-label">Subject Name:</label>
                    <div class="col-md-9">
                        <select class="form-control" name="subject_id" id="subject_id" required>
                            <option value="">Select Subject</option>
                            @foreach($getSubjects as $value)
                                <option value="{{ $value->id }}" @if($value->id == $getRecord->subject_id) selected @endif>{{ $value->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="teacher_id" class="col-md-3 col-form-label">Teacher Name:</label>
                    <div class="col-md-9">
                        <select class="form-control" name="teacher_id" id="teacher_id" required>
                            <option value="">Select Teacher</option>
                            @foreach($getTeachers as $value)
                                <option value="{{ $value->id }}" @if($value->id == $getRecord->teacher_id) selected @endif>{{ $value->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="start_time" class="col-md-3 col-form-label">Start Time:</label>
                    <div class="col-md-9">
                        <input type="time" name="start_time" id="start_time"
                               class="form-control" value="{{ date('H:i', strtotime($getRecord->start_time)) }}" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="end_time" class="col-md-3 col-form-label">End Time:</label>
                    <div class="col-md-9">
                        <input type="time" name="end_time" id="end_time"
                               class="form-control" value="{{ date('H:i', strtotime($getRecord->end_time)) }}" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="room_number" class="col-md-3 col-form-label">Room Number:</label>
                    <div class="col-md-9">
                        <input type="text" name="room_number" id="room_number"
                               class="form-control" value="{{ $getRecord->room_number }}" placeholder="Enter Room Number" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Update</button>
            </form>
        </div>
    </div>
@endsection
