@extends('layouts.navbar')
@section('content')
    <div class="container mt-3" style="width: 1200px;">
        @if (Session::get('success'))
            <div class="alert alert-success">
                {{ session::get('success') }}
            </div>
        @endif
        {{-- <div class="text-center"><a href="{{ route('add-bank-details') }}" class="btn btn-primary btn-sm m-2">Add New
                Bank</a></div> --}}
                <h3 class="text-center bg-light ">Bank Accounts</h3>
        <div class="text-center p-4 shadow">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Bank Name</th>
                            <th>Ac Holder</th>
                            <th>Ac No.</th>
                            <th>IFSC</th>
                            <th>Action</th>
                        </tr>
                        @php $i = 1 @endphp
                        @foreach ($banks as $bank)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $bank->bank_name }}</td>
                                <td>{{ $bank->ac_holder }}</td>
                                <td>{{ $bank->ac_no }}</td>
                                <td>{{ $bank->ifsc }}</td>
                                <td>@if ($bank->status == 1) <div class="text-success">Active</div> @else <div class="text-danger"> Inactive </div> @endif</td>
                                <td><a href="{{ route('edit-bank-details', $bank->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('change-bank-status', $bank->id) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-primary btn-sm">Change Status</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection
