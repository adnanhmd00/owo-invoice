@extends('layouts.navbar')
@section('content')
    <div class="container mt-3" style="width: 500px;">
        @if (Session::get('success'))
            <div class="alert alert-success">
                {{ session::get('success') }}
            </div>
        @endif
        <div class="text-center card p-4 shadow">
            <h3>Add New Admin</h3>
            <form action="{{ route('add-new-admin') }}" method="post">
                @csrf
                <div class="form-group text-left">
                    <label for="product_name" class="p-0 mb-0 small"><strong>Name</strong></label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                        placeholder="Enter Name" autocomplete="off">
                    @error('name') <div class="text-danger small text-left"> {{ $message }}</div> @enderror
                </div>

                <div class="form-group text-left">
                    <label for="email" class="p-0 mb-0 small"><strong>Email</strong></label>
                    <input type="text" name="email" value="{{ old('email') }}" class="form-control"
                        placeholder="Enter Email" autocomplete="off">
                    @error('email') <div class="text-danger small text-left">{{ $message }}</div> @enderror
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
    </div>
@endsection
