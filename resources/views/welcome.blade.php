@extends('layouts.navbar')
@section('content')
    <div class="container mt-5">
        <h3 class="text-center bg-secondary text-light">All Invoices</h3>
        <div class="card  p-3 shadow table-responsive">
            @if(Session::get('success'))
                <div class="alert alert-success">
                    {{session::get('success')}}
                </div>
            @endif
            <table id="example" class="table text-center normal-font" style="width:100%;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Invoice</th>
                        <th>Customer Name</th>
                        <th>Mobile No.</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1 @endphp
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $product->invoice }}</td>
                        <td><div class="small">{{ $product->customer_name_billing }}</div></td>
                        <td><div class="small">{{ $product->mobile_no }}</div></td>
                        <td><a href="{{ route('view-invoice', ['mobile_no' => $product->mobile_no]) }}" target="_blank" class="btn btn-primary btn-sm">View Invoice</a></td>
                        <td><a href="/edit-invoice/{{ $product->invoice }}" target="_blank" class="btn btn-primary btn-sm">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection