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
        <h1 class="text-center bg-secondary text-light">All Products</h1>
        <div class="text-right p-3">
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
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1 @endphp
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td><div class="small">{{ $product->item_name }}</div></td>
                        <td><div class="small">{{ $product->hsn }}</div></td>
                        {{-- <td><a href="{{ route('pdfview', ['id' => $product->id, 'download'=>'pdf']) }}" class="btn btn-primary btn-sm">Export PDF</a></td> --}}
                        <td><a href="{{ route('view-invoice', ['id' => $product->id]) }}" target="_blank" class="btn btn-primary btn-sm">View Invoice</a></td>
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
          "pageLength": 25,
      } );
} );
</script>
</body>
</html>