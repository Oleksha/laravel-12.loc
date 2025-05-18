@extends('layouts.backend')
@section('content')
    <div class="col-md-12 mt-4">
        <div class="card p-4">
            @include('_message')
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">Add Subject</h5>
            </div>
            <form action="{{ url('superadmin/subjects/add') }}" id="itemForm" method="post">
                @csrf
                <div class="mb-3 row">
                    <label for="name" class="col-md-3 col-form-label">Name:</label>
                    <div class="col-md-9">
                        <input type="text" name="name" id="name"
                               class="form-control" placeholder="Enter Name" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="description" class="col-md-3 col-form-label">Description:</label>
                    <div class="col-md-9">
                        <textarea id="description" name="description" class="form-control"
                                  placeholder="Enter description"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>
@endsection
