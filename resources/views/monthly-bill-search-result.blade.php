<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $month }} Statement</title>
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
                    <a class="nav-link btn text-light btn-primary btn-sm mx-2" href="{{ route('data-sales-export') }}">Export Data in Excel</a>
                </li>
                <li class="nav-item @if(Route::is('data-sales-export')) actives @endif">
                    <a class="nav-link btn text-light btn-primary btn-sm mx-2" href="{{ route('monthly-bill') }}">Export Monthly Bill</a>
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
                    <th>Date</th>
                    <th>Particulars</th>
                    <th>Consignee/Buyer</th>
                    <th>Address</th>
                    <th>Voucher Type</th>
                    <th>Voucher No.</th>
                    <th>Voucher Ref. No.</th>
                    <th>GSTIN/UIN</th>
                    <th>Order No. &  Date</th>
                    <th>Terms of Payment</th>
                    <th>Terms of Delivery</th>
                    <th>Despatch Doc. No</th>
                    <th>Despatch Through</th>
                    <th>Destination</th>
                    <th>Place of Receipt by Shipper</th>
                    <th>Quantity</th>
                    <th>Alt. Units</th>
                    <th>Rate</th>
                    <th>Value</th>
                    <th>Gross Total</th>
                    <th>SALES REGD (OTHER STATE) HARYANA</th>
                    <th>SALES REGD (WITHIN STATE) HARYANA</th>
                    <th>Output IGST @ 5% HR</th>
                    <th>Output IGST @ 12% HR</th>
                    <th>Output IGST @ 18% HR</th>
                    <th>Output IGST @ 28% HR</th>
                    <th>Short & Excess</th>
                    <th>Output CGST @ 2.5% HR</th>
                    <th>Output SGST @ 2.5% HR</th>
                    <th>Output CGST @ 6% HR</th>
                    <th>Output SGST @ 6% HR</th>
                    <th>Output CGST @ 9% HR</th>
                    <th>Output SGST @ 9% HR</th>
                    <th>Output CGST @ 14% HR</th>
                    <th>Output SGST @ 14% HR</th>
                    <th>Output Cess on GST HR</th>
                    <th>SALES UNREGD (WITHIN STATE) HARYANA</th>
                    <th>SALES UNREGD (OTHER STATE) HARYANA</th>
                    <th>Sale exempt</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <?php 
                    $single_prod = App\Models\SaleBill::where('invoice', $product['invoice'])->first();
                    $product_gst = App\Models\SaleBill::where('invoice', $product['invoice'])->select('gst')->distinct()->get();
                    $prods = App\Models\SaleBill::where('invoice', $product['invoice'])->get();
                    
                    // Cess Check
                    $cess = 0;
                    foreach($prods as $prod){
                        if($prod->gst >= 28){
                            $cess = 1;
                        }
                    }

                    // For Calculating total cess item start
                    foreach($product_gst as $p_gst){
                    $val = App\Models\SaleBill::where('gst', $p_gst->gst)->where('invoice', $single_prod->invoice)->sum('taxable_amount');
                        if($p_gst->gst >= 28){
                            $cess_sum = [];
                            array_push($cess_sum, $val * 12/100);
                        }
                    }
                    // For Calculating total cess item end

                    foreach($product_gst as $p_gst){
                    $exempt = App\Models\SaleBill::where('gst', $p_gst->gst)->where('invoice', $single_prod->invoice)->sum('taxable_amount');
                        if($p_gst->gst == 0){
                            $cess_sum = [];
                            array_push($cess_sum, $exempt);
                        }
                    }
                    \Log::info($exempt);
                    // For Calculating total cess item end

                    // Find Gross Total
                    $total_amount = [];
                    foreach($prods as $prod){
                        $a = (($prod->quantity * $prod->item_cost) + (($prod->item_cost * $prod->quantity) * $prod->gst)/100);
                        array_push($total_amount, $a);
                    }
                    $total_amount = array_sum($total_amount);

                    // Find Total Quantity
                    $total_tax = [];
                    $total_qty = [];
                    foreach($prods as $prod){
                        $y = ((($prod->item_cost * $prod->quantity) * $prod->gst)/100);
                        $qty = $prod->quantity;
                        array_push($total_tax, $y);
                        array_push($total_qty, $qty);
                    }
                    $total_tax = array_sum($total_tax);
                    $amount = $total_amount - $total_tax;
                    $total_qty = array_sum($total_qty);  

                    // Short & Excess Start 
                    if($total_amount - intval($total_amount) >= 0.5){
                        // dd($total_amount + $cess_sum[0]);
                        $excess = number_format(round(ceil($total_amount + $cess_sum[0]) - ($total_amount + $cess_sum[0]), 2),2);
                    }else{
                        // $total_amount = intval($total_amount);
                        $excess = number_format(round(floor($total_amount) - $total_amount, 2),2);
                    }

                    // GST
                    $gst_sum = [];
                    foreach($product_gst as $p_gst){
                        $sum = App\Models\SaleBill::where('gst', $p_gst->gst)->where('invoice', $product['invoice'])->sum('gst_value');
                        array_push($gst_sum, $sum);
                    }
                    $taxable_values_sum = [];
                    foreach($product_gst as $p_gst){
                        $amount_sum = App\Models\SaleBill::where('gst', 5)->where('invoice', $product['invoice'])->sum('taxable_amount');
                        array_push($taxable_values_sum, $amount_sum);
                    }
                ?>
                <tr>
                    <td>{{ date('d/m/Y', strtotime($single_prod->created_at)) }}</td> {{-- Date --}}
                    <td>{{ $single_prod->customer_name_billing }}</td> {{-- Particulars --}}
                    <td>{{ $single_prod->customer_name_billing }}</td> {{-- Consignee/Buyer --}}

                    <td>{{ $single_prod->customer_address_billing }}</td> {{-- Address --}}
                    <td>Sales</td> {{-- Voucher Type --}}
                    <td>{{ $single_prod->invoice }}</td> {{-- Voucher No. --}}
                    <td>{{ $single_prod->invoice }}</td> {{-- Voucher Ref. No. --}}
                    <td>{{ $single_prod->gst_no }}</td> {{-- GSTIN/UIN --}}
                    <td>{{ $single_prod->order_no }}</td> {{-- Order No. &  Date --}}
                    <td>{{ $single_prod->terms_of_payment }}</td> {{-- Terms of Payment --}}
                    <td>{{ $single_prod->date }} Month Billing</td> {{-- Terms of Delivery --}}
                    <td>{{ $single_prod->invoice }}</td> {{-- Despatch Doc. No --}}
                    <td>{{ $single_prod->despatch_through }}</td> {{-- Despatch Through --}}
                    <td>{{ $single_prod->destination }}</td> {{-- Destination --}}
                    <td>{{ $single_prod->place_of_reciept }}</td> {{-- Place of Receipt by Shipper --}}
                    <td>{{ $total_qty }}</td> {{-- Quantity --}}
                    <td>{{ $single_prod->alt_units }}</td> {{-- Alt. Units --}}
                    <td>{{ $single_prod->rate }}</td> {{-- Rate --}}
                    <td>{{ $amount }}</td> {{-- Value --}}
                    <td>
                    <?php 
                    if($total_amount - intval($total_amount) >= 0.5){
                        $total_amount = intval($total_amount) + 1;
                        if($cess == 1){
                                    // echo '₹'.number_format(round($total_amount, 2) + round( $total_amount * (12/100),2), 2);
                                    echo number_format(round($total_amount + $cess_sum[0]) ,2); // Symbol
                        }else{
                            echo number_format(round($total_amount, 2), 2);
                        }
                    }else{
                        $total_amount = intval($total_amount);
                        if($cess == 1){
                            echo number_format(round($total_amount +  $cess_sum[0]) ,2); // Symbol
                            // echo '₹'.number_format(round($total_amount, 2), 2) + number_format(round( $total_amount  12/100 ,2) ,2);
                        }else{
                            echo number_format(round($total_amount, 2), 2);
                        }
                    }
                    ?>
                    </td> {{-- Gross Total --}}
                    <td>
                        <?php 
                            if($single_prod->gst_no != '' && $single_prod->state_code_billing != 'HR'){
                                echo round($amount - $exempt, 2);
                            }
                        ?>
                    </td> {{-- SALES REGD (OTHER STATE) HARYANA --}}
                    <td>
                        
                        <?php 
                            if($single_prod->gst_no != '' && $single_prod->state_code_billing == 'HR'){
                                echo round($amount - $exempt, 2);
                            }
                        ?>
                    </td> {{-- SALES REGD (WITHIN STATE) HARYANA --}}
                    <td>
                        <?php 
                            foreach($product_gst as $p_gst){
                                $gst_5 = App\Models\SaleBill::where('gst', 5)->where('invoice', $product['invoice'])->sum('gst_value');
                                if($gst_5 == '5'){
                                    // echo $gst_5;
                                }
                            }
                            echo round($gst_5, 2);
                        ?>
                        {{-- {{ $single_prod->igst_5 }} --}}
                    </td> {{-- Output IGST @ 5% HR --}}

                    <td>
                        <?php 
                            foreach($product_gst as $p_gst){
                                $gst_12 = App\Models\SaleBill::where('gst', 12)->where('invoice', $product['invoice'])->sum('gst_value');
                                if($gst_12 == '12'){
                                    // echo $gst_5;
                                }
                            }
                            echo round($gst_12, 2);
                        ?>
                        {{-- {{ $single_prod->igst_12 }} --}}
                    </td> {{-- Output IGST @ 12% HR --}}
                    <td>
                        <?php 
                            foreach($product_gst as $p_gst){
                                $gst_18 = App\Models\SaleBill::where('gst', 18)->where('invoice', $product['invoice'])->sum('gst_value');
                                if($gst_18 == '18'){
                                    // echo $gst_5;
                                }
                            }
                            echo round($gst_18, 2);
                        ?>
                        {{-- {{ $single_prod->igst_18 }} --}}
                    </td> {{-- Output IGST @ 18% HR --}}
                    <td>
                        <?php 
                        foreach($product_gst as $p_gst){
                            $gst_28 = App\Models\SaleBill::where('gst', 28)->where('invoice', $product['invoice'])->sum('gst_value');
                            if($gst_28 == '28'){
                                // echo $gst_5;
                            }
                        }
                        echo round($gst_28, 2);
                    ?>
                    </td>
                    <td>{{ $excess }}</td> {{-- Short & Excess --}}
                    <td>{{ round($gst_5/2, 2) }}</td> {{-- Output CGST @ 2.5% HR --}}
                    <td>{{ round($gst_5/2, 2) }}</td> {{-- Output SGST @ 2.5% HR --}}
                    <td>{{ round($gst_12/2, 2) }}</td> {{-- Output CGST @ 6% HR --}}
                    <td>{{ round($gst_12/2, 2) }}</td> {{-- Output SGST @ 6% HR --}}
                    <td>{{ round($gst_18/2, 2) }}</td> {{-- Output CGST @ 9% HR --}}
                    <td>{{ round($gst_18/2, 2) }}</td> {{-- Output SGST @ 9% HR --}}
                    <td>{{ round($gst_28/2, 2) }}</td> {{-- Output CGST @ 14% HR --}}
                    <td>{{ round($gst_28/2, 2) }}</td> {{-- Output SGST @ 14% HR --}}
                    <td>
                         {{-- For Calculating total cess item start --}}
                        <?php 
                            $cess_sum = [];
                            foreach($product_gst as $p_gst){
                                $val = App\Models\SaleBill::where('gst', $p_gst->gst)->sum('taxable_amount');
                                if($p_gst->gst >= 28){
                                    array_push($cess_sum, $val * 12/100);
                                }
                            }
                            $cess_sum = array_sum($cess_sum);
                            print_r(round($cess_sum, 2))

                        ?>
                        {{-- // For Calculating total cess item end --}}
                    </td> {{-- Output Cess on GST HR --}}
                    <td>
                        <?php 
                            if($single_prod->gst_no == '' && $single_prod->state_code_billing == 'HR'){
                                echo round($amount - $exempt, 2);
                            }
                        ?>
                    </td> {{-- SALES UNREGD (WITHIN STATE) HARYANA --}}
                    <td>
                        <?php 
                            if($single_prod->gst_no == '' && $single_prod->state_code_billing != 'HR'){
                                echo round($amount - $exempt, 2);
                            }
                        ?>
                        
                        {{-- {{ $single_prod->sales_unregd_out_hr }} --}}
                    </td> {{-- SALES UNREGD (OTHER STATE) HARYANA --}}
                    <td>{{ round($exempt, 2) }}</td> {{-- Sale exempt --}}
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
