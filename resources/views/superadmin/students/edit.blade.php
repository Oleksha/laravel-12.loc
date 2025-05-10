@extends('layouts.backend')
@section('content')
    <div class="col-md-12 mt-4">
        <div class="card p-4">
            @include('_message')
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">Edit / Update Student</h5>
            </div>
            <form action="{{ url('superadmin/students/edit/' . $getRecord->id) }}" id="itemForm" method="post">
                @csrf
                <div class="mb-3 row">
                    <label for="name" class="col-md-3 col-form-label">Name:</label>
                    <div class="col-md-9">
                        <input type="text" name="name" id="name" value="{{ $getRecord->name }}"
                               class="form-control" placeholder="Enter Name" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-md-3 col-form-label">Email:</label>
                    <div class="col-md-9">
                        <input type="email" name="email" id="email" value="{{ $getRecord->email }}"
                               class="form-control" placeholder="Enter Email">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="phone" class="col-md-3 col-form-label">Phone:</label>
                    <div class="col-md-9">
                        <input type="tel" name="phone" id="phone" value="{{ $getRecord->phone }}"
                               pattern="+[0-9]{*} ([0-9]{3}) [0-9]{3}-[0-9]{4}"
                               class="form-control" placeholder="Enter Phone (+7 (999) 999-9999)">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="address" class="col-md-3 col-form-label">Address:</label>
                    <div class="col-md-9">
                        <textarea id="address" name="address" class="form-control"
                                  placeholder="Enter address">{{ $getRecord->address }}</textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="date_of_birth" class="col-md-3 col-form-label">Date of Birth:</label>
                    <div class="col-md-9">
                        <input type="date" name="date_of_birth" id="date_of_birth"
                               class="form-control" value="{{ $getRecord->date_of_birth }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Update</button>
            </form>
        </div>
    </div>
@endsection
