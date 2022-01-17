
@extends('layouts.navbar')
@section('content')
    <div class="container mt-5">
        <h3 class="text-center bg-secondary text-light">Sale Bills Search Result</h3>
        <form action="{{ route('search') }}" method="post">
            @csrf
            <div class="form-group m-3">
                <label for="advance"><strong>Advanced Search</strong></label>
                <div class="row">
                    <div class="col-md-10">
                        <input type="text" name="search" class="form-control" placeholder="Advanced Search" autocomplete="off">
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary btn-block">Search</button>
                    </div>
                </div>
            </div>
            @if(Session::get('success'))
                <div class="alert alert-success">
                    {{session::get('success')}}
                </div>
            @endif

            @if(Session::get('error'))
                <div class="alert alert-danger">
                    {{session::get('error')}}
                </div>
            @endif
        </form>
        <div class="card  p-3 shadow table-responsive">
            <table id="example" class="table text-center normal-font" style="width:100%;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Customer Name</th>
                        <th>Product Name</th>
                        <th>HSN</th>
                        <th>Mobile No.</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1 @endphp
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td><div class="small">
                            <?php $customer = App\Models\SaleBill::where('invoice', $product->invoice)->first();?>
                            {{ $customer->customer_name_billing }}
                        </div></td>
                        <td><div class="small">{{ $customer->mobile_no }}</div></td>
                        <td><div class="small">{{ substr($product->product_name, 0, 26) }}@if($product->product_name >= 26)...@endif</div></td>
                        <td><div class="small">{{ $product->hsn }}</div></td>
                        <td><a href="{{ route('view-sale-invoice', ['invoice_no' => $product->invoice]) }}" target="_blank" class="btn btn-primary btn-sm">View Invoice</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection