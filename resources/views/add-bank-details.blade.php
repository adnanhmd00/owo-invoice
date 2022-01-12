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
    <div class="container" style="margin-top: 100px; width: 500px;">
        @if(Session::get('success'))
            <div class="alert alert-success">
                {{session::get('success')}}
            </div>
        @endif
        <div class="text-center"><a href="/" class="btn btn-primary btn-sm m-2">Go Home</a></div>
        <div class="text-center card p-4 shadow">
            <h1>Add Bank Details</h1>
            <form action="{{ route('add-bank-details') }}" method="post">
                @csrf
                 <div class="form-group text-left">
                    <input type="text" name="ac_holder" value="{{ old('ac_holder') }}" class="form-control" placeholder="Owo Technologies Pvt Ltd (Ac Holder Name)" autocomplete="off">
                    @error('ac_holder') <div class="text-danger small text-left"> {{ $message }}</div> @enderror
                </div>
                <div class="form-group text-left">
                    <input type="text" name="bank_name" value="{{ old('bank_name') }}" class="form-control" placeholder="ICICI Bank Ltd (Bank Name)" autocomplete="off">
                    @error('bank_name') <div class="text-danger small text-left"> {{ $message }}</div> @enderror
                </div>

                <div class="form-group text-left">
                    <input type="text" name="ac_no" value="{{ old('ac_no') }}" class="form-control" placeholder="123456789 (Ac Number)" autocomplete="off">
                    @error('ac_no') <div class="text-danger small text-left">{{ $message }}</div> @enderror
                </div>
                 <div class="form-group text-left">
                    <input type="text" name="branch" value="{{ old('branch') }}" class="form-control" placeholder="Gurgaon, Haryana (Branch Name)" autocomplete="off">
                    @error('branch') <div class="text-danger small text-left"> {{ $message }}</div> @enderror
                </div>
                 <div class="form-group text-left">
                    <input type="text" name="ifsc" value="{{ old('ifsc') }}" class="form-control" placeholder="ICICI1234 (Branch IFSC)" autocomplete="off">
                    @error('ifsc') <div class="text-danger small text-left"> {{ $message }}</div> @enderror
                </div>

                <div class="text-center">
                    <button class="btn btn-primary">Add Bank Details</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>