@extends('layouts.backend')
@section('content')
    <div class="col-md-12 mt-4">
        <div class="card p-4">
            @include('_message')
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">Edit / Update Payment</h5>
            </div>
            <form action="{{ url('superadmin/payments/edit/' . $getRecord->id) }}" id="itemForm" method="post">
                @csrf
                <div class="mb-3 row">
                    <label for="student_id" class="col-md-3 col-form-label">Student Name:</label>
                    <div class="col-md-9">
                        <select class="form-control" name="student_id" id="student_id" required>
                            <option value="">Select Student</option>
                            @foreach($getStudents as $value)
                                <option value="{{ $value->id }}"
                                        @if($value->id == $getRecord->student_id) selected @endif>
                                    {{ $value->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="amount" class="col-md-3 col-form-label">Amount:</label>
                    <div class="col-md-9">
                        <input type="number" name="amount" id="amount"
                               class="form-control" placeholder="Enter Amount"
                               value="{{ $getRecord->amount }}" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="payment_date" class="col-md-3 col-form-label">Payment Date:</label>
                    <div class="col-md-9">
                        <input type="date" name="payment_date" id="payment_date"
                               class="form-control" value="{{ $getRecord->payment_date }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="subject_id" class="col-md-3 col-form-label">Payment Method:</label>
                    <div class="col-md-9">
                        <select class="form-control" name="payment_method"
                                id="payment_method" required>
                            <option value="">Select Payment Method</option>
                            <option value="Cash" @if($getRecord->payment_method == 'Cash') selected @endif>Cash</option>
                            <option value="Card" @if($getRecord->payment_method == 'Card') selected @endif>Card</option>
                            <option value="Transfer" @if($getRecord->payment_method == 'Transfer') selected @endif>Transfer</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="notes" class="col-md-3 col-form-label">Notes:</label>
                    <div class="col-md-9">
                        <textarea id="notes" name="notes" class="form-control"
                                  placeholder="Enter notes">{{ $getRecord->notes }}</textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Update</button>
            </form>
        </div>
    </div>
@endsection
