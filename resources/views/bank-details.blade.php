<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Bank Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container" style="margin-top: 100px; width: 1200px;">
        @if(Session::get('success'))
            <div class="alert alert-success">
                {{session::get('success')}}
            </div>
        @endif
        <div class="text-center"><a href="/" class="btn btn-primary btn-sm m-2">Go Home</a></div>
        <div class="text-center"><a href="{{ route('add-bank-details') }}" class="btn btn-primary btn-sm m-2">Add New Bank</a></div>
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
                        @foreach($banks as $bank)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $bank->bank_name }}</td>
                            <td>{{ $bank->ac_holder }}</td>
                            <td>{{ $bank->ac_no }}</td>
                            <td>{{ $bank->ifsc }}</td>
                            <td>@if($bank->status == 1) <div class="text-success">Active</div> @else <div class="text-danger"> Inactive </div> @endif</td>
                            <td><a href="{{ route('edit-bank-details', $bank->id) }}" class="btn btn-primary">Edit</a></td>
                            <td>
                                <form action="{{ route('change-bank-status', $bank->id) }}" method="POST">
                                @csrf
                                <button class="btn btn-primary">Change Status</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </thead>
                </table>
            </div>
        </div>
    </div>
</body>
</html>