@extends('layouts.navbar')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


@section('content')
    <div class="container" style="margin-top: 30px;">
        @if (Session::get('success'))
            <div class="alert alert-success">
                {{ session::get('success') }}
            </div>
        @endif
        <h1 class="text-center">Edit Invoice</h1>
        <div class="text-left card p-4 shadow">
            <div class="p-3">
                <div>Customer Name: <strong>{{ $detail->customer_name_billing }}</strong></div>
                <div>Customer Mobile: <strong>{{ $detail->mobile_no }}</strong></div>
                <div>Invoice No: <strong>{{ $detail->invoice }}</strong></div>
                <div>Address: <strong>{{ $detail->customer_address_billing }}</strong></div>
            </div>
            <form action="{{ route('edit-sale-invoice', $detail->invoice) }}" method="post">
                @csrf
                <table class="table">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Attribute</th>
                            <th>Price</th>
                            <th>Item Cost</th>
                            <th>Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td><input type="text" name="product_name[]" value="{{ $product->product_name }}" readonly class="form-control"></td>
                                <td><input type="text" name="attribute[]" value="{{ $product->attribute }}" readonly class="form-control"></td>
                                <td><input type="text" name="price[]" value="{{ $product->price }}" class="form-control"></td>
                                {{-- <td><input type="text" name="item_cost[]" value="{{ $product->item_cost }}" readonly class="form-control"></td> --}}
                                <td><input type="text" name="quantity[]" value="{{ $product->quantity }}" class="form-control"></td>
                                <td><button type="button" class="delete btn btn-primary" onclick="del()"> <i class="fa fa-trash"></i> </button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <p class="text-danger customer_records">*** NOTE ***  You can add or remove products from here</p>

                <div class="d-flex flex-fill">
                    <div class="customer_records_dynamic"></div>
                </div>
                <div id="container1"></div>
                <div class="text-right">
                    <button id="somebutton" type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add</button>
                </div>
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    </div>
    </section>
    </div>
    <script>
        $('.extra-fields-customer').click(function() {
            $('.customer_records').clone().appendTo('.customer_records_dynamic');
            $('.customer_records_dynamic .customer_records').addClass('single remove');
            $('.single .extra-fields-customer').remove();
            $('.single').append(
                '<a href="#" style="margin-top: -45px !important; margin-right: -23px;" class="remove-field btn-remove-customer float-right"><i class="fa fa-trash text-dark"></i></a>'
            );
            $('.customer_records_dynamic > .single').attr("class", "remove");

            $('.customer_records_dynamic input').each(function() {
                var count = 0;
                var fieldname = $(this).attr("name");
                $(this).attr('name', fieldname + count);
                count++;
            });

        });

        $(document).on('click', '.remove-field', function(e) {
            $(this).parent('.remove').remove();
            e.preventDefault();
        });

        $('select').on('change', function() {
            $('option').prop('disabled', false); //reset all the disabled options on every change event
            $('select').each(function() { //loop through all the select elements
                var val = this.value;
                $('select').not(this).find('option').filter(
                    function() { //filter option elements having value as selected option
                        return this.value === val;
                    }).prop('disabled', true); //disable those option elements
            });
        }).change(); //trihgger change handler initially!
    </script>
    <script>
        function del() {
            $('.delete').on('click', function(event) {
                $(this).parents('tr').remove();
            });

            $(".add").on('click', function() {
                $('tr:last-child').clone(true).appendTo('tbody');
                // to make the clone removable, set clone(true)
            });
        }
    </script>

    <script>
        $("#somebutton").click(function () {
            $("#container1").append("<tr><td class='p-3'><input type='text' name='product_name[]' class='form-control' placeholder='Product Name' required></td><td class='p-3'><input type='text' name='attribute[]' class='form-control' placeholder='Attribute Name' required></td><td class='p-3'><input type='text' name='price[]' placeholder='Price' oninput='this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');' class='form-control' required></td><td class='p-3'><input type='text' name='quantity[]' placeholder='Quantity' oninput='this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');' class='form-control' required></td> <td class='p-3'><button type='button' class='delete btn btn-primary' onclick='del()'> <i class='fa fa-trash'></i> </button></td></tr>"
            );
        });
    </script>
@endsection
