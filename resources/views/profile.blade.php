@extends('layouts.navbar')
@section('content')
    <div class="container mt-5">
        <h3 class="text-center bg-secondary text-light">All Admin List</h3>
        <div class="card  p-3 shadow table-responsive">
            @if (Session::get('success'))
                <div class="alert alert-success">
                    {{ session::get('success') }}
                </div>
            @endif
            @if(Auth::user()->type != 'super-admin')
            <h1 class="text-center">You Don't Have Proper Permission !</h1>
            @else

            <table id="example" class="table text-center normal-font" style="width:100%;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php    $i = 1;
                    @endphp
                    @foreach ($admins as $admin)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>
                                <div class="small">{{ $admin->name }}</div>
                            </td>
                            <td>
                                <div class="small">{{ $admin->email }}</div>
                            </td>
                            <td>
                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal-{{ $admin->id }}">Edit</button></td>

                            <!-- The Modal -->
                            <div class="modal" id="myModal-{{ $admin->id }}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit Profile</h4>
                                            <button type="button" class="close"
                                                data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('update', $admin->id) }}" method="post">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group text-left">
                                                            <label for="name" class="p-0 mb-0 small"><strong>Name</strong></label>
                                                            <input type="text" name="name" value="{{ $admin->name }}" class="form-control"
                                                                placeholder="Enter Name" autocomplete="off">
                                                            @error('name') <div class="text-danger small text-left"> {{ $message }}</div> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group text-left">
                                                            <label for="email" class="p-0 mb-0 small"><strong>Email</strong></label>
                                                            <input type="text" name="email" value="{{ $admin->email }}" class="form-control"
                                                                placeholder="Enter Email" autocomplete="off">
                                                            @error('email') <div class="text-danger small text-left">{{ $message }}</div> @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group text-left">
                                                    <label for="type" class="p-0 mb-0 small"><strong>Admin Type</strong></label>
                                                    <select name="type" id="" class="form-control">
                                                        <option value="">Select</option>
                                                        <option value="admin" @if($admin->type == 'admin') selected @endif>Admin</option>
                                                        <option value="super-admin" @if($admin->type == 'super-admin') selected @endif>Super Admin</option>
                                                    </select>
                                                </div>
                                
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group text-left">
                                                            <label for="state" class="p-0 mb-0 small"><strong>State</strong></label>
                                                            <input type="text" name="state" value="{{ $admin->state }}" class="form-control"
                                                                placeholder="Enter State" autocomplete="off">
                                                            @error('state') <div class="text-danger small text-left">{{ $message }}</div> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group text-left">
                                                            <label for="city" class="p-0 mb-0 small"><strong>City</strong></label>
                                                            <input type="text" name="city" value="{{ $admin->city }}" class="form-control"
                                                                placeholder="Enter City" autocomplete="off">
                                                            @error('city') <div class="text-danger small text-left"> {{ $message }}</div> @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group text-left">
                                                            <label for="state_code" class="p-0 mb-0 small"><strong>State Code</strong></label>
                                                            <input type="text" name="state_code" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" value="{{ $admin->state_code }}" class="form-control"
                                                                placeholder="Enter State Code" autocomplete="off">
                                                            @error('state_code') <div class="text-danger small text-left"> {{ $message }}</div> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group text-left">
                                                            <label for="pincode" class="p-0 mb-0 small"><strong>PinCode</strong></label>
                                                            <input type="text" name="pincode" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" value="{{ $admin->pincode }}" class="form-control"
                                                                placeholder="Enter State Code" autocomplete="off">
                                                            @error('pincode') <div class="text-danger small text-left"> {{ $message }}</div> @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group text-left">
                                                            <label for="fssai" class="p-0 mb-0 small"><strong>FSSAI No</strong></label>
                                                            <input type="text" name="fssai" value="{{ $admin->fssai }}" class="form-control"
                                                                placeholder="Enter FSSAI No" autocomplete="off">
                                                            @error('fssai') <div class="text-danger small text-left">{{ $message }}</div> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group text-left">
                                                            <label for="gst" class="p-0 mb-0 small"><strong>GST No</strong></label>
                                                            <input type="text" name="gst" value="{{ $admin->gst }}" class="form-control"
                                                                placeholder="Enter GST No" autocomplete="off">
                                                            @error('gst') <div class="text-danger small text-left"> {{ $message }}</div> @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                
                                                <div class="form-group text-left">
                                                    <label for="address" class="p-0 mb-0 small"><strong>Address</strong></label>
                                                    <input type="text" name="address" value="{{ $admin->address }}" class="form-control"
                                                        placeholder="Enter Address" autocomplete="off">
                                                    @error('address') <div class="text-danger small text-left">{{ $message }}</div> @enderror
                                                </div>
                                
                                                <div class="form-group text-left">
                                                    <label for="password" class="p-0 mb-0 small"><strong>Password</strong></label>
                                                    <div><small class="text-danger">*** Enter Only If You Want To Change The Password Else Leave It Empty ***</small></div>
                                                    <input type="password" name="password" value="" class="form-control"
                                                        placeholder="Enter Password" autocomplete="false">
                                                    @error('password') <div class="text-danger small text-left">{{ $message }}</div> @enderror
                                                </div>
                                                <div class="text-center">
                                                    <button class="btn btn-primary btn-sm">Update Admin</button>
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
            @endif
        </div>
    </div>
@endsection
