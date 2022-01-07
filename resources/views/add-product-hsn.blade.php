<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HSN Upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container" style="margin-top: 100px; width: 500px;">
        @if(Session::get('success'))
            <div class="alert alert-success">
                {{session::get('success')}}
            </div>
        @endif
        <div class="text-center"><a href="/" class="btn btn-primary btn-sm m-2">Go Home</a></div>
        @if($gstTable->isEmpty())
            <div class="text-center"><a href="{{ route('uploadGST') }}" class="btn btn-primary btn-sm m-2">Add GST Tables</a></div>
        @endif
        <div class="text-center card p-4 shadow">
            <h1>Add Product Name & HSN</h1>
            <form action="{{ route('add-product') }}" method="post">
                @csrf
                <div class="form-group text-left">
                    <label for="product_name" class="p-0 mb-0">Product Name</label>
                    <input type="text" name="product_name" value="{{ old('product_name') }}" class="form-control" placeholder="Enter Product Name" autocomplete="off">
                    @error('product_name') <div class="text-danger small text-left"> {{ $message }}</div> @enderror
                </div>

                <div class="form-group text-left">
                    <label for="product_name" class="p-0 mb-0">Product HSN</label>
                    <input type="text" name="hsn" value="{{ old('hsn') }}" class="form-control" placeholder="Enter Product HSN" autocomplete="off">
                    @error('hsn') <div class="text-danger small text-left">{{ $message }}</div> @enderror
                </div>

                <div class="form-group text-left">
                    <label for="product_name" class="p-0 mb-0">GST %</label>
                    <input type="text" name="gst" value="{{ old('gst') }}" class="form-control" placeholder="Enter Product GST" autocomplete="off">
                    @error('hsn') <div class="text-danger small text-left">{{ $message }}</div> @enderror
                </div>
                <div class="text-center">
                    <button class="btn btn-primary">Add Product</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>