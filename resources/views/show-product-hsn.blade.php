@extends('layouts.navbar')
@section('content')
    <div class="container mt-5">
        <h3 class="text-center bg-secondary text-light">All Products & HSN</h3>
        <div class="card  p-3 shadow table-responsive">
            @if (Session::get('success'))
                <div class="alert alert-success">
                    {{ session::get('success') }}
                </div>
            @endif
            <table id="example" class="table text-center normal-font" style="width:100%;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product Name</th>
                        <th>HSN</th>
                        <th>%</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php    $i = 1;
                    @endphp
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>
                                <div class="small">{{ $product->product_name }}</div>
                            </td>
                            <td>
                                <div class="small">{{ $product->hsn }}</div>
                            </td>
                            <td>
                                <div class="small">{{ $product->gst }}%</div>
                            </td>
                            <td><button class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#myModal-{{ $product->id }}">Edit</button></td>

                            <!-- The Modal -->
                            <div class="modal" id="myModal-{{ $product->id }}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Modal Heading</h4>
                                            <button type="button" class="close"
                                                data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('update-product', $product->id) }}" method="post">
                                                @csrf
                                                <div class="form-group text-left">
                                                    <label for="product_name" class="p-0 mb-0">Product Name</label>
                                                    <input type="text" name="product_name"
                                                        value="{{ $product->product_name }}" class="form-control"
                                                        placeholder="Enter Product Name" autocomplete="off">
                                                    @error('product_name') <div class="text-danger small text-left">
                                                        {{ $message }}</div> @enderror
                                                </div>

                                                <div class="form-group text-left">
                                                    <label for="product_name" class="p-0 mb-0">Product HSN</label>
                                                    <input type="text" name="hsn" value="{{ $product->hsn }}"
                                                        class="form-control" placeholder="Enter Product HSN"
                                                        autocomplete="off">
                                                    @error('hsn') <div class="text-danger small text-left">
                                                        {{ $message }}</div> @enderror
                                                </div>
                                                <div class="form-group text-left">
                                                    <label for="product_name" class="p-0 mb-0">Product GST</label>
                                                    <input type="text" name="gst" value="{{ $product->gst }}"
                                                        class="form-control" placeholder="Enter Product GST"
                                                        autocomplete="off">
                                                    @error('gst') <div class="text-danger small text-left">
                                                        {{ $message }}</div> @enderror
                                                </div>
                                                <div class="text-center">
                                                    <button class="btn btn-primary btn-sm">Update Product</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
