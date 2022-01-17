@extends('layouts.navbar')
@section('content')
    <div class="container mt-3" style="width: 500px;">
        @if (Session::get('success'))
            <div class="alert alert-success">
                {{ session::get('success') }}
            </div>
        @endif
        <div class="text-center card p-4 shadow">
            <h3>Add Product Name & HSN</h3>
            <form action="{{ route('add-product') }}" method="post">
                @csrf
                <div class="form-group text-left">
                    <label for="product_name" class="p-0 mb-0 small"><strong>Product Name</strong></label>
                    <input type="text" name="product_name" value="{{ old('product_name') }}" class="form-control"
                        placeholder="Enter Product Name" autocomplete="off">
                    @error('product_name') <div class="text-danger small text-left"> {{ $message }}</div> @enderror
                </div>

                <div class="form-group text-left">
                    <label for="product_name" class="p-0 mb-0 small"><strong>Product HSN</strong></label>
                    <input type="text" name="hsn" value="{{ old('hsn') }}" class="form-control"
                        placeholder="Enter Product HSN" autocomplete="off">
                    @error('hsn') <div class="text-danger small text-left">{{ $message }}</div> @enderror
                </div>

                <div class="form-group text-left">
                    <label for="product_name" class="p-0 mb-0 small"><strong>GST %</strong></label>
                    <input type="text" name="gst" value="{{ old('gst') }}" class="form-control"
                        placeholder="Enter Product GST" autocomplete="off">
                    @error('hsn') <div class="text-danger small text-left">{{ $message }}</div> @enderror
                </div>
                <div class="text-center">
                    <button class="btn btn-primary btn-sm">Add Product</button>
                </div>
            </form>
        </div>
    </div>
@endsection
