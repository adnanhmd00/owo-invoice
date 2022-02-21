@extends('layouts.navbar')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


@section('content')
    <div class="container" style="width: 400px; margin-top: 30px;">
        @if (Session::get('success'))
            <div class="alert alert-success">
                {{ session::get('success') }}
            </div>
        @endif
        <h1 class="text-center">Edit Invoice ID</h1>
        <div class="text-left card p-4 shadow">
            <div class="text-center"><strong>Your Current Invoice ID:</strong> {{ $invoice_id->invoice_id }}</div>
            <form action="{{ route('change-invoice-id-post') }}" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label for="invoice_id" class="small mb-0 pb-0"><strong>Invoice ID</strong></label>
                    <input type="text" name="invoice_id" placeholder="Invoice ID" class="form-control">
                </div>
                <div class="text-center">
                    <button class="btn btn-primary btn-sm">Submit</button>
                </div>
            </form>
        </div>
    </div>
    </div>
    </section>
    </div>
@endsection
