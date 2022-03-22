@extends('layouts.navbar')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body{
        background: #f8f9fa!important;
    }
</style>

@section('content')
<div class="bg-light mt-5"> 
    <div class="container">
        <div class="card">
            <div class="container">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Invoice ID</th>
                                <th>User Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>#</td>
                                    <?php $invoiceID = App\Models\InvoiceId::where('user_id', $user->id)->first(); ?>
                                    @if($invoiceID == '' || $invoiceID == null)
                                        <td>Not Assigned</td>
                                    @else
                                        <td>{{ $invoiceID->invoice_id }}</td>
                                    @endif
                                    <td>{{ $user->name }}</td>
                                    <td><a href="{{ route('change-invoice-id', $user->id) }}" class="btn btn-primary btn-sm">Edit</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection
