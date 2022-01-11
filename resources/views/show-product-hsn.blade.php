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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center bg-secondary text-light">All Products & HSN</h1>
        <div class="text-right p-3">
            <a href="/" class="btn btn-primary">Go Home</a>
            <a href="{{ route('showHsn') }}" class="btn btn-primary">Show Product HSN</a>
            <a href="{{ route('bulk-upload') }}" class="btn btn-primary">Excel Upload</a>
            <a href="{{ route('add-product') }}" class="btn btn-primary">Add Product Name</a>
        </div>
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
                        <th>Product Name</th>
                        <th>HSN</th>
                        <th>%</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1
                    @endphp
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td><div class="small">{{ $product->product_name }}</div></td>
                        <td><div class="small">{{ $product->hsn }}</div></td>
                        <td><div class="small">{{ $product->gst }}%</div></td>
                        <td><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal-{{ $product->id }}">Edit</button></td>

                        <!-- The Modal -->
                        <div class="modal" id="myModal-{{ $product->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h4 class="modal-title">Modal Heading</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('update-product', $product->id) }}" method="post">
                                            @csrf
                                            <div class="form-group text-left">
                                                <label for="product_name" class="p-0 mb-0">Product Name</label>
                                                <input type="text" name="product_name" value="{{ $product->product_name }}" class="form-control" placeholder="Enter Product Name" autocomplete="off">
                                                @error('product_name') <div class="text-danger small text-left"> {{ $message }}</div> @enderror
                                            </div>
                            
                                            <div class="form-group text-left">
                                                <label for="product_name" class="p-0 mb-0">Product HSN</label>
                                                <input type="text" name="hsn" value="{{ $product->hsn }}" class="form-control" placeholder="Enter Product HSN" autocomplete="off">
                                                @error('hsn') <div class="text-danger small text-left">{{ $message }}</div> @enderror
                                            </div>
                                            <div class="form-group text-left">
                                                <label for="product_name" class="p-0 mb-0">Product GST</label>
                                                <input type="text" name="gst" value="{{ $product->gst }}" class="form-control" placeholder="Enter Product GST" autocomplete="off">
                                                @error('gst') <div class="text-danger small text-left">{{ $message }}</div> @enderror
                                            </div>
                                            <div class="text-center">
                                                <button class="btn btn-primary">Update Product</button>
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

<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<script>
    $(document).ready(function() {
      $('#example').DataTable( {
          scrollX: true,
        //   dom: 'lBfrtip',
        //   buttons: [
        //     {
        //       extend: 'pdf',
        //       text: 'Export In PDF'
        //     },
        //     {
        //       extend: 'excel',
        //       text: 'Export In Excel'
        //     },
        //     'print',
        //   ],
          "aLengthMenu": [[10, 25, 50, 75, -1], [10, 25, 50, 75, "All"]],
          "pageLength": 10,
      } );
} );
</script>
</body>
</html>