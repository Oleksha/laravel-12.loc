@extends('layouts.backend')
@section('content')
    <div class="col-md-12 mt-4">
        <div class="card p-4">
            @include('_message')
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">Update SMTP</h5>
            </div>
            <form action="" method="post">
                @csrf
                <div class="mb-3 row">
                    <label for="" class="col-md-3 col-form-label">App Name:</label>
                    <div class="col-md-9">
                        <input type="text" name="" id=""
                               class="form-control" placeholder="Enter App Name">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="" class="col-md-3 col-form-label">Mail Mailer:</label>
                    <div class="col-md-9">
                        <input type="text" name="" id=""
                               class="form-control" placeholder="Enter Mail Mailer">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="" class="col-md-3 col-form-label">Mail Host:</label>
                    <div class="col-md-9">
                        <input type="text" name="" id=""
                               class="form-control" placeholder="Enter Mail Host">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="" class="col-md-3 col-form-label">Mail Port:</label>
                    <div class="col-md-9">
                        <input type="text" name="" id=""
                               class="form-control" placeholder="Enter Mail Port">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="" class="col-md-3 col-form-label">Mail Username:</label>
                    <div class="col-md-9">
                        <input type="text" name="" id=""
                               class="form-control" placeholder="Enter Mail Username">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="" class="col-md-3 col-form-label">Mail Password:</label>
                    <div class="col-md-9">
                        <input type="password" name="" id=""
                               class="form-control" placeholder="Enter Mail Password">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="" class="col-md-3 col-form-label">Mail Encryption:</label>
                    <div class="col-md-9">
                        <input type="text" name="" id=""
                               class="form-control" placeholder="Enter Mail Encryption">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="" class="col-md-3 col-form-label">Mail From Address:</label>
                    <div class="col-md-9">
                        <input type="text" name="" id=""
                               class="form-control" placeholder="Enter Mail From Address">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Update</button>
            </form>
        </div>
    </div>
@endsection
