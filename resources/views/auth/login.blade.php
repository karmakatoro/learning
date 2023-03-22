@extends('dashboard')

@section('content')
<h1 class="mt-4 mb-5 text-center">Visitor Management System</h1>
<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif
                <div class="card">
                    <h3 class="card-header text-center">
                        Login
                    </h3>
                    <div class="card-body">
                        <form action="{{ route('login.custom') }}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="email" name="email" id="" class="form-control" placeholder="Email">
                                @if($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" name="password" id="" class="form-control" placeholder="Passwod">
                                @if($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Login</button>
                            </div>
                        </form>
                        <div class="text-center mt-3">
                            <p>Don't have an account? <a href="{{ route('register') }}">Sign up</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
