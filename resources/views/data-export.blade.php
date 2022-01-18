<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HSN's</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">

    <style>
        ::-webkit-scrollbar {
            width: 10px;
        }

        #blink {
            color: #2d38be;
            transition: 0.5s;
        }

        .blink_me {
            animation: blinker 1s linear infinite;
        }

        @keyframes blinker {
        50% {
            opacity: 0;
            }
        }
        .actives{
            text-decoration: underline;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand mr-5" href="/"><img src="{{ asset('owo-water.png') }}" height="50px" alt="Owo Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item @if(Route::is('home')) actives @endif">
                    <a class="nav-link mx-2" href="/">Invoices <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item @if(Route::is('sale-bill')) actives @endif">
                    <a class="nav-link mx-2 btn text-light btn-success btn-sm" href="{{ route('sale-bill') }}">Sale Bill</a>
                </li>
                <li class="nav-item @if(Route::is('banks')) actives @endif">
                    <a class="nav-link mx-2" href="{{ route('banks') }}">Bank Ac</a>
                </li>
                @if(Route::is('banks'))
                <li class="nav-item @if(Route::is('add-bank-details')) actives @endif">
                    <a class="nav-link mx-2 btn btn-secondary text-light btn-sm" href="{{ route('add-bank-details') }}">Add Bank Ac</a>
                </li>
                @endif
                <li class="nav-item @if(Route::is('showHsn')) actives @endif">
                    <a class="nav-link mx-2" href="{{ route('showHsn') }}">Products</a>
                </li>
                <li class="nav-item @if(Route::is('add-product')) actives @endif">
                    <a class="nav-link mx-2" href="{{ route('add-product') }}">Add HSN</a>
                </li>
                <li class="nav-item @if(Route::is('bulk-upload')) actives @endif">
                    <a class="nav-link btn text-light btn-primary btn-sm mx-2" href="{{ route('bulk-upload') }}">Upload Excel</a>
                </li>
                <li class="nav-item @if(Route::is('bulk-upload')) actives @endif">
                    <a class="nav-link btn text-light btn-primary btn-sm mx-2" href="{{ route('data-export') }}">Export Data in Excel</a>
                </li>
                @if(Route::is('add-product'))
                @if ($gstTable->isEmpty())
                <li class="nav-item">
                    <a class="blink_me nav-link mx-2 btn btn-secondary text-light btn-sm" href="{{ route('uploadGST') }}">Add GST Tables</a>
                </li>
                @endif
                @endif
            </ul>
            <ul class="navbar-nav float-right">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                      <a class="dropdown-item" href="{{ route('add-new-admin') }}">Add New Admin</a>
                      <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container mt-5">
    <h3 class="text-center bg-secondary text-light">Export Data</h3>
    <div class="card  p-3 shadow table-responsive">
        <table id="example" class="table text-center normal-font" style="width:100%;">
            <thead>
                <tr>
                    <th>#</th> 
                    <th>Month</th>
                    <th>Invoice No</th>
                    <th>GST No</th>
                    <th>Mobile No</th>
                    <th>Customer Name(Billing)</th>
                    <th>Customer Address (Billing)</th>
                    <th>State (Billing)</th>
                    <th>State Code (Billing)</th>
                    <th>Customer Name (Shipping)</th>
                    <th>Customer Address (Shipping)</th>
                    <th>State (Shipping)</th>
                    <th>State Code (Shipping)</th>
                    <th>Product Name</th>
                    <th>Attribute</th>
                    <th>Price</th>
                    <th>Item Cost</th>
                    <th>Quantity</th>
                    <th>HSN</th>
                    <th>GST</th>
                    <th>Date</th>
                    {{-- <th>Action</th> --}}
                </tr>
            </thead>
            <tbody>
                @php $i = 1 @endphp
                @foreach ($products as $product)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $product->customer_name_billing }}</td>
                    <td>{{ $product->invoice }}</td>
                    <td>{{ $product->gst_no }}</td>
                    <td>{{ $product->mobile_no }}</td>
                    <td>{{ $product->customer_name_billing }}</td>
                    <td>{{ $product->customer_address_billing }}</td>
                    <td>{{ $product->state_billing }}</td>
                    <td>{{ $product->state_code_billing }}</td>
                    <td>{{ $product->customer_name_shipping }}</td>
                    <td>{{ $product->customer_address_shipping }}</td>
                    <td>{{ $product->state_shipping }}</td>
                    <td>{{ $product->state_code_shipping }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->attribute }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->item_cost }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->hsn }}</td>
                    <td>{{ $product->gst }}%</td>
                    <td>{{ date($product->created_at) }}</td>
                    {{-- <td><a href="{{ route('view-sale-invoice', ['invoice_no' => $product->invoice]) }}" target="_blank" class="btn btn-primary btn-sm">View Invoice</a></td> --}}
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
          dom: 'lBfrtip',
          buttons: [    
            {
              extend: 'excel',
              text: 'Export In Excel'
            },
          ],
          "aLengthMenu": [[10, 25, 50, 75, -1], [10, 25, 50, 75, "All"]],
          "pageLength": 10,
      } );
} );
</script>

<script type="text/javascript">
    $(window).on('load', function() {
        $('#staticBackdrop').modal('show');
    });
</script>
<script type="text/javascript">
    var blink = document.getElementById('blink');
    setInterval(function() {
        blink.style.opacity = (blink.style.opacity == 0 ? 1 : 0);
    }, 500);
</script>
</body>

</html>
