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
                    <label for="app_name" class="col-md-3 col-form-label">App Name:</label>
                    <div class="col-md-9">
                        <input type="text" name="app_name" id="app_name"
                               class="form-control" placeholder="Enter App Name"
                               value="{{ $getRecord->app_name }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="mail_mailer" class="col-md-3 col-form-label">Mail Mailer:</label>
                    <div class="col-md-9">
                        <input type="text" name="mail_mailer" id="mail_mailer"
                               class="form-control" placeholder="Enter Mail Mailer"
                               value="{{ $getRecord->mail_mailer }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="mail_host" class="col-md-3 col-form-label">Mail Host:</label>
                    <div class="col-md-9">
                        <input type="text" name="mail_host" id="mail_host"
                               class="form-control" placeholder="Enter Mail Host"
                               value="{{ $getRecord->mail_host }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="mail_port" class="col-md-3 col-form-label">Mail Port:</label>
                    <div class="col-md-9">
                        <input type="text" name="mail_port" id="mail_port"
                               class="form-control" placeholder="Enter Mail Port"
                               value="{{ $getRecord->mail_port }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="mail_username" class="col-md-3 col-form-label">Mail Username:</label>
                    <div class="col-md-9">
                        <input type="text" name="mail_username" id="mail_username"
                               class="form-control" placeholder="Enter Mail Username"
                               value="{{ $getRecord->mail_username }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="mail_password" class="col-md-3 col-form-label">Mail Password:</label>
                    <div class="col-md-9">
                        <input type="text" name="mail_password" id="mail_password"
                               class="form-control" placeholder="Enter Mail Password"
                               value="{{ $getRecord->mail_password }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="mail_encryption" class="col-md-3 col-form-label">Mail Encryption:</label>
                    <div class="col-md-9">
                        <input type="text" name="mail_encryption" id="mail_encryption"
                               class="form-control" placeholder="Enter Mail Encryption"
                               value="{{ $getRecord->mail_encryption }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="mail_from_address" class="col-md-3 col-form-label">Mail From Address:</label>
                    <div class="col-md-9">
                        <input type="email" name="mail_from_address" id="mail_from_address"
                               class="form-control" placeholder="Enter Mail From Address"
                               value="{{ $getRecord->mail_from_address }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Update</button>
            </form>
        </div>
    </div>
@endsection
