@extends('layouts.backend')
@section('content')
    <div class="col-md-12 mt-4">
        <div class="card p-4">
            @include('_message')
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">Add Teacher</h5>
            </div>
            <form action="{{ url('superadmin/teachers/add') }}" id="itemForm" method="post">
                @csrf
                <div class="mb-3 row">
                    <label for="name" class="col-md-3 col-form-label">Name:</label>
                    <div class="col-md-9">
                        <input type="text" name="name" id="name"
                               class="form-control" placeholder="Enter Name" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-md-3 col-form-label">Email:</label>
                    <div class="col-md-9">
                        <input type="email" name="email" id="email"
                               class="form-control" placeholder="Enter Email">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="phone" class="col-md-3 col-form-label">Phone:</label>
                    <div class="col-md-9">
                        <input type="tel" name="phone" id="phone"
                               pattern="+[0-9]{*} ([0-9]{3}) [0-9]{3}-[0-9]{4}"
                               class="form-control" placeholder="Enter Phone (+7 (999) 999-9999)">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="specialization" class="col-md-3 col-form-label">Specialization:</label>
                    <div class="col-md-9">
                        <input type="text" name="specialization" id="specialization"
                               class="form-control" placeholder="Enter Specialization" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="joining_date" class="col-md-3 col-form-label">Joining Date:</label>
                    <div class="col-md-9">
                        <input type="date" name="joining_date" id="joining_date"
                               class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>
@endsection
