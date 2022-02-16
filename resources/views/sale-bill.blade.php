@extends('layouts.navbar')
@section('content')
    <div class="container mt-5">
        <h3 class="text-center bg-secondary text-light">Sale Bills</h3>
        <form action="{{ route('search') }}" method="post">
            @csrf
            <div class="form-group m-3">
                <label for="advance">Advance Search</label>
                <div class="row">
                    <div class="col-md-10">
                        <input type="text" name="search" class="form-control" placeholder="Advance Search" autocomplete="off">
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary btn-block">Search</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="card  p-3 shadow table-responsive">
            <table id="example" class="table text-center normal-font" style="width:100%;">
                <thead>
                    <tr>
                        <th>#</th>
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
                        <td><div class="small">
                            <?php $customer = App\Models\SaleBill::where('invoice', $product->invoice)->first();?>
                            {{ $customer->customer_name_billing }}
                        </div></td>
                        <td><div class="small">{{ $customer->mobile_no }}</div></td>
                        <td><a href="{{ route('view-sale-invoice', ['invoice_no' => str_replace('/', '-', $product->invoice)]) }}" target="_blank" class="btn btn-primary btn-sm">View Invoice</a></td>
                        <td><a href="/edit-sale-invoice/{{ str_replace('/', '-', $product->invoice) }}" target="_blank" class="btn btn-primary btn-sm">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection