<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <title>Dashboard</title>
</head>
<body>
    <h1 class="mt-4 mb-5 text-center">Visitor Management System</h1>
    @yield('content')

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.6.3.min.js') }}"></script>
</body>
</html>
