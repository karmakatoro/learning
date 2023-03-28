@extends('layout.navside')

@section('content')
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a href="#" class="navbar-brand col-md-3 col-lg-2 me-0 px-3">Visitor</a>
     <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler icon"></span>
    </button>
     <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a href="#" class="nav-link px-3">Welcome {{ Auth::user()->name }}</a>
        </div>
     </div>
</header>
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="/dashboard" class="nav-link {{ Request::segment(1) == 'dashboard' ? 'active' : '' }}">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/profile" class="nav-link">
                            Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link">
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

@endsection
