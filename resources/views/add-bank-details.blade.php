@extends('layouts.navbar')
@section('content')
    <div class="container mt-3" style="width: 500px;">
        @if (Session::get('success'))
            <div class="alert alert-success">
                {{ session::get('success') }}
            </div>
        @endif
        <div class="text-center card p-4 shadow">
            <h3>Add Bank Details</h3>
            <form action="{{ route('add-bank-details') }}" method="post">
                @csrf
                <div class="form-group text-left">
                    <input type="text" name="ac_holder" value="{{ old('ac_holder') }}" class="form-control"
                        placeholder="Owo Technologies Pvt Ltd (Ac Holder Name)" autocomplete="off">
                    @error('ac_holder') <div class="text-danger small text-left"> {{ $message }}</div> @enderror
                </div>
                <div class="form-group text-left">
                    <input type="text" name="bank_name" value="{{ old('bank_name') }}" class="form-control"
                        placeholder="ICICI Bank Ltd (Bank Name)" autocomplete="off">
                    @error('bank_name') <div class="text-danger small text-left"> {{ $message }}</div> @enderror
                </div>

                <div class="form-group text-left">
                    <input type="text" name="ac_no" value="{{ old('ac_no') }}" class="form-control"
                        placeholder="123456789 (Ac Number)" autocomplete="off">
                    @error('ac_no') <div class="text-danger small text-left">{{ $message }}</div> @enderror
                </div>
                <div class="form-group text-left">
                    <input type="text" name="branch" value="{{ old('branch') }}" class="form-control"
                        placeholder="Gurgaon, Haryana (Branch Name)" autocomplete="off">
                    @error('branch') <div class="text-danger small text-left"> {{ $message }}</div> @enderror
                </div>
                <div class="form-group text-left">
                    <input type="text" name="ifsc" value="{{ old('ifsc') }}" class="form-control"
                        placeholder="ICICI1234 (Branch IFSC)" autocomplete="off">
                    @error('ifsc') <div class="text-danger small text-left"> {{ $message }}</div> @enderror
                </div>

                <div class="text-center">
                    <button class="btn btn-primary btn-sm">Add Bank Details</button>
                </div>
            </form>
        </div>
    </div>
@endsection
