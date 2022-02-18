@extends('layouts.navbar')
@section('content')
    <div class="container mt-3" style="width: 800px;">
        @if (Session::get('success'))
            <div class="alert alert-success">
                {{ session::get('success') }}
            </div>
        @endif
        @if(Auth::user()->type != 'super-admin')
        <h1 class="text-center">You Don't Have Proper Permission !</h1>
        @else

        <div class="text-center card p-4 shadow">
            <h3>Add New Admin</h3>
            <form action="{{ route('add-new-admin') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group text-left">
                            <label for="name" class="p-0 mb-0 small"><strong>Name</strong></label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                placeholder="Enter Name" autocomplete="off">
                            @error('name') <div class="text-danger small text-left"> {{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group text-left">
                            <label for="email" class="p-0 mb-0 small"><strong>Email</strong></label>
                            <input type="text" name="email" value="{{ old('email') }}" class="form-control"
                                placeholder="Enter Email" autocomplete="off">
                            @error('email') <div class="text-danger small text-left">{{ $message }}</div> @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group text-left">
                    <label for="type" class="p-0 mb-0 small"><strong>Admin Type</strong></label>
                    <select name="type" id="" class="form-control">
                        <option value="">Select</option>
                        <option value="admin">Admin</option>
                        <option value="super-admin">Super Admin</option>
                    </select>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group text-left">
                            <label for="state" class="p-0 mb-0 small"><strong>State</strong></label>
                            <input type="text" name="state" value="{{ old('state') }}" class="form-control"
                                placeholder="Enter State" autocomplete="off">
                            @error('state') <div class="text-danger small text-left">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group text-left">
                            <label for="city" class="p-0 mb-0 small"><strong>City</strong></label>
                            <input type="text" name="city" value="{{ old('city') }}" class="form-control"
                                placeholder="Enter City" autocomplete="off">
                            @error('city') <div class="text-danger small text-left"> {{ $message }}</div> @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group text-left">
                            <label for="state_code" class="p-0 mb-0 small"><strong>State Code</strong></label>
                            <input type="text" name="state_code" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" value="{{ old('state_code') }}" class="form-control"
                                placeholder="Enter State Code" autocomplete="off">
                            @error('state_code') <div class="text-danger small text-left"> {{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group text-left">
                            <label for="pincode" class="p-0 mb-0 small"><strong>PinCode</strong></label>
                            <input type="text" name="pincode" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" value="{{ old('pincode') }}" class="form-control"
                                placeholder="Enter State Code" autocomplete="off">
                            @error('pincode') <div class="text-danger small text-left"> {{ $message }}</div> @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group text-left">
                            <label for="fssai" class="p-0 mb-0 small"><strong>FSSAI No</strong></label>
                            <input type="text" name="fssai" value="{{ old('fssai') }}" class="form-control"
                                placeholder="Enter FSSAI No" autocomplete="off">
                            @error('fssai') <div class="text-danger small text-left">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group text-left">
                            <label for="gst" class="p-0 mb-0 small"><strong>GST No</strong></label>
                            <input type="text" name="gst" value="{{ old('gst') }}" class="form-control"
                                placeholder="Enter GST No" autocomplete="off">
                            @error('gst') <div class="text-danger small text-left"> {{ $message }}</div> @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group text-left">
                    <label for="address" class="p-0 mb-0 small"><strong>Address</strong></label>
                    <input type="text" name="address" value="{{ old('address') }}" class="form-control"
                        placeholder="Enter Address" autocomplete="off">
                    @error('address') <div class="text-danger small text-left">{{ $message }}</div> @enderror
                </div>

                <div class="form-group text-left">
                    <label for="password" class="p-0 mb-0 small"><strong>Password</strong></label>
                    <input type="password" name="password" value="{{ old('password') }}" class="form-control"
                        placeholder="Enter Password" autocomplete="off">
                    @error('password') <div class="text-danger small text-left">{{ $message }}</div> @enderror
                </div>
                <div class="text-center">
                    <button class="btn btn-primary btn-sm">Add New Admin</button>
                </div>
            </form>
        </div>
        @endif
    </div>
@endsection
