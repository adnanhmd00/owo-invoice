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
                                                <div class="form-group text-left">
                                                    <label for="name" class="p-0 mb-0">Name</label>
                                                    <input type="text" name="name" 
                                                        value="{{ $admin->name }}" class="form-control"
                                                        placeholder="Enter Name" autocomplete="off">
                                                    @error('name') <div class="text-danger small text-left">
                                                        {{ $message }}</div> @enderror
                                                </div>

                                                <div class="form-group text-left">
                                                    <label for="email" class="p-0 mb-0">Email</label>
                                                    <input type="text" name="email" value="{{ $admin->email }}" readonly
                                                        class="form-control" placeholder="Enter Email"
                                                        autocomplete="off">
                                                    @error('email') <div class="text-danger small text-left">
                                                        {{ $message }}</div> @enderror
                                                </div>
                                                @if($admin->email == Auth::user()->email)
                                                <div class="form-group text-left">
                                                    <label for="password" class="p-0 mb-0">Password</label>
                                                    <input type="password" name="password" value="{{ $admin->password }}"
                                                        class="form-control" placeholder="Enter Password"
                                                        autocomplete="off">
                                                    @error('password') <div class="text-danger small text-left">
                                                        {{ $message }}</div> @enderror
                                                </div>
                                                @endif
                                                <div class="text-center">
                                                    <button class="btn btn-primary btn-sm">Update Product</button>
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
        </div>
    </div>
@endsection
