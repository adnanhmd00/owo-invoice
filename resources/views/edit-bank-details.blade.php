@extends('layouts.navbar')
@section('content')
    <div class="container" style="margin-top: 100px; width: 500px;">
        @if (Session::get('success'))
            <div class="alert alert-success">
                {{ session::get('success') }}
            </div>
        @endif
        <div class="text-center"><a href="/" class="btn btn-primary btn-sm m-2">Go Home</a></div>
        <div class="text-center card p-4 shadow">
            <h1>Add Bank Details</h1>
            <form action="{{ route('update-bank-details', $bank->id) }}" method="post">
                @csrf
                <div class="form-group text-left">
                    <input type="text" name="ac_holder" value="{{ $bank->ac_holder }}" class="form-control"
                        placeholder="Owo Technologies Pvt Ltd (Ac Holder Name)" autocomplete="off">
                    @error('ac_holder') <div class="text-danger small text-left"> {{ $message }}</div> @enderror
                </div>
                <div class="form-group text-left">
                    <input type="text" name="bank_name" value="{{ $bank->bank_name }}" class="form-control"
                        placeholder="ICICI Bank Ltd (Bank Name)" autocomplete="off">
                    @error('bank_name') <div class="text-danger small text-left"> {{ $message }}</div> @enderror
                </div>

                <div class="form-group text-left">
                    <input type="text" name="ac_no" value="{{ $bank->ac_no }}" class="form-control"
                        placeholder="123456789 (Ac Number)" autocomplete="off">
                    @error('ac_no') <div class="text-danger small text-left">{{ $message }}</div> @enderror
                </div>
                <div class="form-group text-left">
                    <input type="text" name="branch" value="{{ $bank->branch }}" class="form-control"
                        placeholder="Gurgaon, Haryana (Branch Name)" autocomplete="off">
                    @error('branch') <div class="text-danger small text-left"> {{ $message }}</div> @enderror
                </div>
                <div class="form-group text-left">
                    <input type="text" name="ifsc" value="{{ $bank->ifsc }}" class="form-control"
                        placeholder="ICICI1234 (IFSC)" autocomplete="off">
                    @error('ifsc') <div class="text-danger small text-left"> {{ $message }}</div> @enderror
                </div>

                <div class="text-center">
                    <button class="btn btn-primary btn-sm">Edit Bank Details</button>
                </div>
            </form>
        </div>
    </div>
@endsection
