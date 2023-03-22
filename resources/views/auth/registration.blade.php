@extends('dashboard')

@section('content')
<main class="signup-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">
                        Register User
                    </h3>
                    <div class="card-body">
                        <form action="" method="post">
                           @csrf
                            <div class="form-group mb-3">
                                <input type="text" name="name" id="" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group mb-3">
                                <input type="email" name="email" id="" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" name="password" id="" class="form-control" placeholder="Passwod">
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Sign Up</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
