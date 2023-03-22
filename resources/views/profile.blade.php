@extends('dashboard')
@section('content')
<h2 class="mt-3">Profile</h2>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/dashboard">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">
            Profile
        </li>
    </ol>
</nav>
<div class="row mt-4">
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">Edit User</div>
            <div class="card-body">
                <form action="{{ route('profile.edit_validation') }}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label><b>User Name</b></label>
                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $data->name }}">
                        @if($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <label><b>User Mail</b></label>
                        <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $data->email }}">
                        @if($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <label><b>User Password</b></label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        @if($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <input type="submit" value="Update" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
