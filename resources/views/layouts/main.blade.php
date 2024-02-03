<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tokorot | Home</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.2-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="csss/style.css">
    <link rel="stylesheet" href="{{ asset('bootstrap-icons-1.11.3.css') }}">

</head>
<body>

    @include('partials/sidebar')

    <div>
        @yield('container')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="{{ asset('bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="jss/script.js"></script>
</body>
</html>